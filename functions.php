<?php 



function theme_selina_scripts() {
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox-1.3.4.css');
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox-1.3.4.js', array('jquery'), '1.3.4' );
}

add_action( 'wp_enqueue_scripts', 'theme_selina_scripts' );

/* add lightbox rel in wp_attachment link */

function add_rel_attachment_link($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="grouped_elements" rel="group'.$postid.'"' ,$html);
    return $html;
}
add_filter('wp_get_attachment_link','add_rel_attachment_link',10,1);

/* filter title for SEO */

add_filter( 'wp_title', 'filter_wp_title' );
/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 */
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

/* add post thembnail support */
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'single-post', 60, 60, true );

/* add read more at the end of the excerpt */
function new_excerpt_more($more) {
       global $post;
	return ' ... <a class="moretag" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* add widget to the footer area */

register_sidebar( array(
'name' => 'Footer Sidebar',
'id' => 'footer-sidebar',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4">',
'after_widget' => '</div>',
'before_title' => '<h3 class="foot-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Single Sidebar',
'id' => 'single-sidebar',
'description' => 'Appears in the Single area',
'before_widget' => '<div id="%1$s" class="widget %2$s right-widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="single-title">',
'after_title' => '</h3>',
) );



/* Register Nav Menu*/


/* Fancy Box code here*/



?>
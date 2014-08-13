<?php 

get_header(); 

?>


<section id="main-content">
	<div class="container-fluid">
			<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="blog-post">
				<?php if ( has_post_thumbnail() ) {
				?>
				<div class="featured-image-frame">
				<?php
				the_post_thumbnail('main');
				?>
				</div>
				<?php
				}?>
			<div class="col-md-12">

				<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
				<div class="meta-class">
					<p><?php the_date('Y-m-d');?> | <?php the_category(", ");?> | <span><?php comments_number( "0", "1", "%" );?></span></p>
					<div class="meta-stop">&diams;</div>
				</div>
				<div class="excerpt"><?php the_excerpt(); ?>
				<?php
					$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
					));

					if ( empty($images) ) {
						echo "";
					} else {
						foreach ( $images as $attachment_id => $attachment ) {
							echo wp_get_attachment_link($attachment_id);
							wp_get_attachment_image( $attachment_id, 'thumbnail' );
						}
					}
				?>
				
				</div>
			</div>	
			</div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div>
		</div>
		<div id="pagination">
		<?php wp_link_pages(); ?>		<span class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></span>
		<span class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></span>
		</div>

		
</section>

<?php

get_footer();

?>
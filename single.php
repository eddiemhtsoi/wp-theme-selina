<?php 

get_header(); 

?>

<section id="single-main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( has_post_thumbnail() ) {
			?>
			<div class="featured-image-frame">
			<?php
			the_post_thumbnail('main');
			?>
			</div>
			<?php
			}?>
	<div class="container">
			<div class="row">

				<div id="single-post">
					<div class="col-md-8">
					<h1><?php the_title(); ?></h1>
					<div class="meta-class">
						<p>
							<?php the_date('Y-m-d');?> | 
							<?php the_category(", ");?> | 
							<span><?php comments_number( "0", "1", "%" );?></span>
						</p>
						<?php
						$images =& get_children( array (
							'post_parent' => $post->ID,
							'post_type' => 'attachment',
							'post_mime_type' => 'image'
						));

						if ( empty($images) ) {
							// no attachments here
						} else {
							foreach ( $images as $attachment_id => $attachment ) {
								echo wp_get_attachment_link($attachment_id, 'single-post', false, false);
								
							}
						}
				?>
			</div>
			
			<div class="single-content"><?php the_content(); ?></div>
			<div class="single-comment"><?php comments_template('/includes/comments.php');?></div>
			</div>
<?php endwhile; ?>
<?php endif; ?>
<div class="col-md-4">
	<div id="author-sidebar" class="right-widget">
		<ul>
			<li><?php 
				$author_id = get_the_author_id();
				echo get_avatar( $author_id, 80 ); ?> </li>
			<li><h3><?php the_author();?></h3></li>
			<li>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
			</li>
		</ul>
	</div>
	<?php
		if(is_active_sidebar('single-sidebar')){
		dynamic_sidebar('single-sidebar');
		}
	?>

</div>
</div>
</div>
</section>

<?php

get_footer();

?>
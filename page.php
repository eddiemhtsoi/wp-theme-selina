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

			<div class="single-content"><?php the_content(); ?></div>
			<?php comments_template('/includes/comments.php');?> 
			</div>
<?php endwhile; ?>
<?php endif; ?>


<div class="col-md-4">
	
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
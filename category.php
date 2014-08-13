<?php 

get_header(); 

?>


<section id="main-content">
	<div class="container-fluid">
			<div class="row">
				<?php if (is_category()){ ?>
				<h1 class="category-title">Category: </br><?php single_cat_title(); ?></h1>
				<div class="category-description"><?php echo category_description();?></div>
				<?php };?>
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
				<p>
					<?php the_date('Y-m-d');?> | 
					<?php the_category(", ");?> | 
					<span><?php comments_number( "0", "1", "%" );?></span>
				</p>
				<div class="meta-stop">&diams;</div>
			</div>
			<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>	
		</div>
	


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>
</div>
</section>

<?php

get_footer();

?>
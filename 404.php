<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<section id="main-content">
	<div class="container-fluid">
			<div class="row">
				<div id="error404">
					<div class="col-md-12">
						<h1 class="page-title">Error. 404. Page Not Found</h1>
						<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
	</div>
</section>

<?php get_footer(); ?>
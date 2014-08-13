	<section id="footer">
		<div class="container">
			<div class="row">
				<?php
				if(is_active_sidebar('footer-sidebar')){
				dynamic_sidebar('footer-sidebar');
				}
				?>
			</div>
		</div>
	</section>
		<section id="footer-end">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<p></p>
				</div>
				<div class="col-md-6">
					<p class="pull-right">Powered by <a href="http://www.wordpress.org">Wordpress</a> | Theme <a href="http://eddiemhtsoi.me/selina">Selina</a></p>
				</div>
			</div>
		</div>
	</section>

 <?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
		jQuery("a.grouped_elements").fancybox();
		jQuery(".wp-caption a").fancybox();
	});
</script>
</body>
</html>
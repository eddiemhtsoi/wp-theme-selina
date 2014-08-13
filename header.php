<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title('|', true, 'right'); ?></title>
	meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
<!-- For HTML5, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>
<body>
	<section id="top-menu">
		
			<div id="top-menu-container">
				<div id="site-logo"><a href="<?php echo bloginfo( 'wpurl' );  ?>"><?php bloginfo('name'); ?></a></div>
				<div id="site-tagline"><?php bloginfo('description'); ?></div>
			</div>
		
	</section>
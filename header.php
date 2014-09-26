<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			wp_title( '|', true, 'right'); 
			bloginfo( 'name' );
		?>
	</title>
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<script type="text/javascript" src="/js/about.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49341058-1', 'globalappinitiative.org');
  ga('send', 'pageview');

</script>
</head>
<body>

	<header>
		<div class="branding-title">
			<a href="<?php bloginfo ('siteurl'); ?>">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/GAI_logo_color_trans.png">
				<span class="title"><?php bloginfo ('name'); ?></span>
			</a>
		</div><!-- .branding-title -->
	
		<div class="center">
			<ul class="nav">
				<?php

					$args = array(
						'menu' => 'main-menu',
						'echo' => false
					);

					echo strip_tags(wp_nav_menu( $args ), '<li><a>');
				?>
			</ul><!-- .nav -->
		</div><!-- .center -->

	</header>

	<div id="<?php echo basename(get_permalink()); ?>">
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wpcontributorday
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
	<!--[if lte IE 8]><script src="wp-content/themes/wpcontributorday/js/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/dashicons.css" />
	<script src="wp-content/themes/wpcontributorday/js/jquery.min.js"></script>
	<script src="wp-content/themes/wpcontributorday/js/jquery.dropotron.min.js"></script>
	<script src="wp-content/themes/wpcontributorday/js/skel.min.js"></script>
	<script src="wp-content/themes/wpcontributorday/js/skel-panels.min.js"></script>
	<script src="wp-content/themes/wpcontributorday/js/init.js"></script>
	<?php //wp_head(); ?>
	<noscript>
		<link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/skel-noscript.css" />

		<link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/style.css" />
		<link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/style-desktop.css" />
		<link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/style-noscript.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="wp-content/themes/wpcontributorday/css/ie8.css"/><![endif]-->
</head>
<body class="homepage">

	<!-- Header -->
	<div id="masthead">

		<!-- Inner -->
		<div class="inner row">
			<div class="5u">
				<img src="<?php echo get_template_directory_uri().'/images/logo-filled-small.png'?>" alt="<?php bloginfo( 'name' ); ?>" id="logo">
			</div>
			<div class="7u">
				<header>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<hr />
					<span class="byline">1<sup>st</sup> March 2014</span>
				</header>
				<footer>
					<a href="#locations" class="button scrolly">Locations</a>
				</footer>
			</div>

		</div>

		<!-- Nav -->
<!--		<nav id="site-nav" class="j">-->
<!--			--><?php
//				$navArgs = array(
//					'theme_location'=> 'primary',
//					'container' 	=> false,
//					'container_class' 	=> 'jenn'
//				);
//				wp_nav_menu( $navArgs );
//
//			?>
<!--		</nav>-->

	</div>



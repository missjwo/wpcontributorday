<body <?php body_class('homepage'); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div id="masthead" class="site-header" role="banner">
		<div class="inner">
			<header>
				<h1><a href="#" id="logo">Helios</a></h1>
				<hr />
				<span class="byline">Another fine freebie by HTML5 UP</span>
			</header>
			<footer>
				<a href="#banner" class="button circled scrolly">Start</a>
			</footer>
		</div>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-nav" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'wpcontributorday' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wpcontributorday' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</div><!-- #masthead -->

	<div id="content" class="site-content">
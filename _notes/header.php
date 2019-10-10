<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98367624-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-98367624-1');
		</script>

		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<?php
		wp_head();
		$options = get_option('rh_settings');
		if(is_user_logged_in()) {
			$user = wp_get_current_user();
		}
		?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container" class="wrap">

			<header class="header wrap" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">
					
					<?php
					if($options['logo']){
						echo '<a class="logo" href="'. home_url() .'"><img src="'. $options['logo'] .'" alt="'. get_bloginfo('name') .'" /></a>';
					} else {
						echo '<p class="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="'. home_url() .'">'. get_bloginfo('name') .'</a></p>';
					}
					?>
					
					<a class="menu-button" title="Main Menu"></a>
					
					<?php
					if( $options['twitter_url'] || $options['facebook_url'] || $options['instagram_url'] || $options['youtube_url'] || $options['linkedin_url'] || $options['pinterest_url']) {
						echo '<div class="social">';
						
						if( $options['linkedin_url'] ) {
							echo '<a href="'.$options['linkedin_url'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['twitter_url'] ) {
							echo '<a href="'.$options['twitter_url'].'" target="_blank"><i class="fab fa-twitter"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['facebook_url'] ) {
							echo '<a href="'.$options['facebook_url'].'" target="_blank"><i class="fab fa-facebook"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['instagram_url'] ) {
							echo '<a href="'.$options['instagram_url'].'" target="_blank"><i class="fab fa-instagram"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['youtube_url'] ) {
							echo '<a href="'.$options['youtube_url'].'" target="_blank"><i class="fab fa-youtube"></i></a>';
						} else {
							echo '';
						}
						
						if( $options['instagram_url'] ) {
							echo '<a href="'.$options['pinterest_url'].'" target="_blank"><i class="fab fa-pinterest"></i></a>';
						} else {
							echo '';
						}

						echo '</div>';
					}
					?>
					
					<?php wp_nav_menu(array(
							 'container' => false,
							 'menu' => __( 'Socket Menu', 'bonestheme' ),
							 'menu_class' => 'nav socket-nav cf',
							 'theme_location' => 'socket-nav'
					)); ?>
					
					<?php if(is_user_logged_in()) : ?>
						<div class="welcome">
							<p>Welcome <?php echo $user->nickname; ?></p><span>|</span>
							<a href="<?php echo wp_logout_url( '/member-login/?logged_out=true' ); ?>" class="logout-link">Logout</a>
						</div>
					<?php endif; ?>
					
					<div class="cf"></div>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,
    					         'container_class' => 'menu cf',
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),
    					         'menu_class' => 'nav primary-nav cf',
    					         'theme_location' => 'main-nav'
						)); ?>
					</nav>

				</div>

			</header>

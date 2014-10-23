<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

			<nav class="nav">
				 <?php $args = array(
				    'depth'       => 0,
				 	'sort_column' => 'menu_order, post_title',
				 	'menu_class'  => 'menu',
				 	'include'     => '',
				 	'exclude'     => '',
				 	'echo'        => true,
				 	'show_home'   => false,
				 	'link_before' => '',
				 	'link_after'  => '' );
				 ?>
				<h3>MENU</h3>
				<h4><?php wp_page_menu(array ('show_home=1&exclude=5,9,23&menu_class=page-navi&sort_column=menu_order')); ?></h4>
			</nav>
			<div id="container">
				<header id="ha-header" class="ha-header ha-header-large">
					<div class="ha-header-perspective">
						<div class="ha-header-front">
							<h1><span>Header Effects</span></h1>
							<nav>
								<a href="http://tympanus.net/Development/AnimatedBooks/">&lsaquo; Previous Demo</a>
								<a>Something</a>
								<a>Anything</a>
								<a href="http://tympanus.net/codrops/?p=15935">Back to the article</a>
							</nav>
						</div>
						<div class="ha-header-bottom">
							<nav>
								<a>Dalliance</a>
								<a>Inglenook</a>
								<a>Lagniappe</a>
								<a>Mellifluous</a>
								<a>Erstwhile</a>
								<a>Wafture</a>
								<a>Serendipity</a>
								<a>Love</a>
							</nav>
						</div>
					</div>
				</header>
	
<!-- 				<header class="header no-margin" role="banner">
	
					<div id="inner-header" class="row">

					<nav class="menu-icon">
						<div class="line"></div>
					</nav>

					<h1 class="navbar-title">Dragon</h1>
						
					</div>
	
				</header>  -->
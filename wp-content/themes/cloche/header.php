<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="initial-scale=1.0" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="top-bar contain-to-grid row" data-topbar>
	<div class="large-3 columns">
	<img class="logo" src="<?php echo get_stylesheet_directory_uri().'/img/logo.png'?>">	
	</div>
	<div class="large-9 columns">
	    <?php
	      // Left Nav Section
	          wp_nav_menu( array(
	              'theme_location' => 'header-menu-right',
	              'container' => false,
	              'depth' => 0,
	              'items_wrap' => '<ul class="right menu-main">%3$s</ul>',
	              'fallback_cb' => false,
	              'walker' => new cornerstone_walker( array(
	                  'in_top_bar' => true,
	                  'item_type' => 'li'
	              ) ),
	          ) );?>
	</div>
	</nav>
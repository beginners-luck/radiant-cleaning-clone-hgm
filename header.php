<?php
/**
 * @
 * @ - Header
 * @version:		1.0
 *
 * @author: 		John Starr
 * @website:		cacpro.com
 *
*/
?>
<!DOCTYPE html>
<head>
<?php
	if(is_front_page())
	{
?>
		<title><?php echo get_bloginfo('name'); ?></title>
<?php
	}
	else
	{
?>
		<title><?php wp_title('', true, 'right'); echo ' | ' . get_bloginfo('name'); ?></title>
<?php
	}
?>
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="True"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
<?php wp_head(); ?>

<!-- Icomoon Font Import -->
<link rel="stylesheet" href="https://i.icomoon.io/public/b92762f88c/RadiantCommercialCleaning/style.css">
</head>
<body id="preload" <?php body_class(); ?> class="animsition">

<div class="wrap">

<!-- begin header -->
<header class="container-fluid">
	<div class="nav-container">
		<a class="nav-logo-link" href="<?php echo get_home_url(); ?>"><img class="site-nav-logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main_menu' )); ?>
			<!-- <ul>
				<li><a>(717) 552-6781</a></li>
				<li><a class="button blue" href="#contact">Contact Us</a></li>
			</ul> -->
		</nav>
	</div>
	<!-- Header continued in header template files. -->

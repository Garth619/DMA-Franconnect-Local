<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/knockout/stylesheet.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>




</head>


<body <?php body_class(); ?>>
	
	
	<div class="wrapper">
	
	<div class="header">

 		
 		<div class="header_col_left">
 			<img  class="client_logo" src="<?php the_field('logo'); ?>"/>
 			<span class="header_content" style="float:left"><?php the_field('location_title'); ?> <!-- | Digital Marketing Assessment --></span>
 		</div>
		

<!--
		<div class="header_col_right">
			<img class="franconnect" src="<?php bloginfo('template_directory');?>/images/franconnect2.png"/>
		
		</div>
-->
		
		
	</div><!-- header -->

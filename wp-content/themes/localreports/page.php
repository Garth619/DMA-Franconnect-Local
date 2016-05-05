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
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<!--
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>
-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<!-- <script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/swipe.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>


</head>


<body <?php body_class(); ?>>
	
	
	<div class="wrapper">
	
	<div class="header">

 		
 		<div class="header_col_left">
 		
 		</div>

		
	</div><!-- header -->


	
<div class="main">
	
	
	
	<div class="lma_wrapper">
	
	
<div class="lma_intro lma_section">
	
	<img class="franconnect" src="<?php bloginfo('template_directory');?>/images/new/new.png"/>
<!-- 	<h1 class="intro_header fade-in one">How Do You Measure Up?</h1> -->
	
	<h2 class="sub_header">Digital Marketing Assessment</h2>
	
	<div class="intro_pins_wrapper">
		
		
		<div class="intro_single_wrapper intro_single_wrapper1 fade-in one">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/new/map-01.png"/>


		<h2>SEO</h2>


<!--
		
		<div class="intro_stars">
			
				<?php if (get_field('get_found_rating') == 'one_star') : ?>
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
						<?php elseif (get_field('get_found_rating') == 'two_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      			<?php elseif (get_field('get_found_rating') == 'three_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_found_rating') == 'four_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_found_rating') == 'five_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      		<?php endif; ?>
			
			
			
		</div>
--><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper2 fade-in two">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/new/map-02.png"/>
			<h2>SOCIAL</h2>
<!--
		<div class="intro_stars">
			
			
			
			<?php if (get_field('get_social') == 'one_star') : ?>
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
						<?php elseif (get_field('get_social') == 'two_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      			<?php elseif (get_field('get_social') == 'three_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_social') == 'four_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_social') == 'five_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      			<?php endif; ?>
			
			
			
			
			</div>
--><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper3 fade-in three">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/new/map-03.png"/>
		<h2>REPUTATION</h2>
<!--
		<div class="intro_stars">
			
			
			
			
			<?php if (get_field('get_reviews') == 'one_star') : ?>
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
						<?php elseif (get_field('get_reviews') == 'two_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      			<?php elseif (get_field('get_reviews') == 'three_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_reviews') == 'four_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_reviews') == 'five_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
      			<?php endif; ?>
			
			
			
			</div>
--><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper4 fade-in four">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/new/map-04.png"/>
			<h2>SEM</h2>
<!--
		<div class="intro_stars">
			
			
			
			
			<?php if (get_field('get_customers') == 'one_star') : ?>
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
						<?php elseif (get_field('get_customers') == 'two_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
      			<?php elseif (get_field('get_customers') == 'three_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_customers') == 'four_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/grey-stars.png">
							<?php elseif (get_field('get_customers') == 'five_stars') :?>
      				<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
							<img src="<?php bloginfo('template_directory');?>/images/stars-new.png">
      			<?php endif; ?>

			
			</div>
--><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
	</div><!-- intro_pins_wrapper -->
	
</div><!-- intro -->






<?php wp_footer(); ?>

</div><!-- main -->








</div><!-- wrapper -->

<?php wp_footer(); ?>



</body>
</html>


<?php

?> 
<!DOCTYPE html>
<html>
<head>
<meta property="fb:app_id" content="<?php $appid = get_post_meta($post->ID, 'appid', TRUE); ?><?php if($appid) { ?><?php echo $appid; ?><?php } ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/knockout/stylesheet.css" />
<?php wp_head(); ?>
</head>

<body id="<?php echo $page ?>" <?php body_class(); ?>>

<div class="wrapper">

<div class="main">
	
<div class="lma_wrapper">
	
	
<div class="lma_intro lma_section">
	
	<h1 class="intro_header fade-in one">Digital Marketing Assessments</h1>
	
	<div class="intro_pins_wrapper">
		
		
		<div class="intro_single_wrapper intro_single_wrapper1 fade-in one">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/intro-get-found.png"/>
		
		<div class="intro_stars">
			<img src="<?php bloginfo('template_directory');?>/images/stars.png">
			<img src="<?php bloginfo('template_directory');?>/images/stars.png">
			<img src="<?php bloginfo('template_directory');?>/images/stars.png">
			<img src="<?php bloginfo('template_directory');?>/images/stars.png">
			<img src="<?php bloginfo('template_directory');?>/images/stars.png">
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper2 fade-in two">
		
		<img class="single_pin single_pin2" src="<?php bloginfo('template_directory');?>/images/intro-get-social.png"/>
		
		<div class="intro_stars">
			<img src="<?php bloginfo('template_directory');?>/images/blue-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/blue-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/blue-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/blue-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/blue-star.png">
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper3 fade-in three">
		
		<img class="single_pin single_pin3" src="<?php bloginfo('template_directory');?>/images/intro-get-reviews.png"/>
		
		<div class="intro_stars">
			<img src="<?php bloginfo('template_directory');?>/images/orange-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/orange-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/orange-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/orange-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/orange-star.png">
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper4 fade-in four">
		
		<img class="single_pin single_pin4" src="<?php bloginfo('template_directory');?>/images/intro-get-customers.png"/>
		
		<div class="intro_stars">
			<img src="<?php bloginfo('template_directory');?>/images/red-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/red-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/red-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/red-star.png">
			<img src="<?php bloginfo('template_directory');?>/images/red-star.png">
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
	</div><!-- intro_pins_wrapper -->
	
</div><!-- intro -->

</div><!-- lma_wrapper -->
	
	 
</div><!-- main -->


</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>

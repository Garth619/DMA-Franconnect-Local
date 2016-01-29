<?php
/*
 * Template Name:  Location Template */



get_header(); ?>

	
<div class="main">
	
	
	
	<div class="lma_wrapper">
	
	
<div class="lma_intro lma_section">
	
	<img class="franconnect" src="<?php bloginfo('template_directory');?>/images/franconnect2.png"/>
	<h1 class="intro_header fade-in one">How Do You Measure Up?</h1>
	
	<h2 class="sub_header">Digital Marketing Assessment</h2>
	
	<div class="intro_pins_wrapper">
		
		
		<div class="intro_single_wrapper intro_single_wrapper1 fade-in one">
		
		<img class="single_pin single_pin1" src="<?php bloginfo('template_directory');?>/images/intro-get-found.png"/>
		
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
			
			
			
			
			
			
			
			
			
			

		
		
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper2 fade-in two">
		
		<img class="single_pin single_pin2" src="<?php bloginfo('template_directory');?>/images/intro-get-social.png"/>
		
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
			
			
			
			
			
			

		
		
		
		
		
		
		
		
		
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper3 fade-in three">
		
		<img class="single_pin single_pin3" src="<?php bloginfo('template_directory');?>/images/intro-get-reviews.png"/>
		
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
			
			
			
			
			

		
		
		
		
		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
		<div class="intro_single_wrapper intro_single_wrapper4 fade-in four">
		
		<img class="single_pin single_pin4" src="<?php bloginfo('template_directory');?>/images/intro-get-customers.png"/>
		
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

			
			
			

		</div><!-- intro stars -->
		
		</div><!-- intro_single_wrapper -->
		
	</div><!-- intro_pins_wrapper -->
	
</div><!-- intro -->

<div class="get_found lma_section lma_section1">


<div class="review_stars_wrapper">
	<span class="close">X</span>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map-03.png"/>
	<div class="review_stars">
		
		
		
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
		
		
		
		
		

	</div><!-- review_stars -->
</div><!-- review_stars --> 

<div class="report_wrapper">
	
	<h1 class="report_header green">Get Found</h1>
	<div class="social_icons">
		
		
<?php 

$selected = get_field('get_found_social_icons');

if( in_array('Google Plus', $selected) ) : ?>
	
	
		<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/gp-icon.png"/><span><?php the_field('get_found_google');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>



		</div><!-- social_icons -->
	
	
	<div id="accordion" class="green_accordian accordian">
  
  
  <?php if(get_field('get_found_notes')):?>
  <h2 class="green accordian_header">Observations</h2>
  <div class="accordian_content">
	  
	  <?php if(get_field('get_found_notes_new')): ?>
 
			<?php while(has_sub_field('get_found_notes_new')): ?>
 
			<a style="display:block;margin-bottom:5px;" href="<?php the_sub_field('observation_source_link');?>" target="_blank">
				<strong><?php the_sub_field('observation_source_title');?>:</strong></a>
			
			
			
			
			<?php if(get_sub_field('observation_select_a_description') == "Answer One") :?>
			
			
				<?php the_sub_field('answer'); ?>
			
			
			<?php endif;?>
			
			
			
			<?php if(get_sub_field('observation_select_a_description') == "Answer Two") :?>
			
			
				<?php the_sub_field('answer_two'); ?>
			
			
			<?php endif;?>
			
			<?php if(get_sub_field('observation_select_a_description') == "Answer Three") :?>
			
			
				<?php the_sub_field('answerthree'); ?>
			
			
			<?php endif;?>

			<?php endwhile; ?>
 
		<?php endif; ?>
	  
	  
	  
	  
	  
	  
 </div>
 <?php endif;?>
 
  
  <?php if(get_field('get_found_recommendations')):?>
  <h2 class="green accordian_header">Recommendations</h2>
  <div class="accordian_content">
	  <?php the_field('get_found_recommendations') ;?>
	</div>
	 <?php endif;?>
	
	<?php if(get_field('get_found_sources')):?>
  <h2 class="green accordian_header">Competitors</h2>
  <div class="accordian_content">
	  <?php the_field('get_found_sources') ;?>
  </div>
   <?php endif;?>
  
</div><!-- accordion -->
	
	
	
	
	
</div><!-- report_wrapper -->



</div><!-- get_found -->





<div class="get_social lma_section lma_section2">



<div class="review_stars_wrapper">
	<span class="close"> X</span>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map-02.png"/>
	<div class="review_stars">


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



	</div><!-- review_stars -->
</div><!-- review_stars --> 
<div class="report_wrapper">
	
	<h1 class="report_header blue">Get Social</h1>
	<div class="social_icons">
		
		
<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Facebook', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/fb-icon.png"/><span><?php the_field('get_social_facebook');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Google Plus', $selected) ) : ?>
	
	
		<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/gp-icon.png"/><span><?php the_field('get_social_google');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>

<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Yelp', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/yelp-icon.png"/><span><?php the_field('get_social_yelp');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>







<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Angies List', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/angies.png"/><span><?php the_field('get_social_angies_list');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Houzz', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/houzz.png"/><span><?php the_field('get_social_houzz');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Home Stars', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-stars.png"/><span><?php the_field('get_social_home_stars');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Home Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-advisors.png"/><span><?php the_field('get_social_home_advisors');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_social_social_icons');

if( in_array('BBB', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/bbb.png"/><span><?php the_field('get_social_bbb');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Aging Care', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/aging-cre.png"/><span><?php the_field('get_social_aging_care');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Care.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/care.png"/><span><?php the_field('get_social_carecom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Caring.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/caring.png"/><span><?php the_field('get_social_caringcom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('CareInHomes', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/careinhomes.png"/><span><?php the_field('get_social_careinhomes');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Senior Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/senior-advisors.png"/><span><?php the_field('get_social_senior_advisor');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Realtors', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/realtor.png"/><span><?php the_field('get_social_realtors');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Zillow', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/zillow.png"/><span><?php the_field('get_social_zillow');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>

<?php 

$selected = get_field('get_social_social_icons');

if( in_array('Active Rain', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/active-rain.png"/><span><?php the_field('get_social_active_rain');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>

		
		
		
		


		
		
		
		
	
	
	
	
	</div><!-- social_icons -->
	
	
	<div id="accordion2" class="blue_accordian accordian">
  
  <?php if(get_field('get_social_notes')):?>
  <h2 class="blue accordian_header">Observations</h2>
  <div class="accordian_content">
		<?php the_field('get_social_notes') ;?>
  </div>
  <?php endif;?>
  
  <?php if(get_field('get_social_recommendations')):?>
  <h2 class="blue accordian_header">Recommendations</h2>
  <div class="accordian_content">
    <?php the_field('get_social_recommendations') ;?>
  </div>
   <?php endif;?>
  
  <?php if(get_field('get_social_sources')):?>
  <h2 class="blue accordian_header">Sources</h2>
  <div class="accordian_content">
    <?php the_field('get_social_sources') ;?>
  </div>
  <?php endif;?>
  
</div><!-- accordion -->
	
	
	
	
	
</div><!-- report_wrapper -->



</div><!-- get_social -->








<div class="get_reviews lma_section lma_section3">



<div class="review_stars_wrapper">
	<span class="close">X</span>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map-04.png"/>
	<div class="review_stars">



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


	</div><!-- review_stars -->
</div><!-- review_stars --> 
<div class="report_wrapper">
	
	<h1 class="report_header orange">Get Reviews</h1>
	<div class="social_icons">
		
		<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Facebook', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/fb-icon.png"/><span><?php the_field('get_reviews_facebook');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Google Plus', $selected) ) : ?>
	
	
		<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/gp-icon.png"/><span><?php the_field('get_reviews_google');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>

<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Yelp', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/yelp-icon.png"/><span><?php the_field('get_review_yelp');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Angies List', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/angies.png"/><span><?php the_field('get_reviews_angies_list');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Houzz', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/houzz.png"/><span><?php the_field('get_reviews_houzz');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Home Stars', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-stars.png"/><span><?php the_field('get_reviews_home_stars');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Home Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-advisors.png"/><span><?php the_field('get_social_home_advisors');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('BBB', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/bbb.png"/><span><?php the_field('get_reviews_bbb');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Aging Care', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/aging-cre.png"/><span><?php the_field('get_reviews_aging_care');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Care.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/care.png"/><span><?php the_field('get_reviews_carecom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Caring.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/caring.png"/><span><?php the_field('get_reviews_caringcom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('CareInHomes', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/careinhomes.png"/><span><?php the_field('get_reviews_careinhomes');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Senior Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/senior-advisors.png"/><span><?php the_field('get_reviews_senior_advisor');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Realtors', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/realtor.png"/><span><?php the_field('get_reviews_realtors');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Zillow', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/zillow.png"/><span><?php the_field('get_reviews_zillow');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>

<?php 

$selected = get_field('get_reviews_social_icons');

if( in_array('Active Rain', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/active-rain.png"/><span><?php the_field('get_reviews_active_rain');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



	
	
	
	
	</div><!-- social_icons -->
	
	
	<div id="accordion3" class="orange_accordian accordian">
  
  <?php if(get_field('get_review_notes')):?>
  <h2 class="orange accordian_header">Observations</h2>
  <div class="accordian_content">
    <?php the_field('get_review_notes') ;?>
  </div>
  <?php endif;?>
  
  <?php if(get_field('get_review_recommendations')):?>
  <h2 class="orange accordian_header">Recommendations</h2>
  <div class="accordian_content">
    <?php the_field('get_review_recommendations') ;?>
  </div>
  <?php endif;?>
  
  
  <?php if(get_field('get_review_sources')):?>
  <h2 class="orange accordian_header">Sources</h2>
  <div class="accordian_content">
    <?php the_field('get_review_sources') ;?>
  </div>
  <?php endif;?>
  
</div><!-- accordion -->
	
	
	
	
	
</div><!-- report_wrapper -->



</div><!-- get_reviews -->




<div class="get_customers lma_section lma_section4">



<div class="review_stars_wrapper">
	<span class="close">X</span>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/map-05.png"/>
	<div class="review_stars">
		
		
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
		
		
		

	</div><!-- review_stars -->
</div><!-- review_stars --> 
<div class="report_wrapper">
	
	<h1 class="report_header red">Get Customers</h1>

		<div class="social_icons">
		
		<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Facebook', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/fb-icon.png"/><span><?php the_field('get_customers_facebook');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Google Plus', $selected) ) : ?>
	
	
		<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/gp-icon.png"/><span><?php the_field('get_customers_google');?></span>
	</div><!-- social_icon_single -->
	
<?php endif;?>

<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Yelp', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/yelp-icon.png"/><span><?php the_field('get_customers_yelp');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>







<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Angies List', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/angies.png"/><span><?php the_field('get_customers_angies_list');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Houzz', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/houzz.png"/><span><?php the_field('get_customers_houzz');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Home Stars', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-stars.png"/><span><?php the_field('get_customers_home_stars');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Home Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-advisors.png"/><span><?php the_field('get_customers_home_advisor');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('BBB', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/bbb.png"/><span><?php the_field('get_customers_bbb');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Aging Care', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/aging-cre.png"/><span><?php the_field('get_customers_aging_care');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Care.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/care.png"/><span><?php the_field('get_customers_carecom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Caring.com', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/caring.png"/><span><?php the_field('get_customers_caringcom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>




<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('CareInHomes', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/careinhomes.png"/><span><?php the_field('get_customers_caringcom');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Senior Advisor', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/senior-advisors.png"/><span><?php the_field('get_customers_senior_advisor');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Realtors', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/realtor.png"/><span><?php the_field('get_customers_realtors');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>


<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Zillow', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/zillow.png"/><span><?php the_field('get_customers_zillow');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>

<?php 

$selected = get_field('get_customers_social_icons');

if( in_array('Active Rain', $selected) ) : ?>
	
<div class="social_icon_single">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/active-rain.png"/><span><?php the_field('get_customers_active_rain');?></span>
	</div><!-- social_icon_single -->

	
<?php endif;?>



	
	
	
	
	</div><!-- social_icons -->
	
	<div id="accordion4" class="red_accordian accordian">
  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <?php if(get_field('get_customers_notes')):?>
  <h2 class="red accordian_header">Observations</h2>
  <div class="accordian_content">
    <?php the_field('get_customers_notes') ;?>
  </div>
   <?php endif;?>
  
  <?php if(get_field('get_customers_recommendations')):?>
  <h2 class="red accordian_header">Recommendations</h2>
  <div class="accordian_content">
    <?php the_field('get_customers_recommendations') ;?>
  </div>
  <?php endif;?>
  
 
 <?php if(get_field('get_customers_sources')):?>
  <h2 class="red accordian_header">Sources</h2>
  <div class="accordian_content">
    <?php the_field('get_customers_sources') ;?>
  </div>
  <?php endif;?>
  
</div><!-- accordion -->
	
	
	
	
	
</div><!-- report_wrapper -->



</div><!-- get_customers -->







<div class="get_stared lma_section lma_section5">

<span class="close purple">Close X</span>

get started

	
	
		
	
	
	
</div><!-- report_wrapper -->



</div><!-- get_started -->





















<div class="mytabs">
	
	<ul class="mytabs_list">
		<li class="green_bg get_found_tab lma_tab fade-in one"><img src="<?php bloginfo('template_directory');?>/images/v-get-found.png"/></li>
		<li class="blue_bg get_social_tab lma_tab fade-in two"><img src="<?php bloginfo('template_directory');?>/images/v-get-social.png"/></li>
		<li class="orange_bg get_reviews_tab lma_tab fade-in three"><img src="<?php bloginfo('template_directory');?>/images/v-get-reviews.png"/></li>
		<li class="red_bg get_customers_tab lma_tab fade-in four"><img src="<?php bloginfo('template_directory');?>/images/v-get-customers.png"/></li>
<!-- 		<li class="purple_bg get_started_tab lma_tab fade-in five"><img src="<?php bloginfo('template_directory');?>/images/v-get-started.png"/></li> -->
	</ul>

</div><!-- tabs -->




</div><!-- lma wrapper -->




<?php wp_footer(); ?>



	
	 
</div><!-- main -->




<?php get_footer(); ?>

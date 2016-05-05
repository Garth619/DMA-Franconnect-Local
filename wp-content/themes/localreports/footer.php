




</div><!-- wrapper -->

<?php wp_footer(); ?>

<script type="text/javascript">


jQuery(document).ready(function(){
	


	
jQuery('.lma_tab').click(function() {
	
	jQuery(this).addClass('lma_active');
	jQuery('.lma_active').not(this).removeClass('lma_active');
	jQuery("html, body").animate({scrollTop: 0});

	
});

jQuery('.intro_single_wrapper1').click(function() {
	
	jQuery('.get_found_tab').addClass('lma_active');
	
});

jQuery('.intro_single_wrapper2').click(function() {
	
	jQuery('.get_social_tab').addClass('lma_active');
	
});

jQuery('.intro_single_wrapper3').click(function() {
	
	jQuery('.get_reviews_tab').addClass('lma_active');
	
});

jQuery('.intro_single_wrapper4').click(function() {
	
	jQuery('.get_customers_tab').addClass('lma_active');
	
});

/* Slideshows */


	jQuery('.open_slideshow_1').click(function() {
	
		
		jQuery('.lma_section1').hide(300);
		jQuery('.lma_section6').show(300);
		

	});


jQuery('.open_slideshow_2').click(function() {
	
		
		jQuery('.lma_section2').hide(300);
		jQuery('.lma_section7').show(300);
		

	});
	
	
	jQuery('.open_slideshow_3').click(function() {
	
		
		jQuery('.lma_section3').hide(300);
		jQuery('.lma_section8').show(300);
		

	});
	
	
	jQuery('.open_slideshow_4').click(function() {
	
		
		jQuery('.lma_section4').hide(300);
		jQuery('.lma_section9').show(300);
		

	});
	
	
		
	
		
	
		

	




jQuery('.get_found_tab, .intro_single_wrapper1').click(function() {
	
	jQuery('.lma_section1').show(300);
	jQuery('.lma_intro, .lma_section2, .lma_section3, .lma_section4, .lma_section6, .lma_section7, .lma_section8, .lma_section9, .lma_section10').hide(300);

});


jQuery('.get_social_tab, .intro_single_wrapper2').click(function() {
	
	jQuery('.lma_section2').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section3, .lma_section4, .lma_section6, .lma_section7, .lma_section8, .lma_section9, .lma_section10').hide(300);
	
});

jQuery('.get_reviews_tab, .intro_single_wrapper3').click(function() {
	
	jQuery('.lma_section3').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section4, .lma_section6, .lma_section7, .lma_section8, .lma_section9, .lma_section10').hide(300);
	
});


jQuery('.get_customers_tab, .intro_single_wrapper4').click(function() {
	
	jQuery('.lma_section4').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section3, .lma_section6, .lma_section7, .lma_section8, .lma_section9, .lma_section10').hide(300);
	
});


jQuery('.get_started_tab').click(function() {
	
		
		jQuery('.lma_section10').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section3, .lma_section4, .lma_section6, .lma_section7, .lma_section8, .lma_section9').hide(300);
	
});



	
			
		


jQuery('.close').click(function() {
	
	jQuery('.lma_intro').show(300);
	jQuery('.lma_section1, .lma_section2, .lma_section3, .lma_section4').hide(300);
	
	jQuery('.lma_tab').removeClass('lma_active');

	
});
	
	
jQuery('.accordian_header:first-of-type').addClass('new_active');


jQuery('.accordian_header').click(function(){
	
	jQuery(this).next('.accordian_content').slideToggle(200);
	jQuery(this).toggleClass('new_active');
	
});


 jQuery('.tab').click(function() {
	
		jQuery("html, body").animate({scrollTop: 0});

	});


});

</script>

 <?php if(get_field('seo_slideshow_section') == "GHS"):?>

 			<?php include("dma-slides/ghs/ghs-slides-ajax.php"); ?>

 <?php endif;?>




</body>
</html>

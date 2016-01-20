




<div class="footer">
	
	<div class="footer_col footer_col_1">
		
		<img src="<?php the_field('logo'); ?>"/>
		<img sytle="min-height:100px;" src="<?php bloginfo('template_directory');?>/images/franconnect2.png"/>
		
	</div><!-- footer_col_1 -->
	
<!--
	<div class="footer_col footer_col_2">
		
	</div>
--><!-- footer_col_2 -->
	
<!--
	<div class="footer_col footer_col_3">
		
		<img src="<?php bloginfo('template_directory');?>/images/franconnect.png"/>
		
	</div>
--><!-- footer_col_3 -->
	
</div><!-- footer -->

</div><!-- wrapper -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory');?>/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/jquery-ui/jquery-ui.js"></script>
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



jQuery('.get_found_tab, .intro_single_wrapper1').click(function() {
	
	jQuery('.lma_section1').show(300);
	jQuery('.lma_intro, .lma_section2, .lma_section3, .lma_section4, .lma_section5').hide(300);

});


jQuery('.get_social_tab, .intro_single_wrapper2').click(function() {
	
	jQuery('.lma_section2').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section3, .lma_section4, .lma_section5').hide(300);
	
});

jQuery('.get_reviews_tab, .intro_single_wrapper3').click(function() {
	
	jQuery('.lma_section3').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section4, .lma_section5').hide(300);
	
});


jQuery('.get_customers_tab, .intro_single_wrapper4').click(function() {
	
	jQuery('.lma_section4').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section3, .lma_section5').hide(300);
	
});

jQuery('.get_started_tab').click(function() {
	
	jQuery('.lma_section5').show(300);
	jQuery('.lma_intro, .lma_section1, .lma_section2, .lma_section3, .lma_section4').hide(300);
	
});


	
			
		


jQuery('.close').click(function() {
	
	jQuery('.lma_intro').show(300);
	jQuery('.lma_section1, .lma_section2, .lma_section3, .lma_section4, .lma_section5').hide(300);
	
	jQuery('.lma_tab').removeClass('lma_active');

	
});
	
	
jQuery( "#accordion, #accordion2,#accordion3, #accordion4" ).accordion({
	heightStyle: "content",
	collapsible :true,
	animate: 200
});


});







</script>

<script type="text/javascript">
	
	jQuery(document).ready(function(){
  
  
  jQuery('#ajax-tab-container').easytabs({
	 
	  panelContext: jQuery(".panel_container")
	  
  });
  
  jQuery('.tab').click(function() {
	
		jQuery("html, body").animate({scrollTop: 0});

	});
  
  
  
/*
  var $tabs = jQuery('#tabs').data('easytabs').tabs;

    jQuery(".ui-tabs-panel").each(function(i){
      var totalSize = jQuery(".ui-tabs-panel").size() - 1;
      if (i != totalSize) {
        next = i + 2;
        jQuery(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next Page »</a>");
      }
      if (i != 0) {
        prev = i;
        jQuery(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>« Prev Page</a>");
      }
    });

    jQuery('.next-tab, .prev-tab').click(function() {
      var i = parseInt($(this).attr('rel'));
      var tabSelector = $tabs.children('a:eq(' + i + ')').attr('href');
      jQuery('#tabs').easytabs('select', tabSelector);
      return false;
    });
*/





/*
var $tabContainer = jQuery('#ajax-tab-container'),
    $tabs = $tabContainer.data('easytabs').tabs,
    $tabPanels = jQuery(".tabs")
    totalSize = $tabPanels.length;



jQuery(".next-tab").click(function() {
  var i = parseInt(jQuery(this).attr("rel"));
  var tabSelector = $tabs.children("a:eq(" + i + ")").attr("href");
  $tabContainer.easytabs("select", tabSelector);
  jQuery( "li.circle.active" ).prevAll().css( "background-color", "#d5982e" );
  return false;
});

jQuery(".prev-tab").click(function() {
  var i = parseInt(jQuery(this).attr("rel"));
  var tabSelector = $tabs.children("a:eq(" + i + ")").attr("href");
  $tabContainer.easytabs("select", tabSelector);
  jQuery( "li.circle.active" ).nextAll().css( "background", "none" );
  return false;
});
*/






});
	
</script>


</body>
</html>

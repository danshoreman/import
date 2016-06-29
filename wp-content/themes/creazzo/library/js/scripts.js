	
/*********************
All js stuff below
*********************/
	
(function($) {
	$(document).ready(function() {
	
	// Show and hide main nav on mobile
		$('#toggle').click(function(){
			$('.main-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var menu = $('.main-menu'); 
		$(window).on('resize', function(){     
		    if(!$("#toggle").is(":visible") && !menu.is(':visible'))
		    {
		      menu.css({'display':''});   
		    }
		});
	
		// Show and hide main nav on mobile
		$('.menu-item-has-children').click(function(){
			$('.sub-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var navmenu = $('.navWrap'); 
		$(window).on('resize', function(){     
		    if(!$("#toggle").is(":visible") && !navmenu.is(':visible'))
		    {
		      navmenu.css({'display':''});   
		    }
		});
		
		$('.bxslider').bxSlider({
			mode: 'fade'	
		});
		
		$('.bxslider2').bxSlider({
			mode: 'horizontal',
			 slideWidth: 390,
		    minSlides: 2,
		    maxSlides: 3,
		    moveSlides: 1,
		    pager: false
		});
		
		
		
		equalheight = function(container){
	
		var currentTallest = 0,
		     currentRowStart = 0,
		     rowDivs = [],
		     $el,
		     topPosition = 0;
		 $(container).each(function() {
		
		   $el = $(this);
		   $($el).height('auto');
		   topPostion = $el.position().top;
		
		   if (currentRowStart != topPostion) {
		     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		       rowDivs[currentDiv].height(currentTallest);
		     }
		     rowDivs.length = 0; // empty the array
		     currentRowStart = topPostion;
		     currentTallest = $el.height();
		     rowDivs.push($el);
		   } else {
		     rowDivs.push($el);
		     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		  }
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		     rowDivs[currentDiv].height(currentTallest);
		   }
		 });
		};
		
		$(window).load(function() {
		  equalheight('.products .product');
		});
		
		
		$(window).resize(function(){
		  equalheight('.products .product');
		});
	
	
	});
})(jQuery);

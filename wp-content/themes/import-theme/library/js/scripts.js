	
/*********************
All js stuff below
*********************/
	
(function($) {
	$(document).ready(function() {
	
		// Show and hide main nav on mobile
		$('.menu-item-has-children').click(function(){
			$('.sub-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var menu = $('.navWrap'); 
		$(window).on('resize', function(){     
		    if(!$("#toggle").is(":visible") && !menu.is(':visible'))
		    {
		      menu.css({'display':''});   
		    }
		});
		
		$('.bxslider').bxSlider({
			mode: 'fade'	
		});
		
		
		
		equalheight = function(container){
	
		var currentTallest = 0,
		     currentRowStart = 0,
		     rowDivs = new Array(),
		     $el,
		     topPosition = 0;
		 $(container).each(function() {
		
		   $el = $(this);
		   $($el).height('auto')
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
		}
		
		$(window).load(function() {
		  equalheight('.products .product');
		});
		
		
		$(window).resize(function(){
		  equalheight('.products .product');
		});
	
	
	});
})(jQuery);

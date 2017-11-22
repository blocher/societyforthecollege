jQuery(document).ready(function($) { 
	
	/* MOBILE NAVIGATION */
	
	if ( $(window).width() < 768 ){
		$("ul#menu-main-navigation-1").removeClass("menu").addClass("mobile_menu_first_level");
		
		$menuButton = $('.open_menu_button');
		
		
		$menuContainer = $('.menu-mobile-menu');
		$secondLevelLink = $('.clickable > a');
		
		
		$menuButton.click(function(e){
			e.preventDefault();

			$menuContainer.slideToggle();
			$('.menu_second_level').slideUp();

		});

		$secondLevelLink.click(function(e){

			e.preventDefault();

			$('.menu_second_level').not( $(this).siblings('.menu_second_level') ).slideUp();

			$(this).siblings('.menu_second_level').slideToggle();

		});

	}
	
	$('#menu_toggle').click(function() {
		var clicks = $(this).data('clicks');
		if (clicks) {
	    	$('.mobile_menu_first_level').show("slow");
	    	$('#menu_toggle').removeClass("open_menu_button").addClass("close_menu_button");
			} else {
	    	$('.mobile_menu_first_level').hide("slow");
	    	$('#menu_toggle').removeClass("close_menu_button").addClass("open_menu_button");
		}
		$(this).data("clicks", !clicks);
	});
	
	/* DONATE LINK TARGET BLANK */
	
	$(".menu li:last-of-type a").attr("target","_blank");

});



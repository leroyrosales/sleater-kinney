jQuery(document).ready(function ($) {
	
	// header-sticky
	    $(document).ready(function(){
	      $(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			var siteTitle = $('h1.site-title a').html();
			var siteTitleURL = $('h1.site-title a').attr('href');

	        if (scrollTop > 240) {
	            $('.head-top').addClass('hidden');
	            $('.main-navigation').addClass('nav-sticky');
	            $('.main-navigation').addClass('fadeInDown');
				$('.main-navigation').addClass('animated');
				$('#site-navigation .menu-toggle').html('<h1 class="unique-blog-nevigation"><a href="'+siteTitleURL+'">'+siteTitle+'</a></h1>');
	        } else {
	            $('.main-navigation').removeClass('fadeInDown');
	            $('.main-navigation').removeClass('nav-sticky');
				$('.head-top').removeClass('hidden');
				$( '.unique-blog-nevigation' ).remove();
				
	        }
	      });
	    }); 

	// Owl Carousel
		$('#unique_blog_main_slider').owlCarousel({
			items : 3,
			itemsCustom : false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				768:{
					items:2,
					nav:false
				},
				1000:{
					items:3,
					nav:true,
					loop:false
				}
			},
			loop:true,
			margin:0,
			dots : false,
			nav: true,
			navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			autoplay : false,
		});

	// back_to_top
		$(function () {
		    //BACK TO TOP
		    $("body").append('<div class="backtotop"><i class="fa fa-caret-up"></i></div>');
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 10) {
		            $('.backtotop').fadeIn();
		        } else {
		            $('.backtotop').fadeOut();
		        }
		    });

		    $(".backtotop").click(function () {
		        $("html, body").animate({scrollTop: 0}, 1000);
		    }); // END BACK TO TOP

		    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
		    jQuery(function ($) {
		        if ($(window).width() > 769) {
		            $('ul.nav li.dropdown').hover(function () {
		                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		            }, function () {
		                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		            });
		        }
		    });
		});

		
    
		/**
		 * Macinary layout file
		 */
		$('.enique_blog_grid').masonry({
			// options
			itemSelector: '.enique_blog_grid_item',
			columnWidth: '.uni_masonry-layout article'
		});


});



jQuery(document).ready(function ($) {

	/**
	 * Onepage nav closing issue on menu item click
	 */
	// Hide nav if screen size <= 980px
	function hideNav(mdmScreen) {
		if (mdmScreen.matches) { // If media query matches
			jQuery('.main-navigation .menu').slideUp('slow');
		} else {
			jQuery('#site-navigation ul').show();
		}
	}

	// Define match media size ( <= 980px )
	var mdmScreen = window.matchMedia("(max-width: 980px)");

	// Hide
	hideNav(mdmScreen);

	// Show/hide menu on resize state change
	mdmScreen.addListener(hideNav);

	// Hide nav on Onepage menu item click if screen size <= 980px
	jQuery('#site-navigation li > a[href*="#"]').click(function () {
		hideNav(mdmScreen);
	});
	// End Onepage nav

	/**
	 * Search
	 */
	var hideSearchForm = function () {
		jQuery('.search-wrap .search-box').removeClass('active');
	};
	jQuery('.search-wrap .search-icon').on('click', function () {
		jQuery('.search-wrap .search-box').toggleClass('active');

		// focus after some time to fix conflict with toggleClass
		setTimeout(function () {
			jQuery('.search-wrap .search-box.active input').focus();
		}, 200);

		// For esc key press.
		jQuery(document).on('keyup', function (e) {

			// on esc key press.
			if (27 === e.keyCode) {
				// if search box is opened
				if (jQuery('.search-wrap .search-box').hasClass('active')) {
					hideSearchForm();
				}

			}
		});

		jQuery(document).on('click.outEvent', function (e) {
			if (e.target.closest('.search-wrap')) {
				return;
			}

			hideSearchForm();

			// Unbind current click event.
			jQuery(document).off('click.outEvent');
		});

	});

	/**
	 * Navigation
	 */
	// Append caret icon on menu item with submenu
	jQuery('.main-navigation .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-angle-down"></i> </span>');

	// Mobile menu toggle clicking on hamburger icon
	jQuery('.main-navigation .menu-toggle').click(function () {
		jQuery('.main-navigation .menu').slideToggle('slow');
	});

	// Mobile submenu toggle on click
	jQuery('.main-navigation .sub-toggle').on('click', function () {
		var currentIcon = jQuery(this).children('.fa');
		var currentSubMenu = jQuery(this).parent('li'),
			menuWithChildren = currentSubMenu.siblings('.menu-item-has-children');

		// get siblings icons
		var siblingsIcon = menuWithChildren.find('.fa');

		currentIcon.toggleClass('animate-icon');

		if (siblingsIcon.hasClass('animate-icon')) {
			siblingsIcon.removeClass('animate-icon');
		}

		menuWithChildren.not(currentSubMenu).removeClass('mobile-menu--slided').children('ul').slideUp('1000');
		currentSubMenu.toggleClass('mobile-menu--slided').children('ul').slideToggle('1000');
	});

	// One Page Nav
	// jQuery(window).load(function () {
	// 	var top_offset = jQuery('#masthead-sticky-wrapper').height() - 1;
	// 	jQuery('#site-navigation').onePageNav({
	// 		currentClass: 'current-academic-hub-item',
	// 		changeHash: false,
	// 		scrollSpeed: 1500,
	// 		scrollOffset: top_offset,
	// 		scrollThreshold: 0.5,
	// 		filter: '',
	// 		easing: 'swing',
	// 	});
	// });

	// Sticky menu
	if (typeof jQuery.fn.sticky !== 'undefined') {
		var wpAdminBar = jQuery('#wpadminbar');
		if (wpAdminBar.length) {
			jQuery('.header-sticky .site-header').sticky({ topSpacing: wpAdminBar.height() });
		} else {
			jQuery('.header-sticky .site-header').sticky({ topSpacing: 0 });
		}
	}





});
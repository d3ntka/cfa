// Webpack Imports
import * as bootstrap from 'bootstrap';
import Swiper, { EffectFade, Navigation, Pagination }  from 'swiper';


( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );
} )();

// dodaje selektor do otwartego navbara
(function ($) {
	$(document).on("click", ".navbar-toggler", function () {
	  $(this).parents(".navbar").toggleClass("nav-opened");
	//   $(".navbar").toggleClass("nav-opened");
	});
})(jQuery);


// (function {

	// Swiper.use([Navigation, Pagination]);


	const swiper = new Swiper('.swiper', {
		modules: [Navigation, Pagination, EffectFade],
		// Optional parameters
		// direction: 'vertical',
		loop: true,
		effect: "fade",
		speed: 1000,
	    fadeEffect: {
			crossFade: true
		  },
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	  
	  });
// })()
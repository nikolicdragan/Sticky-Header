(function ($) {
	"use strict";
	$(document).ready(function () {
		thsp_sticky_header();
	});
	
	$(window).scroll(function () {
		thsp_sticky_header();
	});
	
	function thsp_sticky_header() {
		// Check browser window width
		if ($(window).width() > StickyHeaderParams.hide_if_narrower) {
			if (document.body.scrollTop > StickyHeaderParams.show_at) {
				// Show
				$('#thsp-sticky-header').stop().animate({"margin-top": '0'}, 50);
			} else {
				// Hide
				$('#thsp-sticky-header').stop().animate({"margin-top": '-200'}, 50);
			}
		}
	}
}(jQuery));
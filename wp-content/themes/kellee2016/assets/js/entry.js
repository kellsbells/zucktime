// Require dependencies
var $ = require('jquery');

// Fire it up
var Kellee = {
	challengeElement: null,
	context: null,

	/**
	 * Initialize Kellee
	 */
	init: function() {
		/**
		 * Set the initial breakpoint context
		 */
		Kellee.challengeElement = document.querySelector('.breakpoint-context');
		Kellee.challengeContext();
		Kellee.smoothScroll();

		/**
		 * Check breakpoint context on window resizing
		 * Throttled/debounced for better performance
		 */
		$(window).resize(Kellee.debounce(function() {
			Kellee.challengeContext();
		}, 250));
	},

	/**
	 * Device targeting should be based on media queries in CSS,
	 * we do not define this in scripts
	 * Modified from http://davidwalsh.name/device-state-detection-css-media-queries-javascript
	 */
	challengeContext: function() {
		var styles = window.getComputedStyle(Kellee.challengeElement),
			index = parseInt(styles.getPropertyValue('z-index'), 10),
			states = {
				1: 'mobile',
				2: 'tablet'
			};

		Kellee.context = states[index] || 'desktop';
	},

	/**
	 * Throttle/debounce helper
	 * Modified from http://remysharp.com/2010/07/21/throttling-function-calls/
	 */
	debounce: function(fn, delay) {
		var timer = null;

		return function() {
			var context = this,
				args = arguments;

			clearTimeout(timer);

			timer = setTimeout(function() {
				fn.apply(context, args);
			}, delay);
		};
	},

	smoothScroll: function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      	var target = $(this.hash);
		      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      	if (target.length) {
		      	  	$('html, body').animate({
		      	  	  scrollTop: target.offset().top
		      	  	}, 1000);
		      	  	return false;
		      	}
		    }
		});
	},

	toggleWorkHistory: function() {
		$( '.work-history' ).slideToggle();
	}
};

$(document).ready(function() {
	Kellee.init();
}).on('click', '.js-toggle-work', function() {
	Kellee.toggleWorkHistory();
});
// Chain any click events here

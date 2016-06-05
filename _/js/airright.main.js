/**
 * MervinMfg WordPress Theme Template - http://www.mervin.com
 * Author: brian.behrens@mervin.com - http://www.mervin.com
 */

 var AIRRIGHT = AIRRIGHT || {};

AIRRIGHT.Main = {
	config: {},
	init: function () {
		var self = this;
    var $body = $('body');
    // mobile navigation menu toggle
		$('.menu-toggle').on('click', function(e) {
      e.preventDefault();
      var $body = $('body');
      $(this).toggleClass("is-active");
			$('.primary-navigation-mobile').toggleClass("active");
      $body.toggleClass('menu-visible');
		});
    // lazy load product photos
    $('.item .item-image-wrapper img.lazy').unveil(0, function() {
			$(this).on('load', function() {
				$(this).addClass('loaded');
				$(this).off('load');
			});
		});
    if ($body.hasClass('page-template-home')) {
      new AIRRIGHT.FeaturedSlider();
    }
	},
	utilities: {
		cookie: {
			getCookie: function (name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') c = c.substring(1, c.length);
					if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
				}
				return null;
			},
			setCookie: function (name, value, days) {
				var date, expires;
				if (days) {
					date = new Date();
					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					expires = "; expires=" + date.toGMTString();
				} else {
					expires = "";
				}
				document.cookie = name + "=" + value + expires + "; path=/";
			}
		},
		pageScroll: function (hash, duration, updateLocation) {
			var yPosition;
			// check duration
			if (typeof duration === 'undefined') {
				duration = 1;
			}
			if (typeof updateLocation === 'undefined') {
				updateLocation = true;
			}
			// Smooth Page Scrolling, update hash on complete of animation
			yPosition = $(hash).offset().top;
			TweenMax.to(window, duration, {scrollTo:{y: yPosition, x: 0}, onComplete: function () { if (updateLocation) window.location = hash; }});
		}
	}
};

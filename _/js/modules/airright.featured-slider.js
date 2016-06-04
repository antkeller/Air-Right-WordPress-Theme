/**
 * MervinMfg WordPress Theme Template - http://www.mervin.com
 * Author: brian.behrens@mervin.com - http://www.mervin.com
 */

 var AIRRIGHT = AIRRIGHT || {};

AIRRIGHT.FeaturedSlider = function(autoRotate) {
	this.config = {
    dots: false,
    loop: false
  };
  // check to see if slider should be activated
	if ($('.featured-slider .slide-list .slide-item').length > 1) {
		this.config.dots = true;
		this.config.loop = true;
	}
	this.init();
};
AIRRIGHT.FeaturedSlider.prototype = {
  init: function () {
		var self, carousel, responsiveSize;
		self = this;
		if ($(".featured-slider .owl-carousel").length) {
			// set up owl carousel
			carousel = $(".featured-slider .owl-carousel").owlCarousel({
				items: 1,
				dots: self.config.dots,
				lazyLoad: true,
				autoplay: true,
				autoplayTimeout: 10000,
				autoplayHoverPause: false,
				loop: self.config.loop
			});
		}
    $('.featured-slider img.lazy').unveil(0, function() {
			$(this).on('load', function() {
				$(this).addClass('loaded');
				$(this).off('load');
			});
		});
	}
};

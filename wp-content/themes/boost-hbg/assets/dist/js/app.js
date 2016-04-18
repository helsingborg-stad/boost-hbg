jQuery(function() {

    //Declarations
    var $window         = $(window),
    win_height_padded   = $window.height() * 1.1,
    targetWrapper       = 'main [class^="modularity-mod-"] [class^="grid-"], .social-feed > li, .sidebar-footer-area > [class^="grid-"], .modularity-mod-table .box-panel, div:not(.hero) > .modularity-mod-slider .slider, .modularity-mod-inlaylist > .box-panel, .modularity-mod-iframe > iframe, .modularity-mod-contact > .box-card',
    target;

    //Scroll event
    $window.on('scroll', revealOnScroll);

    //Run scroll reveal
    function revealOnScroll() {
        var scrolled        = $window.scrollTop(),
        win_height_padded   = $window.height() * 1.1;

        $(targetWrapper + ":not(.animated)").each(function() {
            var $this = $(this),
                offsetTop = $this.offset().top;

            if (scrolled + win_height_padded > offsetTop) {
              $this.addClass('animated fadeInUp');
            }
        });

    }

    //Init function
    revealOnScroll();
});

var DunkersKultur;

DunkersKultur = DunkersKultur || {};
DunkersKultur.Liquid = DunkersKultur.Liquid || {};

DunkersKultur.Liquid.Liquid = (function ($) {

	var TopOffset = 5;
	var TargetElement = "#site-header";
	var JqClassName = "liquid-header";

	function Liquid() {
        jQuery(function(){
            this.process();
        	jQuery(window).scroll(function(){
        		this.process();
        	}.bind(this));
        }.bind(this));
    }

    Liquid.prototype.process = function () {
        if (jQuery(window).scrollTop() < TopOffset) {
            this.removeClass();
        } else {
            this.addClass();
        }
    }

	Liquid.prototype.addClass = function () {
	   jQuery(TargetElement).addClass(JqClassName);
    };

    Liquid.prototype.removeClass = function () {
		 jQuery(TargetElement).removeClass(JqClassName);
    };

    Liquid.prototype.updateTriggerValue = function () {
        if( jQuery(TargetElement).attr('data-trigger-value') && this.isInt( jQuery(TargetElement).attr('data-trigger-value') ) ) {
            TopOffset = jQuery(TargetElement).attr('data-trigger-value');
        }
    };

    Liquid.prototype.isInt = function (value) {
        var x;
        if (isNaN(value)) { return false; }
        x = parseFloat(value);
        return (x | 0) === x;
    };

	return new Liquid();

})(jQuery);

DunkersKultur = DunkersKultur || {};
DunkersKultur.ScrollPlease = DunkersKultur.ScrollPlease || {};

DunkersKultur.ScrollPlease.ScrollPlease = (function ($) {

    function ScrollPlease() {
        $(window).on('scroll', function (e) {
            var scrollPos = $(e.target).scrollTop();

            if (scrollPos > 100) {
                $('.scroll-down-please').fadeOut();
            } else {
                $('.scroll-down-please').fadeIn();
            }
        });
    }

    return new ScrollPlease();

})(jQuery);

BoostHBG                = BoostHBG || {};
BoostHBG.ScrollPlease   = BoostHBG.ScrollPlease || {};

BoostHBG.ScrollPlease.ScrollPlease = (function ($) {

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

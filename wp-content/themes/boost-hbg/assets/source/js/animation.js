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

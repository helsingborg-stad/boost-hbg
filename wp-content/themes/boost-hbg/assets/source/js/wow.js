jQuery(function() {

    //Declarations
    var $window         = $(window),
    win_height_padded   = $window.height() * 1.1,
    targetWrapper       = 'main [class^="modularity-mod-"] [class^="grid-"], .social-feed > li, .sidebar-footer-area > .grid-lg-4',
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

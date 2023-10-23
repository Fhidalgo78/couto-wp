(function ($) {
    $(document).ready(function () {
        $('.owl-carousel-one').owlCarousel({
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1

                },
                600: {
                    items: 1
                },
                820: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('.owl-carousel-two').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 4
                },
                600: {
                    items: 4
                },
                820: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    });  
})(jQuery);


$('.rsr').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 6,
    touchThreshold: 100,
    // centerMode: true,
    // autoplay: true,
    arrows: false,
    autoplaySpeed: 1000,
    margin: 10,
    speed: 3000,
    focusOnSelect: true,
    pauseOnHover: true,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ]
});







$('.first_slick').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 6,
    touchThreshold: 100,
    // centerMode: true,
    // autoplay: true,
    autoplaySpeed: 1000,
    margin: 10,
    speed: 3000,
    focusOnSelect: true,
    pauseOnHover: true,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ]
});











$(document).ready(function() {
    $('.home_ban_sec').on('init', function(e, slick) {
        var $firstAnimatingElements = $('div.home_full:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    $('.home_ban_sec').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.home_full[data-slick-index="' + nextSlide + '"]').find(
            '[data-animation]');
        doAnimations($animatingElements);
    });
    $('.home_ban_sec').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    function doAnimations(elements) {
        var animationEndEvents =
            'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }
});

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Grow</title>

    <link rel="shortcut icon" href="/assets/images/logo/favs1.png">

    <link rel="stylesheet" href="/assets/css/animate.min.css">

    <link rel="stylesheet" href="/assets/Bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/custom.css">


    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <!-- ===================font awesome ================-->
    <script src="https://kit.fontawesome.com/3af54b62af.js" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!------------------------slick link--------------------------------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
    <div class="home_grow">
        @include('layouts.header')


        @yield('main-content')

        @include('layouts.footer')

    </div>



    <script src="/assets/Bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>

    {{-- <script src="assets/customjs/isotope.pkgd.min.js"></script>     --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- template scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js" integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>

    <script src="/assets/js/jquery.magnific-popup.min.js"></script>





    <script>
        // members

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
    </script>


<script>
    $(document).ready(function() {
        $('.home_ban_sec').on('init', function(e, slick) {
            var $firstAnimatingElements = $('div.home_full:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        $('.home_ban_sec').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('div.home_full[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
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
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
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
</script>

<script>
    $(document).ready(function () {
        // Add a click event to the element with the class "scr_full"
        $(".scr_full").click(function () {
            // Scroll to the element with the id "cat11" using jQuery
            $('html, body').animate({
                scrollTop: $("#cat11").offset().top
            }, 500); // Adjust the duration as needed
        });
    });
    </script>

</body>

</html>

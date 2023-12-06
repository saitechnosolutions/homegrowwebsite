<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home Grow</title>

    <link rel="shortcut icon" href="/assets/images/favou.png">

    {{-- <link rel="stylesheet" href="/assets/css/animate.min.css"> --}}

    <link rel="stylesheet" href="/assets/Bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/custom.css">

    <link rel="stylesheet" href="/assets/css/responsive.css">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    {{-- <link rel="stylesheet" href="/assets/css/sweetalert2.min.css"> --}}
</head>

<body>
    <div class="home_grow">
        @include('layouts.header')


        @yield('main-content')

        @unless (request()->is('contact'))
            {{-- Exclude footer if the current route is 'contact' --}}
            @include('layouts.footer')
        @endunless
    </div>



    <script src="/assets/Bootstrap/js/bootstrap.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="/assets/js/main.js"></script>

    <script src="/assets/js/contact.js"></script>



    {{-- <script src="assets/customjs/isotope.pkgd.min.js"></script>     --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- template scripts -->

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js" integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>

    <script src="/assets/js/jquery.magnific-popup.min.js"></script>

    <script src="/assets/js/slider.js"></script>

    <script src="/assets/js/register.js"></script>

    <script src="/assets/js/accountajax.js"></script>


    <script src="/assets/js/kenburns.js"></script>

    {{-- ================== water effects =================== --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

    <script src="https://isotope.metafizzy.co/isotope.pkgd.js"></script>

    {{-- <script src="/assets/js/sweetalert2.all.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            var customContainer = jQuery(".iso-container");
            customContainer.isotope({
                filter: "*",
                transitionDuration: "2s",
                animationOptions: {
                    duration: 7500,
                    queue: false
                },
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.iso-container'
                },
                layoutMode: "fitRows",
                fitRows: {
                    gutter: 0
                }
            });

            jQuery("#custom-filter li:first-child > a").addClass("is-checked");

            jQuery("#custom-filter a").click(function() {
                jQuery("#custom-filter .is-checked").removeClass("is-checked");
                jQuery(this).addClass("is-checked");

                var customSelector = jQuery(this).attr("data-filter");
                customContainer.isotope({
                    filter: customSelector,
                    transitionDuration: "2s",
                    animationOptions: {
                        duration: 7500,
                        queue: false
                    },
                    layoutMode: "fitRows",
                    fitRows: {
                        gutter: 0
                    }
                });
                return false;
            });
        });
    </script>

    <script>
        $(".nutri_section").ripples({
            resolution: 260,
            perturbance: 0.01,
        });
    </script>
    <script>
        // $(".home_full").ripples({
        //     resolution: 260,
        //     perturbance: 0.01,
        // });
    </script>

    <script>
        // range value

        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            // Add a click event to the element with the class "scr_full"
            $(".scr_full").click(function() {
                // Scroll to the element with the id "cat11" using jQuery
                $('html, body').animate({
                    scrollTop: $("#cat11").offset().top
                }, 500); // Adjust the duration as needed
            });
        });
    </script>



    <script>
        AOS.init();
    </script>


    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("myInput");
            var passwordIcon = document.querySelector(".toggle-password i");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            }
        }
    </script>


    <script>
        function myFunction() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function togglePassword1() {
            var passwordInput = document.getElementById("myInput1");
            var passwordIcon = document.querySelector(".toggle-password1 i");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            }
        }
    </script>


    <script>
        // track order
        const progress = document.getElementById('progress')
        const back = document.getElementById('back')
        const next = document.getElementById('next')
        const wraps = document.querySelectorAll('.text-wrap')

        let currentActive = 1

        next.addEventListener('click', () => {
            currentActive++
            if (currentActive > wraps.length) {
                currentActive = wraps.length
            }

            update()
        })

        back.addEventListener('click', () => {
            currentActive--
            if (currentActive < 1) {
                currentActive = 1
            }

            update()
        })

        function update() {
            wraps.forEach((wrap, index) => {
                if (index < currentActive) {
                    wrap.classList.add('active')
                } else {
                    wrap.classList.remove('active')
                }
            })

            const actives = document.querySelectorAll('.active')
            progress.style.width = (actives.length - 1) / (wraps.length - 1) * 90 + '%'

            if (currentActive === 1) {
                back.disabled = true
            } else if (currentActive === wraps.length) {
                next.disabled = true
            } else {
                back.disabled = false
                next.disabled = false
            }
        }
    </script>

    <script>
        // $(document).ready(function(){
        //     $('.ofers').trigger('click');
        // });
    </script>

    <script>
        // $(document).ready(function () {
        //   $('.btn_plus').on('click', function () {
        //     var inputElement = $('.input_poo');
        //     var currentValue = parseInt(inputElement.val(), 10);
        //     if (currentValue < 100) {
        //       inputElement.val(currentValue + 1);
        //     }
        //   });

        //   $('.btn_min').on('click', function () {
        //     var inputElement = $('.input_poo');
        //     var currentValue = parseInt(inputElement.val(), 10);
        //     if (currentValue > 1) {
        //       inputElement.val(currentValue - 1);
        //     }
        //   });

        //   $('.btn_plus1').on('click', function () {
        //     var inputElement = $('.input_poo1');
        //     var currentValue = parseInt(inputElement.val(), 10);
        //     if (currentValue < 100) {
        //       inputElement.val(currentValue + 1);
        //     }
        //   });

        //   $('.btn_min1').on('click', function () {
        //     var inputElement = $('.input_poo1');
        //     var currentValue = parseInt(inputElement.val(), 10);
        //     if (currentValue > 1) {
        //       inputElement.val(currentValue - 1);
        //     }
        //   });


        // });
        function increaseValue(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(id + '-number').value = value;
        }

        function decreaseValue(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById(id + '-number').value = value;
        }


        // add to cart
        function increaseValue1(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(id + '-number').value = value;
        }

        function decreaseValue1(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById(id + '-number').value = value;
        }
    </script>



    <script>
        //  add to cart
        $(document).ready(function() {
            updateTotal();
        });

        function increaseValue1(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            input.val(parseInt(input.val()) + 1);
            updatePriceAndTotal(offerPrice);
        }

        function decreaseValue1(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            if (parseInt(input.val()) > 1) {
                input.val(parseInt(input.val()) - 1);
                updatePriceAndTotal(offerPrice);
            }
        }

        function updatePrice(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            const priceElement = $(`#price-${offerPrice}`);
            const quantity = parseInt(input.val());
            const price = quantity * parseInt(offerPrice);
            priceElement.text(`₹${price}`);
        }

        function updateTotal() {
            let totalAmount = 0;

            // Loop through all product prices and quantities
            $('[id^="price-"]').each(function() {
                const priceText = $(this).text().replace('₹', '');
                const price = !isNaN(parseFloat(priceText)) ? parseFloat(priceText) : 0;

                const productId = $(this).attr('id').split('-')[1]; // Extract the product ID
                const input = $(`#hair-${productId}-number`);
                const quantity = !isNaN(parseInt(input.val())) ? parseInt(input.val()) : 0;

                totalAmount += price // Consider both price and quantity
            });

            // Update the total amount
            $('#totalAmount').text(`₹${totalAmount.toFixed(2)}`);
        }

        function updatePriceAndTotal(offerPrice) {
            updatePrice(offerPrice);
            updateTotal();
        }
    </script>

</body>

</html>

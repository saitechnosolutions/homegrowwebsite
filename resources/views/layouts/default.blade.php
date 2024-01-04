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


    <link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    {{-- 10-12-2023 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <link rel="stylesheet" href="/assets/css/sweetalert2.min.css"> --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Google analytics  -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JC5RQ3CBWK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JC5RQ3CBWK');
    </script>

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

    {{-- <script src="assets/customjs/isotope.pkgd.min.js"></script>     --}}

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

    <script src="/assets/js/main.js"></script>

    <script src="/assets/js/contact.js"></script>

    <script src="/assets/js/slider.js"></script>

    <script src="/assets/js/register.js"></script>

    <script src="/assets/js/accountajax.js"></script>


    <script src="/assets/js/kenburns.js"></script>

    <!--================just validate script=====================-->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

    {{-- ================== water effects =================== --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>

    @yield('scripts')
    {{-- <script src="https://isotope.metafizzy.co/isotope.pkgd.js"></script> --}}

    {{-- <script src="/assets/js/sweetalert2.all.min.js"></script> --}}

    <script>
        // $(document).ready(function() {
        //     var customContainer = jQuery(".iso-container");
        //     customContainer.isotope({
        //         filter: "*",
        //         transitionDuration: "2s",
        //         animationOptions: {
        //             duration: 7500,
        //             queue: false
        //         },
        //         masonry: {
        //             columnWidth: '.iso-container'
        //         },
        //         layoutMode: "fitRows",
        //         fitRows: {
        //             gutter: 0
        //         }
        //     });

        //     jQuery("#custom-filter li:first-child > a").addClass("is-checked");

        //     jQuery("#custom-filter a").click(function() {
        //         jQuery("#custom-filter .is-checked").removeClass("is-checked");
        //         jQuery(this).addClass("is-checked");

        //         var customSelector = jQuery(this).attr("data-filter");
        //         customContainer.isotope({
        //             filter: customSelector,
        //             transitionDuration: "2s",
        //             animationOptions: {
        //                 duration: 7500,
        //                 queue: false
        //             },
        //             layoutMode: "fitRows",
        //             fitRows: {
        //                 gutter: 0
        //             }
        //         });
        //         return false;
        //     });
        // });

        // init Isotope
        // var $grid = $('.iso-container').isotope({
        //     // options
        // });
        // // filter gallerys on button click
        // $('.iso_one').on('click', 'li a', function() {
        //     var filterValue = $(this).attr('data-filter');
        //     $grid.isotope({
        //         filter: filterValue
        //     });
        // });
    </script>
    <script>
        $(document.body).on('click', function(e) {
            // Check if the clicked element is not inside the first dropdown or the new dropdown
            if (!$(e.target).closest('.navbar-toggler').length &&
                !$(e.target).closest('.dropdown-content').length &&
                !$(e.target).closest('.dropstart').length) {
                // Close the first dropdown
                $('#navbarTogglerDemo03').removeClass('show');
            }
        });
    </script>
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            // Get the button text content
            var buttonText = this.textContent;

            // Create a temporary textarea element
            var tempTextarea = document.createElement('textarea');

            // Set the value of the textarea to the button text content
            tempTextarea.value = buttonText;

            // Append the textarea to the document
            document.body.appendChild(tempTextarea);

            // Select the text in the textarea
            tempTextarea.select();

            // Use the Clipboard API to copy the selected text
            navigator.clipboard.writeText(buttonText)
                .then(function() {
                    // Successful copy, you can perform any additional actions here
                })
                .catch(function(err) {
                    console.error('Unable to copy text to clipboard', err);
                })
                .finally(function() {
                    // Remove the temporary textarea
                    document.body.removeChild(tempTextarea);
                });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to show the modal
            function showModal() {
                $('#ofersModal').modal('show');
            }
            showModal();

            setInterval(function() {
                showModal();
            }, 60000000); // 60000 milliseconds = 1 minute
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
        let priceGap = 100;

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
        $(document).ready(function() {
            const progress = $('#progress');
            const back = $('#back');
            const next = $('.next');
            const wraps = $('.text-wrap');

            let currentActive = 1;

            next.click(function() {
                currentActive++;
                if (currentActive > wraps.length) {
                    currentActive = wraps.length;
                }

                update();
            });

            back.click(function() {
                currentActive--;
                if (currentActive < 1) {
                    currentActive = 1;
                }

                update();
            });

            function update() {
                wraps.each(function(index) {
                    if (index < currentActive) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                });

                const actives = $('.active');
                progress.css('width', (actives.length - 1) / (wraps.length - 1) * 90 + '%');

                if (currentActive === 1) {
                    back.prop('disabled', true);
                } else if (currentActive === wraps.length) {
                    next.prop('disabled', true);
                } else {
                    back.prop('disabled', false);
                    next.prop('disabled', false);
                }
            }
        });
    </script>

    <script>
        // $(document).ready(function(){
        //     $('.ofers').trigger('click');
        // });
    </script>


    <script>
        // all categories and  home
        function increaseValue(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(id + '-number').value = value;
        }

        function decreaseValue(id) {
            var value = parseInt(document.getElementById(id + '-number').value, 10);
            value = isNaN(value) ? 0 : value;
            // value < 1 ? value = 1 : '';
            // value--;
            value = (value <= 1) ? 1 : value - 1;
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
            singletocheckout();
        });

        function increaseValue1(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            const maxqty = parseInt(input.attr("max"));
            if (parseInt(input.val()) < maxqty) {
                input.val(parseInt(input.val()) + 1);

                updatePriceAndTotal(offerPrice);

                updateTotalCartAmount();

            } else {
                Toastify({
                    text: "Out Of Stock",
                    className: "info",
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();
            }

        }

        function decreaseValue1(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            if (parseInt(input.val()) > 1) {
                input.val(parseInt(input.val()) - 1);
                updatePriceAndTotal(offerPrice);
                updateTotalCartAmount()
            }
        }

        function updatePrice(offerPrice) {
            const input = $(`#hair-${offerPrice}-number`);
            const priceElement = $(`#price-${offerPrice}`);
            const quantity = parseInt(input.val());
            const price = quantity * parseInt(offerPrice);

            // priceElement.text(`₹${price}`);

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

                // change code
                $(`#price_offer_${productId}`).val(price);
                $(this).closest('div').find('.cart_qty').val(quantity);
            });

            // Update the total amount
            $('.totalamtcart').val(totalAmount);
            $('#totalAmount').text(`₹${totalAmount.toFixed(2)}`);
        }

        function updatePriceAndTotal(offerPrice) {
            updatePrice(offerPrice);
            updateTotal();
        }
    </script>
    <script>
        function increment(idd, event) {
            var qtty = $('#qty' + idd).val();
            var maxqty = $('#maxqty' + idd).val();
            var proprice = $('#proprice' + idd).val();
            var mrprice = $('#mrprice' + idd).val();
            var totalamt;

            if (qtty != maxqty) {
                qtty = parseInt(qtty) + 1;
                $('#qty' + idd).val(qtty);
                totalamt = parseFloat(proprice) * parseFloat(qtty);
                $('#totalamt' + idd).val(totalamt.toFixed(2));
            } else {
                Toastify({
                    text: "Out Of Stock",
                    className: "info",
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();
            }
        }

        function decrement(idd1, event) {
            var qtty1 = $('#qty' + idd1).val();
            var minqty = 1;
            // var minqty = $('#minqty' + idd1).val();
            var proprice1 = $('#proprice' + idd1).val();
            var mrprice = $('#mrprice' + idd1).val();
            var totalamtt;

            if (qtty1 != minqty) {
                qtty1 = parseInt(qtty1) - 1;
                $('#qty' + idd1).val(qtty1);
                totalamt1 = parseFloat(proprice1) * parseFloat(qtty1);
                $('#totalamt' + idd1).val(totalamt1.toFixed(2));
            }
        }

        $(document).ready(function() {

            $('.coupon_btn').on("click", function() {
                var couponcode = $('.coupocode').val();
                var totalamount = $('.totalamt').val();
                var taxamt = $('.taxamt').val();
                var userId = $('.loginid').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/couponapply',
                    type: 'POST',
                    // Replace with your actual API endpoint
                    data: {
                        couponcode: couponcode,
                        totalamount: totalamount,
                        userId: userId,
                        taxamt: taxamt
                    },
                    success: function(response) {
                        // console.log(response);

                        var discountedAmount = response.disamt;
                        console.log("discountedAmount", discountedAmount);
                        $('.discountprint').text('-₹' + discountedAmount);
                        var disamt = $('.discamnt').val(discountedAmount);

                        singletocheckout();
                    },

                });
            });

        });

        function singletocheckout() {
            var totalamt = $('.totalamt').val();
            var discamnt = $('.discamnt').val();

            var netTotal = totalamt - discamnt;

            // var gstval = $('.tax_amt_display').val();
            // var taxAmount = (netTotal * gstval) / 100;
            //    var nn = $('.textamt').text('+₹ ' + taxAmount.toFixed(2));


            var gstval = $('.tax_amt_display').val();
            // console.log("nettotal",netTotal);
            totalsamt = parseInt(netTotal) + parseInt(gstval);
            // console.log("totallllll", totalsamt);
            // var paytamt = totalsamt + gstval;
            $('#proamt').text('₹ ' + totalsamt.toFixed(2));
            $('.finalpay').val(totalsamt);
        }

        // checkout checkbox
        $(document).ready(function() {
            $('.checkout_checkbox').change(function() {
                if (this.checked) {
                    $('.same_adress_row').show();

                    var uname = $('.c_userid').val();
                    var phone = $('.c_phone').val();
                    var email = $('.c_email').val();
                    var addres = $('.c_addres').val();
                    var city = $('.c_city').val();
                    var state = $('.c_state').val();
                    var pincode = $('.c_pincode').val();
                    var landmark = $('.c_landmark').val();

                    $('.d_name').val(uname);
                    $('.d_phone').val(phone);
                    $('.d_email').val(email);
                    $('.d_address').val(addres);
                    $('.d_city').val(city);
                    $('.d_state').val(state);
                    $('.d_pincode').val(pincode);

                    var $dropdown = $('.d_landmark');
                    $dropdown.append('<option value="' + landmark + '" selected>' + landmark + '</option>');
                    $('.d_landmark').append(option);
                } else {
                    $('.same_adress_row').hide();
                }
            });
            // ============checkout form validation ====================
            $('.checkoutform').on('click', function() {
                checkfullname();
                checkphone();
                checkmail();
                checkaddress();
                checkpincode();
                checkstate();
                checkcity();
                checkarea();

                if (checkfullname() == true && checkphone() == true && checkmail() == true &&
                    checkaddress() == true && checkpincode() == true && checkstate() == true &&
                    checkcity() ==
                    true && checkarea() == true) {

                    $(".checkoutform").attr('type', 'submit');
                } else {
                    $(".checkoutform").attr('type', 'button');
                }
            });
            $('.c_userid').on("input", function() {
                checkfullname();
            });
            $('.c_phone').on("input", function() {
                checkphone();
            });
            $('.c_email').on("input", function() {
                checkmail();
            });
            $('.c_addres').on("input", function() {
                checkaddress();
            });
            $('.c_pincode').on("input", function() {
                checkpincode();
            });
            $('.c_state').on("input", function() {
                checkstate();
            });
            $('.c_city').on("input", function() {
                checkcity();
            });
            $('.c_landmark').on("input", function() {
                checkarea();
            });

            function checkfullname() {
                let fullname = $('.c_userid').val();
                if (fullname == '') {
                    $("#msg1").html("*Please enter Full Name");
                    $('#msg1').show();
                    return false
                } else {
                    $('#msg1').hide();
                    return true
                }
            }

            function checkphone() {
                let Phone01 = $('.c_phone').val();
                var Pattern = /^[6,7,8,9][0-9]{0,9}$/;

                if (Phone01 == '') {
                    $("#msg2").html("*Please enter the Phone Number");
                    $("#msg2").show();
                    return false
                } else if (Phone01.length < 10 || Phone01.length > 10) {
                    $("#msg2").html('*Please correct format');
                    $("#msg2").show();
                    return false
                } else if ((!Pattern.test(Phone01))) {
                    $("#msg2").html('*Please correct format');
                    $("#msg2").show();
                    return false
                } else {
                    $("#msg2").hide();
                    return true
                }
            }

            function checkmail() {
                let Email = $('.c_email').val();
                mail = /^([A-Za-z0-9_.])+\@([a-z])+\.([a-z])+$/;

                if (Email == '') {
                    $("#msg3").html("* Please enter the email");
                    $("#msg3").show();
                    return false
                } else if ((!mail.test(Email))) {
                    $("#msg3").html("* Enter  email correct format");
                    $("#msg3").show();
                    return false
                } else {
                    $("#msg3").hide();
                    return true
                }
            }

            function checkaddress() {
                let addres = $('.c_addres').val();
                if (addres == '') {
                    $("#msg4").html("*Please enter address");
                    $('#msg4').show();
                    return false
                } else {
                    $('#msg4').hide();
                    return true
                }
            }

            function checkpincode() {
                let pincode = $('.c_pincode').val();
                if (pincode == '') {
                    $("#msg5").html("This field is required");
                    $('#msg5').show();
                    return false
                } else if (pincode.length < 6 || pincode.length > 6) {
                    $("#msg5").html('Pincode should be 6 characters');
                    $("#msg5").show();
                    return false
                } else {
                    $('#msg5').hide();
                    return true
                }
            }

            function checkstate() {
                let state = $('.c_state').val();
                if (state == '') {
                    $("#msg6").html("This field is required");
                    $('#msg6').show();
                    return false
                } else {
                    $('#msg6').hide();
                    return true
                }
            }

            function checkcity() {
                let city = $('.c_city').val();
                if (city == '') {
                    $("#msg7").html("This field is required");
                    $('#msg7').show();
                    return false
                } else {
                    $('#msg7').hide();
                    return true
                }
            }

            function checkarea() {
                let area = $('.c_landmark').val();
                if (area == '') {
                    $("#msg8").html("This field is required");
                    $('#msg8').show();
                    return false
                } else {
                    $('#msg8').hide();
                    return true
                }
            }

        });
    </script>



    <script>
        var list = document.querySelectorAll('.des_one1 ')

        function setactive() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.toggle('active')
        }


        list.forEach((item) =>
            item.addEventListener('click', setactive));
    </script>


    <script>
        $(document).ready(function() {
            $('.entr_passwrd').hide();
            $('#sms_ot_login').hide();
            $('.entr_otp').hide();
            $('#sms_ot').on('click', function() {
                $('.entr_passwrd').show();
            })
        });

        $(document).ready(function() {
            $('#set_password').hide();
            $('#forgot_sms_ot_login').hide();

            $('.frgot_enter_paswrd').hide();
            $('.entr_fotgot_otps').hide();
        });
    </script>



    <script>
        $(function() {

            // Function to extract query parameter from URL
            function getQueryParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            // Get the category ID from the URL
            const categoryId = getQueryParam('categoryid');
            console.log(categoryId);

            if (categoryId) {
                $("#" + categoryId).trigger("click");
            }

        })
    </script>


    <script>
           function updateTotalCartAmount (){
            let totalCartValue = 0;
$('[name="ogproprice[]"]').each(function (index,element){

    totalCartValue += (element.value * $(".cart_qty")[index].value);
    $(".totalamtcart").val(totalCartValue);
    $("#totalAmount").html(`₹${totalCartValue}`)
})
        }

        $(function () {
            updateTotalCartAmount();
        })

    </script>


</body>

</html>

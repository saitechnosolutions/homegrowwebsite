$(document).on('click', '.state', function () {
    let id = $(this).val();
    $('.city').empty();
    $('.city').append(`<option value=" " disable>processing...</option>`);
    $.ajax({
        type: "GET",
        url: "/city/" + id,
        success: function (response) {
            $('.city').empty();
            $('.city').append(
                `<option value="" disable selected>Select City</option>`
            );
            response.forEach(element => {
                $('.city').append(
                    `<option value="${element['id']}">${element['name']}</option>`
                );
            });
        }
    });
});






$(document).ready(function () {
    $('.register_btn').on('click', function () {
        var formData = $('.register_form').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/register',
            type: 'post',
            data: formData,
            success: function (response) {
                swal.fire(
                    'Success',
                    response.success,
                    'success'
                );
                location.reload();
            },
            error: function (xhr, status, error) {
                if (xhr.status === 422) {
                    swal.fire(
                        'Error!',
                        xhr.responseJSON.error,
                        'error'
                    );
                } else {
                    swal.fire(
                        'Error!',
                        'Failed to update register data. Please try again later.',
                        'error'
                    );
                }
            }
        });
    });
});




$(document).ready(function() {
    $('#pin_code_type').on('input', function() {
        var pinCode = $(this).val();
        // if (pinCode.length === 6) {
            // Make AJAX request to Laravel backend
            $.ajax({
                url: '/get-address-details',
                method: 'GET',
                data: { pincode: pinCode },
                success: function(response) {
                    // Clear existing options in the dropdown
                    $('#city_input').empty();

                    var district = response[0].match(/District: (.*?),/)[1];
                    var state = response[0].match(/State: (.*)/)[1];

                    $('#pin_district').val(district);
                    $('#pin_state').val(state);

                    // Iterate through each city in the response and add it to the dropdown
                    response.forEach(function(cityDetails) {
                        // Extract city, district, and state
                        var cityMatch = cityDetails.match(/City: (.*?),/);


                        var city = cityMatch ? cityMatch[1] : '';

                        // Append a new option to the dropdown
                        $('#city_input').append($('<option>', {
                            value: city,
                            text: city
                        }));
                    });
                },
                error: function(error) {
                    console.error('Error fetching address details:', error);
                }
            });
        // }
    });
});




$(document).ready(function () {
    $('.logins').on('click', function (event) {
        event.preventDefault();

        var phoneNumber = $('input[name="login_mblnum"]').val();
        var password = $('input[name="login_passwrd"]').val();

        if (!phoneNumber || !password) {
            $('#error-message1').text('Please enter both phone number and password.');
            return;
        } else if (!password) {
            $('#error-message1').text('Please enter password.');
            return;
        } else if (!phoneNumber) {
            $('#error-message1').text('Please enter phone number.');
            return;
        }

        var formData = $('.login_form').serialize();
        $.ajax({
            url: '/login',
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    swal.fire(
                        'Success',
                        'Log In Successfully',
                        'success'
                    );

                    // Use Toast for additional success notification
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });

                    Toast.fire({
                        icon: "success",
                        title: "Signed in successfully"
                    });

                    // Redirect to the home page after a delay
                    setTimeout(function () {
                        window.location.href = '/';
                    }, 3000); // 3000 milliseconds (3 seconds) delay
                } else {
                    // Display error message in the specified div
                    $('#error-message1').text(response.error);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                $('#error-message').text('An unexpected error occurred. Please try again.');
            }
        });
    });
});








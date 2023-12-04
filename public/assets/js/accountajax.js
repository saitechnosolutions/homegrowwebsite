$(document).ready(function () {
    $('#updateButton').on('click', function () {
        var formData = $('#update_user').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/update_product',
            type: 'post',
            data: formData,
            success: function (response) {
                console.log(response);
                swal(
                    'Success',
                    'Your User form has been Updated',
                    'success'
                );
            },
            error: function (error) {
                console.log(error);
                swal(
                    'Error!',
                    'The phone number has been already entered . please enter valid number',
                    'error'
                )
            }
        });
    });
});





$(document).ready(function () {
    $('#add_adress').on('click', function () {
        var add_aders = $('.add_usering').serialize();

        $.ajax({
            url: '/add_adress',
            type: 'post',
            data: add_aders,
            success: function (response) {
                console.log(response);
                swal(
                    'Success',
                    'Add new user address sucessfully',
                    'success'
                );
                location.reload();
            },
            error: function (error) {
                console.log(error);
                swal(
                    'Error!',
                    'The phone number has been already entered . please enter valid number',
                    'error'
                )
            }
        });
    });
});




$(document).ready(function () {
    $('#edit_adress').on('click', function () {
        var edit_adress = $('.edit_manage_addres').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/edit_manage_ajax',
            type: 'post',
            data: edit_adress,
            success: function (response) {
                console.log(response);
                swal(
                    'Success',
                    'Edit new user address sucessfully',
                    'success'
                );
                location.reload();
            },
            error: function (error) {
                console.log(error);
                swal(
                    'Error!',
                    'The phone number has been already entered . please enter valid number',
                    'error'
                )
            }
        });
    });
});





// ================= search word nav bar ==================

$("#searchwordsss").on("input", function () {
    let input = $(this).val();
    $('.ghh').hide();
    $.ajax({
        url: '/search', // Update with your route
        method: 'GET',
        data: {
            input: input
        },
        success: function (response) {
            if (response.trim() === "") {
                $("#search_group").html('<div class="no-product-message">No products found.</div>');
            } else {
                $("#search_group").html(response);
            }
        },
        error: function (err) {
            console.error(err);
        }
    });
});






// ==========================  add to cart ================



$(document).ready(function () {
    $('.add_new_cart_submit').on('click', function () {

        var product_main_id = $(this).closest("form").find('.product_main_id').val();
        var user_id = $('.user_id').val();
        var productqty = $(this).closest("form").find('.productqty').val();
        var prd_varient_id = $(this).closest("form").find('.prd_varient_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/add_cart',
            type: 'post',
            data: {
                product_main_id: product_main_id,
                user_id: user_id,
                productqty: productqty,
                prd_varient_id: prd_varient_id,
            },
            success: function (response) {
                if (response.success) {
                    // Update modal content with product details
                    $('#add_new_cart_submit .product_name').text(response.product_name);
                    $('#add_new_cart_submit .he_para').text(response.product_price);

                    if ($('#add_new_cart_submit').length > 0) {
                        $('#add_new_cart_submit').modal('show');
                        setTimeout(function () {
                            $('#add_new_cart_submit').modal('hide');
                        }, 10000);
                    } else {
                        console.error('Modal not found!');
                    }

                    var cartIcon = $('#cartIcon');
                    var currentItemCount = parseInt(cartIcon.find('.add_to_cart_num').text());
                    cartIcon.find('.add_to_cart_num').text(currentItemCount + 1);
                } else {
                    swal(
                        'Error!',
                        'This product is already in the cart',
                        'error'
                    );
                }
            },
        });
    });
});

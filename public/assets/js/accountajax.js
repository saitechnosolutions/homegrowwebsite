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
                    $('#add_new_cart_submit .he_para').html('₹' + response.offer_price + '<span class="he_para1">₹' + response.mrp_price + '</span>');

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

                    var cartIcon1 = $('#cartIcon1');
                    var currentItemCount1 = parseInt(cartIcon1.find('.add_to_cart_num').text());
                    cartIcon1.find('.add_to_cart_num').text(currentItemCount1 + 1);
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













// $(document).on("click", ".rems", function () {

//     Swal({
//         title: "Are you sure?",
//         text: "You want to delete this Product..!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 method: "GET",
//                 url: `cartremove/${id}`,
//                 success: function (data) {
//                     Swal({
//                         position: 'center',
//                         icon: 'success',
//                         title: 'Your Product has beed Deleted..',
//                         showConfirmButton: false,
//                         timer: 1500
//                     })

//                     location.reload();
//                 },
//                 error: function (data) {
//                     Swal(
//                         "Deleted!",
//                         "Your file has been deleted.",
//                         "success"
//                     );
//                 },
//             });
//         }
//     });
// });



$(document).on("click", ".removes_carts", function () {
    const id = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "You want to delete this Product..!",
        icon: "question",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
    })
    .then((willDelete) => {
        if (willDelete) {
            // User confirmed the deletion
            $.ajax({
                type: 'GET',
                url: '/cartremove/' + id,
                success: function (response) {
                    console.log(response);
                    swal(
                        'Success',
                        'Product deleted successfully',
                        'success'
                    );
                    location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                    swal(
                        'Error',
                        'Failed to delete the product',
                        'error'
                    );
                }
            });
        } else {
            swal.close();
        }
    });
});






$(document).on("click", ".removall_cart", function () {
    const id = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "You want to delete this all the cart products..!",
        icon: "question",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
    })
    .then((willDelete) => {
        if (willDelete) {
            // User confirmed the deletion
            $.ajax({
                type: 'GET',
                url: '/cartremove_all_cart/' + id,
                success: function (response) {
                    console.log(response);
                    swal(
                        'Success',
                        'Remove all Product successfully',
                        'success'
                    );
                    location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                    swal(
                        'Error',
                        'Failed to delete the product',
                        'error'
                    );
                }
            });
        } else {
            swal.close();
        }
    });
});






// =================================== add to wish list ================


$(document).ready(function () {
    $('.add_new_wishlist_submit').on('click', function () {

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
            url: '/add_wishlist',
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
                    $('#add_new_wishlist_submit .product_name').text(response.product_name);
                    $('#add_new_wishlist_submit .he_para').text(response.product_price);
                    $('#add_new_wishlist_submit .he_para').html('₹' + response.offer_price + '<span class="he_para1">₹' + response.mrp_price + '</span>');

                    if ($('#add_new_wishlist_submit').length > 0) {
                        $('#add_new_wishlist_submit').modal('show');
                        setTimeout(function () {
                            $('#add_new_wishlist_submit').modal('hide');
                        }, 10000);
                    } else {
                        console.error('Modal not found!');
                    }

                    var cartIcon = $('.wish_list_ic');
                    var currentItemCount = parseInt(cartIcon.find('.add_to_wishlist_num').text());
                    cartIcon.find('.add_to_wishlist_num').text(currentItemCount + 1);

                    var cartIcon1 = $('.wish_list_ic1');
                    var currentItemCount1 = parseInt(cartIcon1.find('.add_to_wishlist_num').text());
                    cartIcon1.find('.add_to_wishlist_num').text(currentItemCount1 + 1);
                } else {
                    swal(
                        'Error!',
                        'This product is already in the Wishlist',
                        'error'
                    );
                }
            },
        });
    });
});











$(document).on("click", ".removes_wishlist", function () {
    const id = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "You want to delete this product from wishlist..!",
        icon: "question",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: 'GET',
                url: '/wishlistremove/' + id,
                success: function (response) {
                    console.log(response);
                    swal(
                        'Success',
                        'wishlist Product removed in  successfully',
                        'success'
                    );
                    location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                    swal(
                        'Error',
                        'Failed to delete the product',
                        'error'
                    );
                }
            });
        } else {
            swal.close();
        }
    });
});


$(document).on("click", ".removall_wishlist", function () {
    const id = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "You want to delete all this product from wishlist..!",
        icon: "question",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
    })
    .then((willDelete) => {
        if (willDelete) {
            // User confirmed the deletion
            $.ajax({
                type: 'GET',
                url: '/wishlist_remove_all/' + id,
                success: function (response) {
                    console.log(response);
                    swal(
                        'Success',
                        'wishlist Product Remove successfully',
                        'success'
                    );
                    location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                    swal(
                        'Error',
                        'Failed to delete the product',
                        'error'
                    );
                }
            });
        } else {
            swal.close();
        }
    });
});













//    hotdeal ajax

// $(document).ready(function () {
//     // Listen for checkbox change in the 'filtercheck' class
//     $('.filtercheck').change(function () {
//         // Get values of all checked checkboxes
//         var checkedValues = $('.filtercheck:checked').map(function () {
//             return $(this).val();
//         }).toArray();

//         // Display the values in the console (you can modify this part)
//         console.log(checkedValues);
//     });
// });


$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.filtercheck').change(function () {
        
        // Get values of all checked checkboxes
        var checkedValues = $('.filtercheck:checked').map(function () {
            return $(this).val();
        }).toArray();
        console.log(typeof(checkedValues));

        $.ajax({
            type: 'Post',
            url: '/hotdeal',
            data: {
                option: checkedValues
            },
            success: function (response) {
                $('#productsContainer').html(response);
                // $('.er').hide()
            },
            error: function (error) {
                // $('#productsContainer').html(error);
            }
        });
    });
});

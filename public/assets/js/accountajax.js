$(document).ready(function() {
    $('#updateButton').on('click', function() {
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
            success: function(response) {
                console.log(response);
                swal(
                    'Success',
                    'Your User form has been Updated',
                    'success'
                );
            },
            error: function(error) {
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





$(document).ready(function() {
    $('#add_adress').on('click', function() {
        var add_aders = $('.add_usering').serialize();

        $.ajax({
            url: '/add_adress',
            type: 'post',
            data: add_aders,
            success: function(response) {
                console.log(response);
                swal(
                    'Success',
                    'Add new user address sucessfully',
                    'success'
                );
                location.reload();
            },
            error: function(error) {
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




$(document).ready(function(){
    $('#edit_adress').on('click', function(){
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
            success: function(response) {
                console.log(response);
                swal(
                    'Success',
                    'Edit new user address sucessfully',
                    'success'
                );
                location.reload();
            },
            error: function(error) {
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

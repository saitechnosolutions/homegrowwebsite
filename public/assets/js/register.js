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





$(document).on('click', '#register_btn', function(e) {
    swal(
        'Success',
        'Your form has been registerd',
        'success'
    )
});

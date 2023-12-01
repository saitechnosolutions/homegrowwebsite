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




// default address
// $(document).ready(function () {
//     $(document).on('click', '.make_as', function (e) {
//         swal(
//             'Success',
//             'Your form has been registerd',
//             'success'
//         )
//     });
// });



$(document).on('click', '#register_btn', function (e) {
    swal(
        'Success',
        'Your form has been registerd',
        'success'
    )
});



document.querySelector(".logins").addEventListener('click', function () {
    var toastMixin = Swal.mixin({
        toast: true,
        icon: 'success',
        title: 'General Title',
        animation: false,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    toastMixin.fire({
        animation: true,
        title: 'Signed in Successfully'
    });
});





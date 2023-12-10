$('#send-message').on("click", function() {
    checkusername();
    checkmessage();
    checkemail();
    checkphonenumber();
    checkselect();


    if (checkusername() == true && checkmessage() == true && checkphonenumber() == true && checkselect() ==
        true) {
        $('#send-message').attr('type', 'submit');
        $(document).on('click', '#send-message', function(e) {
			swal.fire(
				'Success',
				'You Mail has been send successfully',
				'success'
			)
		});
    } else {
        $('#send-message').attr('type', 'button');
    }


});


$(".name").on('input', function() {
    checkusername();
})
$(".email").on('input', function() {
    checkemail();
})
$(".products").on('input', function() {
    checkselect();
})
$(".phone").on('input', function() {
    checkphonenumber();
})
$(".comments").on('input', function() {
    checkmessage();
})

function checkusername() {
    let username = $('.name').val();
    var pattern = /^[a-zA-Z ]{4,}$/;

    if (username == '') {
        $("#message1").html("*Please fill the name");
        $("#message1").show();
        return false
    } else if (!pattern.test(username)) {
        $('#message1').html("*Please enter a valid name");
        $('#message1').show();
        return false
    } else {
        $('#message1').hide();
        return true
    }

}

function checkselect() {
    let username = $('.products').val();

    if (username == '') {
        $("#message5").html("*Please fill the name");
        $("#message5").show();
        return false
    } else {
        $('#message5').hide();
        return true
    }

}

function checkmessage() {


    let username = $('.comments').val();
    var pattern = /^[a-zA-Z ]{4,}$/;

    if (username == '') {

        $("#message4").hide();
        return false
    } else if (!pattern.test(username)) {
        $('#message4').html("*Please enter a valid Message");
        $('#message4').show();
        return false
    } else {
        $('#message4').hide();
        return true
    }

}

function checkemail() {
    let email = $(".email").val();
    var regex = /^([A-Za-z0-9_.])+\@([a-z])+\.([a-z])+$/;

    // list of email addresses to reject
    var blacklist = [
        "example@domain.com",
        "user@example.com",
        "test@domain.com",
        "email@domain.c",
        "email@domain.co"
    ];

    if (email == "") {
        $('#message2').html("*Please fill the email id");
        $('#message2').show();
        return false;
    } else if (!(regex.test(email))) {
        $('#message2').html("Enter a valid email id");
        $('#message2').show();
        return false;
    } else if (blacklist.includes(email)) {
        $('#message2').html("This email address is not allowed");
        $('#message2').show();
        return false;
    } else {
        $('#message2').hide();
        return true;
    }
}

function checkphonenumber() {
    let Phonenumber = $(".phone").val();
    var Pattern = /^(?!.*(\d)\1{9})[6-9]\d{9}$/;

    if (Phonenumber == "") {
        $('#message3').html("*Please fill the Phone number");
        $('#message3').show();
        return false;
    } else if (Phonenumber.length != 10) {
        $('#message3').html("*Please enter a 10-digit phone number");
        $('#message3').show();
        return false;
    } else if (!Pattern.test(Phonenumber)) {
        $('#message3').html("*Please enter a valid phone number");
        $('#message3').show();
        return false;
    } else {
        $('#message3').hide();
        return true;
    }
}

function checkPhoneNumberLength(input) {
    const value = input.value;
    if (value.length > 10) {
        input.value = value.slice(0, 10); // Truncate input to 10 digits
    }
}



function phone1(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
  }



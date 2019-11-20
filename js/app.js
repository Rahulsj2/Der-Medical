$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});


// function validateSignup() {
//     var username = document.getElementById("username");
//     var email = document.getElementById("email");
//     var password = document.getElementById("password");
//     var confirmPassword = document.getElementById("confirmPassword");
//     var valid = true;
//     removeMessage();
//     if(username.value.length == 0){
//         // username.className += " wrong-input";
//         username.nextElementSibling.innerHTML = "Username can't be blank"
//         valid = false;
//     }
//     if(email.value.length == 0){
//         // email.className += " wrong-input";
//         email.nextElementSibling.innerHTML = "Username can't be blank"
//         valid = false;
//     }
//     if(password.value.length < 8){
//         // password.className += " wrong-input";
//         password.nextElementSibling.innerHTML = "Passwords cannot be less than 8 characters"
//         valid = false;
//     }
//     if(password.value != confirmPassword.value){
//         // confirmPassword.className += " wrong-input";
//         confirmPassword.nextElementSibling.innerHTML = "Password does not match"
//         valid = false;
//     }

//     return valid;
//   } 


//   function removeMessage(){
//       var errorParagraph = document.querySelectorAll(".error");
//       [].forEach.call(errorParagraph, function(el){
//           el.innerHTML = "";
//       });
//   }



$(function() {

    $("#username_error").hide();
    $("#email_error").hide();
    $("#password_error").hide();
    $("#confirm_password_error").hide();

    var error_username = false;
    var error_email = false;
    var error_password = false;
    var error_confirm_password = false;

    $("#username").focusout(function() {
        check_username();
    });

    $("#email").focusout(function() {
        check_email();
    });

    $("#password").focusout(function() {
        check_password();
    });

    $("#confirmPassword").focusout(function() {
        check_confirm_password();
    });

    
    function check_username() {
        var username_length = $("#username").val().length;

        if ( username_length < 5 || username_length > 20){
            $("#username_error").html("Username should be between 5-20 characters");
            $("#username_error").show();
            error_username = true;
        } else{
            $("#username_error").hide();
        }
    }

    function check_email() {
        var pattern = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);

        if (pattern.test($("#email").val())) {
            $("#email_error").hide();
        } else{
            $("#email_error").html("Invalid email address");
            $("#email_error").show();
            error_email = true;
        }
    }

    function check_password() {
        var password_strength = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/);
        // var password_length = $("#password").val().length;

        if(password_strength.test($("#password").val())){
            $("#password_error").hide();
        } else{
            $("#password_error").html("Passwords must be 8 characters or longer, contain lowercase, uppercase, numeric and special characters");
            $("#password_error").show();
            error_password = true;
        }
    }

    function check_confirm_password() {
        var password = $("#password").val();
        var confirm_password = $("#confirmPassword").val();

        if (password != confirm_password){
            $("#confirm_password_error").html("Passwords do not match");
            $("#confirm_password_error").show();
            error_confirm_password = true;
        } else{
            $("#confirm_password_error").hide();
        }
    }

    $("#signupForm").submit(function() {
        error_username = false;
        error_email = false;
        error_password = false;
        error_confirm_password = false;

        check_username();
        check_email();
        check_password();
        check_confirm_password();

        if (error_username == false && error_email == false && error_password == false && error_confirm_password == false){
            return true;
        } else{
            return false;
        }

    });

    $("#loginForm").submit(function() {
        // error_username = false;
        error_email = false;
        error_password = false;
        // error_confirm_password = false;

        // check_username();
        check_email();
        check_password();
        // check_confirm_password();

        if (error_email == false && error_password == false){
            return true;
        } else{
            return false;
        }

    });


});
// ADMIN LOGIN VALIDATION
var form1 = document.querySelector('.needs-validation-admin-login');
form1.addEventListener('submit', function(event) {
    if (form1.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form1.classList.add('was-validated');
})


// DEALER LOGIN VALIDATION
var form2 = document.querySelector('.needs-validation-dealer-login');
form2.addEventListener('submit', function(event) {
    if (form2.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form2.classList.add('was-validated');
})


// CUSTOMER LOGIN VALIDATION
var form3 = document.querySelector('.needs-validation-customer-login');
form3.addEventListener('submit', function(event) {
    if (form3.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form3.classList.add('was-validated');
})


// DEALER REGISTER VALIDATION
var form4 = document.querySelector('.needs-validation-dealer-register');
form4.addEventListener('submit', function(event) {
    if (form4.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form4.classList.add('was-validated');
})


// CUSTOMER REGISTER VALIDATION
var form5 = document.querySelector('.needs-validation-customer-register');
form5.addEventListener('submit', function(event) {
    if (form5.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form5.classList.add('was-validated');
})


//$(document).ready(function() {
//    $("#dealer_login_form button").on('click', function(){
//        var ans = $("#password_dealer_login").val();
//        alert(ans);
//    });
//});
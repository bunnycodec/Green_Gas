$(document).ready(function() {
    
    // Page Navigation in Customer    
    $("#update_profile").show();
    $("#booking").hide();
    $("#home").hide();
    $("#faqs").hide();
    $("#contact_us").hide();

    $("#update_profile_nav").on('click', function() {
        $("#update_profile").show();
        $("#booking").hide();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });

    $("#booking_nav").on('click', function() {
        $("#update_profile").hide();
        $("#booking").show();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
    
    $("#home_nav").on('click', function() {
        $("#update_profile").hide();
        $("#booking").hide();
        $("#home").show();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
    
    $("#faqs_nav").on('click', function() {
        $("#update_profile").hide();
        $("#booking").hide();
        $("#home").hide();
        $("#faqs").show();
        $("#contact_us").hide();
    });
    
    $("#contact_us_nav").on('click', function() {
        $("#update_profile").hide();
        $("#booking").hide();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").show();
    });

});

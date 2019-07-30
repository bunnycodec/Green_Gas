$(document).ready(function() {
    
    // Page Navigation in Dealer    
    $("#update_profile").show();
    $("#requests").hide();
    $("#cylinder").hide();
    $("#home").hide();
    $("#faqs").hide();
    $("#contact_us").hide();

    $("#update_profile_nav").on('click', function() {
        $("#update_profile").show();
        $("#requests").hide();
        $("#cylinder").hide();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });

    $("#requests_nav").on('click', function() {
        $("#update_profile").hide();
        $("#requests").show();
        $("#cylinder").hide();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
    
    $("#home_nav").on('click', function() {
        $("#update_profile").hide();
        $("#requests").hide();
        $("#home").show();
        $("#cylinder").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
    
    $("#faqs_nav").on('click', function() {
        $("#update_profile").hide();
        $("#requests").hide();
        $("#cylinder").hide();
        $("#home").hide();
        $("#faqs").show();
        $("#contact_us").hide();
    });
    
    $("#contact_us_nav").on('click', function() {
        $("#update_profile").hide();
        $("#requests").hide();
        $("#cylinder").hide();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").show();
    });
    
    $("#cylinder_nav").on('click', function() {
        $("#update_profile").hide();
        $("#requests").hide();
        $("#cylinder").show();
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
       
});

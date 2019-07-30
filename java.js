$(document).ready(function() {
    
    $('#admin_login_nav').on('click', function() {
        $('#admin_login_form').show();
        $('.avatar_cross').on('click', function(){
            $('#admin_login_form').hide();
        });
      });
    
    $('#dealer_login_nav').on('click', function() {
        $('#dealer_login_form').show();
        $('.avatar_cross').on('click', function(){
            $('#dealer_login_form').hide();
        });
      });
    
    $('#customer_login_nav').on('click', function() {
        $('#customer_login_form').show();
        $('.avatar_cross').on('click', function(){
            $('#customer_login_form').hide();
        });
    });
    
    $('#customer_register_nav').on('click', function() {
        $('#customer_register_form').show();
        $('.avatar_cross').on('click', function(){
            $('#customer_register_form').hide();
        });
    });
    
    $('#dealer_register_nav').on('click', function() {
        $('#dealer_register_form').show();
        $('.avatar_cross').on('click', function(){
            $('#dealer_register_form').hide();
        });
    });
    
    // Navigation Show 
    $("#home").show();
    $("#faqs").hide();
    $("#contact_us").hide();
    
    $("#home_nav").on('click', function() {
        $("#home").show();
        $("#faqs").hide();
        $("#contact_us").hide();
    });
    
    $("#faqs_nav").on('click', function() {
        $("#home").hide();
        $("#faqs").show();
        $("#contact_us").hide();
    });
    
    $("#contact_us_nav").on('click', function() {
        $("#home").hide();
        $("#faqs").hide();
        $("#contact_us").show();
    });

});

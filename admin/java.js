$(document).ready(function() {

    // Page Navigation in Customer
    
    $("#update_profile").show();
    $("#customer").hide();
    $("#dealer").hide();
    $("#dealer_requests").hide();

    $("#update_profile_nav").on('click', function() {
        $("#update_profile").show();
        $("#customer").hide();
        $("#dealer").hide();
        $("#dealer_requests").hide();
    });

    $("#customer_nav").on('click', function() {
        $("#update_profile").hide();
        $("#customer").show();
        $("#dealer").hide();
        $("#dealer_requests").hide();
    });
    
    $("#dealer_nav").on('click', function() {
        $("#update_profile").hide();
        $("#customer").hide();
        $("#dealer").show();
        $("#dealer_requests").hide();
    });
    
    $("#dealer_requests_nav").on('click', function() {
        $("#update_profile").hide();
        $("#customer").hide();
        $("#dealer").hide();
        $("#dealer_requests").show();
    });

});

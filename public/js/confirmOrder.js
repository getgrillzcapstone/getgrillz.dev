// TOGGLES VISIBILITY OF PASSWORD/CONFIRMPASSWORD ON CONFIRM ORDER PAGE
$("#continueButtonConfirmOrder").click(function(){
    if($('#passwordConfirmOrder').is(':hidden')) {
        $("#passwordConfirmOrder").toggle();
        $("#confirmPasswordConfirmOrder").toggle();
    } else {
        $('html, body').animate({
            scrollTop: $("#deliveryRow").offset().top
        }, 1000);
    }
});

$("#continueButtonLogin").click(function(){
    if($('#passwordLogin').is(':hidden')) {
        $("#passwordLogin").toggle();
        $("#confirmPasswordLogin").toggle();
    } else {
        $('#loginModal').modal('toggle');
    }
});

$("#chevron-downConfirmOrder").click(function(){
    $('html, body').animate({
        scrollTop: $("#yourOrderDiv").offset().top
    }, 1000);
});

$("#confirmPayment").click(function(){
    window.location.href = "/thankyou";
})

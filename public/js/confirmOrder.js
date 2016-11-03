$(document).ready(function(){
    // TOGGLES VISIBILITY OF PASSWORD/CONFIRMPASSWORD ON CONFIRM ORDER PAGE
    $("#continueButtonConfirmOrder").click(function(){
        event.preventDefault();

        // required inputs for ajax
        var token = $("#token").val();
        var url = $("#loginConfirmOrder").attr('action');
        var type = $("#loginConfirmOrder").attr('method');

        // data to be passed
        var email = $("#emailLoginConfirmOrder").val();
        var password = $("#passwordLoginConfirmOrder").val();


        $.ajax({
            url: url,
            type: type,
            data: {
                email:  email,
                password: password,
                _token:  token
            }
        }).done(function(){
            location.reload();
        }).fail(function(){
            alert('login failed');
        });
    });

    $("#chevron-downConfirmOrder").click(function(){
        $('html, body').animate({
            scrollTop: $("#yourOrderDiv").offset().top
        }, 1000);
    });

    $("#confirmPayment").click(function(){
        window.location.href = "/thankyou";
    })

}); //This is for the document.ready function at the top of the page

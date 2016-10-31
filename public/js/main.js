$(document).ready(function() {
    $(".quantityField").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#continueButtonLogin').click(function(event) {
        event.preventDefault();
        // required inputs for ajax
        var token = 'dumb';
        var url = $("#loginmod").attr('action');
        var type = $("#loginmod").attr('action');

        // data to be passed
        // var email =
        // var password =
        // var confirm_password =
        
        console.log(token,url,type);
        
        $.ajax({
            url: "/users",
            type: "GET",
            data: {
                email:  10,
                password: 20,
                confirm_password: 20,
                _token:  80
            }
        });
    alert('Button with id "continueButtonLogin" was clicked');
            });
    

});

// FOR LOGIN ON NAVBAR AND CONFIRM ORDER PAGE
// $("#continueButtonLogin").click(function(){
//     if($('#passwordLogin').is(':hidden')) {
//         $("#passwordLogin").toggle();
//         $("#confirmPasswordLogin").toggle();
//     } else {
//         $('#loginModal').modal('toggle');
//     }
// });



$(function() {
    $('input[name="selectingADay"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        applyClass: "customCalenderButton",
    });
});

$(function() {
    $('input[name="selectingMultiple"]').daterangepicker({
        showDropdowns: true,
         "opens": "center",
         applyClass: "customCalenderButton",
    });
});

// TOGGLES THE VIEW OF THAT CALENDER DIV WHEN YOU CLIKC "Looking For A Specific Day"
$("#pickADateButton").click(function(){
    $("#calenderDiv").toggle();
    $("#pickADateButton").addClass("active");
    $("#justBrowsingButton").removeClass("active");
    $('html, body').animate({
        scrollTop: $("#calenderDiv").offset().top
    }, 1000);
});

$("#selectingADayButton").click(function(){
    if($('.selectingMultipleDiv').is(':visible')) {
        $(".selectingMultipleDiv").toggle();
    }

    if($('.selectingADayDiv').is(':hidden')) {
        $(".selectingADayDiv").toggle();
    }

    $("#selectingADayButton").addClass("active");
    $("#selectingMultipleButton").removeClass("active");
});

$("#selectingMultipleButton").click(function(){
    if($('.selectingADayDiv').is(':visible')) {
        $(".selectingADayDiv").toggle();
    }

    if($('.selectingMultipleDiv').is(':hidden')) {
        $(".selectingMultipleDiv").toggle();
    }

    $("#selectingMultipleButton").addClass("active");
    $("#selectingADayButton").removeClass("active");
});

$("#justBrowsingButton").click(function(){
    if($('#calenderDiv').is(':visible')) {
        $("#calenderDiv").toggle();
    }
    $("#justBrowsingButton").addClass("active");
    $("#pickADateButton").removeClass("active");
});

// TOGGLES THE ACTIVE CLASS BETWEEN CHARCOAL AND PROPANE BUTTONS
$("#charcoalButton").click(function(){
    $("#charcoalButton").addClass("active");
    $("#propaneButton").removeClass("active");
});

$("#propaneButton").click(function(){
    $("#propaneButton").addClass("active");
    $("#charcoalButton").removeClass("active");
});

// TOGGLES THE ACTIVE CLASS BETWEEN SMALL MEDIUM AND LARGE BUTTONS
$("#smallSizeButton").click(function(){
    $("#smallSizeButton").addClass("active");
    $("#mediumSizeButton").removeClass("active");
    $("#largeSizeButton").removeClass("active");
    $("#imNotSureButton").removeClass("active");
});

$("#mediumSizeButton").click(function(){
    $("#mediumSizeButton").addClass("active");
    $("#smallSizeButton").removeClass("active");
    $("#largeSizeButton").removeClass("active");
    $("#imNotSureButton").removeClass("active");
});

$("#largeSizeButton").click(function(){
    $("#largeSizeButton").addClass("active");
    $("#smallSizeButton").removeClass("active");
    $("#mediumSizeButton").removeClass("active");
    $("#imNotSureButton").removeClass("active");
});

$("#imNotSureButton").click(function(){
    $("#imNotSureButton").addClass("active");
    $("#smallSizeButton").removeClass("active");
    $("#largeSizeButton").removeClass("active");
    $("#mediumSizeButton").removeClass("active");
});

$(document).ready(function() {
    $("#quantityField").keydown(function (e) {
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
});

// SCROLLS DOWN WHEN CLICKED
$("#getStartedButton").click(function(){
        $('html, body').animate({
            scrollTop: $("#datePickRow").offset().top
        }, 1000);
});

$("#getStartedButtonBuyPage").click(function(){
        $('html, body').animate({
            scrollTop: $("#whatTypeOfGrillRow").offset().top
        }, 1000);
});

$("#justBrowsingButton").click(function(){
        $('html, body').animate({
            scrollTop: $("#whatTypeOfGrillRow").offset().top
        }, 1000);
});

$("#charcoalButton").click(function(){
        $('html, body').animate({
            scrollTop: $("#whatSizeGrillRow").offset().top
        }, 1000);
});

$("#propaneButton").click(function(){
        $('html, body').animate({
            scrollTop: $("#whatSizeGrillRow").offset().top
        }, 1000);
});

// TOGGLES THE VIEW OF THAT CALENDER DIV WHEN YOU CLIKC "Looking For A Specific Day"
$("#grillSuppliesButton").click(function(){
    if($('#partySuppliesChecklist').is(':visible')) {
        $("#partySuppliesChecklist").toggle();
    }
    $("#grillSuppliesChecklist").toggle();
    if($('#grillSuppliesButton').hasClass("active")) {
        $("#grillSuppliesButton").removeClass("active");
    } else {
        $("#grillSuppliesButton").addClass("active");
        $("#partySuppliesButton").removeClass("active");
    }
});

$("#partySuppliesButton").click(function(){
    if($('#grillSuppliesChecklist').is(':visible')) {
        $("#grillSuppliesChecklist").toggle();
    }
    $("#partySuppliesChecklist").toggle();
    if($('#partySuppliesButton').hasClass("active")) {
        $("#partySuppliesButton").removeClass("active");
    } else {
        $("#partySuppliesButton").addClass("active");
        $("#grillSuppliesButton").removeClass("active");
    }
});

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

// FOR FAQ ANSWERS AND ANIMATION FOR +
$("#faqQuestion1").click(function(){
    $("#faqAnswer1").toggle();
})

$("#faqQuestion2").click(function(){
    $("#faqAnswer2").toggle();
})

$("#faqQuestion3").click(function(){
    $("#faqAnswer3").toggle();
})

$("#faqQuestion4").click(function(){
    $("#faqAnswer4").toggle();
})

$("#confirmPayment").click(function(){
     window.location.href = '/thankyou';
})

$( document ).ready(function() {
  init();
});

function init(){

  var milisecs = 2000;

  $.each($('.accordion'), function(i, obj){

    var delayMS = milisecs - i*180;

    TweenLite.to(obj,0.1,{opacity:1, delay: delayMS/1000, ease:Linear.easeOut});
    TweenLite.from(obj,1.5,{top:0, delay: delayMS/1000, ease:Bounce.easeOut});
  });
}

function openClose(){

  $('.burger').click(function(){

			$('.accordion').toggleClass('open').toggleClass('closed');
	});

  $('.accordion').attr("style","").css({
    "opacity":"1",
    "-webkit-transition": "top 0.5s ease-out, opacity 0.3s ease-out",
    "-moz-transition": "top 0.5s ease-out, opacity 0.3s ease-out",
    "transition": "top 0.5s ease-out, opacity 0.3s ease-out"
  });
}

$(document).ready(function() {
    setTimeout(function() {
      $('#thankyouModal').modal('show');
    }, 3500);
    // setTimeout(function() {
    //     window.location.href = '/';
    // }, 6000);
});

// DATERANGEPICKER LIBRARY CODE
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

// SETS pickADateButton TO ACTIVE AND SCROLLS DOWN TO calenderDiv. THIS IS FOR PICK A DATE OR JUST BROWSING SECTION
$("#pickADateButton").click(function(){
    $("#calenderDiv").toggle();
    $("#pickADateButton").addClass("active");
    $("#justBrowsingButton").removeClass("active");
    $('html, body').animate({
        scrollTop: $("#calenderDiv").offset().top
    }, 1000);
});

// SETS justBrowsingButton TO ACTIVE AND HIDES OR SHOWS calenderDiv BASED ON IF IT'S VISIBLE OR NOT.
// THIS IS FOR PICK A DATE OR JUST BROWSING SECTION
$("#justBrowsingButton").click(function(){
    if($('#calenderDiv').is(':visible')) {
        $("#calenderDiv").toggle();
    }
    $("#justBrowsingButton").addClass("active");
    $("#pickADateButton").removeClass("active");
});

// SETS selectingADayButton TO ACTIVE AND EITHER HIDES OR SHOWS selectingADayDiv BASED ON IF IT'S VISIBLE OR NOT.
// THIS IS FOR PICK A DATE OR JUST BROWSING SECTION
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

// SETS selectingMultipleButton TO ACTIVE AND EITHER HIDES OR SHOWS selectingADayDiv BASED ON IF IT'S VISIBLE OR NOT.
// THIS SHOWS THE CALENDER THAT LETS YOU PICK MULTIPLE DAYS
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

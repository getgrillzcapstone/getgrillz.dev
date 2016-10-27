//----------variables----------//

var day = "";
var month = "";
var year = "";
var currentDate = "";
var monthStartDay = "";

var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayTextArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//----------functions----------//

function getMonthInfo(year, month) {

  //use current month to find number of days in month
  //i dont know why i have to add 1 to month
  var startDate = new Date(year, month + 1, 0);
  var monthLength = startDate.getDate();

  var startDate = new Date(year, month, 1);
  var monthStartDay = startDate.getDay();

  return [monthLength, monthStartDay];

}

function drawCal(monthInfo) {

  var daysInMonth = monthInfo[0];
  var monthStartDays = monthInfo[1];

  //clear cal tbody
  $("#cal").empty();
  $("#cal").append("<tr><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

  //create empty row, append to to tbody
  var $rowOut = $("<tr></tr>");
  $("#cal").append($rowOut);

  //shift first row by month start date
  for (var i = 1; i <= monthStartDays; i++) {
    var $day = "<td></td>";
    $("#cal tr:last").append($day);
  }

  //for each day, append a td to the row
  for (var i = 1; i <= daysInMonth; i++) {
    var $day = "<td><a>" + (i) + "</a></td>";
    $("#cal tr:last").append($day);

    //if day 7 (w/shift), append row contaning 7 days to tbody and clear row
    if ((i + monthStartDays) % 7 == 0 & i != 0) {
      $("#cal").append($rowOut);
      $rowOut = "<tr></tr>";
      $("#cal").append($rowOut);
    }
  }
}

//----------wiring----------//

$(".button_left").click(function() {

  month--;

  if (month < 0) {
    year--;
    month = 11;
  }

  //left button click
  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

//right button click
$(".button_right").click(function() {

  month++;

  if (month > 11) {
    year++;
    month = 0;
  }

  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

$("#cal").on("click","a",function(e) {

  e.preventDefault();
  //$(this).parent().addClass("circle");
  var outputDate = monthTextArray[month] + " " + $(this).html() +", " + year;
  console.log(outputDate);
  $("#outputText").text(outputDate);

});

//----------run----------//

//get current month and year
currentDate = new Date();
year = currentDate.getFullYear();
month = currentDate.getMonth();

//get text month name from month number and write to span
$(".cal_head span").text(monthTextArray[month] + " " + year);

//inital calander draw based on current month
drawCal(getMonthInfo(year, month));



// TOGGLES THE VIEW OF THAT CALENDER DIV WHEN YOU CLIKC "Looking For A Specific Day"
$("#pickADateButton").click(function(){
    $("#calenderDiv").toggle();
    $("#pickADateButton").addClass("active");
    $("#justBrowsingButton").removeClass("active");
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

//TOGGLES VISIBILITY OF PASSWORD/CONFIRMPASSWORD ON CONFIRM ORDER PAGE
$("#continueButton").click(function(){
    if($('#password').is(':hidden')) {
        $("#password").toggle();
        $("#confirmPassword").toggle();
    }
});

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

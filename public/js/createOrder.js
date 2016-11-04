$(document).ready(function(){
    // SCROLLS DOWN WHEN CLICKED
    $("#getStartedButton").click(function(){
            $('.pickADateContainer').slideToggle()
            $('html, body').animate({
                scrollTop: $("#datePickRow").offset().top
            }, 1000);
    });

    $("#getStartedButtonBuy").click(function(){
            $('.whatTypeOfGrillDiv').slideToggle()
            $('html, body').animate({
                scrollTop: $("#whatTypeOfGrillRow").offset().top
            }, 1000);
    });

    $("#justBrowsingButton").click(function(){
            if (!$('.whatTypeOfGrillDiv').is(":visible")) {
                $('.whatTypeOfGrillDiv').slideToggle()
            }
            $('html, body').animate({
                scrollTop: $("#whatTypeOfGrillRow").offset().top
            }, 1000);
    });

    $("#charcoalButton").click(function(){
            $("#charcoalButton").addClass("active");
            $("#propaneButton").removeClass("active");
            if (!$('.sizeButtonDiv').is(":visible")) {
                $('.sizeButtonDiv').slideToggle()
            }
            $('html, body').animate({
                scrollTop: $("#whatSizeGrillRow").offset().top
            }, 1000);
    });

    $("#propaneButton").click(function(){
            $("#propaneButton").addClass("active");
            $("#charcoalButton").removeClass("active");
            if (!$('.sizeButtonDiv').is(":visible")) {
                $('.sizeButtonDiv').slideToggle()
            }
            $('html, body').animate({
                scrollTop: $("#whatSizeGrillRow").offset().top
            }, 1000);
    });

    // TOGGLES THE ACTIVE CLASS BETWEEN CHOOSE A SPECIFIC DAY AND JUST BROWSING
    $("#selectingADayButton").click(function(){
        $('.chevronCalender1').slideToggle()
        if ($('.chevronCalender2').is(":visible")) {
            $('.chevronCalender2').slideToggle()
        }
        if (!$('.whatTypeOfGrillDiv').is(":visible")) {
            $('.whatTypeOfGrillDiv').slideToggle()
        }
    });

    $("#selectingMultipleButton").click(function(){
        $('.chevronCalender2').slideToggle()
        if ($('.chevronCalender1').is(":visible")) {
            $('.chevronCalender1').slideToggle()
        }
        if (!$('.whatTypeOfGrillDiv').is(":visible")) {
            $('.whatTypeOfGrillDiv').slideToggle()
        }
    });

    $("#chevronCalender1").click(function(){
        $('html, body').animate({
            scrollTop: $(".whatTypeOfGrillDiv").offset().top
        }, 1000);
    });

    $("#chevronCalender2").click(function(){
        $('html, body').animate({
            scrollTop: $(".whatTypeOfGrillDiv").offset().top
        }, 1000);
    });

    // TOGGLES THE ACTIVE CLASS BETWEEN SMALL MEDIUM AND LARGE BUTTONS
    // $("#smallSizeButton").click(function(){
    //     $("#smallSizeButton").addClass("active");
    //     $("#mediumSizeButton").removeClass("active");
    //     $("#largeSizeButton").removeClass("active");
    //     $("#imNotSureButton").removeClass("active");
    // });
    //
    // $("#mediumSizeButton").click(function(){
    //     $("#mediumSizeButton").addClass("active");
    //     $("#smallSizeButton").removeClass("active");
    //     $("#largeSizeButton").removeClass("active");
    //     $("#imNotSureButton").removeClass("active");
    // });
    //
    // $("#largeSizeButton").click(function(){
    //     $("#largeSizeButton").addClass("active");
    //     $("#smallSizeButton").removeClass("active");
    //     $("#mediumSizeButton").removeClass("active");
    //     $("#imNotSureButton").removeClass("active");
    // });
    //
    // $("#imNotSureButton").click(function(){
    //     $("#imNotSureButton").addClass("active");
    //     $("#smallSizeButton").removeClass("active");
    //     $("#largeSizeButton").removeClass("active");
    //     $("#mediumSizeButton").removeClass("active");
    // });

}); //This is for the document.ready function at the top of the page.

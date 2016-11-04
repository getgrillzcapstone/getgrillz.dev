$(document).ready(function(){
    $("#grillSuppliesButton").click(function(){
        if($(".partySuppliesDiv").is(':visible')) {
            $(".partySuppliesDiv").slideToggle();
        }
        $(".grillSuppliesDiv").slideToggle();
        if($("#grillSuppliesButton").hasClass("active")) {
            $("#grillSuppliesButton").removeClass("active");
        } else {
            $("#grillSuppliesButton").addClass("active");
            $("#partySuppliesButton").removeClass("active");
        }
    });

    $("#partySuppliesButton").click(function(){
        if($(".grillSuppliesDiv").is(':visible')) {
            $(".grillSuppliesDiv").slideToggle();
        }
        $(".partySuppliesDiv").slideToggle();
        if($("#partySuppliesButton").hasClass("active")) {
            $("#partySuppliesButton").removeClass("active");
        } else {
            $("#partySuppliesButton").addClass("active");
            $("#grillSuppliesButton").removeClass("active");
        }
    });

    

}); //This is for the document.ready function at the top of the page.

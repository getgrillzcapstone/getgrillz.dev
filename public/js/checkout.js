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

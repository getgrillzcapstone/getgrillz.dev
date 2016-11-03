$(document).ready(function(){
    $("#charcoalButton").click(function(){
        $("#qta_field_fuel").val($(this).attr('value'));
    })

    $("#propaneButton").click(function(){
        $("#qta_field_fuel").val($(this).attr('value'));
    })

    $("#smallSizeButton").click(function(){
        $("#qta_field_size").val($(this).attr('value'));
        var link = ('/items?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
        console.log(link);
        function relocation () {
        	window.location.href = link;
        }
    	window.setTimeout(relocation, 500);
    	});



    $("#mediumSizeButton").click(function(){
        $("#qta_field_size").val($(this).attr('value'));
        var link = ('/items?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
        console.log(link);
        function relocation () {
        	window.location.href = link;
        }
    	window.setTimeout(relocation, 500);
    	});

    $("#largeSizeButton").click(function(){
        $("#qta_field_size").val($(this).attr('value'));
        var link = ('/items?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
        console.log(link);
        function relocation () {
        	window.location.href = link;
        }
    	window.setTimeout(relocation, 500);
    	});

    $("#imNotSureButton").click(function(){
        $("#qta_field_size").val($(this).attr('value'));
        var link = ('/items?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
        console.log(link);
        function relocation () {
        	window.location.href = link;
        }
    	window.setTimeout(relocation, 500);
    	});

}); //This is for the document.ready function at the top of the page

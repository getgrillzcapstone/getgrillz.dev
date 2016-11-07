$(document).ready(function(){
    $("#propaneButton").click(function(){
        $("#qta_field_fuel_0").val($(this).attr('value'));
    })

    $("#charcoalButton").click(function(){
        $("#qta_field_fuel_1").val($(this).attr('value'));

    })


 //    $("#smallSizeButton").click(function(){
 //        $("#qta_field_size").val($(this).attr('value'));
 //        var link = ('/saveSelections?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
 //        console.log(link);
 //        function relocation () {
 //        	window.location.href = link;
 //        }
 //    	window.setTimeout(relocation, 500);
	// });

    $("#smallSizeButton").click(function(e){
        e.preventDefault();
        $("#qta_field_size_0").val($(this).attr('value'));
        $("#itemsform").submit();
    });

    $("#mediumSizeButton").click(function(e){
        e.preventDefault();
        $("#qta_field_size_1").val($(this).attr('value'));
        $("#itemsform").submit();
    });

    $("#largeSizeButton").click(function(e){
        e.preventDefault();
        $("#qta_field_size_2").val($(this).attr('value'));
        $("#itemsform").submit();
    });


    // $("#mediumSizeButton").click(function(){
    //     $("#qta_field_size").val($(this).attr('value'));
    //     var link = ('/saveSelections?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
    //     console.log(link);
    //     function relocation () {
    //     	window.location.href = link;
    //     }
    // 	window.setTimeout(relocation, 500);
    // 	});

    // $("#largeSizeButton").click(function(){
    //     $("#qta_field_size").val($(this).attr('value'));
    //     var link = ('/saveSelections?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
    //     console.log(link);
    //     function relocation () {
    //     	window.location.href = link;
    //     }
    // 	window.setTimeout(relocation, 500);
    // 	});

    // $("#imNotSureButton").click(function(){
    //     $("#qta_field_size").val($(this).attr('value'));
    //     var link = ('/saveSelections?fuel=' + $("#qta_field_fuel").val() + "&size=" + $("#qta_field_size").val());
    //     console.log(link);
    //     function relocation () {
    //     	window.location.href = link;
    //     }
    // 	window.setTimeout(relocation, 500);
    // 	});

}); //This is for the document.ready function at the top of the page.

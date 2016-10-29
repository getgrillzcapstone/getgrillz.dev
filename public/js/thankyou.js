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

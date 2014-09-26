function click_through(m){
    for(x=0; x<4; x++){
    if(document.getElementById(x).style.display != "none"){
    	break;
    }
    }

	var y = (x+m)%4;

	if(y<0){
		y=3;
	}


for(z=0; z<4; z++){

    var s=z+4;

    if(z===y){
    	document.getElementById(z).style.display = "inline";
        document.getElementById(s).style.backgroundColor = "gray";
    }else{
    	document.getElementById(z).style.display = "none";
        document.getElementById(s).style.backgroundColor = "#ddd7d7";
    }
    } 

	}

jQuery(document).ready(function($) {

 $('#home .fa-chevron-right').click(function() {
     click_through(1);
 });

 $('#home .fa-chevron-left').click(function() {
     click_through(-1);
 });

$('.home-menu').mouseover(function() {
$('.home-menu-bar').show("slide", {direction: "right"}, 500);
});

$('.home-menu-bar').mouseleave(function() {
$('.home-menu-bar').hide("slide", {direction: "right"}, 500);
});

  $('.home-menu').click(function() {

    if($('.home-menu-bar').is(':visible')){
     $('.home-menu-bar').hide("slide", {direction: "right"}, 500);
    // $('.home-menu-bar').slideUp('fast');
    }else {
        $('.home-menu-bar').show("slide", {direction: "right"}, 500);
     // $('.home-menu-bar').slideDown('fast');
    }

 });

}); 
 
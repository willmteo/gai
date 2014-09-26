
/*
function about_click_through(m){
    for(var x=0; x<4; x++){
    if(document.getElementById(x).style.display != "none"){
      break;
    }
    }

  var y = (x+m)%4;

  alert(y);
  if(y<0){
    y=3;
  }

alert(y);

for(z=0; z<4; z++){

    var s=z+4;

    if(z===y){
      alert("number is "z);
      document.getElementById(z).style.display = "inline";
      //  document.getElementById(s).style.backgroundColor = "gray";
    }else{
      alert("number is "z);
      document.getElementById(z).style.display = "none";
      //  document.getElementById(s).style.backgroundColor = "#ddd7d7";
    }
    } 

  }  */

 jQuery(document).ready(function($) {

 //about page js
  $('div .about-left-chevron').click(function() {
for(var x=1; x<5; x++){
 	if($("#about .block-5-slider-"+x).css("display")==="block"|"inline"){
  var blockId= $('#about .block-5-slider-'+x).attr('id');
 		if(blockId==="zero"){
 	$("#about div#zero").hide();
 	$("#about div#three").show();
 	break;
 }
 else if(blockId==="one"){
 	 $(" div.block-4-top td#twenty-14").css("font-size","25px");
    $(" div.block-4-bottom #twenty-14").css({"width":"15px","height":"15px","border-radius":"7.5px"});
        $(" div.block-4-top td#twenty-12").css("font-size","35px");
    $(" div.block-4-bottom #twenty-12").css({"width":"25px","height":"25px","border-radius":"12.5px"});
 	$("#about div#one").hide();
 	$("#about div#zero").show();
 	break;
 } 
 else if(blockId==="two"){
 	$("#about div#two").hide();
 	$("#about div#one").show();
 	break;
 }

else if(blockId==="three"){
	$(" div.block-4-top td#twenty-12").css("font-size","25px");
    $(" div.block-4-bottom #twenty-12").css({"width":"15px","height":"15px","border-radius":"7.5px"});
        $(" div.block-4-top td#twenty-14").css("font-size","35px");
    $(" div.block-4-bottom #twenty-14").css({"width":"25px","height":"25px","border-radius":"12.5px"});
 	$("#about div#three").hide();
 	$("#about div#two").show();
 	break;
 }
 }
}

 });

 $('div .about-right-chevron').click(function() {

for(var x=1; x<5; x++){
 	if($("#about .block-5-slider-"+x).css("display")==="block"|"inline"){
  var blockId= $('#about .block-5-slider-'+x).attr('id');
 		if(blockId==="zero"){
 	$("#about div#zero").hide();
 	$("#about div#one").show();
 	break;
 }
 else if(blockId==="one"){
 	 $(" div.block-4-top td#twenty-12").css("font-size","25px");
    $(" div.block-4-bottom #twenty-12").css({"width":"15px","height":"15px","border-radius":"7.5px"});
        $(" div.block-4-top td#twenty-14").css("font-size","35px");
    $(" div.block-4-bottom #twenty-14").css({"width":"25px","height":"25px","border-radius":"12.5px"});
 	$("#about div#one").hide();
 	$("#about div#two").show();
 	break;
 } 
 else if(blockId==="two"){
 	$("#about div#two").hide();
 	$("#about div#three").show();
 	break;
 }

else if(blockId==="three"){
	 $(" div.block-4-top td#twenty-14").css("font-size","25px");
    $(" div.block-4-bottom #twenty-14").css({"width":"15px","height":"15px","border-radius":"7.5px"});
        $(" div.block-4-top td#twenty-12").css("font-size","35px");
    $(" div.block-4-bottom #twenty-12").css({"width":"25px","height":"25px","border-radius":"12.5px"});
 	$("#about div#three").hide();
 	$("#about div#zero").show();
 	break;
 }
 }
}

 });

 $('#about .about-block-1 .twenty-14').click(function() {
 	$('#about .about-block-1 .twenty-13').css({'backgroundColor':'white','color':'#757575'});
 	$('#about .about-block-1 .twenty-12').css({'backgroundColor':'white','color':'#757575'});
    $(this).css({'backgroundColor':'#757575','color':'white'});
 	$('.students-number').replaceWith('<div class="students-number">'+statsData['2014']['students']+'</div>');
 	$('.nonprofit-number').replaceWith('<div class="nonprofit-number">'+statsData['2014']['nonprofits']+'</div>');
 	$('.published-number').replaceWith('<div class="published-number">'+statsData['2014']['published']+'</div>');
 });

  $('#about .about-block-1 .twenty-13').click(function() {
  	$('#about .about-block-1 .twenty-14').css({'backgroundColor':'white','color':'#757575'});
 	$('#about .about-block-1 .twenty-12').css({'backgroundColor':'white','color':'#757575'});
    $(this).css({'backgroundColor':'#757575','color':'white'});
 	$('.students-number').replaceWith('<div class="students-number">'+statsData['2013']['students']+'</div>');
 	$('.nonprofit-number').replaceWith('<div class="nonprofit-number">'+statsData['2013']['nonprofits']+'</div>');
 	$('.published-number').replaceWith('<div class="published-number">'+statsData['2013']['published']+'</div>');
 });

  $('#about .about-block-1 .twenty-12').click(function() {
  	$('#about .about-block-1 .twenty-13').css({'backgroundColor':'white','color':'#757575'});
 	$('#about .about-block-1 .twenty-14').css({'backgroundColor':'white','color':'#757575'});
    $(this).css({'backgroundColor':'#757575','color':'white'});
 	$('.students-number').replaceWith('<div class="students-number">'+statsData['2012']['students']+'</div>');
 	$('.nonprofit-number').replaceWith('<div class="nonprofit-number">'+statsData['2012']['nonprofits']+'</div>');
 	$('.published-number').replaceWith('<div class="published-number">'+statsData['2012']['published']+'</div>');
 });

});

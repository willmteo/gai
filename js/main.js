//about page block 5 slider function


jQuery(document).ready(function($) {
	
	// Loading content with Ajax for 'Tutorials' page
	$('#tutorials .tutorials_all').load('../wp-content/themes/GlobalAppInitiative/tutorials-inc/all.php');
	$('#tutorials .sub.nav li a').click(function() {
		var page = $(this).attr('href');
		$('#tutorials .sub.nav li a').removeClass('active');
		$('#tutorials .tutorials_all').load('../wp-content/themes/GlobalAppInitiative/tutorials-inc/' + page + '.php');
		$(this).addClass('active');
		return false;
	});

	// Wrapping webform fields into columns
//	function wrap_columns() {
//		$(".fieldpart1").wrapAll("<div class='part1' />");
//		$(".fieldpart2").wrapAll("<div class='part2' />");
//	}

//	$('#join .sub.nav li a').click(function() {
//		var page = $(this).attr('href');
//		$('#join .sub.nav li a').removeClass('active');
//		$('#join .content-load').load('../wp-content/themes/GlobalAppInitiative/join-inc/' + page + '.php', function() {
//			wrap_columns();
//		});
//		$(this).addClass('active');
//
//		return false;
//	});

//	wrap_columns();


//Press Page JS
	$('#press .timeline .date').mouseenter(function(){
		var img_id =$(this).siblings(".press_container").children("a").children("img").attr("id");
		var press_width = ($(this).siblings(".press_container").children("a").children("img").width()) + 60 + ($(this).siblings(".press_container").children(".dotted_blue").width()) ;
	/*	var img_height = $(this).siblings(".press_block").children("a").children().height();
		var img_height_2 = (img_height)/2 ;  */
		$("#"+img_id).show();
		$(this).siblings(".press_container").children(".dotted_blue").show();
		$(this).siblings(".press_container").children(".dotted_blue").children(".dotted_post_title").css("width","0px").show();
		$(this).siblings(".press_container").children(".dotted_blue").children(".dotted_post_title").animate({width:'400px'}, 250); 
		$(this).parent().css("width",press_width+"px");


	/*	$(this).siblings(".press_block").css("display","inline-block"); 
		$(this).siblings(".press_block").children("#dotted_container").css("height",img_height+"px");
		$(this).siblings(".press_block").children("#dotted_container").children().css("margin-top",img_height_2+"px"); 
		$(this).siblings(".press_block").children("#dotted_container").css("margin-bottom",img_height+"px"); */
		
		
	});

	$('#press .timeline .press_pic').mouseleave(function(){
		var img_id =$(this).children(".press_container").children("a").children("img").attr("id");
		$("#"+img_id).hide();
		$(this).children(".press_container").children(".dotted_blue").hide();
		//var img_class2= $(this).attr("id");
		//$(/*"#press .timeline .press_pic img*/"#"+img_class2).hide();
	});

//home page js
$('.home-menu').mouseover(function() {
$('.home-menu-bar').show("slide", {direction: "right"}, 500);
});

$('.home-menu-bar').mouseleave(function() {
$('.home-menu-bar').hide("slide", {direction: "right"}, 500);
});

});

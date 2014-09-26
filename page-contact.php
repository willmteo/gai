<?php get_header(); ?>

<!--<div class="photo_block">
</div>-->
	<div class="jumbotron">
	<div class="container">
<div class="contact-block-1 row">

	<div class="block-1-title col-xs-offset-2 col-xs-10">Contact Us</div>

	<!--<p>
		<?php the_field('Text'); ?>
	</p>-->
	<div class="block-1-content col-xs-offset-2 col-xs-5">
		<div class="content-title col-xs-12">Who Are You?</div>
		<div class="content-student col-xs-12">Student who wants to be a member of Global App Initiative!</div>
		<div class="content-nonprofit col-xs-12">Nonprofit who wants to discover how GAI can help them.</div>
		<div class="content-college col-xs-12">Student who wants to establish GAI at your college or university.</div>
	</div><!--block-1-content--> 
	<div class="block-1-img col-xs-5"><img src="<?php echo get_template_directory_uri();?>/img/page-contact/iphone 5.png"/></div>

	<?php //gravity_form(1, $display_title=true, $display_description=true, $display_inactive=true, $field_values=null, $ajax=true);


	 ?>

	<?php //include('inc/social_buttons.php'); ?>

</div><!-- .contact-block-1 -->
<div class="contact-block-2 row">
<div class="block-2-header col-xs-12">General Inquiry</div>
<div class="block-2-main">

<form method="post" action="../search" class="col-xs-offset-2 col-xs-8" >
  <div class="name col-xs-12">Name</div><br>
   <input type="text" id="name" placeholder=""><br>
  <div class="email col-xs-12">Email</div><br> 
  <input type="text" id="email" placeholder="johndoe@bu.edu"><br>
  <textarea class="message " rows="10" cols="65" placeholder="Ask us Anything">

</textarea><br>
<select class="options">
  <option value="volvo">Referred by a friend</option>
  <option value="saab">University Advertising</option>
  <option value="mercedes">Online Search</option>
  <option value="audi">Other</option>
</select>
<input id="submit-button" type="submit" value="Submit">
</form>




</div>
	
</div><!--contact-block-2-->
</div><!-- jumbotron -->
</div><!-- container -->


<?php get_footer(); ?>
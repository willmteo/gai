<?php get_header(); ?>

<div class="center">
<h1>Press Release</h1>

<div class="timeline">

<div class="marker">
</div>

<div class="press_pic">
<p class="date" >MARCH 23, 2013</p>

<div class="press_container">


<a target="_blank" href="http://www.hercampus.com/school/bu/best-bu-clubs-youre-missing-out"><img id="03_23_13" src="<?php echo get_template_directory_uri(); ?>/img/hercampus.jpg"></a>
<div class="dotted_blue" >

<?php

$title = "The Best BU Clubs Youre Missing Out On";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){
$post= get_post($titleid);
}
?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>

</div>
</div><!---press container-->
</div> <!---press pic-->


<div class="marker">
</div>
<div class="press_pic">

<p class="date">FEB 13, 2014</p>
<div class="press_container">
<a target="_blank" href="http://buprssa.com/2014/02/13/download-the-pr-advanced-fuelthefuture-app/"><img id="02_13_14" src="<?php echo get_template_directory_uri(); ?>/img/prstudentsociety.png"></a>
<div class="dotted_blue" >
	
<?php

$title = "Download the PR Advanced: #FuelTheFuture App";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){
$post= get_post($titleid);
}
?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>	

</div>
</div><!---press container-->
</div><!---press pic-->

<div class="marker">
</div>
<div class="press_pic">

<p class="date">FEB 23, 2014</p>
<div class="press_container">

<a target="_blank" href="http://dailyfreepress.com/2014/02/23/bu-student-group-unveils-apps-for-non-profit-causes/"><img id="02_23_14" src="<?php echo get_template_directory_uri(); ?>/img/daily_free_press.jpg"></a>
<div class="dotted_blue" >

<?php

$title = "BU student group unveils apps for nonprofit causes";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){
$post= get_post($titleid);
}
?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>	
	

</div>
</div><!---press container-->
</div>

<div class="marker">
</div>
<div class="press_pic">

<p class="date">MARCH 23, 2014</p>
<div class="press_container">

<a target="_blank" href="http://dailyfreepress.com/2014/03/23/college-of-engineering-student-group-hosts-1st-ever-hackathon-competition/"><img id="03_23_14" src="<?php echo get_template_directory_uri(); ?>/img/daily_free_press.jpg"></a>
<div class="dotted_blue" >

<?php

$title = "College of Engineering students group host 1st ever Hackathon competition";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){
$post= get_post($titleid);
}
?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>	
</div>
</div><!---press container-->
</div>

<div class="marker">
</div>
<div class="press_pic">

<p class="date">MAY 05, 2014</p>
<div class="press_container">

<a target="_blank" href="http://buquad.com/2014/05/05/influential-bu-movers-and-shakers-of-2013-2014/3/"><img id="05_05_14" src="<?php echo get_template_directory_uri(); ?>/img/quad.png"></a>
<div class="dotted_blue" >

<?php

$title = "Influential BU: Movers and Shakers of 2013-2014";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){

$post= get_post($titleid);
}
?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>	
</div>
</div><!---press container-->
</div>

<div class="marker">
</div>
<div class="press_pic">

<p class="date">OCTOBER 07, 2014</p>
<div class="press_container">

<a target="_blank" href="http://thebookofed.com/2013/10/07/connections-that-matter-global-app-initiative/"><img id="10_07_14" src="<?php echo get_template_directory_uri(); ?>/img/bookofed.png"></a>
<div class="dotted_blue" >

<?php

$title = "Connections that matter: Global App Initiative";

$titleid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "'");

$press_cat= get_the_category($titleid);

if($press_cat[0]->cat_name == "Press"){
$post= get_post($titleid);
}

?>
<div class="dotted_post_title">
<?php
echo $post->post_title;
?>
</div>
<p class="dotted_post_content">
<?php 
echo $post->post_content;
?>
</p>
	
</div>
</div><!---press container-->
</div>

</div> <!-- timeline-->

</div>

<?php get_footer(); ?>
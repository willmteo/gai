<?php get_header();
wp_enqueue_script( 'about.js', get_template_directory_uri() . '/js/about.js', array(), false , true ); ?>
<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<div class="main">
	<div class="jumbotron">
	<div class="container">
	<div class="about-block-1 row">

		<div class="block-1-header col-xs-12">About Global App Initiative</div>

		<div class="our-mission col-xs-6 row">
           <div class="our-mission-header col-xs-12">Our Mission</div>
           <div class="our-mission-content col-xs-12">
		Global App Initiative integrates humanity and technology to create a program that trains
		 students to become mobile app-makers for nonprofits. Never losing sight of the bigger picture, we recruit students of all 
		 fashions and interests to work towards building a more economically, socially, and environmentally sound world.</div>
		 </div><!--our-mission-->

		<div class="stats-table col-xs-6 row">
		<div class="col-xs-offset-1 col-xs-2 year-scroll">
		<?php 

		$statsTable= array(
			"2014" => array("students"=>"474",
				"nonprofits"=> "17",
				"published" => "4"
				),
			"2013" => array("students"=>"300",
				"nonprofits"=> "17",
				"published" => "4"
				),
			"2012" => array("students"=>"50",
				"nonprofits"=> "5",
				"published" => "0"
				)
				); 
		wp_localize_script( 'about.js', 'statsData', $statsTable );
		?>
		<div class="twenty-14" >2014</div>
		<div class="twenty-13">2013</div>
		<div class="twenty-12">2012</div> 	
		</div>
		<div class="col-xs-5 students-stat">
		<div class="students-number">50</div>
		<div class="students-word">Students</div>
		 </div>
		<div class="col-xs-4 nonprofit-publish-stat">
			<div id="nonprofit-stat">
				<div class="nonprofit-number">5</div>
		<div class="nonprofit-word">Nonprofits</div>
			</div>
			<div id="published-stat">
				<div class="published-number">0</div>
		<div class="published-word">Published Apps</div>
			</div>
		</div>
		</div><!--students-stat-->

		</div><!--about-block-1-->
		<div class="about-block-2 row">
			<div class="block-2-video"><iframe width="690" height="390" src="//www.youtube.com/embed/wxRh2uqCqOQ" frameborder="0" allowfullscreen></iframe>
			</div>


		</div><!--about-block-2-->
		<div class="about-block-3 row">
		<div class="block-3-header col-xs-12">Meet our Executive Board</div>
		<div class="block-3-content col-xs-offset-1 col-xs-9"></div>
		</div> <!--about-block-3-->
		<div class="about-block-4 row">
		<div class="block-4-top col-xs-offset-4 col-xs-4">
		<div class="block-4-header">Our History</div>
		<table>
			<tr class="row-one">
			<td id="twenty-12">2012</td>
			<td id="twenty-13">2013</td>
			<td id="twenty-14">2014</td>
			<td id="twenty-15">2015</td>
			</tr>
		</table>
		</div><!--block-4-top-->
		<div class="block-4-bottom col-xs-offset-4 col-xs-4">
			<div class="checkpoint-container"><div id="twenty-12" class="checkpoints"></div></div>
			<div class="checkpoint-container"><div id="twenty-13" class="checkpoints"></div></div>
			<div class="checkpoint-container"><div id="twenty-14" class="checkpoints"></div></div>
			<div class="checkpoint-container"><div id="twenty-15" class="checkpoints"></div></div>
			<div class="timeline col-xs-12">
		</div>
		</div>

		</div><!--about-block-4-->
<div class="about-block-5 row">
<div class="about-left-chevron col-xs-1"><i class="fa fa-chevron-left"></i></div>
<div class="block-5-slider-set col-xs-offset-1 col-xs-8">
<div class="block-5-slider-1 col-xs-12 row" id="zero">
<div class="slider-date col-xs-5">August 2012</div>
<div class="slider-title col-xs-offset-1 col-xs-6">Clean App Your Neighborhood</div>
<div class="col-xs-5 block-5-img-1" ><img name="block-5-slider-1" src="<?php echo get_template_directory_uri(); ?>/img/page-about/keen logo.gif"/></div>
<div class="slider-content-1 col-xs-offset-1 col-xs-6">In August, Kern Family Foundation sponsored a “Clean App Your Neighborhood” workshop where 5
 teams of 6 students built an app for a different nonprofit over 5 days.</div>
</div><!--block-5-slider-1-->
<div class="block-5-slider-2 col-xs-12 row" id="one">
<div class="slider-date col-xs-5">**** 2012</div>
<div class="slider-title col-xs-offset-1 col-xs-6">Apps for Humanity</div>
<div class="col-xs-5 block-5-img-2" ><img name="block-5-slider-1" src="<?php echo get_template_directory_uri(); ?>/img/GAI_logo_color_trans.png"/></div>
<div class="slider-content-2 col-xs-offset-1 col-xs-6">Global App Initiative (initially named Apps For Humanity) was established 
as a BU student organization in November with 40 active members and four non-profit teams.</div>
</div><!--block-5-slider-2-->
<div class="block-5-slider-3 col-xs-12 row" id="two">
<div class="slider-date col-xs-5">April 2014</div>
<div class="slider-title col-xs-offset-1 col-xs-6">Global Appathon</div>
<div class="col-xs-5 block-5-img-3" ><img name="block-5-slider-1" src="<?php echo get_template_directory_uri(); ?>/img/page-about/global appathon.png"/></div>
<div class="slider-content-3 col-xs-offset-1 col-xs-6">Global App Initiative hosts its first Global Appathon where more than 80 attendees
 created mobile applications.</div>
</div><!--block-5-slider-3-->
<div class="block-5-slider-4 col-xs-12 row" id="three">
<div class="slider-date col-xs-5">May 2014</div>
<div class="slider-title col-xs-offset-1 col-xs-6">ESA Awards</div>
<div class="col-xs-5 block-5-img-4" ><img name="block-5-slider-1" src="<?php echo get_template_directory_uri(); ?>/img/page-about/gai esa awards.jpg"/></div>
<div class="slider-content-4 col-xs-offset-1 col-xs-6">Excellence in Student Activities awarded Global App Initiative
 with excellence in individual programming and best in service & justice.</div>
</div><!--block-5-slider-4-->
</div><!--block-5-slider-set-->
<div class="about-right-chevron col-xs-offset-1 col-xs-1"><i class="fa fa-chevron-right"></i></div>
</div><!--about-block-5-->
	<!--	<div class="text">
			<?php echo the_field('Description'); ?>
		</div>
		<div class="key_stats">
			<h3>GAI Key Stats</h3>
			<span><span class="number"><?php echo the_field('Students'); ?></span> students</span>
			<span><span class="number"><?php echo the_field('Finished projects'); ?></span> finished projects</span>
			<span><span class="number"><?php echo the_field('Nonprofits'); ?></span> nonprofits</span>
		</div> -->
		</div><!--container-->
	</div><!-- jumbotron -->
</div><!-- .main -->

<?php get_footer(); ?>
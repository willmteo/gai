<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			wp_title( '|', true, 'right'); 
			bloginfo( 'name' );
		?>
	</title>
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>
<body>
	<div id="<?php echo basename(get_permalink()); ?>">
    <?php wp_enqueue_script( 'home.js', get_template_directory_uri() . '/js/home.js', array('jquery'), false , false ); ?>
<div class="jumbotron">
  <div class="container">
  <div class="home-block-1 row">
  <div class="block-1-header row">
  <div class="home-logo col-xs-2 col-xs-offset-2"><img src="<?php echo get_template_directory_uri(); ?>/img/GAI_logo_color_trans.png"/></div>
  <div class="home-menu col-xs-offset-5 col-xs-1"><i class="fa fa-bars fa-lg"></i> MENU</div>
   </div><!--block-1-header-->
  <div class="block-1-content col-sm-offset-4 col-xs-4 row">
  	<div class="organization-name col-xs-12">GLOBAL APP INITIATIVE</div>
  	<div class="organization-motto col-xs-12">Making the world a better place, one app at a time</div>
  	<div class="join-button col-xs-offset-4 col-xs-4">Join Our Club</div>
  </div> <!--block-1-content-->
  <div class="col-sm-offset-9 col-xs-3 home-menu-block">
  <div class="home-menu-bar">
  <div class="search-bar col-xs-12">
  <form>
  <input type="text" placeholder="Search"></form>
  </div>
  <div class="menu-options about col-xs-12">About</div>
  <div class="menu-options projects col-xs-12">Projects</div>
  <div class="menu-options education col-xs-12">Education</div>
  <div class="menu-options press col-xs-12">Press</div>
  <div class="menu-options contact col-xs-12">Contact</div>
  <div class="menu-options join col-xs-12">Join</div>
  </div><!--home-menu-bar-->
  </div><!--home-menu-block-->
  </div><!--home-block-1-->
<div class="home-block-2 row">
<div class="left-chevron col-xs-1"><i class="fa fa-chevron-left"></i></div>
<div class="block-2-slider-set col-xs-10">
<div class="block-2-slider-1 col-xs-12 row" id="0">
<div class="col-xs-5 col-xs-offset-1 block-2-img-1" ><img name="block-2-slider-1" src="<?php echo get_template_directory_uri(); ?>/img/page-home/02_Assets_Home_Page_1.png"/></div>
<div class="col-xs-5 row col-xs-offset-1" id="slider-block">
<div class="slider-title col-xs-12">We are diverse</div>
<div class="slider-content col-xs-11">Student's majors range from Neuroscience to Graphic Design,
 and much more! There is also great diversity with our 17 
Nonprofit Organizations' causes which including education, healthcare, and homelessness.</div>
<div class="slider-link col-xs-12">Just take a look at our team</div>
</div><!--slider-block-->
</div><!--block-2-slider-1-->
<div class="block-2-slider-2 col-xs-12 row" id="1">
<div class="col-xs-5 col-xs-offset-1 block-2-img-2" ><img name="block-2-slider-2" src="<?php echo get_template_directory_uri(); ?>/img/page-home/02_Assets_Home_Page_2.png"/></div>
<div class="col-xs-5 row col-xs-offset-1" id="slider-block">
<div class="slider-title col-xs-12">We are learners</div>
<div class="slider-content col-xs-11">We encourage our members to continually grow 
in skill whether they are a veteran of app development or just now learning the ropes.
Each week, students have the opportunity to constantly pick up new skills by attending open hours,
weekly lectures, and team meetings.</div>
<div class="slider-link col-xs-12">View tutorials and lesson plans</div>
</div><!--slider-block-->
</div><!--block-2-slider-2-->
<div class="block-2-slider-3 col-xs-12 row" id="2">
<div class="col-xs-5 col-xs-offset-1 block-2-img-3" ><img name="block-2-slider-3" src="<?php echo get_template_directory_uri(); ?>/img/page-home/02_Assets_Home_Page_3.png"/></div>
<div class="col-xs-5 row col-xs-offset-1" id="slider-block">
<div class="slider-title col-xs-12">We are leaders</div>
<div class="slider-content col-xs-11">Not only do members learn how to code
and design apps, they learn what it takes to be a leader in GAI's special divisions. Our
Marketing, Operations, Business Development, and Education divisions enable motivated students to
guide their peers to succeed.</div>
<div class="slider-link col-xs-12">See where you can fit in</div>
</div><!--slider-block-->
</div><!--block-2-slider-3-->
<div class="block-2-slider-4 col-xs-12 row" id="3">
<div class="col-xs-5 col-xs-offset-1 block-2-img-4" ><img name="block-2-slider-4" src="<?php echo get_template_directory_uri(); ?>/img/page-home/02_Assets_Home_Page_4.png"/></div>
<div class="col-xs-5 row col-xs-offset-1" id="slider-block">
<div class="slider-title col-xs-12">We are community members</div>
<div class="slider-content col-xs-11">Our ambition is to use the skills we learn to help
our community. We partner with nonprofit organizations to bridge the gap between technology
and community service. Our partners' causes cover an array of social and
economic problems including education, healthcare, and homelessness.</div>
<div class="slider-link col-xs-12">Just take a look at our team</div>
</div><!--slider-block-->
</div><!--block-2-slider-4-->
</div><!--block-2-slider-set-->
<div class="right-chevron col-xs-1"><i class="fa fa-chevron-right"></i></div>
<div class="block-2-slider-indicator col-sm-offset-6 col-sm-2 col-xs-12">
<div class="indicator-1" id="4"></div>	
<div class="indicator-2" id="5"></div>
<div class="indicator-3" id="6"></div>	
<div class="indicator-4" id="7"></div>		
</div><!--block-2-slider-indicator-->
</div><!--home-block-2-->
<div class="home-block-3 row">
<div class="block-3-main row col-xs-offset-3 col-xs-6">
<div class="block-3-title col-xs-12 ">Design. Develop. Debug.</div>
<div class="block-3-content col-xs-12">With our organization a student 
will learn how to analyze a company's needs, generate innovative ideas with a team,
develop a wireframe design, establish two-way communication with clients,
program a mobile app using object-oriented progamming techniques, and become leaders.
By working with us, our experience becomes your experience and leaves you with a very unique set of skills
that is otherwise difficult to obtain in classes.</div>
</div><!--block-3-main-->
</div><!--home-block-3-->
<div class="home-block-4 row">
<div class="block-4-main col-xs-12">
<div class="block-4-title col-xs-12">Interested in being involved?</div>
<div class="block-4-content col-sm-offset-4 col-xs-4">We'd love to have you! Regardless of background, experience, and knowledge, 
you are joining a community that is here to learn together.</div>
</div><!--block-4-main-->
<div class="block-4-bottom col-xs-12 row">
<div class="bottom-block col-xs-4" id="block-1">
<div class="col-sm-offset-3 col-xs-9 bottom-1-title ">Student, non-profit or business?</div>
<div class="col-sm-offset-3 col-xs-3 join-us-button">Join Us</div>
</div>
<div class="bottom-block col-xs-4" id="block-2">
<div class="col-sm-offset-2 col-xs-10 bottom-2-title">Keep up with the latest news and events</div>
<div class="col-sm-offset-2 col-xs-6 enter-email">
<form>
<input type="text" name="firstname" value="Enter e-mail">
</form>
</div>
<div class="col-xs-3 subscribe-button">Subscribe</div>
</div>
<div class="bottom-block col-xs-4" id="block-3">
<div class="col-sm-offset-2 col-xs-10 bottom-3-title">Looking for a job or an internship?</div>
<div class="col-sm-offset-2 col-xs-3 job-board">Job Board</div>
</div>
</div><!--block-4-main-->
</div><!--home-block-4-->
<!--
<div class="home-block-5 row">
<div class="table-responsive">
  <table class="table" cellpadding="0" cellspacing="0" border="0">
    <tr id="header">
  <th>About</th>
  <th>Projects</th> 
  <th>Education</th>
  <th>Team</th>
  <th>Contact</th>
  <th>Press</th>
  <th>Social</th>
</tr>
<tr id="one">
  <td>Blog</td>
  <td>2013</td> 
  <td>Tutorials</td>
  <td>Current Eboard</td>
  <td>Students</td> 
  <td>Media Mentions</td>
  <td>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/github2.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/google plus.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/logo_linkedin.png"/>
  	<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"/>
  </td>
</tr>
<tr id="two">
  <td>Sponsors</td>
  <td>2014</td> 
  <td width="160px">Summer Leadership Program</td>
  <td>Former Members</td>
  <td>Nonprofits</td> 
  <td>Press Contact</td>
</tr>
<tr id="three">
  <td></td>
  <td></td> 
  <td>Job Board</td>
  <td></td>
  <td>College or University</td> 
  <td></td>
</tr>
  </table>
  </div><!--table-responsive--> 
  <!--
  <div class="copyright row">
  <div class=" col-xs-4">Copyright 2014 GlobalAppInitiative</div>
  </div>
</div><!--home-block-5-->

  </div><!--container-->
</div><!--jumbotron-->
</div>

<?php get_footer(); ?>
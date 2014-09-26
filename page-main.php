<?php
get_header();
?>
<div id="main">
	<div class="photo_block_1">
		<div class="center">

			<div class="text">
				<?php echo the_field('Slogan'); ?>
			</div><!-- .text -->

			<a href="about"><button>Learn More</button></a>

		</div><!-- .branding-title -->
	</div><!-- .branding-title -->

	<div class="who_we_are">
		<div class="center">

			<h2 class="center">Who We Are</h2>

			<div class="community column">
				<img src="<?php echo get_template_directory_uri(); ?>/img/main_about_users.png">
				<h3>Diverse Community</h3>
				<p>
					<?php echo the_field('Diverse community'); ?>
				</p>
			</div><!-- .community -->

			<div class="leaners column">
				<img src="<?php echo get_template_directory_uri(); ?>/img/main_about_book.png">
				<h3>Avid Learners</h3>
				<p>
					<?php echo the_field('Avid learners'); ?>
				</p>
			</div><!-- .leaners -->

			<div class="leaders column">
				<img src="<?php echo get_template_directory_uri(); ?>/img/main_about_globe.png">
				<h3>Future Leaders</h3>
				<p>
					<?php echo the_field('Future leaders'); ?>
				</p>
			</div><!-- .leaders -->

			<a href="about"><span class="learn_more">Learn More</span></a>

		</div><!-- .center -->
	</div><!-- .who_we_are -->

	<div class="photo_block_2">
	</div>

	<div class="our_experience">
		<div class="center">
			
			<h2>Our Experience</h2>

			<div class="os_images">
				<img class="first" src="<?php echo get_template_directory_uri(); ?>/img/main_experience_apple.png">
				<img class="middle" src="<?php echo get_template_directory_uri(); ?>/img/main_experience_android.png">
				<img class="last" src="<?php echo get_template_directory_uri(); ?>/img/main_experience_windows.png">
			</div><!-- .os_images -->

			<p>
				<?php echo the_field('Our experience text'); ?>
			</p>

			<a href="about"><span class="learn_more">Learn More</span></a>

		</div><!-- .center -->
	</div><!-- our_experience -->

	<div class="member">
		<div class="center">

			<h2>Be a Member</h2>

			<div class="stats">

				<div class="projects">
					<span class="number">4</span>
					<span class="text">finished projects</span>
				</div><!-- .projects -->
				<div class="students">
					<span class="number">300+</span>
					<span class="text">students</span>
				</div><!-- .students -->
				<div class="nonprofits">
					<span class="number">17</span>
					<span class="text">nonprofits</span>
				</div><!-- .nonprofits -->

			</div><!-- .stats -->

			<a href="join"><button class="join">Join</button></a>

		</div><!-- .center -->
	</div><!-- .member -->
</div><!-- #main -->
<?php get_footer(); ?>
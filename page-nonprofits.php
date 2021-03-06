<?php get_header(); ?>

<div class="photo_block">
</div>

<div class="navigation">
	<div class="center">
		<ul class="sub nav">
			
			<li><a class="active" href="../nonprofits">Nonprofits</a></li>
			<li><a href="../join">Students</a></li>
			<li><a href="../universities">Universities</a></li>
			
		</ul><!-- .nav -->
	</div><!-- .center -->
</div> <!-- .navigation -->

<div class="content-load">

	<div class="webform center nonprofit">

		<h2>Hey Nonprofits, join Global App Initiative!</h2>

		<p>
			<?php the_field('Text'); ?>
		</p>

		<?php gravity_form(3, $display_title=true, $display_description=true, $display_inactive=true, $field_values=null, $ajax=true); ?>

		<?php include('inc/social_buttons.php'); ?>

	</div><!-- .webform -->

</div>

<?php get_footer(); ?>
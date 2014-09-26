<div class="webform center nonprofit">

	<h2>Join Global App Initiative!</h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Nam vestibulum, augue vitae luctus posuere, libero nulla 
		rhoncus dui, eu congue tellus ipsum sit amet nibh. Donec 
		eget dapibus lectus. Aliquam erat volutpat. In hac habitasse 
		platea dictumst. Donec purus metus, fermentum ac nulla eu, 
		laoreet gravida odio.
	</p>

	<?php 
		define('WP_USE_THEMES', false);
		require_once('../../../../wp-load.php');
	?>

	<?php gravity_form(3, $display_title=true, $display_description=true, $display_inactive=true, $field_values=null, $ajax=true); ?>

	<?php include('../inc/social_buttons.php'); ?>

</div><!-- .webform -->
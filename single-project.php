<?php
get_header();
?>



<div id="project">
	<div class="center">
		<a href="../projects"><h2>Our past projects</h2></a>
		<h2 class="name"><?php the_title(); ?></h2>
		
		<p class="description">
			<span class="title">Description:</span>
			<?php the_field("description"); ?>
		</p><!-- .description -->

		<p class="team">
			<span class="title">Team Leader:</span>
			<?php the_field("team_leader"); ?>
		</p><!-- .team -->

		<p class="team">
			<span class="title">Design team:</span>
			<?php the_field("team_design"); ?>
		</p><!-- .team -->

		<p class="team">
			<span class="title">Programming team:</span>
			<?php the_field("team_programming"); ?>
		</p><!-- .team -->

		<p class="team">
			<p><span class="title">Relevant links:</span></p>
			<?php $my_meta = get_post_meta( $post->ID, 'github', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
					<?php if( $my_meta && '' != $my_meta ) :?>
			<a target="_blank" href= "<?php echo $my_meta?>"><img src="<?php echo get_template_directory_uri(); ?>/img/github.jpg" height = "100px" style= 'margin-right: 10px;'></a>
			<?php endif; ?>
			<?php $my_meta = get_post_meta( $post->ID, 'app_store', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
					<?php if( $my_meta && '' != $my_meta ) :?>
			<a target="_blank" href= "<?php echo $my_meta?>"><img src="<?php echo get_template_directory_uri(); ?>/img/appstore.png" height = "83px" width = "83px" style = 'margin-bottom: 7px;'></a>
			<?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<?php $my_meta = get_post_meta( $post->ID, 'google_play', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
					<?php if( $my_meta && '' != $my_meta ) :?>
			<a target="_blank" href= "<?php echo $my_meta?>"><img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.png" height = "89px"></a>
			<?php endif; ?>
		</p><!-- relevant links -->

		<div class="screenshots"> 
			<p><span class="title">Screenshots:</span></p>
			<?php $image = get_post_meta($post->ID, 'image_1', true);
			if ($image): ?>
				<img src="<?php the_field('image_1'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_2', true);
			if ($image): ?>
				<img src="<?php the_field('image_2'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_3', true);
			if ($image): ?>
				<img src="<?php the_field('image_3'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_4', true);
			if ($image): ?>
				<img src="<?php the_field('image_4'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_5', true);
			if ($image): ?>
				<img src="<?php the_field('image_5'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_6', true);
			if ($image): ?>
				<img src="<?php the_field('image_6'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_7', true);
			if ($image): ?>
				<img src="<?php the_field('image_7'); ?>">
			<?php endif; ?>
			<?php $image = get_post_meta($post->ID, 'image_8', true);
			if ($image): ?>
				<img src="<?php the_field('image_8'); ?>">
			<?php endif; ?>

		</div><!-- .screenshots --> 

	</div>
</div><!-- #project -->

<?php get_footer(); ?>
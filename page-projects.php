<?php
get_header();
?>

<div class="center">

	<h2>Our past projects</h2>

	<?php

	query_posts( array (
		'post_type' => 'project'
	));

	?>


	<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
		<div class="project">
			<img class="background" src="<?php the_field("icon"); ?>">
 
			<a href="<?php the_permalink(); ?>">
				<div class="label">
					<div class="wrapper">

						<div class="inline_block">
							<div class="wrapper">
								<span class="title"><?php 
									$title = get_the_title();
									if (strlen($title) > 23) {
										for ($i = 0; $i < 23; $i++) {
											echo $title[$i];
										}
										echo "...";
									}
									else {
										echo $title;
									}
								?></span>
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/project_arrow.png">
						
					</div><!-- .wrapper -->
				</div><!-- .label -->
			</a>
		</div><!-- .project -->
	<?php endwhile; else: ?>

		<h2>There are no projects here</h2>

	<?php endif; ?>


</div><!-- .center -->

<?php get_footer(); ?>
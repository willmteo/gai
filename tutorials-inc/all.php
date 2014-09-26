<?php 
	define('WP_USE_THEMES', false);
	require_once('../../../../wp-load.php');
?>


<?php

	query_posts( array (
		'post_type' => 'tutorial'
	));

?>


<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
	<div class="tutorial">
		<div class="center">
			&nbsp; <img width="330" height="180"
				src="<?php the_field('picture'); ?>" />
			<div class="video_description">
				<div class="video_text">
					<span class="video_title"><?php the_title(); ?></span>
					<p><br><?php the_field('description'); ?>
					</p>
					</br>
					<?php $my_meta = get_post_meta( $post->ID, 'youtube_url', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
					<?php if( $my_meta && '' != $my_meta ) : ?>
     					<form action = "<?php echo $my_meta ?>" target="_blank">
    						<input type="submit" value="Tutorial Video">
						</form>
     				<?php endif; ?>
				</div> <!-- .video_text -->
			</div> <!-- .video_description -->
		</div>  <!-- .center -->
	</div> <!-- .tutorial --> 
<?php endwhile; else: ?>

	<h2>There are no tutorials here</h2>

<?php endif; ?>
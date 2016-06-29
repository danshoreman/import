<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-hero' );?>
			<div id="contactpage">
				<div class="row">
					<div class="small-12 medium-8 medium-offset-2 large-10 large-offset-1 columns intro-text">
						
						<h1><?php the_title(); ?></h1>
						<div class="row">
							<div class="small-12 medium-6 columns">
								<?php echo the_content();?>
							</div>
							<div class="small-12 medium-6 columns">
								<?php echo do_shortcode('[contact_form]');?>
							</div>
						
						</div>
					</div>
				</div>
			</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

<?php get_footer();
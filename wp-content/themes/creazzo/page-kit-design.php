<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="row">
	<div class="small-12 columns">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-hero' );?>
			<div id="kitpage">
				<div class="carousel">
					<img src="<?php //echo $thumb['0'];?><?php echo get_stylesheet_directory_uri(); ?>/library/images/kitdesign/kitdesign.jpg" alt="" class="">
				</div>
				<div class="row">
					<div class="small-12 medium-8 medium-offset-2 columns intro-text">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>
	</div>
</div>

<?php get_footer();
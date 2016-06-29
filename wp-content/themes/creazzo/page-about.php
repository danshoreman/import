<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-hero' );?>
			<div id="heritagepage">
				<div class="carousel">
					<img src="<?php echo $thumb['0'];?>" alt="" class="">
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

<?php get_footer();
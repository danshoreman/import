<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-hero' );?>
			<div id="homepage">
				<!--
<div class="carousel" style="background-image: url('<?php echo $thumb['0'];?>');">
					<div class="carousel-intro">
						<?php the_field('home_carousel_content'); ?>
					</div>
					<div class="offer">
						<?php the_field('home_carousel_offer'); ?>
					</div>
				</div>
-->
				<?php if( have_rows('content') ): ?>
					<ul class="bxslider">
					<?php while( have_rows('content') ): the_row(); 
					
						// vars
						$image = wp_get_attachment_image_src(get_sub_field('image'), 'home-hero');
						$text = get_sub_field('text');
				
						?>
						<li class="slide" style="background-image: url('<?php echo $image['0'];?>');">
							<!-- <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image')) ?>" class="slide-img" /> -->
							<div class="slide-content">
								<?php echo $text; ?>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				
				<div class="row">
					<div class="small-12 medium-8 medium-offset-2 columns intro-text">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-4 columns">
						<?php echo do_shortcode ('[product_categories ids="9" columns="1"]') ?>
					</div>
					<div class="small-12 medium-4 columns">
						<?php echo do_shortcode ('[product_categories ids="12" columns="1"]') ?>
					</div>
					<div class="small-12 medium-4 columns last-product">
						<?php echo do_shortcode ('[product_categories ids="21" columns="1"]') ?>
					</div>
				</div>
			</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

<?php get_footer();
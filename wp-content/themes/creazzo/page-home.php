<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-hero' );?>
			<div id="homepage">
				<?php if( have_rows('content') ): ?>
					<ul class="bxslider">
					<?php while( have_rows('content') ): the_row(); 
					
						// vars
						$image = wp_get_attachment_image_src(get_sub_field('image'), 'home-hero');
						$text = get_sub_field('text');
				
						?>
						<li class="slide" style="background-image: url('<?php echo $image['0'];?>');">
							<div class="colour-wash"></div>	
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
				<ul class="bxslider2">
					<li><?php echo do_shortcode ('[product_categories ids="9" columns="1"]') ?></li>
					<li><?php echo do_shortcode ('[product_categories ids="12" columns="1"]') ?></li>
					<li><?php echo do_shortcode ('[product_categories ids="21" columns="1"]') ?></li>
					<li><?php echo do_shortcode ('[product_categories ids="22" columns="1"]') ?></li>
				</ul>
			</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

<?php get_footer();
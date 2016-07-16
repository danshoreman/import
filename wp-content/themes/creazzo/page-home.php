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
						<?php the_content(); ?>
					</div>
				</div>
				
				<?php 
					$counter = 0;
					if( have_rows('promo_panels') ): ?>
				
				<div class="promo-panels">
					
					<?php while( have_rows('promo_panels') ): the_row(); 

					// vars
					$pr_title = get_sub_field('promo_title');
					$pr_content = get_sub_field('promo_copy');
					$pr_link = get_sub_field('promo_link');
					$pr_img = wp_get_attachment_image_src(get_sub_field('promo_image'), 'full');
			
				?>
					
					<div class="row collapse">
						<?php if ($counter % 2 === 0) :?>
						<div class="small-12 medium-6 columns">
						<?php else: ?>
						<div class="small-12 medium-6 medium-push-6 columns">
						<?php endif; ?>
							<div class="promo-copy promo-block">
								<h3><?php echo $pr_title; ?></h3>
								
								<p><?php echo $pr_content; ?></p>

								<?php if( $pr_link ): ?>
									<a href="<?php echo $pr_link; ?>">View</a>
								<?php endif; ?>
							</div>
						</div>
						<?php if ($counter % 2 === 0) :?>
						<div class="small-12 medium-6 columns">
						<?php else: ?>
						<div class="small-12 medium-6 medium-pull-6 even-block columns">
						<?php endif; ?>
							<div class="promo-img promo-block">
								<span class="marker"></span>
								<img src="<?php echo $pr_img[0]; ?>" alt="<?php echo get_the_title(get_sub_field('promo_image')) ?>" class="">
							</div>
						</div>
					</div>
					
					<?php $counter++; 
						endwhile; ?>
					
				</div>
				
				<?php endif; ?>
			</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

<?php get_footer();
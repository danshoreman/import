<?php get_header(); 
	
	$product_img		= wp_get_attachment_image_src(get_field('product_image'), 'full');
	$product_copy	 	= get_field('product_copy');
	$product_price 	= get_field('product_price');
	$product_run 		= get_field('product_run_no');
	$product_info 	= get_field('product_information');
	
?>
	
	<div class="row">
	
		<div class="small-12 columns">
		
		<div class="productWrap">

			<?php while (have_posts()) : the_post(); ?>
			
				<header>
					
					<h2><?php the_title(); ?></h2>
				
				</header>

				<img src="<?php echo $product_img[0]; ?>" class="" alt="<?php echo get_the_title(get_field('product_image')) ?>">
				
				<?php echo $product_copy; ?>
				
				<div class="row">
					<div class="small-12 large-6 columns">
						<?php echo $product_price; ?>
					</div>
					<div class="small-12 large-6 columns">
						<?php echo $product_run; ?>
					</div>
					<div class="small-12 large-6 columns">
						<?php echo $product_info; ?>
					</div>
					<div class="small-12 large-6 columns">
						<?php //echo $product_run; ?>
					</div>
				</div>
			
			<?php endwhile; ?>
	
		</div>
	
		</div>

	</div>

<?php get_footer();

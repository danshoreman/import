<?php get_header(); 
	
	$product_img		= wp_get_attachment_image_src(get_field('product_image'), 'full');
	$product_copy	 	= get_field('product_copy');
	$product_price 	= get_field('product_price');
	$product_run 		= get_field('product_run_no');
	$product_info 	= get_field('product_information');
	$product_size 	= get_field('product_size');
	
?>
	
	<div class="row">
	
		<div class="small-12 columns">
		
		<div class="customWrap">

			<?php while (have_posts()) : the_post(); ?>
			
				<header class="customHeader">
					
					<h2><?php the_title(); ?></h2>
				
				</header>
				
				<div class="row">
					<div class="small-12 large-8 large-offset-2 columns">

					<img src="<?php echo $product_img[0]; ?>" class="creazzoImg" alt="<?php echo get_the_title(get_field('product_image')) ?>">
					
					<div class="customIntro"><?php echo $product_copy; ?></div>
					
					<div class="row customForm">
						<div class="small-12 medium-6 columns">
							<p class="">£<?php echo $product_price; ?></p>
						</div>
						<div class="small-12 medium-6 columns">
							<p class="">Run of <?php echo $product_run; ?></p>
						</div>
						<div class="small-12 medium-6 columns">
							<span class="title">Information</span>
							<?php echo $product_info; ?>
						</div>
						<div class="small-12 medium-6 columns">
							<span class="title">Sizes Available</span>
							<?php echo $product_size; ?>
						</div>
					</div>
				
					<h3 class="orderTitle">Order</h3>
					
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				
					</div>
				</div>
			
			<?php endwhile; ?>
	
		</div>
	
		</div>

	</div>

<?php get_footer();

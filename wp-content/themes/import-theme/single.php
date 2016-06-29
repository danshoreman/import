<?php get_header(); ?>
	
	<div class="row">
	
		<div class="small-12 medium-4 large-3 columns">
		
		<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
		?>
		
		</div>
		<div class="small-12 medium-8 large-9 columns">
		
		<div class="newsWrap">

			<?php while (have_posts()) : the_post(); ?>
			
				<header>
					
					<h2><?php the_title(); ?></h2>
				
				</header>

					<?php if ( has_post_thumbnail()) : ?>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						
							<?php the_post_thumbnail(); ?>
						
						</a>
					
					<?php endif; ?>
					
					<?php the_content();

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				
					endwhile; ?>
	
		</div>
	
		</div>

	</div>

<?php get_footer();

<?php 

/*
Template Name: News
*/

get_header(); ?>
	
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

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				
				<header class="article-header">
					
					<h1>
						
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					
					</h1>
				
				</header>
				
				<section class="entry-content">
					
					<?php if ( has_post_thumbnail()) : ?>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						
							<?php the_post_thumbnail(); ?>
						
						</a>
					
					<?php endif; ?>
					
					<?php the_excerpt(); ?>
				
				</section>
				
				<footer class="article-footer">
					
					<p>This is the article footer content</p>
				
				</footer>

			</article>
			
			<?php endwhile; ?>
			
			<?php else : ?>
			
			<article class="post-not-found">
				
				<header class="not-found-header">
					
					<h1><?php _e( 'Nothing Found!' ); ?></h1>
				
				</header>
				
				<section class="not-found-content">
					
					<p><?php _e( 'Please check what you are looking for' ); ?></p>
				
				</section>
			
			</article>
			
			<?php endif; ?>
			
			
		
		</div>
		
	</div>

<?php get_footer();
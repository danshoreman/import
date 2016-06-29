<?php

function scripts_and_styles() {
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		
		// respond
		wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array(), null, true );
		wp_enqueue_script( 'respondjs' );
		
		
		// modernizr (without media query polyfill)
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', true );
		wp_enqueue_script( 'modernizr' );
		
		
		// bxslider
		wp_register_script( 'slider', get_stylesheet_directory_uri() . '/library/js/libs/min/jquery.bxslider.min.js', array(), 'null', false );
		wp_enqueue_script( 'slider' );
		
		
		// bxslider
		wp_register_style( 'sliderstyles', get_stylesheet_directory_uri() . '/library/css/jquery.bxslider.css', array(), 'all' );
		wp_enqueue_style( 'sliderstyles' );

		
		// register icon fonts stylesheet
		wp_register_style( 'fontstyle', get_stylesheet_directory_uri() . '/library/css/font-style.css', array(), '', 'all' );
		wp_enqueue_style( 'fontstyle' );
		
		// register rem support script
		wp_register_script( 'rem', get_stylesheet_directory_uri() . '/library/js/libs/rem.min.js', array(), null, false );
		wp_enqueue_script( 'rem' );
		
		
		// register styles for our theme
		wp_register_style( 'respgrid', get_template_directory_uri() . '/library/css/foundation.css', array(), 'all' );
		wp_enqueue_style( 'respgrid' );
		
		// register main stylesheet
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'stylesheet' );
		
		// register all scripts
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/library/js/scripts.js', array(), null, true );
		wp_enqueue_script( 'allscripts' );
		
		
		
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

function woocommerce_template_product_description() {
woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );


add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
function woo_archive_custom_cart_button_text() {
 
        return __( 'View', 'woocommerce' );
 
}


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

add_action( 'woocommerce_after_shop_loop_item', 'my_woocommerce_template_loop_add_to_cart', 10 );

function my_woocommerce_template_loop_add_to_cart() {
    echo '
            <a href="' . get_permalink() . '" class="button add_to_cart_button product_type_simple">View</a>
          ';
}



// enqueue google fonts
function google_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
  wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'google_fonts');
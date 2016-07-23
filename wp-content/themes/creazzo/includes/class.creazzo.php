<?php

class Creazzo {

  private $singular = 'creazzo';
  public  $plural   = 'Creazzo';

  function __construct() {
    add_action( 'init', array( $this,'register' ), 0 );
  }

  function register() {

  	$labels = array(
  		'name'                => _x( ucfirst($this->plural), 'Post Type General Name', 'text_domain' ),
  		'singular_name'       => _x( ucfirst($this->singular), 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( ucfirst($this->plural), 'text_domain' ),
      'parent_item_colon'   => __( 'Parent ' . ucfirst($this->singular) . ':', 'text_domain' ),
      'all_items'           => __( 'All ' . ucfirst($this->plural), 'text_domain' ),
      'view_item'           => __( 'View ' . ucfirst($this->singular), 'text_domain' ),
      'add_new_item'        => __( 'Add New ' . ucfirst($this->singular), 'text_domain' ),
      'add_new'             => __( 'Add New', 'text_domain' ),
      'edit_item'           => __( 'Edit ' . ucfirst($this->singular), 'text_domain' ),
      'update_item'         => __( 'Update ' . ucfirst($this->singular), 'text_domain' ),
      'search_items'        => __( 'Search ' . ucfirst($this->singular), 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
      'label'               => __( $this->singular, 'text_domain' ),
      'description'         => __( ucfirst($this->plural), 'text_domain' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'thumbnail' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'rewrite'             => array('slug' => 'creazzo')
    );

    register_post_type( $this->singular, $args );
    
    
  }

}

$creazzo = new Creazzo();
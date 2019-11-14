<?php
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

/***************** Meta *****************/

function meta_value( $meta_key, $post_id ){
	          global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = '$meta_key' and post_id = '$post_id'"); 
              foreach($result_link as $r)
              {
                      $value = $r->meta_value;                      
              }
              return $value;

}

/******************Excerp*****************/
function custom_excerpt_length( $length ) {
  return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/***************Functions theme ********************/

function theme_customize_register($wp_customize){
  $wp_customize->add_panel('panel1',
        array(
            'title' => 'Home Sections',
            'priority' => 1,
            )
        );
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_banner.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_check.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_users.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_readers.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_testimonials.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer_clients.php';
  

  /********** Contact information  ***************/  
  $wp_customize->add_panel('panel6',
        array(
            'title' => 'Contact information',
            'priority' => 6,
            )
        );
 
    require_once trailingslashit( get_template_directory() ) . 'inc/contact/customizer_contact.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/contact/customizer_social_networks.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/contact/customizer_form_contact.php';
 
/********** Software  ***************/ 

  $wp_customize->add_panel('panel3',
        array(
            'title' => 'Page Software',
            'priority' => 3,
            )
        );

    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_banner.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_users.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_dashboard.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_control.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_check.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/software/customizer_sections.php';
 

} 
add_action('customize_register','theme_customize_register');

//Custom Type
/*********** TESTIMONIALS ***********/ 
function custom_post_type_testimonials() {

  $labels = array(
    'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Testimonials', 'text_domain' ),
    'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items', 'text_domain' ),
    'all_items'             => __( 'All Testimonials', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_items'            => __( 'See Items', 'text_domain' ),
    'search_items'          => __( 'Search Items', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'items List', 'text_domain' ),
    'items_list_navigation' => __( 'items List Navigation', 'text_domain' ),
    'filter_items_list'     => __( 'filter Items List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Testimonial', 'text_domain' ),
    'description'           => __( 'Testimonial image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => '' . get_stylesheet_directory_uri() . '/assets/img/company/ico.png',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials', 0 );

/*********** CLIENTS ***********/ 
function custom_post_type_client() {

  $labels = array(
    'name'                  => _x( 'Clients', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Clients', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Clients', 'text_domain' ),
    'name_admin_bar'        => __( 'Clients', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items', 'text_domain' ),
    'all_items'             => __( 'All Clients', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_items'            => __( 'See Items', 'text_domain' ),
    'search_items'          => __( 'Search Items', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'items List', 'text_domain' ),
    'items_list_navigation' => __( 'items List Navigation', 'text_domain' ),
    'filter_items_list'     => __( 'filter Items List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Clients', 'text_domain' ),
    'description'           => __( 'Clients image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => '' . get_stylesheet_directory_uri() . '/assets/img/company/ico.png',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'client', $args );

}
add_action( 'init', 'custom_post_type_client', 0 );


?>
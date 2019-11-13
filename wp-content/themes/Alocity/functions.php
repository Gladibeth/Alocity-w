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
  return 15;
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

  /////Banner
  /*****************banner1 ******************/
  $wp_customize->add_section('banner', array (
    'title' => 'Main Banner',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('banner1_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_title_control', array (
    'label' => 'First Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner1_title',
  )));

  $wp_customize->add_setting('banner1_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner1_subtitle',
  )));

  $wp_customize->add_setting('banner1_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner1_image_control', array (
    'description' => 'Image',
    'section' => 'banner',
    'settings' => 'banner1_image'
  )));
  /*****************banner2 ******************/
   $wp_customize->add_setting('banner2_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_title_control', array (
    'label' => 'Second Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner2_title',
  )));

  $wp_customize->add_setting('banner2_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner2_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner2_subtitle',
  )));

  $wp_customize->add_setting('banner2_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner2_image_control', array (
    'description' => 'Image',
    'section' => 'banner',
    'settings' => 'banner2_image'
  )));

  /*****************banner3 ******************/ 
   $wp_customize->add_setting('banner3_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_title_control', array (
    'label' => 'Third Banner',
    'description' => 'Title',
    'section' => 'banner',
    'settings' => 'banner3_title',
  )));

  $wp_customize->add_setting('banner3_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner3_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'banner',
    'settings' => 'banner3_subtitle',
  )));

  $wp_customize->add_setting('banner3_image');

  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner3_image_control', array (
    'description' => 'Image',
    'section' => 'banner',
    'settings' => 'banner3_image'
  ))); 

 /////Check

  $wp_customize->add_section('check', array (
    'title' => 'Main Check',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_check', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_check_control', array (
    'label' => 'Background Color',
    'section' => 'check',
    'settings' => 'background_check',
  )));

  $wp_customize->add_setting('check_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'check_title_control', array (
    'label' => 'Title',
    'section' => 'check',
    'settings' => 'check_title',
  )));

  $wp_customize->add_setting('check_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'check_content_control', array (
    'label' => 'Content',
    'section' => 'check',
    'settings' => 'check_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('check_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'check_image_control', array (
    'label' => 'Image',
    'section' => 'check',
    'settings' => 'check_image'
  )));

 $wp_customize->add_setting('check_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'check_button_control', array (
    'label' => 'Button',
    'section' => 'check',
    'settings' => 'check_button',
  )));

 $wp_customize->add_setting('check_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'check_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'check',
    'settings' => 'check_urlbutton',
  )));

/////Users

  $wp_customize->add_section('users', array (
    'title' => 'Main Users',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_users', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_users_control', array (
    'label' => 'Background Color',
    'section' => 'users',
    'settings' => 'background_users',
  )));

   //Users boxing
  for ($i=1; $i <=9 ; $i++) {   

     $wp_customize->add_setting('users'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'users'.$i.'_title_control', array (
       'label' => 'Users '.$i.'',
       'description' => 'Title',
       'section' => 'users',
       'settings' => 'users'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('users'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'users'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'users',
        'settings' => 'users'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('users'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'users'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'users',
        'settings' => 'users'.$i.'_icon'
      )));
  }

////Readers

  $wp_customize->add_section('readers', array (
    'title' => 'Main Readers',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_readers', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_readers_control', array (
    'label' => 'Background Color',
    'section' => 'readers',
    'settings' => 'background_readers',
  )));

  $wp_customize->add_setting('readers_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_title_control', array (
    'label' => 'Title',
    'section' => 'readers',
    'settings' => 'readers_title',
  )));

  $wp_customize->add_setting('readers_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_content_control', array (
    'label' => 'Content',
    'section' => 'readers',
    'settings' => 'readers_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('readers_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'readers_image_control', array (
    'label' => 'Image',
    'section' => 'readers',
    'settings' => 'readers_image'
  )));

 $wp_customize->add_setting('readers_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_button_control', array (
    'label' => 'Button',
    'section' => 'readers',
    'settings' => 'readers_button',
  )));

 $wp_customize->add_setting('readers_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'readers',
    'settings' => 'readers_urlbutton',
  )));  

   //readers boxing
  for ($i=1; $i <=6 ; $i++) {   

     $wp_customize->add_setting('readers'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers'.$i.'_title_control', array (
       'label' => 'Readers '.$i.'',
       'description' => 'Title',
       'section' => 'readers',
       'settings' => 'readers'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('readers'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers'.$i.'_content_control', array (
        'description' => 'Content',
        'section' => 'readers',
        'settings' => 'readers'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('readers'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'readers'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'readers',
        'settings' => 'readers'.$i.'_icon'
      )));
  }
    
////Testimonials

  $wp_customize->add_section('testimonials', array (
    'title' => 'Main Testimonials',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('testimonials_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonials_title_control', array (
    'label' => 'Title',
    'section' => 'testimonials',
    'settings' => 'testimonials_title',
  )));

  $wp_customize->add_setting('testimonials_background_type', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonials_background_type_control', array (
    'label' => 'Type of Background',
    'section' => 'testimonials',
    'settings' => 'testimonials_background_type',
    'type'     => 'radio',
    'choices'  => array(
      'image' => 'Image',
      'color' => 'Color',
    ),
  )));

  $wp_customize->add_setting('background_testimonials', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_testimonials_control', array (
    'description' => 'Background Color',
    'section' => 'testimonials',
    'settings' => 'background_testimonials',
  )));

  $wp_customize->add_setting('testimonials_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials_image_control', array (
    'description' => 'Background Image',
    'section' => 'testimonials',
    'settings' => 'testimonials_image'
  )));  




  
  

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
    'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
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


?>
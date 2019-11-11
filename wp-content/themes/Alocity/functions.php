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

?>
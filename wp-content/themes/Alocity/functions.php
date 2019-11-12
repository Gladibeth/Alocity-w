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
    

  
  

} 
add_action('customize_register','theme_customize_register');



?>
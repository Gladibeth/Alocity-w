 <?php
   //////////////CONTACT  
  $wp_customize->add_section('contact', array (
    'title' => 'Contact',
    'panel' => 'panel6'
  ));

  $wp_customize->add_setting('email', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_control', array (
    'label' => 'Email',
    'section' => 'contact',
    'settings' => 'email'
  )));

  $wp_customize->add_setting('phone', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_control', array (
    'label' => 'Phone',
    'section' => 'contact',
    'settings' => 'phone'
  )));  

  $wp_customize->add_setting('direction', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'direction_control', array (
    'label' => 'Address',
    'section' => 'contact',
    'settings' => 'direction',
    'type' => 'textarea'
  )));    

  //////////////SOCIAL NETWORKS 
  $wp_customize->add_section('social', array (
    'title' => 'Social Networks',
    'panel' => 'panel6'
  ));

  $wp_customize->add_setting('facebook', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_control', array (
    'label' => 'Facebook',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'facebook'
  )));
  
  $wp_customize->add_setting('facebook_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facebook_image_control', array (
    'description' => 'Icon',
    'section' => 'social',
    'settings' => 'facebook_image'
  )));

  $wp_customize->add_setting('linkedin', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin_control', array (
    'label' => 'Linkedin',
    'description' => 'Url',    
    'section' => 'social',
    'settings' => 'linkedin'
  )));

  $wp_customize->add_setting('linkedin_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'linkedin_image_control', array (
    'description' => 'Icon',
    'section' => 'social',
    'settings' => 'linkedin_image'
  )));  

  $wp_customize->add_setting('instagram', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_control', array (
    'label' => 'Instagram',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'instagram'
  )));  

  $wp_customize->add_setting('instagram_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'instagram_image_control', array (
    'description' => 'Icon',
    'section' => 'social',
    'settings' => 'instagram_image'
  )));

  $wp_customize->add_setting('twitter', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter_control', array (
    'label' => 'Twitter',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'twitter'
  )));
    
  $wp_customize->add_setting('twitter_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'twitter_image_control', array (
    'description' => 'Icon',
    'section' => 'social',
    'settings' => 'twitter_image'
  )));
?>
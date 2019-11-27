 <?php
 /////Prcing Banner

  $wp_customize->add_section('pricing_banner', array (
    'title' => 'Pricing Banner',
    'panel' => 'panel5'
  ));

  $wp_customize->add_setting('pricing_banner_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_banner_title_control', array (
    'label' => 'Banner',
    'description' => 'Title',
    'section' => 'pricing_banner',
    'settings' => 'pricing_banner_title',
  )));

  $wp_customize->add_setting('pricing_banner_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_banner_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'pricing_banner',
    'settings' => 'pricing_banner_subtitle',
  )));
  
  $wp_customize->add_setting('pricing_banner_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image_control', array (
    'description' => 'Image',
    'section' => 'pricing_banner',
    'settings' => 'pricing_banner_image'
  )));
    
?>
 <?php
 /////Hardware Banner

  $wp_customize->add_section('hardware_banner', array (
    'title' => 'Hardware Banner',
    'panel' => 'panel4'
  ));

  $wp_customize->add_setting('hardware_banner_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_banner_title_control', array (
    'label' => 'Banner',
    'description' => 'Title',
    'section' => 'hardware_banner',
    'settings' => 'hardware_banner_title',
  )));

  $wp_customize->add_setting('hardware_banner_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_banner_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'hardware_banner',
    'settings' => 'hardware_banner_subtitle',
  )));

  $wp_customize->add_setting('hardware_banner_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_banner_content_control', array (
    'description' => 'Content',
    'section' => 'hardware_banner',
    'settings' => 'hardware_banner_content',
  )));  
  
  $wp_customize->add_setting('hardware_banner_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hardware_banner_image_control', array (
    'description' => 'Image',
    'section' => 'hardware_banner',
    'settings' => 'hardware_banner_image'
  )));
    
?>
 <?php
 /////Company Banner

  $wp_customize->add_section('company_banner', array (
    'title' => 'Company Banner',
    'panel' => 'panel7'
  ));

  $wp_customize->add_setting('company_banner_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner_title_control', array (
    'label' => 'Banner',
    'description' => 'Title',
    'section' => 'company_banner',
    'settings' => 'company_banner_title',
  )));

  $wp_customize->add_setting('company_banner_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner_subtitle_control', array (
    'label' => 'Banner',
    'description' => 'Subtitle',
    'section' => 'company_banner',
    'settings' => 'company_banner_subtitle',
  )));

  $wp_customize->add_setting('company_banner_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner_content_control', array (
    'description' => 'Content',
    'section' => 'company_banner',
    'settings' => 'company_banner_content',
    'type' => 'textarea'
  )));  
  
  $wp_customize->add_setting('company_banner_image1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'company_banner_image1_control', array (
    'description' => 'Image 1',
    'section' => 'company_banner',
    'settings' => 'company_banner_image1'
  )));

  $wp_customize->add_setting('company_banner_image2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'company_banner_image2_control', array (
    'description' => 'Image 2',
    'section' => 'company_banner',
    'settings' => 'company_banner_image2'
  )));  
    
?>
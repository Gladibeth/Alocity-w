 <?php
////// Hardware Information

  $wp_customize->add_section('hardware_information', array (
    'title' => 'Hardware Information',
    'panel' => 'panel4'
  ));

  $wp_customize->add_setting('background_hardware_information', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_hardware_information_control', array (
    'label' => 'Background Color',
    'section' => 'hardware_information',
    'settings' => 'background_hardware_information',
  )));

  $wp_customize->add_setting('hardware_information_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_information_title_control', array (
    'label' => 'Title',
    'section' => 'hardware_information',
    'settings' => 'hardware_information_title',
  )));

  $wp_customize->add_setting('hardware_information_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_information_content_control', array (
    'label' => 'Content',
    'section' => 'hardware_information',
    'settings' => 'hardware_information_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('hardware_information_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hardware_information_image_control', array (
    'label' => 'Image',
    'section' => 'hardware_information',
    'settings' => 'hardware_information_image'
  )));


?>
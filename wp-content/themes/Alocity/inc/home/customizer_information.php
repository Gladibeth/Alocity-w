 <?php
////Information

  $wp_customize->add_section('information', array (
    'title' => 'Main Information',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_information', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_information_control', array (
    'label' => 'Background Color',
    'section' => 'information',
    'settings' => 'background_information',
  )));

  $wp_customize->add_setting('information_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'information_title_control', array (
    'label' => 'Title',
    'section' => 'information',
    'settings' => 'information_title',
  )));

  $wp_customize->add_setting('information_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'information_content_control', array (
    'label' => 'Content',
    'section' => 'information',
    'settings' => 'information_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('information_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'information_image_control', array (
    'label' => 'Image',
    'section' => 'information',
    'settings' => 'information_image'
  )));

 $wp_customize->add_setting('information_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'information_button_control', array (
    'label' => 'Button',
    'section' => 'information',
    'settings' => 'information_button',
  )));

 $wp_customize->add_setting('information_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'information_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'information',
    'settings' => 'information_urlbutton',
  )));

?>
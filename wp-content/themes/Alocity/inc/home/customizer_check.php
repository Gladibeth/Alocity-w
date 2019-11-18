 <?php
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
?>
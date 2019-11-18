 <?php
  ///// Software Check

  $wp_customize->add_section('software_check', array (
    'title' => 'Software Check',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('background_software_check', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_software_check_control', array (
    'label' => 'Background Color',
    'section' => 'software_check',
    'settings' => 'background_software_check',
  )));

  $wp_customize->add_setting('software_check_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_check_title_control', array (
    'label' => 'Title',
    'section' => 'software_check',
    'settings' => 'software_check_title',
  )));

  $wp_customize->add_setting('software_check_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_check_content_control', array (
    'label' => 'Content',
    'section' => 'software_check',
    'settings' => 'software_check_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('software_check_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'software_check_image_control', array (
    'label' => 'Image',
    'section' => 'software_check',
    'settings' => 'software_check_image'
  )));

 $wp_customize->add_setting('software_check_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_check_button_control', array (
    'label' => 'Button',
    'section' => 'software_check',
    'settings' => 'software_check_button',
  )));

 $wp_customize->add_setting('software_check_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_check_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'software_check',
    'settings' => 'software_check_urlbutton',
  )));
?>
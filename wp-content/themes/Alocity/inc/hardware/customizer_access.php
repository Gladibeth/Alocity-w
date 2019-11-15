 <?php
////// Hardware Access

  $wp_customize->add_section('hardware_access', array (
    'title' => 'Hardware access',
    'panel' => 'panel4'
  ));

  $wp_customize->add_setting('background_hardware_access', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_hardware_access_control', array (
    'label' => 'Background Color',
    'section' => 'hardware_access',
    'settings' => 'background_hardware_access',
  )));

  $wp_customize->add_setting('hardware_access_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_access_title_control', array (
    'label' => 'Title',
    'section' => 'hardware_access',
    'settings' => 'hardware_access_title',
  )));


?>
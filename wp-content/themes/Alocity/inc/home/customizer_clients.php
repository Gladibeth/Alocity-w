 <?php
 ////Clients

  $wp_customize->add_section('client', array (
    'title' => 'Main Clients',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_client', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_client_control', array (
    'label' => 'Background Color',
    'section' => 'client',
    'settings' => 'background_client',
  )));

  $wp_customize->add_setting('client_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'client_title_control', array (
    'label' => 'Title',
    'section' => 'client',
    'settings' => 'client_title',
  )));

  $wp_customize->add_setting('client_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'client_subtitle_control', array (
    'label' => 'Subtitle',
    'section' => 'client',
    'settings' => 'client_subtitle',
  )));


?>
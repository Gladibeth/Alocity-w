 <?php
  ///// Pricing Sections
  $wp_customize->add_section('pricing_sections', array (
    'title' => 'Pricing Sections',
    'description' => 'Select the sections of the home you want to be displayed on this page.',    
    'panel' => 'panel5'
  ));


  $wp_customize->add_setting('pricing_sections_check', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_check_control', array (
    'label' => 'Main Check',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_check',
    'type'     => 'checkbox', 
  )));

  $wp_customize->add_setting('pricing_sections_users', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_users_control', array (
    'label' => 'Main Users',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_users',
    'type'     => 'checkbox',
  ))); 

  $wp_customize->add_setting('pricing_sections_readers', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_readers_control', array (
    'label' => 'Main Readers',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_readers',
    'type'     => 'checkbox',
  )));    

  $wp_customize->add_setting('pricing_sections_testimonials', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_testimonials_control', array (
    'label' => 'Main Testimonials',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_testimonials',
    'type'     => 'checkbox',
  )));  

  $wp_customize->add_setting('pricing_sections_clients', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_clients_control', array (
    'label' => 'Main Clients',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_clients',
    'type'     => 'checkbox',

  )));  

  $wp_customize->add_setting('pricing_sections_information', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_sections_information_control', array (
    'label' => 'Main Information',
    'section' => 'pricing_sections',
    'settings' => 'pricing_sections_information',
    'type'     => 'checkbox',

  )));   


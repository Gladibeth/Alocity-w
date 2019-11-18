 <?php
  ///// Software Sections
  $wp_customize->add_section('software_sections', array (
    'title' => 'Software Sections',
    'description' => 'Select the sections of the home you want to be displayed on this page.',  
    'panel' => 'panel3'
  ));


  $wp_customize->add_setting('software_sections_check', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_check_control', array (
    'label' => 'Main Check',
    'section' => 'software_sections',
    'settings' => 'software_sections_check',
    'type'     => 'checkbox', 
  )));

  $wp_customize->add_setting('software_sections_users', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_users_control', array (
    'label' => 'Main Users',
    'section' => 'software_sections',
    'settings' => 'software_sections_users',
    'type'     => 'checkbox',
  ))); 

  $wp_customize->add_setting('software_sections_readers', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_readers_control', array (
    'label' => 'Main Readers',
    'section' => 'software_sections',
    'settings' => 'software_sections_readers',
    'type'     => 'checkbox',
  )));    

  $wp_customize->add_setting('software_sections_testimonials', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_testimonials_control', array (
    'label' => 'Main Testimonials',
    'section' => 'software_sections',
    'settings' => 'software_sections_testimonials',
    'type'     => 'checkbox',
  )));  

  $wp_customize->add_setting('software_sections_clients', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_clients_control', array (
    'label' => 'Main Clients',
    'section' => 'software_sections',
    'settings' => 'software_sections_clients',
    'type'     => 'checkbox',

  )));  

  $wp_customize->add_setting('software_sections_information', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_sections_information_control', array (
    'label' => 'Main Information',
    'section' => 'software_sections',
    'settings' => 'software_sections_information',
    'type'     => 'checkbox',

  )));   


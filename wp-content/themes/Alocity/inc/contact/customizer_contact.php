 <?php
   //////////////CONTACT  
  $wp_customize->add_section('contact', array (
    'title' => 'Contact',
    'panel' => 'panel6'
  ));

  $wp_customize->add_setting('email', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_control', array (
    'label' => 'Email',
    'section' => 'contact',
    'settings' => 'email'
  )));

  $wp_customize->add_setting('phone', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_control', array (
    'label' => 'Phone',
    'section' => 'contact',
    'settings' => 'phone'
  )));  

  $wp_customize->add_setting('address', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_control', array (
    'label' => 'Address',
    'section' => 'contact',
    'settings' => 'address',
    'type' => 'textarea'
  )));    


?>
 <?php
 /////////FORM CONTACT

  $wp_customize->add_section('contact_form', array (
    'title' => 'Contact Form',
    'panel' => 'panel6'
  ));

    $wp_customize->add_setting('contact_form_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_form_title_control', array (
    'label' => 'title',
    'section' => 'contact_form',
    'settings' => 'contact_form_title',
  )));

  $wp_customize->add_setting('background_contact_form', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_contact_form_control', array (
    'label' => 'Background Color',
    'section' => 'contact_form',
    'settings' => 'background_contact_form',
  )));

  $wp_customize->add_setting('contact_form_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_form_image_control', array (
    'description' => 'Image',
    'section' => 'contact_form',
    'settings' => 'contact_form_image'
  )));
    
?>
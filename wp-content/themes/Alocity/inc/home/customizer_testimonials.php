 <?php
 ////Testimonials

  $wp_customize->add_section('testimonials', array (
    'title' => 'Main Testimonials',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('testimonials_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonials_title_control', array (
    'label' => 'Title',
    'section' => 'testimonials',
    'settings' => 'testimonials_title',
  )));

  $wp_customize->add_setting('testimonials_background_type', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonials_background_type_control', array (
    'label' => 'Type of Background',
    'section' => 'testimonials',
    'settings' => 'testimonials_background_type',
    'type'     => 'radio',
    'choices'  => array(
      'image' => 'Image',
      'color' => 'Color',
    ),
  )));

  $wp_customize->add_setting('background_testimonials', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_testimonials_control', array (
    'description' => 'Background Color',
    'section' => 'testimonials',
    'settings' => 'background_testimonials',
  )));

  $wp_customize->add_setting('testimonials_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials_image_control', array (
    'description' => 'Background Image',
    'section' => 'testimonials',
    'settings' => 'testimonials_image'
  )));  
?>
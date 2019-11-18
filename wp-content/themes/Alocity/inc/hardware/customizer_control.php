 <?php
 /////Hardware Control

  $wp_customize->add_section('hardware_control', array (
    'title' => 'Hardware Control',
    'panel' => 'panel4'
  ));

  $wp_customize->add_setting('background_hardware_control', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_hardware_control _control', array (
    'label' => 'Background Color',
    'section' => 'hardware_control',
    'settings' => 'background_hardware_control',
  )));

  $wp_customize->add_setting('hardware_control_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_control_title_control', array (
    'label' => 'Hardware control',
    'description' => 'Title',
    'section' => 'hardware_control',
    'settings' => 'hardware_control_title',
  )));

  $wp_customize->add_setting('hardware_control_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_control_subtitle_control', array (
    'label' => 'Hardware control',
    'description' => 'Subtitle',
    'section' => 'hardware_control',
    'settings' => 'hardware_control_subtitle',
  )));

  $wp_customize->add_setting('hardware_control_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hardware_control_image_control', array (
    'description' => 'Image',
    'section' => 'hardware_control',
    'settings' => 'hardware_control_image'
  )));

   //control cards

  for ($i=1; $i <=4 ; $i++) {   

     $wp_customize->add_setting('hardware_control'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_control'.$i.'_title_control', array (
       'label' => 'Hardware control '.$i.'',
       'description' => 'Title',
       'section' => 'hardware_control',
       'settings' => 'hardware_control'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('hardware_control'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_control'.$i.'_content_control', array (
        'description' => 'Content',
        'section' => 'hardware_control',
        'settings' => 'hardware_control'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('hardware_control'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hardware_control'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'hardware_control',
        'settings' => 'hardware_control'.$i.'_icon'
      )));
  }
?>
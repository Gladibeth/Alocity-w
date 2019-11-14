 <?php
 /////Software Control

  $wp_customize->add_section('software_control', array (
    'title' => 'Software Control',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('background_software_control', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_software_control _control', array (
    'label' => 'Background Color',
    'section' => 'software_control',
    'settings' => 'background_software_control',
  )));

  $wp_customize->add_setting('software_control_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_control_title_control', array (
    'label' => 'Software control',
    'description' => 'Title',
    'section' => 'software_control',
    'settings' => 'software_control_title',
  )));

  $wp_customize->add_setting('software_control_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'software_control_image_control', array (
    'description' => 'Image',
    'section' => 'software_control',
    'settings' => 'software_control_image'
  )));

   //control cards

  for ($i=1; $i <=4 ; $i++) {   

     $wp_customize->add_setting('software_control'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_control'.$i.'_title_control', array (
       'label' => 'Software control '.$i.'',
       'description' => 'Title',
       'section' => 'software_control',
       'settings' => 'software_control'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('software_control'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_control'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'software_control',
        'settings' => 'software_control'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('software_control'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'software_control'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'software_control',
        'settings' => 'software_control'.$i.'_icon'
      )));
  }
?>
 <?php
 ////Readers

  $wp_customize->add_section('readers', array (
    'title' => 'Main Readers',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_readers', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_readers_control', array (
    'label' => 'Background Color',
    'section' => 'readers',
    'settings' => 'background_readers',
  )));

  $wp_customize->add_setting('readers_title', array(
    'default' => ''
  ));  

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_title_control', array (
    'label' => 'Title',
    'section' => 'readers',
    'settings' => 'readers_title',
  )));

  $wp_customize->add_setting('readers_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_content_control', array (
    'label' => 'Content',
    'section' => 'readers',
    'settings' => 'readers_content',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('readers_image');
 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'readers_image_control', array (
    'label' => 'Image',
    'section' => 'readers',
    'settings' => 'readers_image'
  )));

 $wp_customize->add_setting('readers_button', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_button_control', array (
    'label' => 'Button',
    'section' => 'readers',
    'settings' => 'readers_button',
  )));

 $wp_customize->add_setting('readers_urlbutton', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers_urlbutton_control', array (
    'label' => 'Url Button',
    'section' => 'readers',
    'settings' => 'readers_urlbutton',
  )));  

   //readers boxing
  for ($i=1; $i <=6 ; $i++) {   

     $wp_customize->add_setting('readers'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers'.$i.'_title_control', array (
       'label' => 'Readers '.$i.'',
       'description' => 'Title',
       'section' => 'readers',
       'settings' => 'readers'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('readers'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'readers'.$i.'_content_control', array (
        'description' => 'Content',
        'section' => 'readers',
        'settings' => 'readers'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('readers'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'readers'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'readers',
        'settings' => 'readers'.$i.'_icon'
      )));
  }
?>
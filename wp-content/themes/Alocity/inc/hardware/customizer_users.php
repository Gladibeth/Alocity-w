 <?php
 /////Hardware Users 

  $wp_customize->add_section('hardware_users', array (
    'title' => 'Hardware Users',
    'panel' => 'panel4'
  ));

  $wp_customize->add_setting('background_hardware_users', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_hardware_users_control', array (
    'label' => 'Background Color',
    'section' => 'hardware_users',
    'settings' => 'background_hardware_users',
  )));


   //Users__item

  for ($i=1; $i <=6 ; $i++) {   

     $wp_customize->add_setting('hardware_users'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_users'.$i.'_title_control', array (
       'label' => 'Hardware Users '.$i.'',
       'description' => 'Title',
       'section' => 'hardware_users',
       'settings' => 'hardware_users'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('hardware_users'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hardware_users'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'hardware_users',
        'settings' => 'hardware_users'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('hardware_users'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hardware_users'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'hardware_users',
        'settings' => 'hardware_users'.$i.'_icon'
      )));
  }
?>
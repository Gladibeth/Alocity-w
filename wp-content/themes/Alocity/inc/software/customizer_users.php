 <?php
 /////Software Users 

  $wp_customize->add_section('software_users', array (
    'title' => 'Software Users',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('background_software_users', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_software_users_control', array (
    'label' => 'Background Color',
    'section' => 'software_users',
    'settings' => 'background_software_users',
  )));

  $wp_customize->add_setting('software_users_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_users_title_control', array (
    'label' => 'Title',
    'section' => 'software_users',
    'settings' => 'software_users_title',
  )));

   //Users__item

  for ($i=1; $i <=9 ; $i++) {   

     $wp_customize->add_setting('software_users'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_users'.$i.'_title_control', array (
       'label' => 'Software Users '.$i.'',
       'description' => 'Title',
       'section' => 'software_users',
       'settings' => 'software_users'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('software_users'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_users'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'software_users',
        'settings' => 'software_users'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('software_users'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'software_users'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'software_users',
        'settings' => 'software_users'.$i.'_icon'
      )));
  }
?>
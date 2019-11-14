 <?php
 /////Users

  $wp_customize->add_section('users', array (
    'title' => 'Main Users',
    'panel' => 'panel1'
  ));

  $wp_customize->add_setting('background_users', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_users_control', array (
    'label' => 'Background Color',
    'section' => 'users',
    'settings' => 'background_users',
  )));

   //Users boxing
  for ($i=1; $i <=9 ; $i++) {   

     $wp_customize->add_setting('users'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'users'.$i.'_title_control', array (
       'label' => 'Users '.$i.'',
       'description' => 'Title',
       'section' => 'users',
       'settings' => 'users'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('users'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'users'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'users',
        'settings' => 'users'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('users'.$i.'_icon');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'users'.$i.'_icon_control', array (
        'description' => 'Icon',
        'section' => 'users',
        'settings' => 'users'.$i.'_icon'
      )));
  }
?>
 <?php
 /////Software Dashboard 

  $wp_customize->add_section('software_dashboard', array (
    'title' => 'Software Dashboard',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('background_software_dashboard', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_software_dashboard _control', array (
    'label' => 'Background Color',
    'section' => 'software_dashboard',
    'settings' => 'background_software_dashboard',
  )));

 

   //dashboard cards

  for ($i=1; $i <=3 ; $i++) {   

     $wp_customize->add_setting('software_dashboard'.$i.'_title', array(
       'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_dashboard'.$i.'_title_control', array (
       'label' => 'Software Dashboard '.$i.'',
       'description' => 'Title',
       'section' => 'software_dashboard',
       'settings' => 'software_dashboard'.$i.'_title',
     )));
 
  
     $wp_customize->add_setting('software_dashboard'.$i.'_content', array(
        'default' => ''
     ));
  
     $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_dashboard'.$i.'_content_control', array (
       'description' => 'Content',
        'section' => 'software_dashboard',
        'settings' => 'software_dashboard'.$i.'_content',
        'type' => 'textarea'
     )));

     $wp_customize->add_setting('software_dashboard'.$i.'_image');
 
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'software_dashboard'.$i.'_image_control', array (
        'description' => 'Image',
        'section' => 'software_dashboard',
        'settings' => 'software_dashboard'.$i.'_image'
      )));
  }
?>
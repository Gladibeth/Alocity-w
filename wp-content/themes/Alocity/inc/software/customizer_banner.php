 <?php
 /////Software Banner
  /*****************banner1 ******************/
for ($i=1; $i <= 3 ; $i++) { 
  $wp_customize->add_section('software_banner', array (
    'title' => 'Software Banner',
    'panel' => 'panel3'
  ));

  $wp_customize->add_setting('software_banner'.$i.'_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_banner'.$i.'_title_control', array (
    'label' => 'Banner '.$i.'',
    'description' => 'Title',
    'section' => 'software_banner',
    'settings' => 'software_banner'.$i.'_title',
  )));

  $wp_customize->add_setting('software_banner'.$i.'_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_banner'.$i.'_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'software_banner',
    'settings' => 'software_banner'.$i.'_subtitle',
  )));

  $wp_customize->add_setting('software_banner'.$i.'_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'software_banner'.$i.'_content_control', array (
    'description' => 'Content',
    'section' => 'software_banner',
    'settings' => 'software_banner'.$i.'_content',
  )));
  
  $wp_customize->add_setting('software_banner'.$i.'_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner'.$i.'_image_control', array (
    'description' => 'Image',
    'section' => 'software_banner',
    'settings' => 'software_banner'.$i.'_image'
  )));

}


    
?>
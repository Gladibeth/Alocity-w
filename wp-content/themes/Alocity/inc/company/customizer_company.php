 <?php
 /////Company Box

  $wp_customize->add_section('company_box', array (
    'title' => 'Company Box',
    'panel' => 'panel7'
  ));

for ($i=1; $i <=3; $i++) { 

  $wp_customize->add_setting('company_box'.$i.'_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_box'.$i.'_title_control', array (
    'label' => 'Box '.$i.'',
    'description' => 'Title',
    'section' => 'company_box',
    'settings' => 'company_box'.$i.'_title',
  )));

  $wp_customize->add_setting('company_box'.$i.'_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_box'.$i.'_content_control', array (
    'description' => 'Content',
    'section' => 'company_box',
    'settings' => 'company_box'.$i.'_content',
    'type' => 'textarea'
  )));   

  $wp_customize->add_setting('company_box'.$i.'_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'company_box'.$i.'_image_control', array (
    'description' => 'Image',
    'section' => 'company_box',
    'settings' => 'company_box'.$i.'_image'
  )));

 
 }   
?>
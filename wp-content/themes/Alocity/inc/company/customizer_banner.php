 <?php
 /////Company Banner

  $wp_customize->add_section('company_banner', array (
    'title' => 'Company Banner',
    'panel' => 'panel7'
  ));

for ($i=1; $i <=3; $i++) { 

  $wp_customize->add_setting('company_banner'.$i.'_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner'.$i.'_title_control', array (
    'label' => 'Banner '.$i.'',
    'description' => 'Title',
    'section' => 'company_banner',
    'settings' => 'company_banner'.$i.'_title',
  )));

  $wp_customize->add_setting('company_banner'.$i.'_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner'.$i.'_subtitle_control', array (
    'description' => 'Subtitle',
    'section' => 'company_banner',
    'settings' => 'company_banner'.$i.'_subtitle',
  )));

  $wp_customize->add_setting('company_banner'.$i.'_content', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_banner'.$i.'_content_control', array (
    'description' => 'Content',
    'section' => 'company_banner',
    'settings' => 'company_banner'.$i.'_content',
    'type' => 'textarea'
  )));  
  
  $wp_customize->add_setting('company_banner'.$i.'_image1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'company_banner'.$i.'_image1_control', array (
    'description' => 'Image One',
    'section' => 'company_banner',
    'settings' => 'company_banner'.$i.'_image1'
  )));

  $wp_customize->add_setting('company_banner'.$i.'_image2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'company_banner'.$i.'_image2_control', array (
    'description' => 'Image Two',
    'section' => 'company_banner',
    'settings' => 'company_banner'.$i.'_image2'
  )));  
 }   
?>
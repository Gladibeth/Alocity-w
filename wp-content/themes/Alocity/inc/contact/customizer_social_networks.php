 <?php
    //////////////SOCIAL NETWORKS 
  $wp_customize->add_section('social', array (
    'title' => 'Social Networks',
    'panel' => 'panel6'
  ));

  $wp_customize->add_setting('facebook', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_control', array (
    'label' => 'Facebook',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'facebook'
  )));
  
 
  $wp_customize->add_setting('linkedin', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin_control', array (
    'label' => 'Linkedin',
    'description' => 'Url',    
    'section' => 'social',
    'settings' => 'linkedin'
  )));

 
  $wp_customize->add_setting('instagram', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_control', array (
    'label' => 'Instagram',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'instagram'
  )));  
 
 

?>
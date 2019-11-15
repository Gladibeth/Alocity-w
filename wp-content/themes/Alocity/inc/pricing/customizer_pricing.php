 <?php
  $wp_customize->add_section('pricing', array (
    'title' => 'Pricing',
    'panel' => 'panel5'
  ));

  $wp_customize->add_setting('background_pricing', array(
    'default' => '',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_pricing_control', array (
    'label' => 'Background Color',
    'section' => 'pricing',
    'settings' => 'background_pricing',
  )));

  $wp_customize->add_setting('pricing_posts', array(
    'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pricing_posts_control', array (
    'label' => 'Number of posts ',
    'section' => 'pricing',
    'settings' => 'pricing_posts',
    'type' => 'number',
  )));  
    
?>
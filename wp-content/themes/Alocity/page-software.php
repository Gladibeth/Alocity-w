<?php get_header(); ?>
  <div class="main-banner">
    <div class="main-banner__content">
    <?php for ($i=1; $i <= 3; $i++) { ?>
     <?php if (get_theme_mod('software_banner'.$i.'_title')!= NULL ) { ?>
      <div class="main-banner__item">
        <div class="mask mask--white">
          <div class="main-banner__text">
            <div class="main-banner__title">
              <h1><?php echo get_theme_mod('software_banner'.$i.'_title'); ?></h1>
              <span><?php echo get_theme_mod('software_banner'.$i.'_subtitle'); ?></span>
              <p><?php echo get_theme_mod('software_banner'.$i.'_content'); ?></p>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_theme_mod('software_banner'.$i.'_image'); ?>">
        </div>
      </div>
    <?php }} ?>   
      
    </div>
  </div>
  <section class="main-users" style="background:<?php echo get_theme_mod('background_software_users'); ?>;">
    <div class="container">
      <div class="main-title__general">
        <h2><?php echo get_theme_mod('software_users_title'); ?></h2>
      </div>
      <div class="row main-content">
      <?php for ($i=1; $i <=9 ; $i++) { 
        if(get_theme_mod('software_users'.$i.'_title')!=NULL){?>      
        <div class="col-lg-4 col-sm-6">
          <div class="main-users__content">
            <div class="main-users__item">
              <div class="main-users__boximg">
                <div class="main-users__img">
                  <img src="<?php echo get_theme_mod('software_users'.$i.'_icon'); ?>">
                </div>
              </div>
            </div>
            <div class="main-users__item">
              <div class="main-users__boxtext">
                <div class="main-users__title">
                  <p><?php echo get_theme_mod('software_users'.$i.'_title'); ?></p>
                </div>
                <div class="main-general__description">
                  <p><?php echo get_theme_mod('software_users'.$i.'_content'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php }} ?>  
        
      </div>
    </div>
  </section>
  <div class="main-dashboard" style="background:<?php echo get_theme_mod('background_software_dashboard'); ?>;">
    <div class="container">
      <div class="row main-dashboard__content">
      <?php for ($i=1; $i <=3 ; $i++) { if($i==1){$target="one-modal";}if($i==2){$target="two-modal";}if($i==3){$target="three-modal";}
        if(get_theme_mod('software_dashboard'.$i.'_title')!=NULL){?>       
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
          <div class="main-dashboard__cards" >
            <div class="main-dashboard__boximg">
              <a class="main-dashboard__img" href="" data-target="#<?php echo $target; ?>" data-toggle="modal">
                <img src="<?php echo get_theme_mod('software_dashboard'.$i.'_image'); ?>">
                <img class="img__two" src="<?php echo get_template_directory_uri(); ?>/assets/img/software/plus.png">
              </a>
              <div class="main-dashboard__img--two">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image.png">
              </div>
            </div>
            <div class="main-dashboard__text">
              <div class="main-dashboard__title">
                <p><?php echo get_theme_mod('software_dashboard'.$i.'_title'); ?></p>
              </div>
              <div class="main-general__description">
                <p><?php echo get_theme_mod('software_dashboard'.$i.'_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?>          
        
      </div>
    </div>
  </div>
  <div class="main-control">
    <div class="row">
      <div class="col-lg-6 col-12 p-0">
        <div class="main-control__img">
          <img src="<?php echo get_theme_mod('software_control_image'); ?>">
        </div>
      </div>
      <div class="col-lg-6 col-12 p-0">
        <div class="main-control__box main-control__box--bg" style="background:<?php echo get_theme_mod('background_software_control'); ?>;">
          <div class="main-title__general main-title__general--left">
            <h2><?php echo get_theme_mod('software_control_title'); ?></h2>
          </div>
          <div class="row main-content">
          <?php for ($i=1; $i <=4 ; $i++) { 
            if(get_theme_mod('software_control'.$i.'_title')!=NULL){?>           
            <div class="col-lg-6 col-sm-6">
              <div class="main-control__subbox">
                <div class="main-control__text">
                  <div class="main-control__icon">
                    <img src="<?php echo get_theme_mod('software_control'.$i.'_icon'); ?>">
                  </div>
                  <div class="main-users__title">
                    <p><?php echo get_theme_mod('software_control'.$i.'_title'); ?></p>
                  </div>
                </div>
                <div class="main-general__description">
                  <p><?php echo get_theme_mod('software_control'.$i.'_content'); ?></p>
                </div>
              </div>
            </div>
          <?php }} ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-check" style="background:<?php echo get_theme_mod('background_software_check'); ?>;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-12">
          <div class="main-check__content">
            <div class="main-title__general main-title__general--width">
              <h2><?php echo get_theme_mod('software_check_title'); ?></h2>
            </div>
            <div class="main-general__description main-general__description--color main-general__description--soft">
              <p><?php echo get_theme_mod('software_check_content'); ?></p>
            </div>
            <div class="main-check__btn">
              <a class="btn_custom btn--small btn--filled" href="<?php echo get_theme_mod('software_check_urlbutton'); ?>"><?php echo get_theme_mod('software_check_button'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-sm-12 p-0">
          <div class="main-check__box">
            <div class="main-control__img main-control__img--two">
              <img src="<?php echo get_theme_mod('software_check_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (get_theme_mod('software_sections_check') == 1) {?>
     <?php  get_template_part('sections/main-check'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('software_sections_users') == 1) {?>
     <?php  get_template_part('sections/main-users'); ?>
  <?php } ?>   
  <?php if (get_theme_mod('software_sections_readers') == 1) {?>
     <?php  get_template_part('sections/main-readers'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('software_sections_testimonials') == 1) {?>
     <?php  get_template_part('sections/main-testimonials'); ?>
  <?php } ?>
  <?php if (get_theme_mod('software_sections_clients') == 1) {?>
     <?php  get_template_part('sections/main-client'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('software_sections_information') == 1) {?>
     <?php  get_template_part('sections/main-infomation'); ?>
  <?php } ?>
 
  
<?php get_footer(); ?>
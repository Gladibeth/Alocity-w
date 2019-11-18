<?php get_header(); ?>
  <div class="main-banner">
    <div class="main-banner__content">
     <?php for ($i=1; $i <= 3; $i++) { ?>
     <?php if (get_theme_mod('company_banner'.$i.'_title')!= NULL ) { ?> 
      <div class="main-banner__item">
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/bg.png">
        </div>
        <div class="main-banner__container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="main-banner__boxtext">
                <div class="main-banner__text main-banner__text--company">
                  <div class="main-banner__title main-banner__title--company">
                    <h1 class="title-company"><?php echo get_theme_mod('company_banner'.$i.'_title'); ?></h1>
                    <span class="subtitle-company"><?php echo get_theme_mod('company_banner'.$i.'_subtitle'); ?></span>
                  </div>
                  <div class="main-banner__description main-banner__description--company">
                    <p><?php echo get_theme_mod('company_banner'.$i.'_content'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="main-banner__imags">
                <div class="main-banner__imags--one">
                  <img src="<?php echo get_theme_mod('company_banner'.$i.'_image1'); ?>">
                </div>
                <div class="main-banner__imags--two">
                  <img src="<?php echo get_theme_mod('company_banner'.$i.'_image2'); ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }} ?>      
      
    </div>
  </div>
  <div class="main-company">
    <div class="row">
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__content">
          <div class="main-company__item">
            <div class="main-company__box">
              <div class="main-users__boximg active">
                <div class="main-users__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/key-3.png">
                                  
                </div>
              </div>
              <div class="main-company__title">
                <p><?php echo get_theme_mod('company_box1_title'); ?></p>
              </div>
              <div class="main-company__description">
                <p><?php echo get_theme_mod('company_box1_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__boximg">
          <div class="main-company__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/bg_2.png">
          </div>
          <div class="main-company__imgs">
            <div class="main-company__imgs--one">
              <img src="<?php echo get_theme_mod('company_box1_image'); ?>">
            </div>
          </div>            
        </div>
      </div>
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__boximg">
          <div class="main-company__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/bg_2.png">
          </div>
          <div class="main-company__imgs">
            <div class="main-company__imgs--one main-company__imgs--pad">
              <img src="<?php echo get_theme_mod('company_box2_image'); ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__content">
          <div class="main-company__item">
            <div class="main-company__box">
              <div class="main-users__boximg active">
                <div class="main-users__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/key-3.png">
                </div>
              </div>
              <div class="main-company__title">
                <p><?php echo get_theme_mod('company_box2_title'); ?></p>
              </div>
              <div class="main-company__description">
                <p><?php echo get_theme_mod('company_box2_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__content">
          <div class="main-company__item">
            <div class="main-company__box">
              <div class="main-users__boximg active">
                <div class="main-users__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/key-3.png">
                </div>
              </div>
              <div class="main-company__title">
                <p><?php echo get_theme_mod('company_box3_title'); ?></p>
              </div>
              <div class="main-company__description">
                <p><?php echo get_theme_mod('company_box3_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0 col-order">
        <div class="main-company__boximg">
          <div class="main-company__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/bg_2.png">
          </div>
          <div class="main-company__imgs">
            <div class="main-company__imgs--one">
              <img src="<?php echo get_theme_mod('company_box3_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (get_theme_mod('company_sections_check') == 1) {?>
     <?php  get_template_part('sections/main-check'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('company_sections_users') == 1) {?>
     <?php  get_template_part('sections/main-users'); ?>
  <?php } ?>   
  <?php if (get_theme_mod('company_sections_readers') == 1) {?>
     <?php  get_template_part('sections/main-readers'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('company_sections_testimonials') == 1) {?>
     <?php  get_template_part('sections/main-testimonials'); ?>
  <?php } ?>
  <?php if (get_theme_mod('company_sections_clients') == 1) {?>
     <?php  get_template_part('sections/main-client'); ?>
  <?php } ?> 
  <?php if (get_theme_mod('company_sections_information') == 1) {?>
     <?php  get_template_part('sections/main-infomation'); ?>
  <?php } ?>

<?php get_footer(); ?>
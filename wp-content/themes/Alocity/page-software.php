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
  <div class="main-dashboard">
    <div class="container">
      <div class="row main-dashboard__content">
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
          <div class="main-dashboard__cards" >
            <div class="main-dashboard__boximg">
              <a class="main-dashboard__img" href="" data-target="#three-modal" data-toggle="modal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image_6.png">
                <img class="img__two" src="<?php echo get_template_directory_uri(); ?>/assets/img/software/plus.png">
</a>
              <div class="main-dashboard__img--two">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image.png">
              </div>
            </div>
            <div class="main-dashboard__text">
              <div class="main-dashboard__title">
                <p>User Management</p>
              </div>
              <div class="main-general__description">
                <p>Easily add users with access levels and sync their biometric, mobile, card, and pin credentials instantly to the door readers.</p>
              </div>
            </div>
</div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
          <div class="main-dashboard__cards active" >
            <div class="main-dashboard__boximg">
              <a class="main-dashboard__img" href="" data-target="#one-modal" data-toggle="modal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image_3.png">
                <img class="img__two" src="<?php echo get_template_directory_uri(); ?>/assets/img/software/plus.png">
</a>
              <div class="main-dashboard__img--two">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image.png">
              </div>
            </div>
            <div class="main-dashboard__text">
              <div class="main-dashboard__title">
                <p>Real Time Dashboard</p>
              </div>
              <div class="main-general__description">
                <p>Our modern dashboard gives you instant visibility on user activity, door states, and critical events.</p>
              </div>
            </div>
</div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
          <div class="main-dashboard__cards" href="" data-target="#two-modal" data-toggle="modal">
            <div class="main-dashboard__boximg">
              <a class="main-dashboard__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image_8.png">
                <img class="img__two" src="<?php echo get_template_directory_uri(); ?>/assets/img/software/plus.png">
</a>
              <div class="main-dashboard__img--two">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image.png">
              </div>
            </div>
            <div class="main-dashboard__text">
              <div class="main-dashboard__title">
                <p>Cloud Reader Management</p>
              </div>
              <div class="main-general__description">
                <p>Configure and manage alocity smart door readers instantly from the cloud.</p>
              </div>
            </div>
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-control">
    <div class="row">
      <div class="col-lg-6 col-12 p-0">
        <div class="main-control__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/image_4.png">
        </div>
      </div>
      <div class="col-lg-6 col-12 p-0">
        <div class="main-control__box main-control__box--bg">
          <div class="main-title__general main-title__general--left">
            <h2>Total control from anywhere</h2>
          </div>
          <div class="row main-content">
            <div class="col-lg-6 col-sm-6">
              <div class="main-control__subbox">
                <div class="main-control__text">
                  <div class="main-control__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/calendar-2.png">
                  </div>
                  <div class="main-users__title">
                    <p>Easily Schedule Users</p>
                  </div>
                </div>
                <div class="main-general__description">
                  <p>Create schedules for complete door control of who can enter, at what time, and on which door.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="main-control__subbox">
                <div class="main-control__text">
                  <div class="main-control__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/notification.png">
                  </div>
                  <div class="main-users__title">
                    <p>Instant Alerts</p>
                  </div>
                </div>
                <div class="main-general__description">
                  <p>Create schedules for complete door control of who can enter, at what time, and on which door.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="main-control__subbox">
                <div class="main-control__text">
                  <div class="main-control__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/user-3.png">
                  </div>
                  <div class="main-users__title">
                    <p>Manage User Credentials</p>
                  </div>
                </div>
                <div class="main-general__description">
                  <p>Instantly assign/revoke user credentials. (biometric, mobile, cloud-keys, pin or card).</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="main-control__subbox">
                <div class="main-control__text">
                  <div class="main-control__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/exit.png">
                  </div>
                  <div class="main-users__title">
                    <p>Door Control</p>
                  </div>
                </div>
                <div class="main-general__description">
                  <p>Total control to unlock or lockdown doors from anywhere, and see door states in real-time.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-check">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-12">
          <div class="main-check__content">
            <div class="main-title__general main-title__general--width">
              <h2>Integrated with the tools you use</h2>
            </div>
            <div class="main-general__description main-general__description--color main-general__description--soft">
              <p>Alocity® is fully integrated with your favorite apps, so you can spend less time juggling tabs and more time focusing on meaningful work.</p>
            </div>
            <div class="main-check__btn">
              <a class="btn_custom btn--small btn--filled" href="">Check out the integrations</a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-sm-12 p-0">
          <div class="main-check__box">
            <div class="main-control__img main-control__img--two">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/check.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php  get_template_part('sections/main-testimonials'); ?>
  <?php  get_template_part('sections/main-client'); ?>
  <div class="main-infomation">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-6">
          <div class="main-infomation__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/phone.png">
          </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-6">
          <div class="main-information__content">
            <div class="main-information__title">
              <p>Need more information?</p>
            </div>
            <div class="main-information__description">
              <p>Let one of our specialist show you around</p>
            </div>
            <div class="main-information__btn">
              <a class="btn_custom btn--medium btn--filled--white" href="">get quote</a>
            </div>
            <div class="main-information__description">
              <p>Speak to us 888-512-2115</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>
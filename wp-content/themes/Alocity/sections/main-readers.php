  <div class="main-readers" style="background:<?php echo get_theme_mod('background_readers'); ?>;">
    <div class="container">
      <div class="main-title__general main-title__general--flex">
        <h2><?php echo get_theme_mod('readers_title'); ?></h2>
        <p><?php echo get_theme_mod('readers_content'); ?></p>
      </div>
      <div class="main-readers__content">
        <div class="main-readers__item">
        <?php for ($i=1; $i <=3 ; $i++) { 
          if(get_theme_mod('readers'.$i.'_title')!=NULL){?>
          <div class="main-readers__box">
            <div class="main-users__boxtext main-users__boxtext--right">
              <div class="main-users__title">
                <p><?php echo get_theme_mod('readers'.$i.'_title'); ?></p>
              </div>
              <div class="main-general__description main-general__description--readers">
                <p><?php echo get_theme_mod('readers'.$i.'_content'); ?></p>
              </div>
            </div>
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_theme_mod('readers'.$i.'_icon'); ?>">
              </div>
            </div>
          </div>
        <?php }} ?> 
        </div>

        <div class="main-readers__item">
          <div class="main-readers__img">
            <img src="<?php echo get_theme_mod('readers_image'); ?>">
          </div>
          <div class="main-check__btn">
            <a class="btn_custom btn--small btn--filled btn--filled--upper" href="<?php echo get_theme_mod('readers_urlbutton'); ?>"><?php echo get_theme_mod('readers_button'); ?></a>
          </div>
        </div>


        <div class="main-readers__item">
        <?php for ($i=4; $i <=6 ; $i++) { 
          if(get_theme_mod('readers'.$i.'_title')!=NULL){?>        
          <div class="main-readers__box main-readers__box--segund">
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_theme_mod('readers'.$i.'_icon'); ?>">
              </div>
            </div>
            <div class="main-users__boxtext">
              <div class="main-users__title">
                <p><?php echo get_theme_mod('readers'.$i.'_title'); ?></p>
              </div>
              <div class="main-general__description main-general__description--readers">
                <p><?php echo get_theme_mod('readers'.$i.'_content'); ?></p>
              </div>
            </div>
          </div>
        <?php }} ?> 
        </div>
      </div>
    </div>
  </div>
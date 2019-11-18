  <div class="main-banner">
    <div class="main-banner__content">
    <?php for ($i=1; $i < 4; $i++) { ?>
      <?php if (get_theme_mod('banner'.$i.'_title')!= NULL ) { ?>

      <div class="main-banner__item">
        <div class="mask mask--home">
          <div class="main-banner__text main-banner__text--home">
            <div class="main-banner__title">
              <h1><?php echo get_theme_mod('banner'.$i.'_title'); ?></h1>
              <span><?php echo get_theme_mod('banner'.$i.'_subtitle'); ?></span>
            
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_theme_mod('banner'.$i.'_image'); ?>">
        </div>
      </div>
    <?php }} ?>   
    </div>
  </div>


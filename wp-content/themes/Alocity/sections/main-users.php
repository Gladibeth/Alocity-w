  <section class="main-users main-users--bg" style="background:<?php echo get_theme_mod('background_users'); ?>;">
    <div class="container">
      <div class="row main-content">
      <?php for ($i=1; $i <=9 ; $i++) { 
        if(get_theme_mod('users'.$i.'_title')!=NULL){$active='';
          if($i==1){$active="active";}?>      
        <div class="col-lg-4 col-sm-6">
          <div class="main-users__content">
            <div class="main-users__item">
              <div class="main-users__boximg <?php echo $active;?>">
                <div class="main-users__img">
                  <img src="<?php echo get_theme_mod('users'.$i.'_icon'); ?>">
                </div>
              </div>
            </div>
            <div class="main-users__item">
              <div class="main-users__boxtext">
                <div class="main-users__title">
                  <p><?php echo get_theme_mod('users'.$i.'_title'); ?></p>
                </div>
                <div class="main-general__description">
                  <p><?php echo get_theme_mod('users'.$i.'_content'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?>        
      </div>
    </div>
  </section>
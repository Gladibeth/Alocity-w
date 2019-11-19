<?php get_header()?>
<div class="main-contact" style="display: none;">
  <div class="container">
    <div class="main-contact__content">
      <div class="main-contact__item">
        <div class="main-contact__title">
          <p>How can we help?</p>
          <span>We can’t wait to hear from you</span>
        </div>
        <form class="input-group" id="search-input">
          <input name="utf8" type="hidden" value="✓">
          <input class="form-control form-search" name="" placeholder="Search" type="text">
          <span class="input-group-btn">
            <button class="btn btn-default btn-search" type="submit">
              Search
            </button>
          </span>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="main-form">
  <div class="container">
    <div class="main-form__content">
      <div class="main-form__item bt-custon-two">
        <?php echo do_shortcode('[hubspot type=form portal=6327731 id=8d3d7d41-ff3e-42f2-b977-3efdc5a229d1]'); ?>

      </div>
      <div class="main-form__item">
        <div class="main-form__title">
          <p>Our information</p>
        </div>
        <div class="main-form__box">
          <div class="main-form__boxitem">
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/paper-plane.png">
              </div>
            </div>
            <div class="main-form__boxtitle">
              <p>Email</p>
              <span>marveltorres@alocity.com</span>
            </div>
          </div>
          <div class="main-form__boxitem">
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/telephone-handle-silhouette.png">
              </div>
            </div>
            <div class="main-form__boxtitle">
              <p>Telephone</p>
              <span>888-512-2115</span>
            </div>
          </div>
          <div class="main-form__boxitem">
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/map-marker.png">
              </div>
            </div>
            <div class="main-form__boxtitle">
              <p>Local</p>
              <span>Calle 23 Green Tower, Street Balsos</span>
            </div>
          </div>
          <div class="main-form__boxitem">
            <div class="main-users__boximg active">
              <div class="main-users__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/comments.png">
              </div>
            </div>
            <div class="main-form__boxtitle">
              <p>Social media</p>
              <div class="main-footer__redes main-form__redes">
                <a href="">
                  <div class="main-footer__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/instagram.png">
                  </div>
                </a>
                <a href="">
                  <div class="main-footer__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/facebook.png">
                  </div>
                </a>
                <a href="">
                  <div class="main-footer__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hardware/linkein.png">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-maps">
  <iframe allowfullscreen="" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3916.4357258141454!2d-74.8052848857929!3d11.005898492166052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1572684666411!5m2!1ses-419!2sve"
  style="border:0;" width="600"></iframe>
</div>
<?php get_footer()?>
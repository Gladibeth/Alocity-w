  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="get_quate" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body modal-body--pg">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/close.png">
          </button>
          <div class="row">
            <div class="col-lg-6 col-md-6 p-0 d-sm-flex d-none">
              <div class="main-modal__boximg" style="background:<?php echo get_theme_mod('background_contact_form'); ?> !important;">
                <div class="main-modal__img">
                  <img src="<?php echo get_theme_mod('contact_form_image'); ?>">
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 p-0">
              <div class="main-modal__form">
                <div class="main-modal__title">
                  <h2><?php echo get_theme_mod('contact_form_title'); ?></h2>
                </div>
                <?php echo do_shortcode('[hubspot type=form portal=6327731 id=bf0aae01-e08e-41ca-adae-c7c67c377546]'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="one-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-soft" role="document">
      <div class="modal-content modal-content--soft">
        <div class="modal-body modal-body--pg">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/close.png">
          </button>
          <div class="main-modal__boxerimg">
            <div class="main-modal__img main-modal__softwareimg">
              <img src="<?php echo get_theme_mod('software_dashboard1_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="two-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-soft" role="document">
      <div class="modal-content modal-content--soft">
        <div class="modal-body modal-body--pg">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/close.png">
          </button>
          <div class="main-modal__boxerimg">
            <div class="main-modal__img main-modal__softwareimg">
              <img src="<?php echo get_theme_mod('software_dashboard2_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="three-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-soft" role="document">
      <div class="modal-content modal-content--soft">
        <div class="modal-body modal-body--pg">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software/close.png">
          </button>
          <div class="main-modal__boxerimg">
            <div class="main-modal__img main-modal__softwareimg">
              <img src="<?php echo get_theme_mod('software_dashboard3_image'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="main-footer__content">
        <div class="main-footer__item">
          <div class="main-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/logo@3x.png">
          </div>
          <div class="main-footer__copy">
            <p>
              Copyright 2019 - Dreamed by Branch, developed by
              <a>SIGMA STUDIOS</a>
            </p>
          </div>
        </div>  
        <div class="main-footer__item">
          <div class="main-footer__boxredes">
            <div class="main-footer__redes">
             <?php if (get_theme_mod('instagram')!=NULL) {?> 
              <a href="<?php echo get_theme_mod('instagram'); ?>">
                <div class="main-footer__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/instagram.png">
                </div>
              </a>
             <?php } ?>   
             <?php if (get_theme_mod('facebook')!=NULL) {?> 
              <a href="<?php echo get_theme_mod('facebook'); ?>">
                <div class="main-footer__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/facebook.png">
                </div>
              </a>
             <?php } ?>   
             <?php if (get_theme_mod('linkedin')!=NULL) {?>              
              <a href="<?php echo get_theme_mod('linkedin'); ?>">
                <div class="main-footer__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/linkein.png">
                </div>
              </a>
             <?php } ?>              
            </div>
          </div>
          <div class="main-footer__boxubications">
            <div class="main-footer__ubications">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/paper-plane.png">
                <?php echo get_theme_mod('email'); ?> -
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/telephone-handle-silhouette.png">
                <?php echo get_theme_mod('phone'); ?> -
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/map-marker.png">
                <?php echo get_theme_mod('address'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

  <?php wp_footer(); ?>
</body>

</html>
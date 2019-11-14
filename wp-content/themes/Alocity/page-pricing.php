<?php get_header(); ?>
  <div class="main-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/bg.png">
        </div>
        <div class="main-banner__container main-banner__container--prin">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="main-banner__boxtext main-banner__boxtext--princing">
                <div class="main-banner__text">
                  <div class="main-banner__title">
                    <h1><?php echo get_theme_mod('pricing_banner_title'); ?></h1>
                    <p><?php echo get_theme_mod('pricing_banner_subtitle'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="main-banner__imags">
                <div class="main-banner__imags--two main-banner__imags--two--top">
                  <img src="<?php echo get_theme_mod('pricing_banner_image'); ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-princing" style="background:<?php echo get_theme_mod('background_pricing'); ?>;">
    <div class="container">
      <div class="main-princing__content">
      <?php $posts=get_theme_mod('pricing_posts'); ?>
      <?php $args = array( 'post_type' => 'pricing', 'posts_per_page' => $posts ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?> 
        <div class="main-princing__item">
          <div class="main-princing__box">
            <div class="main-princing__text">
              <div class="main-princing__title">
                <p><?php the_title(); ?></p>
                <span><?php the_field('pricing_price'); ?></span>
              </div>
              <div class="main-princing__description">
                <p><?php the_field('pricing_description1'); ?></p>
                <span><?php the_field('pricing_description2'); ?></span>
              </div>              
            </div>
            <div class="main-princing__list">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?> 
        
      </div>
    </div>
  </div>
  <?php  get_template_part('sections/main-testimonials'); ?>
  <?php  get_template_part('sections/main-client'); ?>
  <?php  get_template_part('sections/main-infomation'); ?>  
 
<?php get_footer(); ?>
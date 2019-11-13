  <div class="main-client" style="background:<?php echo get_theme_mod('background_client'); ?>;">
    <div class="container">
      <div class="main-title__general main-title__general--flex">
        <h2><?php echo get_theme_mod('client_title'); ?></h2>
        <h3><?php echo get_theme_mod('client_subtitle'); ?></h3>
      </div>
      <div class="main-client__content">
      <?php $args = array( 'post_type' => 'client' ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>        
        <div class="main-client__item">
          <div class="main-client__img">
            <img src="<?php the_post_thumbnail_url('full');?>">
          </div>
        </div>
      <?php endwhile; ?>   

      </div>
    </div>
  </div>
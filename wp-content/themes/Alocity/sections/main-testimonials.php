  <?php 
  if (get_theme_mod('testimonials_background_type') == 'color') {
     $style='background:'.get_theme_mod('background_testimonials').'';
   } 
   if (get_theme_mod('testimonials_background_type') == 'image') {
      $style='background-image:url('.get_theme_mod('testimonials_image').'';
    } ?>

  <div class="main-testimonials" style="<?php echo $style; ?>">
    <div class="container">
      <div class="main-title__general main-title__general--white">
        <h2><?php echo get_theme_mod('testimonials_title');?> </h2>
      </div>
      <div class="main-testimonials__content">
      <?php $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 6 ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>       
        <div class="main-testimonials__box">
          <div class="main-testimonials__item">
            <div class="main-testimonials__img">
              <img src="<?php the_post_thumbnail_url('full');?>">
            </div>
            <div class="main-testimonials__description">
              <p><?php the_excerpt();?></p>
            </div>
            <div class="main-testimonials__name">
              <p><?php the_title(); ?></p>
              <p><?php the_field('company_testimonials');?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>   
        
      </div>
    </div>
  </div>
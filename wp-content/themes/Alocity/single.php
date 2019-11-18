<?php get_header()?>
<?php if ( have_posts() ) : the_post(); ?>
  <div class="main-contact">
    <div class="container">
      <div class="main-contact__content">
        <div class="main-contact__item">
          <div class="main-contact__title">
            <p><?php the_title() ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="main-form">
    <div class="container">
      <div class="row">       
 
                  <div class="col-lg-12">
                   <center>
                     <a href="<?php echo the_permalink() ?>">
                      <img class="img-responsive" src="<?php the_post_thumbnail_url('full');?>"> 
                     </a>
                   </center> 
                   <?php the_content();?> 
                  </div>
      </div>
    </div>
  </div>
<?php endif; ?> 
<?php get_footer()?>
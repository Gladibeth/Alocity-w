<?php get_header(); ?>
<?php  get_template_part('sections/main-banner'); ?>  
  <section class="main-users">
    <div class="container">
      <div class="main-title__general">
      </div>
      <div class="row main-content">          
        <div class="col-lg-12 col-sm-12">
           <?php
             while ( have_posts() ) : the_post();
               the_content();
               echo"-";the_field('sections_information');echo"-";
               if ( comments_open() || get_comments_number() ) :
                 comments_template();
               endif;
             endwhile;
           ?>          
        </div>
        
      </div>
    </div>
  </section>
  
  <?php if (get_field('sections_check') != NULL) {?>
     <?php  get_template_part('sections/main-check'); ?>
  <?php } ?> 
  <?php if (get_field('sections_users') != NULL) {?>
     <?php  get_template_part('sections/main-users'); ?>
  <?php } ?>   
  <?php if (get_field('sections_readers') != NULL) {?>
     <?php  get_template_part('sections/main-readers'); ?>
  <?php } ?> 
  <?php if (get_field('sections_testimonials') != NULL) {?>
     <?php  get_template_part('sections/main-testimonials'); ?>
  <?php } ?>
  <?php if (get_field('sections_clients') != NULL) {?>
     <?php  get_template_part('sections/main-client'); ?>
  <?php } ?> 
  <?php if (get_field('sections_information') != NULL) {?>
     <?php  get_template_part('sections/main-check'); ?>
  <?php } ?>
 
  
<?php get_footer(); ?>
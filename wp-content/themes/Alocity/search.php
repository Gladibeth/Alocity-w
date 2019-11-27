<?php
/*
Template Name: Search Page
*/
?>
<?php get_header()?>
  <div class="main-contact">
    <div class="container">
      <div class="main-contact__content">
        <div class="main-contact__item">
          <div class="main-contact__title">
            <p>How can we help?</p>
            <span>We can’t wait to hear from you</span>
          </div>
          <form class="input-group" id="search searchform"  method="get"  action="<?php echo get_home_url() ?>">
            <input class="form-control form-search" type="text" name="s" id="s">
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
      <div class="row">       
          <h4 class="main-general__title"><?php printf( __( 'Resultados de la búsqueda para el término: %s', '' ), get_search_query() ); ?></h4>
            <?php 
            $args = array(
              's' => $_GET['s'],
              'post_type' => array('post','access'),
              'paged' => $paged
              );
              $query = new WP_query($args);
              if( $query -> have_posts() ):
              while( $query -> have_posts() ):
                $query -> the_post(); 
                $i=$i+1;
                $post_thumbnail_id = get_post_thumbnail_id( $query->id );?>
                   <div class="col-lg-4">
                   <center>
                     <a href="<?php echo the_permalink() ?>">
                      <img src="<?php the_post_thumbnail_url('full');?>">
                       <p class="item-store__title">
                         <center><?php the_title() ?></center>
                       </p>
                     </a>
                   </center>  
                   </div>
              <?php endwhile; endif; ?>
      </div>
    </div>
  </div>

  <?php get_footer()?>
<?php
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

/***************** Meta *****************/

function meta_value( $meta_key, $post_id ){
	          global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = '$meta_key' and post_id = '$post_id'"); 
              foreach($result_link as $r)
              {
                      $value = $r->meta_value;                      
              }
              return $value;

}

/******************Excerp*****************/
function custom_excerpt_length( $length ) {
  return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>
<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }

  } elseif (is_front_page() ){
    return ("<span>Lemon Tree Trust Homepage</span>");
  }elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } elseif (is_page(  )){

    $full = get_the_title(  );
      if (has_post_thumbnail( $post->ID ) ) { 

       $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
       //echo $image[0];
       echo ("<div id='custom-bg' style='background-image: url(" . $image[0]  . ")' > <div class='desc page_title'>") ;
       echo ('<h2>' . get_the_title() . '</h2></div> </div>') ;

      }
    //return $full;
          
  } else {
    return get_the_title();
  }
}




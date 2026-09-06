<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<aside class="side_column">

  <?php
  // NEWS
  // ==================================================
  if( $post_type == 'news' ){
    include(TEMPLATEPATH . '/sidebars/sidebar-news.php');

  // COLUMN
  // ==================================================
  if( $post_type == 'column' ){
    include(TEMPLATEPATH . '/sidebars/sidebar-column.php');

  // BLOG
  // ==================================================
  } elseif( $post_type == 'blog' ){
    include(TEMPLATEPATH . '/sidebars/sidebar-blog.php');

  } ?>

</aside>

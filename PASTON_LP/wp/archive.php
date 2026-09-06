<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>


  <?php
  // BLOG
  // ==================================================
  if( $post_type == 'blog' ){
    include(TEMPLATEPATH . '/archives/archive-blog.php');

  // NEWS
  // ==================================================
  } elseif( $post_type == 'news' ) {
    include(TEMPLATEPATH . '/archives/archive-news.php');

  // COLUMN
  // ==================================================
  } elseif( $post_type == 'column' ) {
    include(TEMPLATEPATH . '/archives/archive-column.php');

  // salon
  // ==================================================
  } elseif( $post_type == 'salon' ) {
    include(TEMPLATEPATH . '/archives/archive-salon.php');

  } ?>


<?php get_footer(); ?>

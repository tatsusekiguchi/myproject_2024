<article class="post">
  <?php
  $content = get_the_content();
  $out_link = get_field('out_link');
  $blank = '';

  // 外部リンクチェックがある場合
  if ( $out_link ) {
    $out_link_url = get_field('out_link_url');
    $other_window = get_field('other_window');
    $permalink = $out_link_url;
    if ( $other_window ) {
      $blank = ' target="_blank"';
    }
  }
  // 本文がない場合
  elseif ( !$content ) {
    $permalink = 'javascript:void(0);';
  }
  // 外部リンクでない場合はWP詳細ページ
  else {
    $permalink = get_the_permalink();
  }
  ?>
      <?php if(has_post_thumbnail()): ?>
        <div class="post--img mgn-btm16"><?php $post_title = get_the_title();
        the_post_thumbnail('medium',array( 'alt' => $post_title, )); ?></div>

      <?php elseif($first_image = catch_that_image()): ?>
        <div class="post--img mgn-btm16"><img src="<?php echo $first_image; ?>" alt=""></div>
      <?php endif; ?>

      <div class="post--time"><?php the_time(Y.'.'.n.'.'.j); ?></div>

      <h3 class="post--ttl"><?php the_title(); ?></h3>

      <?php
      $remove_array = ["\r\n", "\r", "\n", " ", "　"];
      $content = wp_trim_words(strip_shortcodes(get_the_content()), 40, '…' );
      $content = str_replace($remove_array, '', $content);
       ?>
       <div class="post--content">
         <?php echo $content; ?>
       </div>

      <a href="<?php echo $permalink; ?>"<?php echo $blank; ?> class="post--link"></a>

</article>

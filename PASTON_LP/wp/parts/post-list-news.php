<article class="post">
        <h3 class="post--ttl section_ttl_jp heading-2 mgn-btm16"><?php the_title(); ?></h3>

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
        <div class="post--img"><?php the_post_thumbnail('medium'); ?></div>
      <?php elseif($first_image = catch_that_image()): ?>
        <div class="post--img"><img src="<?php echo $first_image; ?>" alt="<? echo get_the_title(); ?>"></div>
      <?php endif; ?>
 
      <a href="<?php echo $permalink; ?>"<?php echo $blank; ?> class="post--link"></a>
 
</article>




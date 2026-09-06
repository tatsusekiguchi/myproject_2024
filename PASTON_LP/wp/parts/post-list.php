<article class="post flex flex-reverse flex-a-ctr">
  <?php if(has_post_thumbnail()): ?>

    <div class="post--img">
      <a href="<?php the_permalink(); ?>" class="post--link">
        <?php $post_title = get_the_title(); the_post_thumbnail('medium',array( 'alt' => $post_title )); ?>
      </a></div>
  <?php elseif($first_image = catch_that_image()): ?>
    <div class="post--img">
      <a href="<?php the_permalink(); ?>" class="post--link">
        <img src="<?php echo $first_image; ?>" alt="<?php get_the_title(); ?>">
      </a>
    </div>
  <?php endif; ?>
  <div class="post--txtarea">
    <div class="post--info flex flex-a-ctr mgn-btm8">
      <div class="post--date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></div>
      <?php
      $tax_name = get_post_type($post->ID).'_category';
      ?>
      <div class="cat_list"><?php echo get_the_term_list($post->ID,$tax_name,'','',''); ?></div>
    </div>
    <h2 class="section_ttl_jp heading-2 mgn-btm16"><a href="<?php the_permalink(); ?>" class="post--link"><?php the_title(); ?></a></h2>

      <?php
        $get_content = get_the_content();
        $get_content = strip_tags($get_content);
        $get_content = strip_shortcodes($get_content);
        if ( $get_content ):
      ?>
      <?php remove_filter('the_content', 'wpautop'); // pタグ削除 ?>
        <div class="post--txt txt-sm">
          <?php if(mb_strlen($get_content)>75) { $content = mb_substr(strip_tags(strip_shortcodes($get_content)),0,75); echo $content.'…'; } else { echo $get_content; } ?>
          </div>
      <?php endif; ?>


  </div>
</article>

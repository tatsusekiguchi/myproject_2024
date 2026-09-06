<article class="post mgn-btm40">
  <a href="<?php the_permalink(); ?>">
    <?php if(get_field('写真')): ?>
      <?php $image = wp_get_attachment_image_src(get_field('写真'), 'thumbnail'); ?>
      <img class="mgn-btm16" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('写真')) ?>" />
    <?php endif; ?>
    <p class="txt-ctr"><?php the_title(); ?></p>
  </a>
</article>
<!-- start new -->
<section class="side_section side--new" id="side--new">
  <h2 class="side--ttl Ropa-Sans">NEW POST</h2>
  <div class="posts posts-side">
    <?php 
    $side_posts = new WP_Query( array(
      'posts_per_page' => 5,
      'post_type' => 'blog',
      'order' => 'DESC',
      'orderby' => 'date'
    ));
    ?>
    <?php while ( $side_posts->have_posts() ): $side_posts->the_post(); ?>
      <article class="post flex">
        <?php
          $thumbnail_id = get_post_thumbnail_id($post->ID);
          $src_info = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
          $src = $src_info[0];
          if ( !$src && $first_image = catch_that_image() ) {
            $src = $first_image;
          }
        ?>
        <?php if ($src) : ?>
          <div class="post--img" style="background-image: url(<?php echo $src; ?>)"></div>
        <?php endif; ?>
        <div class="txtarea">
          <div class="post--date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('Y.m.d', strtotime($post->post_date)); ?></div>
          <h3 class="post--ttl"><a href="<?php the_permalink(); ?>" class="post--link"><?php the_title(); ?></a></h3>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<!-- end new -->

<!-- start cat -->
<section class="side_section side--cat" id="side--cat">
  <h2 class="side--ttl Ropa-Sans">CATEGORY</h2>
  <ul class="side--list">
  <?php
  $cats = get_terms('blog_category',array(
    'hide_empty' => true, // 空のタームを返さない
    'parent' => 0, // 直近の子タームを返す
    'order' => 'DESC',
    'orderby' => 'date'

  )); //カテゴリー
  foreach($cats as $cat):
  ?>
    <li>
      <a href="/blog/<?php echo $cat->slug; ?>/"><?php echo $cat->name; ?></a><?php
      $child_cats = get_terms('blog_category', array(
        'hide_empty' => true, // 空のタームを返さない
        'parent' => $cat->term_id,
      ));
      if($child_cats):
      ?>
        <ul class="side--link_list">
          <?php foreach ($child_cats as $child_cat): ?>
          <li class="sidebar-child_cat"><a href="/blog/<?php echo $child_cat->slug; ?>/"><?php echo $child_cat->name; ?></a></li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</section>
<!-- end cat -->

<!-- start archive -->
<section class="side_section side--archive" id="side--archive">
  <h2 class="side--ttl Ropa-Sans">ARCHIVE</h2>
  <?php include(TEMPLATEPATH . '/parts/side-archive.php'); ?>
</section>
<!-- end archive -->
<h2 class="section_ttl txt-ctr">BLOG</h2>

<div class="inner flex flex-j-between mgn-btm80">
  <main class="main_column">
    <article class="blog--info">
      <p class="post--date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('Y.m.d', strtotime($post->post_date)); ?></p>
      <ul class="cat_list">
        <?php echo get_the_term_list($post->ID, 'blog_category', '<li>', '</li><li>', '</li>' ); ?>
      </ul>
      <h2 class="section_ttl heading-2 mgn-btm24"><?php the_title(); ?></h2>
      <?php if ( has_post_thumbnail() ): 
        $thumbnail_id = get_post_thumbnail_id();
        $eyecatch = wp_get_attachment_image_src( $thumbnail_id, 'large' );
        list( $eyecatch_url, $width, $height ) = $eyecatch;
        $eyecatch_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
        if ( !$eyecatch_alt ) {
          $eyecatch_alt = get_the_title();
        }
      ?>
        <div class="eyecatch mgn-btm16">
          <img src="<?php echo $eyecatch_url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $eyecatch_alt; ?>">
        </div>
      <?php endif ?>
      <div class="mce-content-body"><?php the_content(); ?></div>
    </article>
    <!-- ページ送り -->
    <nav class="wp-pagenavi wp-pagenavi-single">
      <?php next_post_link(' %link', '<small>%title</small>','', ''); ?>
      <a href="/blog/"><small>一覧へ戻る</small></a>
      <?php previous_post_link(' %link ', '<small>%title</small>','', ''); ?>
    </nav>
  </main>

  <?php get_sidebar(); ?>

</div>

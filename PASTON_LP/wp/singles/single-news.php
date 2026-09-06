<h1 class="section_ttl txt-ctr mgn-btm16">NEWS</h1>
<div class="inner flex flex-j-between mgn-btm80">
  <main class="main_column">

    <article class="news--info mgn-btm40" id="news--info">
      <p class="post--date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('Y.m.d', strtotime($post->post_date)); ?></p>
      <h2 class="section_ttl heading-2 mgn-btm24"><?php the_title(); ?></h2>

      <div class="mce-content-body"><?php the_content(); ?></div>
    </article>
    <!-- ページ送り -->
    <nav class="wp-pagenavi wp-pagenavi-single">
      <?php next_post_link(' %link', '<small>%title</small>','', ''); ?>
      <a href="/news/"><small>一覧へ戻る</small></a>
      <?php previous_post_link(' %link ', '<small>%title</small>','', ''); ?>
    </nav>
  </main>
  <?php get_sidebar(); ?>
</div>

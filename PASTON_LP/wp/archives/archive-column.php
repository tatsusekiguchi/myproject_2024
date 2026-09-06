<h1 class="section_ttl txt-ctr">COLUMN</h1>
<div class="inner flex flex-j-between section_pdg">
  <main class="main_column">
    <?php if (have_posts()) : ?>
      <div class="posts posts-blog">
        <?php
        while ( have_posts() ){
          the_post();
          get_template_part('parts/post-list');
        }
        ?>
      </div>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else: ?>
      <p class="no_post">記事はみつかりません。</p>
    <?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>

  <h2 class="section_ttl txt-ctr">MOVIE</h2>
  <main class="section_pdg">
    <div class="inner inner-sm">
      <?php if(have_rows('動画')): ?>
      <?php while(have_rows('動画')): the_row(); ?>
      <div class="VideoWrapper">
        <iframe width="500" height="280" src="https://www.youtube.com/embed/<?php echo get_sub_field('URL'); ?>?rel=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>

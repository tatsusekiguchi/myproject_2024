
<h2 class="section_ttl txt-ctr">SERVICES</h2>
<main class="section_pdg">

  <div class="inner">
  <ul class="services-list flex flex-j-between txt-ctr">
    <li>
      <?php
        $page_id = get_page_by_path('services/new-adult');
        $page_id = $page_id -> ID; 
        if(get_field('一覧用画像',$page_id)):
          $img_thumbnail = wp_get_attachment_image_src(get_field('一覧用画像',$page_id), 'midium');
          echo '<a href="';
          echo the_permalink( $page_id );
          echo '">';

          echo '<div class="image" style="background-image: url(' . $img_thumbnail[0] . ')"></div>' . '<p>';
          echo get_the_title( $page_id );
          echo '</p>' . '</a>';
        endif;
      ?>
    </li>

    <li>
      <?php
        $page_id = get_page_by_path('services/kids-room');
        $page_id = $page_id -> ID; 
        if(get_field('一覧用画像',$page_id)):
          $img_thumbnail = wp_get_attachment_image_src(get_field('一覧用画像',$page_id), 'midium');
          echo '<a href="';
          echo the_permalink( $page_id );
          echo '">';

          echo '<div class="image" style="background-image: url(' . $img_thumbnail[0] . ')"></div>' . '<p>';
          echo get_the_title( $page_id );
          echo '</p>' . '</a>';
        endif;
      ?>
    </li>

  </ul>


  </div>
</main>







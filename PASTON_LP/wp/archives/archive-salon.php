
  <!--サロン詳細-->
  <?php if(is_tax('salon_category', array( 'beyond-link' , 'abadi' ,  'van-council' , 'caboshard' , 'bubbly-hair' , 'chantik' , 'vitamin-k'))): ?>

    <?php
      $term_slug = get_query_var('salon_category');
      $term_ID = get_term_by('slug',$term_slug,'salon_category')->term_id;
    ?>

    <?php $image = wp_get_attachment_image_src(get_field('看板写真', 'salon_category_'.$term_ID), 'full'); ?>
      <section class="sub_hero" style="background-image: url(<?php echo $image[0]; ?>)">

      <div class="inner-box">
        <h1 class="section_ttl"><?php the_field( '店舗名', 'salon_category_'.$term_ID); ?></h1>
        <ul class="sub-menu">
          <li><a href="#staff" class="smooth">STAFF</a></li>
          <li><a href="#price" class="smooth">PRICE</a></li>
          <li><a href="/coupon/" class="smooth">COUPON</a></li>
          <li><a href="/blog/<?php echo $term ?>">BLOG</a></li>
          <li><a href="/reserve/">RESERVE</a></li>
        </ul>
      </div>
    </section>

<main>

  <section class="salon_block salon_text_box">
    <div class="inner flex salon_text">
      <div class="salon-logo">
        <?php if(is_tax('salon_category', array( 'van-council'))): ?>
        <!-- ヴァンカウンシル岐阜店 -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/vancouncil_logo.jpg" alt="VAN COUNCIL 岐阜店 ">
        <?php elseif(is_tax('salon_category', array( 'abadi'))): ?>
        <!-- アバディ -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/abadi_logo.jpg" alt="ABADI ">
        <?php elseif(is_tax('salon_category', array( 'beyond-link'))): ?>

        <!-- BEYOND L’ INK -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/beyond_link_logo.jpg" alt="BEYOND L'INK BEAUTY RESORT ">
        <?php elseif(is_tax('salon_category', array( 'vitamin-k'))): ?>

        <!-- 美容室ビタミンK -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/vitamin_logo.jpg" alt="VitaminK ">
        <?php elseif(is_tax('salon_category', array( 'chantik'))): ?>
        <!-- 美容室チャンティ -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/chantik_logo.jpg" alt="美容室チャンティ ">
        <?php elseif(is_tax('salon_category', array( 'caboshard'))): ?>

        <!-- カボシャール -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/caboshard_logo.jpg" alt="Caboshard ">
        <?php elseif(is_tax('salon_category', array( 'bubbly-hair'))): ?>

        <!-- バブリーヘア -->
          <img src="/wp/wp-content/themes/original_theme/images/salon/bubbly_logo.jpg" alt="bubbly hair">
        <?php endif; ?>
      </div>

      <div class="right">
        <h3 class="section_ttl_jp">
          <?php the_field( '見出し1', 'salon_category_'.$term_ID); ?>
        </h3>
        <p>
          <?php the_field( '文章1', 'salon_category_'.$term_ID); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="salon_block mgn-btm80">
    <div class="inner">
      <?php if(get_field('イメージ写真', 'salon_category_'.$term_ID)): ?>
        <?php $image = wp_get_attachment_image_src(get_field('イメージ写真', 'salon_category_'.$term_ID), 'full'); ?>
        <img class="img-ctr" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('イメージ写真', 'salon_category_'.$term_ID)) ?>" />
      <?php endif; ?>

    </div>
  </section>

  <h3 class="section_ttl txt-ctr mgn-btm40">SPACE</h3>

  <?php if(get_field('SPACEイメージ写真', 'salon_category_'.$term_ID)): ?>
    <?php $image = wp_get_attachment_image_src(get_field('SPACEイメージ写真', 'salon_category_'.$term_ID), 'full'); ?>
    <img class="salon-image-right" src="<?php echo $image[0]; ?>" alt="SPACE" />
  <?php endif; ?>

  <section class="salon_block_left">
    <h3 class="section_ttl_jp mgn-btm40">
      <?php the_field( '見出し2', 'salon_category_'.$term_ID); ?>
    </h3>
    <p>
      <?php the_field( '文章2', 'salon_category_'.$term_ID); ?>
    </p>
  </section>

  <?php if(get_field('SPACEイメージ写真2', 'salon_category_'.$term_ID)): ?>
    <?php $image = wp_get_attachment_image_src(get_field('SPACEイメージ写真2', 'salon_category_'.$term_ID), 'full'); ?>
    <div class="inner">
      <img class="salon-image-ctr mgn-btm180" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('SPACEイメージ写真2', 'salon_category_'.$term_ID)) ?>" />
    </div>
  <?php endif; ?>

  <section class="salon_block_menu mgn-btm80" id="price">
    <div class="inner inner-sm salon_pricelist">
      <h3 class="section_ttl txt-ctr mgn-btm24">MENU</h3>
      <div class="inner-block">
        <?php if(get_field('メニュー表02', 'salon_category_'.$term_ID)): ?>
        <?php while(the_repeater_field('メニュー表02', 'salon_category_'.$term_ID)): ?>
          <h3 class="salon-menu-ttl txt-ctr"><?php the_sub_field('タイトル', 'salon_category_'.$term_ID); ?></h3>

          <table class="menu_table">
            <?php while(the_repeater_field('リスト', 'salon_category_'.$term_ID)): ?>
            <tr>

              <th><?php the_sub_field('メニュー1', 'salon_category_'.$term_ID); ?></th>
              <td class="left"><?php the_sub_field('料金1', 'salon_category_'.$term_ID); ?></td>
              <th class="right"><?php the_sub_field('メニュー2', 'salon_category_'.$term_ID); ?></th>
              <td><?php the_sub_field('料金2', 'salon_category_'.$term_ID); ?></td>
            </tr>
            <?php endwhile; ?>
          </table>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php if(get_field('メニュー表02', 'salon_category_'.$term_ID)): ?>
      <p class="read_more"><span>READ MORE</span></p>
      <?php endif; ?>
    </div>
  </section>

  <section class="salon_block_staff mgn-btm180" id="staff">
    <h3 class="section_ttl txt-ctr mgn-btm24">STAFF</h3>
    <div class="inner">
      <ul class="staff_list flex flex-j-between flex-c-wrap">
        <?php
          $args = array(
            'posts_per_page' => 36,
            'post_type' => 'salon',
            'term' => $term ,
            'taxonomy' => 'salon_category'
          );
           $the_query = new WP_Query( $args ); 
           $max_num_pages = $the_query->max_num_pages;
           if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>

            <li><a href="<?php the_permalink(); ?>">
              <?php if(get_field('写真')): ?>
                <?php $image = wp_get_attachment_image_src(get_field('写真'), 'thumbnail'); ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('写真')) ?>" />
              <?php endif; ?>
            </a></li>

        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

      </ul>
    </div>
  </section>

  <h3 class="section_ttl txt-ctr mgn-btm24">SALON INFO</h3>

  <?php if(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID)): ?>
    <?php $image = wp_get_attachment_image_src(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID), 'full'); ?>
    <div class="inner">
      <img class="salon-image-ctr mgn-btm130" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID)) ?>" />
    </div>
  <?php endif; ?>

  <div class="salon_block_map inner mgn-btm104">
    <?php the_field( '地図', 'salon_category_'.$term_ID); ?>
  </div>

  <section class="foot_adress_block mgn-btm80">
    <h3 class="ttl Ropa-Sans mgn-btm32">
      <?php the_field( '店舗名', 'salon_category_'.$term_ID); ?>
      <p><?php the_field( '店舗名（ヨミ）', 'salon_category_'.$term_ID); ?></p>
    </h3>
    <table>
      <tr>
        <th>TEL</th>
        <td>
          <a href="tel:<?php
          $tel_munber = get_field( '電話番号', 'salon_category_'.$term_ID);
          $tel_munber = str_replace(array('-', 'ー', '－', '―', '‐','(',')','（','）',' ','　'), '', $tel_munber);
          echo $tel_munber;
          ?>" onClick="ga('send', 'event', 'sp', 'tel');">
          <?php the_field( '電話番号', 'salon_category_'.$term_ID); ?>
          </a>
        </td>
      </tr>  
      <tr>
        <th>住所</th>
        <td>
        <?php the_field( '住所', 'salon_category_'.$term_ID); ?>
        </td>
      </tr>  
      <tr>
        <th>営業時間</th>
        <td>
        <?php the_field( '営業時間', 'salon_category_'.$term_ID); ?>
        </td>
      </tr>  
      <tr>
        <th>定休日</th>
        <td>
        <?php the_field( '定休日', 'salon_category_'.$term_ID); ?>
        </td>
      </tr>
    </table>
  </section>
</main>
<?php endif; ?>

<!--スタッフ一覧-->
<?php if (is_post_type_archive('salon')): ?>
  <main>
      <h2 class="section_ttl txt-ctr mgn-btm40">STAFF</h2>
      <div class="inner mgn-btm40">
        <?php if (have_posts()) : ?>
          <div class="staff_archive_list flex flex-c-wrap mgn-btm40">
            <?php 
            while ( have_posts() ){
              the_post();
              get_template_part('parts/post-list-staff');
            }
            ?>
          </div>
          <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        <?php else: ?>
        <?php endif; ?>
      </div>
  </main>
<?php endif; ?>



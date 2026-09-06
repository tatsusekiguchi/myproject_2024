<main>
  <div class="inner inner-sm">
    <h1 class="section_ttl mgn-btm24 txt-ctr">STAFF</h1>

    <div class="flex staff-detail mgn-btm56">
      <div class="left">
        <?php if(get_field('写真')): ?>
          <?php $image = wp_get_attachment_image_src(get_field('写真'), 'large'); ?>
          <div class="image">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('写真')) ?>" />
          </div>
        <?php endif; ?>

        <?php if(get_field('インスタグラム')): ?>
            <div class="sns_block">
              <div class="icon">
                <img src="/wp/wp-content/themes/original_theme/images/insta.svg" width="26" height="26" >
                <a href="<?php the_field('インスタグラム'); ?>" target="_blank"></a>
              </div>
            </div>
        <?php endif; ?>
      </div>

      <div class="right">
        <?php if(get_field('肩書き')): ?>
            <p class="job_title"><?php the_field('肩書き'); ?></p>
        <?php endif; ?>
        <h3 class="ttl"><?php the_title(); ?></h3>
        <?php if(get_field('ローマ字')): ?>
            <p class="romaji"><?php the_field('ローマ字'); ?></p>
        <?php endif; ?>

        <table class="staff_table">
          <?php if(get_field('所属店舗')): ?>
            <tr>
              <th>所属店舗</th>
              <td><?php the_field('所属店舗'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('年齢')): ?>
            <tr>
              <th>年齢</th>
              <td><?php the_field('年齢'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('誕生日')): ?>
            <tr>
              <th>誕生日</th>
              <td><?php the_field('誕生日'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('血液型')): ?>
            <tr>
              <th>血液型</th>
              <td><?php the_field('血液型'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('星座')): ?>
            <tr>
              <th>星座</th>
              <td><?php the_field('星座'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('趣味')): ?>
            <tr>
              <th>趣味</th>
              <td><?php the_field('趣味'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('出身地')): ?>
            <tr>
              <th>出身地</th>
              <td><?php the_field('出身地'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('出身校')): ?>
            <tr>
              <th>出身校</th>
              <td><?php the_field('出身校'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('美容師歴')): ?>
            <tr>
              <th>美容師歴</th>
              <td><?php the_field('美容師歴'); ?></td>
            </tr>
          <?php endif; ?>

          <?php if(get_field('得意なスタイル')): ?>
            <tr>
              <th>得意なスタイル</th>
              <td><?php the_field('得意なスタイル'); ?></td>
            </tr>
          <?php endif; ?>
        </table>
      </div>
    </div>

    <?php if(get_field('メッセージ')): ?>
      <div class="staff_message mgn-btm112">
        <div class="flex">
          <div class="left Ropa-Sans">MESSAGE</div>
          <div class="right"><?php the_field('メッセージ'); ?></div>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <div class="inner">
    <section class="salon_block_staff mgn-btm180">
      <h3 class="section_ttl txt-ctr mgn-btm80">OTHER STYLISTS</h3>

      <ul class="staff_list inner flex flex-c-wrap">
        <?php
          $terms = get_the_terms($post->ID,'salon_category');
          $args = array(
              'posts_per_page' => 36,
              'post_type' => 'salon',
              'term' => $terms[0]->slug ,
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

      <a href="/salon/" class="read_more center Ropa-Sans">MORE VIEW</a>
    </section>
  </div>

    <?php if(has_term('other', 'salon_category', $post)): ?>
    <?php else: ?>

      <?php
        $term_slug = get_query_var('salon_category');
        $term_ID = get_term_by('slug',$term_slug,'salon_category')->term_id;
      ?>
      <h3 class="section_ttl txt-ctr mgn-btm24">SALON INFO</h3>

      <?php if(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID)): ?>
        <?php $image = wp_get_attachment_image_src(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID), 'full'); ?>
        <img class="salon-image-ctr mgn-btm130" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('SALONINFOイメージ写真', 'salon_category_'.$term_ID)) ?>" />
      <?php endif; ?>

      <div class="inner mgn-btm40">
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
            <?php the_field( '電話番号', 'salon_category_'.$term_ID); ?>
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
    <?php endif; ?>
  </main>


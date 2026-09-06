<main>
  <section class="salon_top_page">
    <h2 class="section_ttl txt-ctr mgn-btm32">SALON</h2>
    <ul class="salon_top_list mgn-btm64">

      <!-- utatane -->
      <li class="utatane">
        <div class="inner flex">
          <div class="left">
            <div class="image"
              style="background-image: url('/wp/wp-content/themes/original_theme/images/salon/utatane01@2x.png"></div>
          </div>

          <div class="right">
            <div class="salon_right_inner">
              <p class="ttl ltc-bodoni">utatane<span style="font-size:50%;">（うたたね）</span></p>

              <p style="font-weight: bold;margin: 0 0 10px;">March 2023<br><span style="font-size: 130%;">GRAND
                  OPEN</span></p>
              <p>岐阜県岐阜市川部</p>

              <ul class="salon_top_list-icons flex hair-icon kitsuke-icon">
                <li class="HAIR"><img src="/wp/wp-content/themes/original_theme/images/salon/hair-icon.svg" width="30"
                    height="30" alt="HAIR" class="HAIR"></li>
                <li class="KITSUKE"><img src="/wp/wp-content/themes/original_theme/images/salon/kitsuke-icon.svg"
                    width="30" height="30" alt="KITSUKE" class="KITSUKE"></li>

              </ul>
            </div>
          </div>

        </div>
        <a href="https://utatane-hair.jp/" target="_blank">></a>
      </li>
      <!-- /utatane -->
      <!-- utut -->
      <li class="utut">
        <div class="inner flex">
          <div class="left">
            <div class="image"
              style="background-image: url('/wp/wp-content/themes/original_theme/images/salon/utut02.jpg"></div>
          </div>

          <div class="right">
            <div class="salon_right_inner">
              <p class="ttl ltc-bodoni">utut<span style="font-size:50%;">（うとうと）</span></p>

              <!-- <p style="font-weight: bold;margin: 0 0 10px;">2022.3.30 wednesday <br><span style="font-size: 130%;">GRAND OPEN</span></p> -->

              <p>TEL：0575-29-9000</p>
              <p>岐阜県関市平和通6丁目2</p>

              <ul class="salon_top_list-icons flex hair-icon kitsuke-icon">
                <li class="HAIR"><img src="/wp/wp-content/themes/original_theme/images/salon/hair-icon.svg" width="30"
                    height="30" alt="HAIR" class="HAIR"></li>
                <li class="KITSUKE"><img src="/wp/wp-content/themes/original_theme/images/salon/kitsuke-icon.svg"
                    width="30" height="30" alt="KITSUKE" class="KITSUKE"></li>

              </ul>
            </div>
          </div>

        </div>
        <a href="https://utut-hair.jp/" target="_blank"></a>
      </li>
      <!-- /utut -->
      <?php
      $salon_categories = get_terms('salon_category');
      ?>
      <?php foreach ($salon_categories as $salon_category) : ?>
      <?php
        $term_ID = $salon_category->term_id;
        $term_name = $salon_category->name;
        $term_slug = $salon_category->slug;
        $taxonomy = $salon_category->taxonomy;
        ?>

      <li class="<?php echo $term_slug ?>">
        <div class="inner flex">
          <div class="left">
            <?php if (get_field('SALONINFOイメージ写真', 'salon_category_' . $term_ID)) : ?>
            <?php $image = wp_get_attachment_image_src(get_field('SALONINFOイメージ写真', 'salon_category_' . $term_ID), 'medium'); ?>

            <div class="image" style="background-image: url('<?php echo $image[0]; ?>"></div>

            <?php endif; ?>
          </div>

          <div class="right">
            <div class="salon_right_inner">
              <?php if (get_field('店舗名', 'salon_category_' . $term_ID)) : ?>
              <p class="ttl ltc-bodoni"><?php the_field('店舗名', 'salon_category_' . $term_ID); ?></p>
              <?php endif; ?>

              <?php if (get_field('電話番号', 'salon_category_' . $term_ID)) : ?>
              <p>TEL：<?php the_field('電話番号', 'salon_category_' . $term_ID); ?></p>
              <?php endif; ?>

              <?php if (get_field('住所', 'salon_category_' . $term_ID)) : ?>
              <p><?php the_field('住所', 'salon_category_' . $term_ID); ?></p>
              <?php endif; ?>

              <?php
                $service = get_field('サービスアイコン', 'salon_category_' . $term_ID);
                if ($service) :
                ?>
              <ul
                class="salon_top_list-icons flex <?php foreach ($service as $service) : ?><?php echo $service; ?> <?php endforeach; ?>">

                <li class="HAIR"><img src="/wp/wp-content/themes/original_theme/images/salon/hair-icon.svg" width="30"
                    height="30" alt="HAIR" class="HAIR"></li>

                <li class="ESTHETIC"><img src="/wp/wp-content/themes/original_theme/images/salon/esthetic-icon.svg"
                    width="30" height="30" alt="ESTHETIC" class="ESTHETIC"></li>

                <!-- <li class="NAIL" ><img src="/wp/wp-content/themes/original_theme/images/salon/nail-icon.svg" width="30" height="30" alt="NAIL" class="NAIL" ></li>

                      <li class="EYELASH" ><img src="/wp/wp-content/themes/original_theme/images/salon/eyelash-icon.svg" width="30" height="30" alt="EYELASH" class="EYELASH" ></li> -->

                <li class="KIDSROOM"><img src="/wp/wp-content/themes/original_theme/images/salon/kids-icon.svg"
                    width="30" height="30" alt="KIDSROOM" class="KIDSROOM"></li>

                <li class="KITSUKE"><img src="/wp/wp-content/themes/original_theme/images/salon/kitsuke-icon.svg"
                    width="30" height="30" alt="KITSUKE" class="KITSUKE"></li>
              </ul>
              <?php endif; ?>
            </div>
          </div>

        </div>

        <?php if ($term_slug == 'vitamin-k') { ?>

        <?php } else { ?>
        <a href="/salon/<?php echo $term_slug; ?>"></a>
        <?php } ?>

      </li>
      <?php endforeach ?>
    </ul>

    <div class="salon_icons_descript mgn-btm24">
      <ul class="flex">
        <li>
          <div><img src="/wp/wp-content/themes/original_theme/images/salon/hair-icon.svg" width="45" height="45"
              alt="HAIR" class="HAIR"></div>
          <p>HAIR</p>
        </li>

        <li>
          <div><img src="/wp/wp-content/themes/original_theme/images/salon/esthetic-icon.svg" width="45" height="45"
              alt="ESTHETIC" class="ESTHETIC"></div>
          <p>ESTHETIC</p>
        </li>

        <!-- <li>
            <div><img src="/wp/wp-content/themes/original_theme/images/salon/nail-icon.svg" width="45" height="45" alt="NAIL" class="NAIL" ></div>
            <p>NAIL</p>
          </li>

          <li>
            <div><img src="/wp/wp-content/themes/original_theme/images/salon/eyelash-icon.svg" width="45" height="45" alt="EYELASH" class="EYELASH" ></div>
            <p>EYELASH</p>
          </li> -->

        <li>
          <div><img src="/wp/wp-content/themes/original_theme/images/salon/kids-icon.svg" width="45" height="45"
              alt="KIDSROOM" class="KIDSROOM"></div>
          <p>KIDSROOM</p>
        </li>

        <li>
          <div><img src="/wp/wp-content/themes/original_theme/images/salon/kitsuke-icon.svg" width="45" height="45"
              alt="KITSUKE" class="KITSUKE"></div>
          <p>KITSUKE</p>
        </li>
      </ul>
    </div>

  </section>

</main>
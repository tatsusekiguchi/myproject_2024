<h2 class="section_ttl txt-ctr mgn-btm40"></h2>
<main>
  <?php the_content(); ?>

  <div class="data">
    <dl>
      <dt>営業時間</dt>
      <dd><?php the_field('open'); ?></dd>
    </dl>
    <dl>
      <dt>定休日</dt>
      <dd><?php the_field('close'); ?></dd>
    </dl>
    <dl class="kinmu">
      <dt>勤務時間</dt>
      <dd><?php the_field('kinmu'); ?></dd>
    </dl>
    <dl>
      <dt class="kyuuyo03">給与詳細</dt>
      <dd>
        <dl>
          <dt>正社員</dt>
          <dd>
            <?php
            if (have_rows('kyuuyo01')) :

              // Loop through rows.
              while (have_rows('kyuuyo01')) : the_row();

                if (have_rows('category01')) :

                  // Loop through rows.
                  while (have_rows('category01')) : the_row();

            ?>
                    <dl>
                      <dt>●<?php the_sub_field('post'); ?>／</dt>
                      <dd><?php the_sub_field('kyuuyo02'); ?></dd>
                    </dl>
            <?php

                  endwhile;

                // No value.
                else :
                // Do something...
                endif;

              endwhile;

            // No value.
            else :
            // Do something...
            endif;
            ?>
          </dd>
        </dl>

        <dl>
          <dt>パート</dt>
          <dd>
            <?php
            if (have_rows('kyuuyo01')) :

              // Loop through rows.
              while (have_rows('kyuuyo01')) : the_row();

                if (have_rows('category02')) :

                  // Loop through rows.
                  while (have_rows('category02')) : the_row();

            ?>
                    <dl>
                      <dt>●<?php the_sub_field('post'); ?>／</dt>
                      <dd><?php the_sub_field('kyuuyo02'); ?></dd>
                    </dl>
            <?php

                  endwhile;

                // No value.
                else :
                // Do something...
                endif;

              endwhile;

            // No value.
            else :
            // Do something...
            endif;
            ?>
          </dd>
        </dl>
      </dd>
    </dl>
    <dl class="fukuri">
      <dt>福利厚生</dt>
      <dd>
        <div><?php the_field('fukuri'); ?></div>
      </dd>
    </dl>
  </div>
  <!-- /.data -->

  <div class="salondata">
    <div class="image">
      <img src="/wp/wp-content/uploads/2022/04/logo.png" alt="ビタミン 一宮市 美容院">
    </div>

    <div class="data">
      <div class="name">VITAMIN<span>- ビタミン -</span></div>
      <div class="zip">
        〒494-0001
      </div>
      <div class="address">
        愛知県一宮市開明神明郭５
      </div>
      <div class="tel">
      <a href="tel:0586-46-3238">TEL : 0586-46-3238</a>
      </div>
      <div class="open">
        <dl>
          <dt>OPEN</dt>
          <dd>9:00-19:00</dd>
        </dl>
        <dl>
          <dt>CLOSE</dt>
          <dd>毎週月曜日</dd>
        </dl>
      </div>
      <div class="parking">
        <span class="circle">P</span>駐車場完備しています。
      </div>

    </div>

    <div class="map">
      <a href="https://goo.gl/maps/3bNezxnX8Zugj2vg8" target="_blank">
        <img src="/wp/wp-content/uploads/2022/04/vitamin04.png" alt="ビタミン地図">
      </a>
    </div>

  </div>
  <!-- /.salondata -->
  <div class="link">
    <a href="https://pastone.recxit.jp/" target="_blank">応募はこちらから</a>
  </div>
  <!-- /.link -->
</main>
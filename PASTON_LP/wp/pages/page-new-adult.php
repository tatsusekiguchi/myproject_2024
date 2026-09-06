<div class="new-adult-slider-wrapper">
  <div class="new-adult-slider sp-none">
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg01.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg02.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg03.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg04.jpg" alt="コンセプトイメージ"></div>
  </div>
  <div class="new-adult-slider-sp pc-none">
  <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg01.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg02.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg03.jpg" alt="コンセプトイメージ"></div>
    <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/mainimg04.jpg" alt="コンセプトイメージ"></div>
  </div>
  <div class="new-adult-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/2023.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/2023.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/new-adult/2023@2x.png 2x" alt="ヘッダー">
  </div>
</div>

<!-- <section class="sub_hero">
    <div class="new-adult-ttl txt-ctr ltc-bodoni">
      <p class="ttl01">大手美容室グループだからできる<br>あなただけの振袖イベント</p>
      <p class="ttl02 Ropa-Sans">PASTONE</p>
      <p class="ttl03">振袖展示会</p>
      <p class="ttl04 border-font YuGothic">2020</p>
      <p class="ttl05 YuGothic">FURISODE EXHIBITION</p>
    </div>
  </section> -->

<main>
  <section class="new-adult-event">
    <div class="inner inner-sm">
      <div class="event-schedule">

        <!--  -->
        <?php
        if (have_rows('展示会スケジュール')) :
        ?>
          <div class="group">
            <?php
            while (have_rows('展示会スケジュール')) : the_row();
            ?>
              <div class="block">
                <div class="day01">
                  <?php the_sub_field('header'); ?>
                </div>
                <div class="label">
                  <ul>
                    <li>
                      要予約
                    </li>
                    <li>
                      手ぶら見学無料
                    </li>
                  </ul>
                </div>
                <dl>
                  <dt>
                    <?php the_sub_field('イベント'); ?>
                  </dt>
                  <dd>
                    <?php the_sub_field('開催日'); ?>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    開催時間
                  </dt>
                  <dd>
                    <?php the_sub_field('time'); ?>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    会場
                  </dt>
                  <dd>
                    <span class="name">
                      <a href="<?php the_sub_field('map'); ?>" target="_blank">
                        <?php the_sub_field('place'); ?>
                      </a>
                    </span>
                    <br>
                    <span class="tel">
                      <?php the_sub_field('tel'); ?>
                    </span>
                    <br>
                    <span class="address">
                      <?php the_sub_field('address'); ?>
                    </span>
                    <span class="map01">
                      <a href="<?php the_sub_field('map'); ?>" target="_blank">
                        GOOGLE MAP >
                      </a>
                    </span>
                  </dd>
                </dl>
              </div>
            <?php
            endwhile;
            ?>
          </div>
          <!-- /.group -->
        <?php
        else :
        endif;
        ?>
        <!--  -->
        <?php if (have_rows('展示会スケジュー')) : ?>
          <table class="mgn-btm24">
            <?php while (have_rows('展示会スケジュー')) : the_row(); ?>
              <tr>
                <th><?php the_sub_field('イベント'); ?></th>
                <td><?php the_sub_field('開催日'); ?></td>
              </tr>
            <?php endwhile; ?>
            <tr>
              <th>開催時間</th>
              <td>10:00 ～ 18:00</td>
            </tr>
          </table>
        <?php endif; ?>
        <!-- <div class="access-list mgn-btm16 flex">
          <p class="left">会場</p>
          <p class="right">
            パストーン本社<br>
            TEL: 058-213-5138 ［ご予約専用］<br>
            岐阜県羽島市竹鼻町狐穴字渡瀬546-1<br>
            <a href="https://goo.gl/maps/q4guM3MqxEx" target="_blank" class="map">MAP ></a>
          </p>
        </div>
        <ul class="event-list flex txt-ctr">
          <li>要予約</li>
          <li>手ぶら見学<br>無料</li>
        </ul> -->

      </div>
    </div>
  </section>

  <section class="new-adult-block">
    <div class="pink-block">
      <div class="inner inner-sm">
        <h2 class="ttl01 border-font pink YuGothic mgn-btm8">FIRST RENTAL</h2>
        <h3 class="ttl02 ltc-bodoni mgn-btm16">ファーストレンタルとは</h3>
        <p class="txt-ctr mgn-btm40">商品仮縫い状態の振袖を、あなたのサイズに合わせてイチから仕立てていくプラン。<br>
          「サイズがなくて選べなかった」ということもなく新品をレンタルできます。</p>
        <div class="first-rental-list flex flex-j-between mgn-btm48">
          <div class="left">
            <h4 class="ttl01 ltc-bodoni">ファーストレンタル</h4>
            <p class="text">新作新品レンタル振袖<br>+　前撮り<br>+　当日ヘアセットメイク着付け</p>
            <p class="price">267,000〜<span>（税別）</span></p>
          </div>
          <div class="right">
            <h4 class="ttl01 ltc-bodoni">仕立て済みレンタル</h4>
            <p class="text">仕立て済みレンタル振袖<br>+　前撮り<br>+　当日ヘアセットメイク着付け</p>
            <p class="price">227,800〜<span>（税別）</span></p>
          </div>
        </div>
        <h3 class="ttl03 mgn-btm40">About FURISODE Rental</h3>
        <div class="furisode-list flex flex-j-between">
          <div class="box">
            <h4>振袖・小物選び</h4>
            <p>事前予約をいただいているので、一組様ごとに見ていただけます。他のお客様と一緒にならないのでゆっくりとお選びいただけます。小物もこだわって選んでいただくことが出来ます。</p>
          </div>
          <div class="box">
            <h4>納品・引き取り</h4>
            <p>振袖を使用される日程が決まったら当店に届きます。成人式後も当店へそのままご返却いただければ大丈夫です。</p>
          </div>
          <div class="box">
            <h4>長期レンタルOK!</h4>
            <p>前撮り撮影から成人式翌日まで最長６カ月間の長期着物レンタルが叶います。初詣や結婚式など色々なシーンで振袖を楽しんでください。</p>
          </div>
        </div>

      </div>
    </div>
    <div class="blue-block">
      <div class="inner inner-sm">
        <div class="furisode-rental flex flex-j-between">
          <div class="left">
            <h4 class="ttl01 ltc-bodoni">成人袴レンタル</h4>
            <p class="text">レンタル一式<br>+　前撮り・写真アルバムCDデータ付き<br>+　当日ヘアセットメイク着付け
            </p>
            <p class="price">227,800〜<span>（税別）</span></p>
          </div>
          <div class="right">
            <h4 class="ltc-bodoni ttl01">友達割</h4>
            <table class="introduction">
              <tr>
                <th><span>一人紹介すると</span>本人も友達も</th>
                <td>¥10,000 OFF</td>
              </tr>
              <tr>
                <th><span>二人紹介すると</span>本人も友達も</th>
                <td>¥2,000 OFF</td>
              </tr>
              <tr>
                <th><span>三人紹介すると</span>本人も友達も</th>
                <td>¥3,000 OFF</td>
              </tr>
              <tr>
                <th>最大10人紹介で、本人も友達もなんと！！</th>
                <td>¥10,000 OFF</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="new-adult-schedule mgn-btm48">
    <div class="inner inner-sm">
      <h2 class="ttl01 txt-ctr mgn-btm40">成人式までのスケジュール</h2>
      <ul class="flex flex-j-between flex-c-wrap">
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">01</p>衣装選び
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow01.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow01.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow01@2x.jpg 2x" alt="衣装選び">
          <p>パストーンにご来店いただき、お気に入りの一着を見つけよう！小物だけのレンタルもOK！</p>
          <span class="arrow"></span>
        </li>
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">02</p>ヘアメイク打ち合わせ
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow02.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow02.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow02@2x.jpg 2x" alt="ヘアメイク打ち合わせ">
          <p>髪質などを把握している美容師さんだからきっと、思い通りの仕上がりになれるよ！！</p>
          <span class="arrow"></span>
        </li>
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">03</p>前撮り
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow03.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow03.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow03@2x.jpg 2x" alt="前撮り">
          <p>プロカメラマンがステキな姿をバッチリおさえてくれて、モデル気分で撮影ができるよ！</p>
          <span class="arrow"></span>
        </li>
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">04</p>ヘアメイク打ち合わせ
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow04.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow04.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow04@2x.jpg 2x" alt="ヘアメイク打ち合わせ">
          <p>いよいよ当日に向けたヘアメイクリハーサル！前撮りと違うヘアメイクを楽しもう♩</p>
          <span class="arrow"></span>
        </li>
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">05</p>成人式当日
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow05.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow05.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow05@2x.jpg 2x" alt="成人式当日">
          <p>胸の高鳴りは期待の表れ！ちょっぴり緊張するかもしれないけど、お楽しみがいっぱいの成人式の始まりです！</p>
          <span class="arrow"></span>
        </li>
        <li>
          <h3 class="sub-ttl">
            <p class="border-font">06</p>返却
          </h3>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow06.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow06.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/images/new-adult/flow06@2x.jpg 2x" alt="返却">
          <p>お手入れ・クリーニングなしでそのままお近くの店舗へ返却でOK！</p>
          <span class="arrow"></span>
        </li>
      </ul>
    </div>
  </section>

  <section class="new-adult-faq mgn-btm104">
    <div class="inner inner-sm">
      <h2 class="faq-ttl txt-ctr mgn-btm40">振袖Q&A</h2>
      <?php if (have_rows('q&a')) : ?>
        <ul class="faq-list">
          <?php while (have_rows('q&a')) : the_row(); ?>
            <li>
              <h3 class="question"><?php the_sub_field('質問'); ?></h3>
              <p class="answer mgn-btm32"><?php the_sub_field('回答'); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </section>

  <section class="new-adult-gallery open mgn-btm80">
    <div class="inner inner-sm">
      <h2 class="ttl01 txt-ctr mgn-btm40">
        <p class="jp">前撮り</p>
        <p class="en ltc-bodoni">GALLERY</p>
      </h2>
      <div class="inner-block">
        <?php if (have_rows('前撮り')) : ?>
          <ul class="gallery-images flex flex-j-between flex-c-wrap">
            <?php while (have_rows('前撮り')) : the_row(); ?>
              <li>
                <?php $img_thumbnail = wp_get_attachment_image_src(get_sub_field('前撮り画像'), 'thumbnail');
                $img_large = wp_get_attachment_image_src(get_sub_field('前撮り画像'), 'large');
                echo '<a href="' . $img_large[0] . '" rel="lightbox[gallary]" >';
                echo '<img src="' . $img_thumbnail[0] . '" alt="前撮り" />';
                echo '</a>';
                ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

      <p class="read_more"><span>MORE VIEW</span></p>
    </div>
  </section>

  <section class="new-adult-menu open">
    <h2 class="ttl01 txt-ctr">
      <p>MENU</p>
    </h2>
    <div class="pink-block txt-ctr mgn-btm24">
      <h2 class="ttl01 ">成人式前撮りプラン</h2>
      <p class="read_more center"><span>MORE VIEW</span></p>
    </div>
    <div class="inner inner-sm">
      <div class="inner-block">
        <?php if (have_rows('着付け')) : ?>
          <ul class="gallery-images flex flex-j-between flex-c-wrap">
            <?php while (have_rows('着付け')) : the_row(); ?>
              <li>
                <?php $img_thumbnail = wp_get_attachment_image_src(get_sub_field('着付け画像'), 'medium');
                $img_large = wp_get_attachment_image_src(get_sub_field('着付け画像'), 'large');
                echo '<a href="' . $img_large[0] . '" rel="lightbox[gallary]" >';
                echo '<img src="' . $img_thumbnail[0] . '" alt="着付け" />';
                echo '</a>';
                ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="new-adult-menu open">
    <div class="purple-block txt-ctr">
      <h2 class="ttl01">成人式メニュー</h2>
      <p class="read_more center"><span>MORE VIEW</span></p>
    </div>
    <div class="inner-block">
      <div class="inner inner-sm">
        <h3 class="salon-menu-ttl txt-ctr">CUT</h3>
        <table class="menu_table">
          <tr>
            <th>CUT</th>
            <td class="left">4,000</td>
            <th class="right">CUT</th>
            <td>4,000</td>
          </tr>
          <tr>
            <th>CUT/PARM</th>
            <td class="left">4,000</td>
            <th class="right">CUT/PARM</th>
            <td>4,000</td>
          </tr>
          <tr>
            <th>CUT/PARM/COLOR</th>
            <td class="left">4,000</td>
            <th class="right">CUT/PARM/COLOR</th>
            <td>4,000</td>
          </tr>
        </table>
        <h3 class="salon-menu-ttl txt-ctr">CUT</h3>
        <table class="menu_table">
          <tr>
            <th>CUT</th>
            <td class="left">4,000</td>
            <th class="right">CUT</th>
            <td>4,000</td>
          </tr>
          <tr>
            <th>CUT/PARM</th>
            <td class="left">4,000</td>
            <th class="right">CUT/PARM</th>
            <td>4,000</td>
          </tr>
          <tr>
            <th>CUT/PARM/COLOR</th>
            <td class="left">4,000</td>
            <th class="right">CUT/PARM/COLOR</th>
            <td>4,000</td>
          </tr>
        </table>
      </div>
    </div>

  </section>

  <section class="new-adult-contact">
    <h2 class="ttl01 txt-ctr mgn-btm40">
      <p class="en ltc-bodoni">CONTACT</p>
      <p class="jp">お問い合わせ</p>
    </h2>

    <div class="inner inner-sm">
      <table>
        <!-- <tr>
          <th>Hair Salon Caboshard（ヘアーサロン カボシャール）</th>
          <td>TEL: 058-394-0510</td>
        </tr> -->
        <tr>
          <th>BEYOND L’INK（美容室リンク）</th>
          <td>TEL: 0584-82-2345</td>
        </tr>
        <tr>
          <th>Cantik（チャンティ）</th>
          <td>TEL: 0584-68-2330</td>
        </tr>
        <tr>
          <th>ABADI（アバディ）</th>
          <td>TEL: 058-391-0380</td>
        </tr>
        <tr>
          <th>VAN COUNCIL（ヴァンカウンシル）</th>
          <td>TEL: 058-322-4840</td>
        </tr>
        <tr>
          <th>Vitamin（ビタミン）</th>
          <td>TEL: 0586-46-3238</td>
        </tr>
        <tr>
          <th>utut（うとうと）</th>
          <td>TEL: 0575-29-9000</td>
        </tr>
        <tr>
          <th>utatane（うたたね）</th>
          <td>TEL: 058-214-8889</td>
        </tr>
        <tr>
          <th>PASTONE inc.（株式会社パストーン）</th>
          <td>TEL: 058-213-5138<br>MAIL:sawai@pastone.jp</td>
        </tr>
      </table>
    </div>


  </section>




</main>
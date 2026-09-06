
  <section class="sub_hero">
    <div class="inner-box">
      <h1 class="section_ttl">BEYOND L’INK</h1>
      <ul class="sub-menu">
        <li><a href="/">STAFF</a></li>
        <li><a href="/price">PRICE</a></li>
        <li><a href="/coupon">COUPON</a></li>
        <li><a href="/blog">BLOG</a></li>
        <li><a href="/reserve">RESERVE</a></li>
      </ul>
    </div>
    <div class="salon-logo">
      <img src="/wp/wp-content/themes/original_theme/images/beyond_link_logo.jpg" alt="BEYOND L'INK BEAUTY RESORT ">
    </div>
  </section>

<main>
  <section class="section_pdg salon_block">
    <div class="inner">
      <div class="right">
        <h3 class="section_ttl_jp">心地よい時間を提供し続ける。</h3>
        <p>お客様、仲間、時代、地域に必要とされる。<br>
        「ありそうでなかったものを」を創る。<br>
        「わくわくする時間、体験」を提供する。<br>
        そんな価値観のもと、「美」に関する店舗経営と<br>
        プロデュースを行う会社です。</p>
      </div>
    </div>
  </section>

  <section class="section_pdg salon_block">
    <div class="inner">
      <img src="/wp/wp-content/themes/original_theme/images/salon-image01.jpg" alt="">
    </div>
  </section>

  <h3 class="section_ttl txt-ctr">SPACE</h3>

  <img src="/wp/wp-content/themes/original_theme/images/salon-image02.jpg" alt="" class="salon-image-right">

  <section class="salon_block_left">
    <h3 class="section_ttl_jp mgn-btm40">心地よい時間を<br>提供し続ける。</h3>
    <p>お客様、仲間、時代、地域に必要とされる。<br>
    「ありそうでなかったものを」を創る。<br>
    「わくわくする時間、体験」を提供する。<br>
    そんな価値観のもと、「美」に関する店舗経営と<br>
    プロデュースを行う会社です。</p>
  </section>

  <img src="/wp/wp-content/themes/original_theme/images/salon-image03.jpg" alt="" class="salon-image-ctr mgn-btm180">

  <section class="salon_block_menu mgn-btm180">
    <h3 class="section_ttl txt-ctr mgn-btm24">MENU</h3>
    <table class="menu_table Ropa-Sans">
      <tr>
        <th>CUT</th>
        <td>4,000</td>
        <th>CUT</th>
        <td>4,000</td>
      </tr>
      <tr>
        <th>CUT/PARM</th>
        <td>4,000</td>
        <th>CUT/PARM</th>
        <td>4,000</td>
      </tr>
      <tr>
        <th>CUT/PARM/COLOR</th>
        <td>4,000</td>
        <th>CUT/PARM/COLOR</th>
        <td>4,000</td>
      </tr>
      <tr>
        <th>CUT</th>
        <td>4,000</td>
        <th>CUT</th>
        <td>4,000</td>
      </tr>
      <tr>
        <th>CUT/PARM</th>
        <td>4,000</td>
        <th>CUT/PARM</th>
        <td>4,000</td>
      </tr>
      <tr>
        <th>CUT/PARM/COLOR</th>
        <td>4,000</td>
        <th>CUT/PARM/COLOR</th>
        <td>4,000</td>
      </tr>
    </table>
  </section>

  <section class="salon_block_staff mgn-btm180">
    <h3 class="section_ttl txt-ctr mgn-btm24">STAFF</h3>
    <ul class="staff_list flex">
      <?php $args = array(
          'numberposts' => 3,
          'post_type' => 'staff'
      );
      $posts = get_posts( $args );
      if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
          <li><a href="<?php the_permalink(); ?>">

            <?php if(get_field('写真')): ?>
              <?php $image = wp_get_attachment_image_src(get_field('写真'), 'thumbnail'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('写真')) ?>" />
            <?php endif; ?>

          </a></li>
      <?php endforeach; ?>
      <?php else : ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </ul>
    <a href="" class="read_more center Ropa-Sans">READ MORE</a>
  </section>


  <h3 class="section_ttl txt-ctr mgn-btm24">SALON INFO</h3>

  <img src="/wp/wp-content/themes/original_theme/images/salon-image04.jpg" alt="" class="salon-image-ctr mgn-btm130">

  <div class="inner mgn-btm40">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=ja&amp;geocode=&amp;q=%E5%B2%90%E9%98%9C%E7%9C%8C%E7%BE%BD%E5%B3%B6%E5%B8%82%E7%AB%B9%E9%BC%BB%E7%94%BA%E7%8B%90%E7%A9%B4%E5%AD%97%E6%B8%A1%E7%80%AC546-1&amp;aq=&amp;sll=36.114422,138.032083&amp;sspn=3.190304,5.174561&amp;brcurrent=3,0x6003a575384a5ca7:0x6c91e4a162554011,0,0x6003a5a0036f95ed:0x27c19f83cd8edf2c&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%B2%90%E9%98%9C%E7%9C%8C%E7%BE%BD%E5%B3%B6%E5%B8%82%E7%AB%B9%E9%BC%BB%E7%94%BA%E7%8B%90%E7%A9%B4%E6%B8%A1%E7%80%AC&amp;t=m&amp;z=14&amp;ll=35.319541,136.707829&amp;output=embed"></iframe>
  </div>

  <section class="foot_adress_block mgn-btm80">
    <h3 class="ttl Ropa-Sans mgn-btm32">BEYOND L’INK<p>ビヨンドリンク</p></h3>
    <table>
      <tr>
        <th>TEL</th>
        <td>058-482-23456</td>
      </tr>  
      <tr>
        <th>住所</th>
        <td>〒503-0807 岐阜県大垣市今宿3丁目1</td>
      </tr>  
      <tr>
        <th>営業時間</th>
        <td>火〜土/AM9:00～PM7:00</td>
      </tr>  
      <tr>
        <th>定休日</th>
        <td>日・祝/AM9:00～PM6:30</td>
      </tr>
    </table>
  </section>


</main>




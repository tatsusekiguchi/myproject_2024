<footer class="footer">
  <div class="foot-block Ropa-Sans">
    <p class="large">PASTONE GROUP</p>
    <p class="small">HAIR MAKE & ESTHETIQUE</p>
  </div>

  <nav class="inner">
    <ul class="foot-nav flex flex-j-between">
      <li><a href="/">ホーム</a></li>
      <li><a href="/salon-list/">サロン</a></li>
      <li><a href="/news/">お知らせ</a></li>
      <!-- <li><a href="/column/">コラム</a></li> -->
      <li><a href="/contact/">お問い合わせ</a></li>
      <li><a href="https://pastone.recxit.jp" target="_blank">採用情報</a></li>
      <li><a href="/about/">会社概要</a></li>

    </ul>
  </nav>
  <p class="footer--copyright"><small>COPYRIGHT &copy; PASTONE GROUP ALL RIGHTS
      RESERVED.<br>当サイトに掲載のコピーおよび画像等、すべてのデータを無断で複写・転載することは、著作権法等で禁じられています。
    </small></p>

</footer>

<?php
include(TEMPLATEPATH . '/js/main_js.php'); ?>


<?php wp_footer(); ?>
<?php
$cv = get_the_author_meta('cv', 2);
$body_bottom = get_the_author_meta('body_bottom', 2);
?>
<?php if (!is_user_logged_in()) : ?>
<?php if (is_page('thanks') && $cv) {
    echo $cv;
  } ?>
<?php if ($body_bottom) {
    echo $body_bottom;
  } ?>
<?php endif; ?>
</body>

</html>
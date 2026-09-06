<aside>
  <ul class="news--archive flex flex-j-ctr">

  <?php
  $cats = get_terms('news_category',array(
    'hide_empty' => true, // 空のタームを返さない
    'parent' => 0, // 直近の子タームを返す
  )); //カテゴリー
  foreach($cats as $cat):
  ?>
    <li>
      <a href="/news/<?php echo $cat->slug; ?>/"><?php echo $cat->name; ?></a>
    </li>
  <?php endforeach; ?>

  </ul>
</aside>
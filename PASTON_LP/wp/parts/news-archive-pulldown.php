<aside>
  <div class="archive-pulldown flex mgn-btm24">
    <div class="archive_list flex flex-a-ctr">
      <div class="archive_list--label">年で絞る</div>
      <div class="pos_rel">
        <button class="archive_list--btn">
          <?php
          if ( is_date() ) {
            echo $detail_info['title'];
          } else {
            echo 'ALL';
          } ?>
          <span class="archive_list--btn_arrow"></span>
        </button>
        <div class="archive_list--menu">
          <a class="archive_list--item" href="/<?php echo $post_type; ?>/">ALL</a>
          <?php
          $year_prev = null;
          $years = $wpdb->get_results(
            "SELECT DISTINCT YEAR( post_date ) AS year,
            COUNT( id ) as post_count
            FROM $wpdb->posts
            WHERE
              post_status = 'publish'
              and post_date <= now( )
              and post_type = '$post_type'
            GROUP BY year
            ORDER BY post_date DESC"
          );
          foreach($years as $year) :?>
          <a class="dropdown-item font-deco-roboto" href="/<?php echo $post_type; ?>/date/<?php echo $year->year; ?>/"><?php echo $year->year; ?>年</a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</aside>

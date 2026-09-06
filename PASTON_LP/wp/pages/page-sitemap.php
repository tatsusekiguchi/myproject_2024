<main class="sitemap section_pdg" id="sitemap">

  <?php
  // 初期セット
  $home_url = home_url(); //ホームURL
  $c_name = 'pastone'; //★basic認証用 ユーザ名★
  $c_pass = 'ZyFtQFskzRNX'; //★basic認証用 パスワード★

  // テストの場合（basic認証を外す必要がある）
  if(isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'dev'):
    $xml_url = 'http://'.$c_name.':'.$c_pass.'@'.$c_name.'.test2.leapy.jp/sitemap_index.xml';
  // 本番の場合
  else:
    $xml_url = $home_url.'/sitemap_index.xml';
  endif;

  $sitemap_xml = simplexml_load_file($xml_url); // site_map.xmlから情報を取得
  $sitemap_arr = []; // 空の配列を準備
  $count = 0; //count用の変数
  $match_num = '';

  foreach( $sitemap_xml->sitemap as $data ):

    // XMLのURL取得
    $loc = $data->loc;
    $loc = str_replace('SimpleXMLElement Object','',$loc);
    // posttypeとカスタムタクソノミー名取得
    $type = str_replace($home_url.'/','',$loc);
    $type = str_replace('-sitemap.xml','',$type);
    if ( get_post_type_object($type) != '' ) {
      $slug = esc_html( get_post_type_object($type)->name );
      $label = esc_html( get_post_type_object($type)->label );
    }
    if ( !$slug && !$label ) {
      $slug = get_taxonomy($type)->name;
      $label = get_taxonomy($type)->label;
    }

    // typeに同じ文字列があればmatch_numに数字を入れる
    foreach( $sitemap_arr as $sitemap_judge ) {
      $type_name = $sitemap_judge['type'];
      $num = '';
      if( strpos( $type,$type_name ) !== false){
        $match_num = $sitemap_judge['num'];
        break;
      }
    }

    // match_numに数字があれば↑の数字を使って、なければloop_countを使う
    if ( $match_num ) {
      $num = $match_num;
    } else {
      $num = $count;
      $match_num = 0;
    }

    $genre = '';
    // 固定ページの場合
    if ( $slug == 'page' ) {
      $genre = 'page';
    }
    // タクソノミーの場合
    elseif ( $match_num != 0 ) {
      $genre = 'taxonomy';
    }
    // それ以外の場合（おそらく投稿）
    else {
      $genre = 'post';
    }
    $xml_url = $loc;
    // テストのxml_urlを変更
    if(isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'dev'):
      $xml_url = str_replace($c_name, $c_name.':'.$c_pass.'@'.$c_name, $xml_url);
    endif;
    $type_urls = simplexml_load_file($xml_url); // xmlから取得 

    $sitemap_child_arr = []; // 空の配列を準備

    if ( $genre != 'post' ) {
      
      foreach ( $type_urls->url as $type_url ):
        // urlのみ取得
        $type_url_loc = $type_url->loc;
        $type_url_loc = str_replace('SimpleXMLElement Object','',$type_url_loc);
        // 最後の要素取得
        $path_arr = explode('/',$type_url_loc);
        $path_arr = array_reverse($path_arr);
        $path_count = count($path_arr); // URLが何個に分かれているか数える
        $dir_loop_num = $path_count - 4;
        $last_dir = '';
        // 固定ページかつ子ページの場合はlast_dirをドメイン以下にする
        if ($dir_loop_num >= 2 && $genre == 'page') {
          for ($i=0; $i < $dir_loop_num; $i++) {
            $d_i = $dir_loop_num - $i;
            $last_dir .= $path_arr[$d_i].'/';
          }
        } else {
          $last_dir = $path_arr[1];
        }

        // slugからIDを取得
        // 変数作成
        $xml_post = '';
        $xml_post_id = '';
        $xml_post_ttl = '';
        $xml_post_parent = '';
        $xml_post_taxonomy = '';
        $xml_post_order = '';
        $xml_taxonomy = '';
        if ( $genre == 'page' ) {
          $xml_post = get_page_by_path($last_dir);
          if ( $xml_post ) {
            $xml_post_id = $xml_post->ID;
            $xml_post_ttl = $xml_post->post_title;
            $xml_post_parent = $xml_post->post_parent;
            $xml_post_order = $xml_post->menu_order;
          }
        } elseif ( $genre == 'taxonomy') {
          $xml_post = get_term_by('slug', $last_dir,$type );
          if ( $xml_post ) {
            $xml_post_id = $xml_post->term_id;
            $xml_post_ttl = $xml_post->name;
            $xml_post_taxonomy = $xml_post->taxonomy;
            $xml_post_parent = $xml_post->parent;
            $xml_post_order = $xml_post->term_order;
          }
        }

        if ( $genre != 'post' ) {
          $sitemap_child_arr[] = array(
            'id' => $xml_post_id,
            'ttl' => $xml_post_ttl,
            'taxonomy' => $xml_post_taxonomy,
            'post_parent' => $xml_post_parent,
            'order' => $xml_post_order,
          );
        }
      endforeach;
      
    }

    // 多次元配列$sitemap_arrをnumでソートする
    $child_sort = array();
    foreach( (array)$sitemap_child_arr as $child_key => $child_value ) {
      $child_sort[$child_key] = $child_value['order'];
    }
    array_multisort($child_sort, SORT_ASC, $sitemap_child_arr);

    // それぞれの情報を配列に入れ込む
    $sitemap_arr[] = array(
      'xml' => $loc,
      'type' => $type,
      'slug' => $slug,
      'label' => $label,
      'count' => $count,
      'num' => $num,
      'parent' => $match_num,
      'genre' => $genre,
      'child_data' => $sitemap_child_arr,
    );

    // loop_count +1
    $count++;

  endforeach;

  // 多次元配列$sitemap_arrをnumでソートする
  foreach( (array)$sitemap_arr as $key => $value ) {
    $sort[$key] = $value['num'];
  }
  array_multisort($sort, SORT_ASC, $sitemap_arr);

  ?>

  <div class="inner inner-sm">
    <div class="sitemap--lists flex flex-j-between flex-sp-block">
      <ul class="sitemap--list sitemap--list-page">
        <li class="sitemap--item sitemap--item-page sitemap--item-ttl"><a href="/">トップページ</a></li>
        <?php foreach ( $sitemap_arr[0]['child_data'] as $sitemap_child_cont ): ?>
          <?php if ( !empty($sitemap_child_cont['id']) && $sitemap_child_cont['ttl'] != 'サイトマップ' ): ?>
            <li class="sitemap--item sitemap--item-page<?php if ( $sitemap_child_cont['post_parent'] != 0 ){ echo ' sitemap--item-child'; } ?>"><a href="<?php echo get_permalink( $sitemap_child_cont['id'] ); ?>"><?php echo $sitemap_child_cont['ttl']; ?></a></li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>

      <ul class="sitemap--list sitemap--list-posts">

        <?php foreach( (array)$sitemap_arr as $sitemap_cont ): ?>
          <?php if ( $sitemap_cont['genre'] != 'page' ): ?>
            <?php if ( $sitemap_cont['genre'] == 'post' ): ?>
              <li class="sitemap--item sitemap--item-ttl<?php echo ' sitemap--item-'.$sitemap_cont['genre']; ?>"><a href="/<?php echo $sitemap_cont['slug']; ?>/"><?php echo $sitemap_cont['label']; ?></a></li>
            <?php else: ?>

              <?php
              // カテゴリー系の場合は、li→aにタイトル + ulにリストで表示 の開きタグ
              if ( $sitemap_cont['genre'] == 'taxonomy' ): ?>
                <li class="sitemap--item<?php echo ' sitemap--item-'.$sitemap_cont['genre']; ?><?php if ( $sitemap_cont['genre'] == 'taxonomy' ){ echo ' sitemap--item-child'; } ?>">
                  <ul>
              <?php endif; ?>

              <?php foreach ( $sitemap_cont['child_data'] as $sitemap_child_cont ): ?>
                <?php if ( !empty($sitemap_child_cont['id']) && $sitemap_child_cont['ttl'] != 'サイトマップ' ): ?>
                  <li class="sitemap--item<?php echo ' sitemap--item-'.$sitemap_cont['genre']; ?><?php if ( $sitemap_child_cont['post_parent'] != 0 ){ echo ' sitemap--item-child'; } ?>"><a href="<?php echo get_term_link( $sitemap_child_cont['id'],$sitemap_child_cont['taxonomy'] ); ?>"><?php echo $sitemap_child_cont['ttl']; ?></a></li>
                <?php endif ?>
              <?php endforeach ?>

              <?php
              // カテゴリー系の場合は、li→aにタイトル + ulにリストで表示 の閉じタグ
              if ( $sitemap_cont['genre'] == 'taxonomy' ): ?>
                  </ul>
                </li>
              <?php endif; ?>

            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
        
      </ul>
    </div>
  </div>
  
</main>
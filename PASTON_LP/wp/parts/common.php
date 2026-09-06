<?php
/* ##############################################################################

    情報を $detail_info に配列として入れ込む

############################################################################## */
$gqo = get_queried_object();
$info_id = '';
$info_title = '';
$info_slug = '';
$info_taxonomy = '';
$info_parent = '';
$info_parent_slug = '';
$info_template = '';

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $info_slug = '/';
  $info_template = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_parent = $gqo->post_parent;
  $info_parent_slug = get_post($info_parent)->post_name;
  $info_template = 'page';
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->display_name;
  $info_slug = $gqo->user_nicename;
  $info_template = 'author';
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  // カテゴリ & タクソノミーの場合
  if ( is_category() || is_tax() ) {
    $taxonomy = get_query_var('taxonomy');
    $post_type = get_taxonomy($taxonomy)->object_type[0];
    $info_id = $gqo->term_id;
    $info_title = $gqo->name;
    $info_slug = $gqo->slug;
    $info_taxonomy = $gqo->taxonomy;
    if ( !$info_taxonomy ) {
      $info_taxonomy = 'category';
    }
    if ( is_category() ) {
      $info_parent = $gqo->category_parent;
    } elseif ( is_tax() ){
      $info_parent = $gqo->parent;
    }
  } else {
    $info_title = $gqo->label;
    $info_slug = $gqo->name;
  }
  // 日付けアーカイブの場合
  if ( is_date() ) {
    $year = get_query_var('year');
    $monthnum = get_query_var('monthnum');
    $day = get_query_var('day');
    if ( is_month() ) {
      $datettl = $year.'年'.$monthnum.'月';
    } elseif ( is_year() ) {
      $datettl = $year.'年';
    } else {
      $datettl = $year.'年'.$monthnum.'月'.$day.'日';
    }
    $info_title = $datettl;
  }
  $info_template = 'archive';
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_template = 'single';
}

/* --- 404ページ --- */
elseif ( is_404() ){
  $info_title = '404 not found';
  $info_slug = '404';
  $info_template = '404';
}

/* --- 検索結果ページ --- */
elseif ( is_search() ){
  $info_title = '検索結果';
  $info_template = 'search';
}

/* --- 情報の入れ込み --- */
$detail_info = array(
  'title' => $info_title,
  'id' => $info_id,
  'slug' => $info_slug,
  'post_type' => $post_type,
  'taxonomy' => $info_taxonomy,
  'parent' => $info_parent,
  'parent_slug' => $info_parent_slug,
  'template' => $info_template,
);


/* ##############################################################################

    bodyにclass付与

############################################################################## */

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $body_class = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  if ( is_subpage() ) {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['parent_slug'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  } else {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  }
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  if ( is_category() || is_tax() ) {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['taxonomy'].' '.$detail_info['taxonomy'].'-'.$detail_info['slug'];
  } elseif ( is_date() ) {
    if ( is_month() ) {
      $datenum = $year.$monthnum;
    } elseif ( is_year() ) {
      $datenum = $year;
    } else {
      $datenum = $year.$monthnum.$day;
    }
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' date-'.$datenum;
  } else {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'];
  }
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- 404ページ --- */
elseif ( is_404() ) {
  $body_class = 'subpage page-'.$detail_info['template'];
}

/* --- 検索 --- */
else {
  $body_class = 'subpage '.$detail_info['template'];
}

?>
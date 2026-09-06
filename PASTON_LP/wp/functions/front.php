<?php

//========================================================================
// サブページの場合　if( is_subpage())
//========================================================================
function is_subpage() {
  global $post; // $post には現在の固定ページの情報があります
  if ( is_page() && $post->post_parent ){ // 現在の固定ページが親ページを持つかどうかをチェックします
    $parent_slug = preg_replace('/\/.*/','',get_page_uri($post->post_parent)); // 親ページの Slug を取得します
    return $parent_slug; // 親ページの Slug を返します
  } else { // 親ページを持っていない場合
    return false; // false を返します
  };
};

function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}


//========================================================================
// アーカイブ表記に「年」を追加
//========================================================================
function my_archives_link($html){
if(preg_match('/[0-9]+?<\/a>/', $html))
$html = preg_replace('/([0-9]+?)<\/a>/', '$1年</a>', $html);
if(preg_match('/title=[\'\"][0-9]+?[\'\"]/', $html))
$html = preg_replace('/(title=[\'\"][0-9]+?)([\'\"])/', '$1年$2', $html);
return $html;
}
add_filter('get_archives_link', 'my_archives_link', 10);

//========================================================================
// パラメータにファイルの更新日追加
//========================================================================
function latest_cache($filename) {
  $filepath = get_template_directory() .$filename;
  if (file_exists($filepath)) {
    echo $filename.'?date='.date('YmdHis', filemtime($filepath));
  }
}

//========================================================================
// YoastSEO使用時にフロントページに出るrel="next"を削除
//========================================================================
function wpseo_disable_rel_next_home( $link ) {
  if (is_front_page()) { return false; }
}
add_filter( 'wpseo_next_rel_link', 'wpseo_disable_rel_next_home' );

//========================================================================
// 自動で読み込まれるJSのtype属性削除
//========================================================================
if ( !(is_admin() ) ) {
  function replace_scripttag ( $tag ) {
    if ( !preg_match( '/\b(defer|async)\b/', $tag ) ) {
      return str_replace( "type='text/javascript'", 'async', $tag );
    }
    return $tag;
  }
  add_filter( 'script_loader_tag', 'replace_scripttag' );
  function dequeue_jquery_migrate( $scripts){
    $scripts->remove( 'jquery');
    $scripts->add( 'jquery', false, array( 'jquery-core' ) );
  }
  add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
}

//========================================================================
// head内の不要な記述 削除
//========================================================================
// remove WordPress version number
function crave_remove_version() {
  return '';
}
add_filter('the_generator', 'crave_remove_version');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery (RSD) link
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (if you don't use rss)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink

//========================================================================
// wp-embed 削除
//========================================================================
function crave_disable_embeds() {
  // Remove the REST API endpoint.
  remove_action( 'rest_api_init', 'wp_oembed_register_route' );
  // Turn off oEmbed auto discovery.
  add_filter( 'embed_oembed_discover', '__return_false' );
  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  add_filter( 'tiny_mce_plugins', 'crave_disable_embeds_tiny_mce_plugin' );
  // Remove all embeds rewrite rules.
  add_filter( 'rewrite_rules_array', 'crave_disable_embeds_rewrites' );
  // Remove filter of the oEmbed result before any HTTP requests are made.
  remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'crave_disable_embeds', 9999 );
function crave_disable_embeds_tiny_mce_plugin($plugins) {
  return array_diff($plugins, array('wpembed'));
}
function crave_disable_embeds_rewrites($rules) {
  foreach($rules as $rule => $rewrite) {
    if(false !== strpos($rewrite, 'embed=true')) {
      unset($rules[$rule]);
    }
  }
  return $rules;
}

//========================================================================
// query strings 削除
//========================================================================
function crave_remove_script_version( $src ) {
  $parts = explode( '?ver', $src );
  return $parts[0];
} 
add_filter( 'script_loader_src', 'crave_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'crave_remove_script_version', 15, 1 );

//========================================================================
// アイキャッチが設定されていない場合は、記事の1番最初の画像をアイキャッチに設定
//========================================================================
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if ( isset($matches[1][0]) ) {
    $first_img = $matches[1][0];
  }
  if ( empty($first_img) ){ //Defines a default image
    $first_img = "";
  }
  return $first_img;
}




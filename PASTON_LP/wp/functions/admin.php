<?php
//========================================================================
// 管理画面用favicon指定
//========================================================================
function admin_favicon() {
  echo '<link rel="shortcut icon" href="/wp/wp-content/themes/original_theme/favicon.ico">';
}
add_action('admin_head', 'admin_favicon');


//========================================================================
// admin-style.cssを有効化
//========================================================================
function my_admin_style(){
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


//========================================================================
// 投稿画面（ビジュアル）にスタイル追加
//========================================================================
add_editor_style("/css/reset.css");
add_editor_style("/css/common.css");
add_editor_style("/css/mce.css");


//========================================================================
// 投稿画面（ビジュアル）の『Enter』と『Shift+Enter』の動作を逆転
//========================================================================
function my_tiny_mce_before_init( $settings ) {
  $settings[ 'forced_root_block' ] = FALSE; //Shift+Enterの動きが逆になる
  return $settings;
}
add_filter( 'tiny_mce_before_init', 'my_tiny_mce_before_init' );


//========================================================================
// WPダッシュボードカスタム適用
//========================================================================
/* 管理画面にCSSと本番用JSを読み込み */
  function admin_custom_style(){
    wp_enqueue_style( 'admin_custom_style', 'https://leapy.jp/wp/wp-content/themes/leapy14/css/wp_admin_custom.css' );
  }
  add_action( 'admin_enqueue_scripts', 'admin_custom_style' );


/* ダッシュボードウィジェットを削除 */
  function remove_dashboard_widget() {
    // ようこそ
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // 概要
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    // アクティビティ
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    // クイックドラフト
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    // WordPressニュース
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    // Yoast SEO概要
    remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' );
    // Ninja
    remove_meta_box( 'nfw_dashboard_welcome', 'dashboard', 'normal' );
  }
  add_action('wp_dashboard_setup', 'remove_dashboard_widget' );


/* 管理者以外の時 */
  if (!current_user_can('administrator')) {

    /* WPアプデ表示削除 */
    function update_nag_hide() {
      remove_action( 'admin_notices', 'update_nag', 3 );
    }
    add_action( 'admin_init', 'update_nag_hide' );

    /* ヘルプ削除 */
    function my_admin_head(){
     echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
     }
    add_action('admin_head', 'my_admin_head');

    /* WordPressのご利用ありがとうございます削除 */
    function custom_admin_footer() {
     echo '&nbsp;';
     }
    add_filter('admin_footer_text', 'custom_admin_footer');
  }


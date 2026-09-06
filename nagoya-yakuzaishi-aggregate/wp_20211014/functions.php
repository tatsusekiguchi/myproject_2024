<?php
require get_template_directory() . '/func/system.php';

// -------------------------------------------------------------------
// ログイン画面をカスタマイズ
// -------------------------------------------------------------------
function login_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/css/common.css">';
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/css/layout.css">';
}
add_action('login_head', 'login_css');
// -------------------------------------------------------------------
// wp_head()で出力される内容を削除
// -------------------------------------------------------------------
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links_extra',3);

//固定ページでエディタを非表示にする
function post_output_css() {
    $pt = get_post_type();
    if ($pt == 'page') { //投稿の場合はpost
        $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
        echo $hide_postdiv_css;
    }
}
add_action('admin_head', 'post_output_css');

//「Gutenberg」で出力されるHTMLに対応したスタイルシートを無効化
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}
//add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );

//前の記事・次の記事のリンクにclassを付与する
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev-link" href=', $output); //前の記事リンク
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next-link" href=', $output); //次の記事リンク
}
add_filter( 'next_post_link', 'add_next_post_link_class' );

// -------------------------------------------------------------------
//  ログイン後トップへリダイレクト
// -------------------------------------------------------------------
function my_login_redirect( $redirect_to, $user_id ) {
	return 'http://www.nagoya-yakuzaishi.com/membersite/aggregate/topmenu/';
}
add_filter( 'wpmem_login_redirect', 'my_login_redirect', 10, 2 );

//--------------------------------------------------------------------
// アイキャッチ画像を有効にする
// -------------------------------------------------------------------
add_theme_support('post-thumbnails');

// -------------------------------------------------------------------
// 管理画面の「投稿」を「検査表」に変更
// -------------------------------------------------------------------
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = '検査表';
	$submenu['edit.php'][5][0] = '検査表一覧';
	$submenu['edit.php'][10][0] = '新しい検査表';
	$submenu['edit.php'][16][0] = 'タグ';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = '検査表';
	$labels->singular_name = '検査表';
	$labels->add_new = _x('追加', '検査表');
	$labels->add_new_item = '検査表の新規追加';
	$labels->edit_item = '検査表の編集';
	$labels->new_item = '新規検査表';
	$labels->view_item = '検査表を表示';
	$labels->search_items = '検査表を検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// -------------------------------------------------------------------
//  カスタム投稿タイプの追加(連絡事項)
// -------------------------------------------------------------------
function create_post_type_info() {
	$exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
		'title',  // 記事タイトル
		'editor',  // 記事本文
		'thumbnail',  // アイキャッチ画像
		'revisions'  // リビジョン
	];
	register_post_type( 'info',  // カスタム投稿名
		array(
		'label' => '連絡事項',  // 管理画面の左メニューに表示されるテキスト
		'public' => true,  // 投稿タイプをパブリックにするか否か
		'has_archive' => false,  // アーカイブを有効にするか否か
    'rewrite' => array( 'with_front' => false ),
		'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
		'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
		)
	);
}
add_action( 'init', 'create_post_type_info' ); // アクションに上記関数をフックします

//カスタム投稿のエディターを除去
function info_remove_post_support() {
	remove_post_type_support('info','editor');
}
add_action('init','info_remove_post_support');

// -------------------------------------------------------------------
//  ページネーション
// -------------------------------------------------------------------
//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	//ページ情報の取得
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}

	if(1 != $pages) {
		echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
		//先頭へ
		echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
		//1つ戻る
		echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
		//番号つきページ送りボタン
		for ($i=1; $i <= $pages; $i++)     {
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
		echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
		}
		}
		//1つ進む
		echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
		//最後尾へ
		echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
		echo '</ul>';
	}
}

function pagenation_func($r,$id,$p,$n) {

	global $paged;
	$pd=$paged;
	if($pd<1){$pd=1;}
	global $wp_query;
	$ps=$wp_query->max_num_pages;
	if(!$ps){$ps=1;}
	$l=($r*2)+1;
	if(!$id){$id="pagenation";}
	if(!$p){$p="<";}
	if(!$n){$n=">";}

	$r_l=$r_r=$r;
	if($pd<=$r){$r_r=$l-$pd;}
	if($pd>=$ps-$r){$r_l=$l-$ps+$pd-1;}
	$a1="\t<li><a class=\"";
	$a2="</a></li>\n";
	$s1="\t<li><span class=\"";
	$s2="</span></li>\n";

	if(1!=$ps){
		echo "\n<div id=\"".$id."\">\n";
		echo "\t<ul id=\"pagenation-list\">\n";
		if($pd>1){echo $a1."prev\" href=\"".get_pagenum_link($pd-1)."\">".$p.$a2;}
		$o=$pd-$r_l;
		if ($o>1){echo $a1."num\" href=\"".get_pagenum_link(1)."\">1".$a2;}
		if ($o>2){echo $s1."omit\">...".$s2;}
		for($i=1; $i<=$ps; $i++){
			if(1!=$ps &&(!($i>=$pd+$r_r+1||$i<=$pd-$r_l-1)||$ps<=$l )){
				if($pd==$i){echo $s1."current\">".$i."".$s2;}
				else{echo $a1."num\" href=\"".get_pagenum_link($i)."\">".$i."".$a2;}
			}
		}

		$o=$pd+$r_r+1;
		if($ps<$o){$o=$ps+1;}
		if($o<$ps){echo $s1."omit\">...".$s2;}
		if($o<=$ps){echo $a1."num\" href=\"".get_pagenum_link($ps)."\">".($i-1).$a2;}
		if($pd<$ps){echo $a1."next\"  href=\"".get_pagenum_link($pd+1)."\">".$n.$a2;}
		echo "\t</ul>\n</div>\n";
	}

}

// -------------------------------------------------------------------
//  404エラー時トップへリダイレクト
// -------------------------------------------------------------------
add_action( 'template_redirect', 'is404_redirect_home' );
function is404_redirect_home() {
  if( is_404() ){
    wp_safe_redirect( home_url( '/' ) );
    exit();
  }
}

?>
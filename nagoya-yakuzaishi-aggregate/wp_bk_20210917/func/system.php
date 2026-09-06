<?php
require get_template_directory() . '/func/class/RecordClass.php';

// メンバーサイトからのログインチェック
function _my_login_check() {
	$login_flg = (isset($_COOKIE['login_flg']) && $_COOKIE['login_flg']) ? true : false;
	if (is_admin()) {
		return;
	}
	if (!$login_flg) {
		$url = 'https://www.nagoya-yakuzaishi.com/membersite/';
		header('Location: '.$url);
		exit;
	}
}
add_action('init', '_my_login_check');

function _my_styles()  {
	if ( is_page('total_result') ) {
		wp_enqueue_style( 'result', get_template_directory_uri() . '/func/css/table.css?v=001', array(), '1.0.0' );
	}
}
add_action('wp_enqueue_scripts', '_my_styles');

?>

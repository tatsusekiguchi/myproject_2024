<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<div id="contact">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>お問い合わせ</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>お問い合わせ</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section id="sec01">
			<h2>お問い合わせフォーム</h2>
			<div class="cntBox" id="formCnt">
				<p class="topTxt">事務局へのお問合わせフォームです。なお，転居、御所属，郵便物等送付先等の変更に関する御連絡は，<a href="https://iap-jp.org/jacp/mypage/login/login" target="_blank">「会員専用ページ」</a>からお願いいたします。改姓等，名簿に関する重要事項については，本フォームから手続きできます。</p>
				<p><em>※</em>は必須項目です。</p>
				<div class="formBox">
					<?php echo do_shortcode( '[contact-form-7 id="29" title="お問い合わせフォーム"]' ); ?>
				</div>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
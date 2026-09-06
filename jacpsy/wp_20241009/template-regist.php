<?php
/*
Template Name: お申込みフォーム
*/
?>

<?php get_header(); ?>

<div id="regist">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>お申込みフォーム</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>お申込みフォーム</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section id="sec01">
			<h2>お申込みフォーム</h2>
			<div class="cntBox" id="formCnt">
				<p class="topTxt">この申込みフォームは、Googleの提供するWEBアプリケーションを用いて送信しますので、ご了承ください。<br>お送りいただく前に、規約を確認したい方は<a href="https://policies.google.com/technologies/partner-sites?hl=ja" target="_blank">こちら</a>。<br>
					<span style="color:#f00;">※このフォームは、大会の申込ページではありません。大会の参加は、<a href="https://www.jacpsy.jp/meeting/">大会ページ</a>からお願いします。</span>
				
				</p>
				<p><em>※</em>は必須項目です。</p>
				<div class="formBox">
					<?php echo do_shortcode( '[contact-form-7 id="32" title="お申込みフォーム"]' ); ?>
				</div>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
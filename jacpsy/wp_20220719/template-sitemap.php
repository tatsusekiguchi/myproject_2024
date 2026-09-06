<?php
/*
Template Name: サイトマップ
*/
?>

<?php get_header(); ?>

<div id="sitemap">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>サイトマップ</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>サイトマップ</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section id="sec01">
			<h2>サイトマップ</h2>
			<div class="cntBox">
				<ul class="list">
					<li><a href="<?php echo home_url() ?>/">トップページ</a></li>
				</ul>
				<ul class="listBox">
					<li>
						<dl>
							<dt>学会及び大会について</dt>
							<dd>
								<ul class="list">
									<li><a href="<?php echo home_url() ?>/about/">学会について</a></li>
									<li><a href="<?php echo home_url() ?>/meeting/">大会</a></li>
									<li><a href="<?php echo home_url() ?>/information/">情報</a></li>
								</ul>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>会員について</dt>
							<dd>
								<ul class="list">
									<li><a href="<?php echo home_url() ?>/admission/">入会案内</a></li>
									<li><a href="<?php echo home_url() ?>/member/">会員のひろば</a></li>
								</ul>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>研修について</dt>
							<dd>
								<ul class="list">
									<li><a href="<?php echo home_url() ?>/training/">研修・研究会</a></li>
									<li><a href="<?php echo home_url() ?>/regist/">申込フォーム</a></li>
								</ul>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>その他</dt>
							<dd>
								<ul class="list">
									<li><a href="<?php echo home_url() ?>/columnlist/">コラム</a></li>
									<li><a href="<?php echo home_url() ?>/contact/">お問い合わせ</a></li>
									<li><a href="<?php echo home_url() ?>/sitemap/">サイトマップ</a></li>
								</ul>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
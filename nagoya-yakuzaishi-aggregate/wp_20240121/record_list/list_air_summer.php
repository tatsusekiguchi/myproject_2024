<?php
/*
Template Name: 教室の空気定期検査表(夏季) 一覧
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/record_list/">検査表の記入 一覧</a></li>
				<li>教室の空気定期検査表(夏季)</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="recordListMain">
		<div class="recordListBox">
			<div class="ttlBox">
				<h2>教室の空気定期検査表(夏季) 一覧</h2>
				<a href="<?php echo home_url(); ?>/record_air_summer/"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_entry.png" alt="新規登録"></a>
			</div>
			<?php echo do_shortcode('[wpuf_dashboard form_id="616"]'); ?>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
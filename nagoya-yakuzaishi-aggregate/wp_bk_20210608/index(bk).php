<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<?php if (is_user_logged_in()):?>
	<?php
		wp_redirect( 'http://www.nagoya-yakuzaishi.com/membersite/aggregate/topmenu/' );
		exit;
	?>
	<?php else: ?>
	<main id="loginMain">
		<h2>学校薬剤師検査入力表システム</h2>
		<div class="loginBox">
			<?php echo do_shortcode('[wpmem_form login]'); ?>
		</div>
		<div class="subLink"><a href="/">← 名古屋市薬剤師会 オフィシャルページへ</a></div>
	</main>
	<?php endif; ?>
	<!-- △メイン△-->
<?php get_footer(); ?>
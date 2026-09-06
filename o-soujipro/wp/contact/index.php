<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="contact">
		<div class="pageTitlePanel">
			<div class="pageTitle">
				<h1>お問い合わせ</h1>
				<p>Contact</p>
			</div>
		</div>
		<div class="contactSection">
			<div class="secWrap01">
				<div class="sec01 section">
					<div class="secTtl">
						<h2>メールでのお問い合わせ</h2>
					</div>
					<div class="topTxt txt">
						<p>お問い合わせは以下のフォームよりお願いいたします。<br>ご質問の内容により、多少お時間をいただくことがございます。あらかじめご了承ください。</p>
					</div>
					<div class="formBox">
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
	<script>
		$(function() {
			$("input[type=submit]").prop("disabled", true);
			$(".agreeCheck input").on("change", function (e) {
				if ($(this).prop("checked") == true) {
				$("input[type=submit]").prop("disabled", false);
				} else {
				$("input[type=submit]").prop("disabled", true);
				}
			});
		});
	</script>
<?php get_footer(); ?>
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
						<h2>お電話でのお問い合わせ</h2>
					</div>
					<div class="secPanel">
						<div class="secBox">
							<div class="leftBox">
								<h3>まずはご相談ください。<br>最適な提案をいたします。</h3>
								<div class="txt">
									<p>金型・精密金型の制作、試作、木質開発に関するお問い合わせを承っております。<br>まずはお気軽にご相談ください。</p>
								</div>
							</div>
							<div class="rightBox">
								<div class="tel"><a href="tel:0561380005">0561-38-0005</a>
									<p>【受付時間】9：00～17:00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sec02 section">
					<div class="secTtl">
						<h2>メールでのお問い合わせ</h2>
					</div>
					<div class="topTxt txt">
						<p>お問い合わせは以下のフォームよりお願いいたします。<br>ご質問の内容により、多少お時間をいただくことがございます。あしからずご了承ください。</p>
					</div>
					<div class="formBox">
						<?php echo do_shortcode( '[mwform_formkey key="24"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script>
		$(document).ready(function() {
			$('.submitButton input').prop('disabled', true);
			$('.agreeCheck input').change(function() {
				if ($(this).is(':checked')) {
					$('.submitButton input').prop('disabled', false);
				} else {
					$('.submitButton input').prop('disabled', true);
				}
			});
		});
	</script>
	<!-- △メイン△-->
<?php get_footer(); ?>
<?php
/*
Template Name: お問い合わせ・来店予約
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="contact">
		<div class="pageKvPanel">
			<div class="pageKvTitle">
				<h1>来店予約・お問い合わせ</h1>
			</div>
		</div>
		<div class="topSection">
			<div class="secWrap01">
				<h2>お電話からご予約・お問い合わせ</h2>
				<div class="secBox"><a href="tel:0565450378">0565-45-0378</a>
					<p>受付時間：10:00 ～19:00　　定休日：火曜<br>※営業のお問い合わせはお断りいたします。</p>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap01">
				<div class="pageSecTtlBox">
					<div class="pageSecTtl">
						<p>MAIL FORM</p>
						<h2>来店予約・お問い合わせフォーム</h2>
					</div>
				</div>
				<div class="topTxt txt">
					<p>※営業のお問い合わせはお断りいたします。</p>
				</div>
				<div class="formBox">
					<?php echo do_shortcode( '[mwform_formkey key="28"]' ); ?>
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
<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="contact">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>お問い合わせ</h1>
				</div>
			</div>
		</div>
		<div class="pageLogoBox">
			<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></div>
		</div>
		<div class="sec01">
			<div class="secWrap">
				<div class="telBox">
					<dl>
						<dt>お電話でのお問い合わせ</dt>
						<dd><a href="tel:0581785171">0581-78-5171</a>
							<p>【受付時間】10：00～17:00</p>
						</dd>
					</dl>
				</div>
				<div class="pageSecTtlBox">
					<h2><em>メール</em>でのお問い合わせ</h2>
				</div>
				<div class="topTxt txt">
					<p>お問い合わせをいただいて2 ～ 3 営業日以内に内容の確認をさせていただき、<br>メールもしくは電話にて対応いたします。</p>
				</div>
				<div class="formBox">
					<?php echo do_shortcode( '[mwform_formkey key="30"]' ); ?>
				</div>
			</div>
		</div>
	</main>
	<script>
		$(window).on('load', function() {
			// 画面読み込み時にチェック状態を確認して disabled を設定
			if ($('.agreeCheck input').is(':checked')) {
				$('.submitButton input').prop('disabled', false);
			} else {
				$('.submitButton input').prop('disabled', true);
			}

			// チェックボックスの状態が変更されたときの処理
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
<?php
/*
Template Name: オフィス清掃
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="office">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>オフィス清掃</h1>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap01">
				<div class="pageSecTitleBox">
					<div class="pageSecTitle">
						<h2>オフィス清掃のお悩みありませんか？</h2>
					</div>
				</div>
				<div class="topTxt">
					<div class="txt">
						<p>毎日多くの時間を過ごすオフィスをクリーンに保ち続けるには適切な清掃が必要です。<br>ご自身で清掃を行うには適切な道具や洗剤の準備が必要ですし、清掃を行う時間も必要です。<br>すでに業者に清掃を委託している場合でも、清掃のレベルを上げてほしい、月額の金額が安くならないかなどのお悩みをよく耳にします。<br>そういったお悩みがありましたら、お任せください。確かな品質とノウハウで皆様が毎日気持ちよくお仕事ができる環境を整えます</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap02">
				<div class="secTitleBox">
					<h2>オフィス清掃項目</h2>
				</div>
				<div class="listBox">
					<ul>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_01.png" alt=""></div>
							<dl>
								<dt>フロア清掃</dt>
								<dd>ハードフロアの場合は人が通るたびにホコリが舞いますので、こまめにモップ掛けを行う必要があります。カーペットフロアでしたら、カーペットがホコリを抱き込むので、そのホコリを掃除機で吸い取ります。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_02.png" alt=""></div>
							<dl>
								<dt>テーブル拭き掃除</dt>
								<dd>テーブルは指紋が一番つきやすい場所です。そのままにしておくと黒ずみができてしまいますので、除菌剤で定期的に拭いて取り除きます。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_03.png" alt=""></div>
							<dl>
								<dt>トイレ清掃</dt>
								<dd>トイレを清掃する際は必ず「ピンクのタオル」で行います。トイレ清掃で使用したタオルを他の清掃に使用することを防ぐためです。アンモニアなどの汚れを他の場所にうつすことの無いよう、注意を払っています。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_04.png" alt=""></div>
							<dl>
								<dt>ゴミ清掃・収集</dt>
								<dd>デスク横のゴミ箱のゴミ回収から搬出場所までの運搬までを行います。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_05.png" alt=""></div>
							<dl>
								<dt>玄関ドア吹きあげ</dt>
								<dd>玄関は会社の顔です。取っ手やガラスに付きやすい指紋を拭きとることにより清潔感が出てきます。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/office/office_sec02_photo_06.png" alt=""></div>
							<dl>
								<dt>受話器の除菌清掃</dt>
								<dd>一見汚れていない受話器は実は雑菌の繁殖場所。日々の使用で見えない汚れが付きやすいところです。除菌剤で適切に拭きとることで皆様の健康にも貢献します。</dd>
							</dl>
						</li>
					</ul>
				</div>
				<div class="planPanel">
					<h3>料金プラン</h3>
					<?php
						$office_plan = get_field('office_plan');
					?>
					<?php if ($office_plan && isset($office_plan['office_plan_fee'])): ?>
						<?php foreach ($office_plan['office_plan_fee'] as $fee): ?>
							<div class="setPanel">
								<div class="ttlBox">
									<h4><?php echo esc_html($fee['office_plan_fee_plan']); ?></h4>
									<p><?php echo esc_html($fee['office_plan_fee_price']); ?></p>
								</div>
								<div class="setBox">
									<div>
										<?php echo nl2br(esc_html($fee['office_plan_fee_text'])); ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php else: ?>
						<p>料金情報が設定されていません。</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
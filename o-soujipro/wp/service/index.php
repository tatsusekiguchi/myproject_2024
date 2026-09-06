<?php
/*
Template Name: サービスプラン
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="service">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>サービスプラン</h1>
				</div>
			</div>
		</div>
		<div class="topSection">
			<div class="secWrap02">
				<div class="topTxt txt">
					<p>お掃除プロにてご対応可能なプランをご案内します。<br>不明点はお気軽にご相談ください。</p>
				</div>
				<div class="pagingList">
					<ul>
						<li><a href="#plan01">お掃除・洗濯プラン</a></li>
						<li><a href="#plan02">お掃除定期利用</a></li>
						<li><a href="#plan03">お料理代行プラン</a></li>
						<li><a href="#plan04">お料理代行定期利用</a></li>
					</ul>
				</div>
				<div class="bnrList">
					<ul>
						<li><a href="<?php echo home_url(); ?>/office/"><img src="<?php bloginfo('template_url'); ?>/image/service/service_top_bnr_01.png" alt=""></a></li>
						<li><a href="<?php echo home_url(); ?>/baby/"><img src="<?php bloginfo('template_url'); ?>/image/service/service_top_bnr_02.png" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="planSection">
			<div class="secWrap01">
				<div class="pageSecTitleBox">
					<div class="pageSecTitle">
						<h2>掃除・洗濯プラン</h2>
					</div>
					<div class="sub">
						<p>Cleaning laundry plan</p>
					</div>
				</div>
			</div>
			<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/service/service_sec_mv_01.png" alt=""></div>
			<div class="planContainer" id="plan01">
				<div class="secWrap02">
					<div class="planPanel">
						<div class="multiBox">
						<?php
							$home_cleaning_trial = get_field('home_cleaning_trial');
							$home_cleaning_trial_price = $home_cleaning_trial['home_cleaning_trial_price'] ?? '料金情報が設定されていません';
						?>
						<div class="infoBox">
							<div class="ttl">
								<h3>家事代行 お試しプラン</h3>
								<p>※初回のお客様限定</p>
							</div>
							<dl class="range">
								<dt>対応範囲</dt>
								<dd>
									<p>水回り 3 〜 4個所</p>
									<p><span>※洗濯は含まれません</span></p>
								</dd>
							</dl>
							<dl>
								<dt>時間</dt>
								<dd>
									<p>2時間</p>
								</dd>
							</dl>
							<dl>
								<dt>料金</dt>
								<dd>
									<p><em><?php echo esc_html($home_cleaning_trial_price); ?>円</em>（税込）</p>
								</dd>
							</dl>
							<dl>
								<dt>延長料</dt>
								<dd>
									<p>お試しプランでは延長はできかねます</p>
								</dd>
							</dl>
							<dl class="carfare">
								<dt>交通費</dt>
								<dd>
									<p>料金に含みます</p>
								</dd>
							</dl>
						</div>
						<?php
							$occasional_cleaning = get_field('occasional_cleaning');
							$occasional_cleaning_price = $occasional_cleaning['occasional_cleaning_price'] ?? '料金情報が設定されていません';
							$occasional_cleaning_price_sub = $occasional_cleaning['occasional_cleaning_price_sub'] ?? '料金情報が設定されていません';
							$occasional_cleaning_price_extension = $occasional_cleaning['occasional_cleaning_price_extension'] ?? '料金情報が設定されていません';
						?>
						<div class="infoBox">
							<div class="ttl">
								<h3>お掃除ときどきプラン</h3>
							</div>
							<dl class="range">
								<dt>対応範囲</dt>
								<dd>
									<p>水回り4個所と、お好きな箇所 1 〜 2個所</p>
								</dd>
							</dl>
							<dl>
								<dt>時間</dt>
								<dd>
									<p>1時間30分 〜 2時間程度</p>
								</dd>
							</dl>
							<dl>
								<dt>料金</dt>
								<dd>
									<p><em><?php echo esc_html($occasional_cleaning_price); ?>円</em>（税込）<span><?php echo esc_html($occasional_cleaning_price_sub); ?></span></p>
								</dd>
							</dl>
							<dl>
								<dt>延長料</dt>
								<dd>
									<p><?php echo esc_html($occasional_cleaning_price_extension); ?></p>
								</dd>
							</dl>
							<dl class="carfare">
								<dt>交通費</dt>
								<dd>
									<p>駐車場をお持ちでない場合は、有料駐車場代がかかります。</p>
								</dd>
							</dl>
						</div>
						</div>
						<aside>
							<p>汚れの状態により2時間ではきれいにならない場合がございます。</p>
							<p>お掃除開始前にご相談いただくことも可能です。</p>
							<p>お客様の優先順位に合わせてお掃除対応いたします。</p>
						</aside>
					</div>
				</div>
			</div>
			<div class="planContainer" id="plan02">
				<div class="secWrap02">
					<h3 class="planCntTitle">お掃除定期利用</h3>
					<div class="planPanel">
						<?php
							$regular_cleaning = get_field('regular_cleaning');
						?>
						<div class="infoBox">
							<dl>
								<dt>対応範囲</dt>
								<dd>
									<p>水回り4個所とお好きな箇所</p>
									<p><span>※洗濯は含まれません</span></p>
								</dd>
							</dl>
							<dl>
								<dt>時間</dt>
								<dd>
									<p>1時間30分 〜 2時間程度</p>
								</dd>
							</dl>
							<dl>
								<dt>料金</dt>
								<dd>
									<?php if ($regular_cleaning && isset($regular_cleaning['regular_cleaning_fee'])): ?>
										<?php foreach ($regular_cleaning['regular_cleaning_fee'] as $fee): ?>
											<div class="box">
												<p><?php echo esc_html($fee['regular_cleaning_fee_frequency']); ?></p>
												<p><em><?php echo esc_html($fee['regular_cleaning_fee_price']); ?>円（税込）</em><span><?php echo esc_html($fee['regular_cleaning_fee_price_sub']); ?></span></p>
											</div>
										<?php endforeach; ?>
									<?php else: ?>
										<p>料金情報が設定されていません。</p>
									<?php endif; ?>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
			<div class="planContainer">
				<div class="secWrap02">
					<div class="timeContainer accord">
						<div class="accordHead">
							<h3>サービス時間の目安</h3>
						</div>
						<div class="accordBody">
							<div class="planBox">
								<h4>お掃除プラン</h4>
								<div class="timeBox">
									<div class="box">
										<dl>
											<dt>お風呂</dt>
											<dd>60分～</dd>
										</dl>
										<dl>
											<dt>キッチン</dt>
											<dd>30分～60分</dd>
										</dl>
										<dl>
											<dt>トイレ1箇所</dt>
											<dd>15分～</dd>
										</dl>
										<dl>
											<dt>洗面台、洗面所</dt>
											<dd>20分～</dd>
										</dl>
									</div>
									<div class="box">
										<dl>
											<dt>リビング</dt>
											<dd>20分～40分</dd>
										</dl>
										<dl>
											<dt>お部屋（1箇所）</dt>
											<dd>20分～</dd>
										</dl>
										<dl>
											<dt>アイロンがけ（ハンカチ10枚）</dt>
											<dd>30分～</dd>
										</dl>
										<dl>
											<dt>お庭の草むしり<br>（夏場は作業は出来ません）</dt>
											<dd>1時間～</dd>
										</dl>
									</div>
								</div>
							</div>
							<div class="planBox">
								<h4>整理収納プラン</h4>
								<div class="timeBox">
									<div class="box">
										<dl>
											<dt>子供部屋</dt>
											<dd>2時間半～</dd>
										</dl>
										<dl>
											<dt>書類整理</dt>
											<dd>2時間半～</dd>
										</dl>
									</div>
									<div class="box">
										<dl>
											<dt>リビング</dt>
											<dd>2時間～</dd>
										</dl>
										<dl>
											<dt>お部屋（1箇所）</dt>
											<dd>2時間～</dd>
										</dl>
									</div>
								</div>
							</div>
							<aside>
								<p>お掃除プランのお勧めは2時間半～3時間です。</p>
								<p>整理収納プランは3時間～4時間位がお勧めです。</p>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="planSection">
			<div class="secWrap01">
				<div class="pageSecTitleBox">
					<div class="pageSecTitle">
						<h2>お料理代行</h2>
					</div>
					<div class="sub">
						<p>Cooking agency</p>
					</div>
				</div>
			</div>
			<div class="mv"><img src="<?php bloginfo('template_url'); ?>/image/service/service_sec_mv_02.png" alt=""></div>
			<div class="planContainer" id="plan03">
				<div class="secWrap02">
					<div class="planPanel">
						<div class="multiBox">
							<?php
								$cooking_trial = get_field('cooking_trial');
								$cooking_trial_price = $cooking_trial['cooking_trial_price'] ?? '料金情報が設定されていません';
							?>
							<div class="infoBox">
								<div class="ttl">
									<h3>作り置き お試しプラン</h3>
									<p>※初回のお客様限定</p>
								</div>
								<dl>
									<dt>対応範囲</dt>
									<dd>
										<p>主菜 1品、副菜 2 〜 3品</p>
									</dd>
								</dl>
								<dl>
									<dt>時間</dt>
									<dd>
										<p>2時間</p>
									</dd>
								</dl>
								<dl>
									<dt>料金</dt>
									<dd>
										<p><em><?php echo esc_html($cooking_trial_price); ?>円（税込）</em></p>
									</dd>
								</dl>
							</div>
							<?php
								$occasional_cooking = get_field('occasional_cooking');
								$occasional_cooking_price = $occasional_cooking['occasional_cooking_price'] ?? '料金情報が設定されていません';
							?>
							<div class="infoBox">
								<div class="ttl">
									<h3>お料理ときどきプラン</h3>
								</div>
								<dl>
									<dt>対応範囲</dt>
									<dd>
										<p>例）主菜 2 〜 3品、副菜 3 〜 5品</p>
									</dd>
								</dl>
								<dl>
									<dt>時間</dt>
									<dd>
										<p>2時間30分 〜 3時間程度</p>
									</dd>
								</dl>
								<dl>
									<dt>料金</dt>
									<dd>
										<p><em><?php echo esc_html($occasional_cooking_price); ?>円（税込）</em></p>
									</dd>
								</dl>
							</div>
						</div>
						<div class="caution">
							<div class="ttl">
								<p>料理代行をご利用のお客様へ</p>
							</div>
							<div class="txt">
								<p>料理代行のお客様はお買い物も承りますのでご自宅にあるものをお聞きいたします。<br>お買物代金はお支払いの時にご請求させていただきます。<br>アレルギーなどがある方は事前にご連絡ください。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="planContainer" id="plan04">
				<div class="secWrap02">
					<h3 class="planCntTitle">お料理代行定期利用</h3>
					<div class="planPanel">
						<?php
							$regular_cooking = get_field('regular_cooking');
						?>
						<div class="infoBox">
							<dl>
								<dt>対応範囲</dt>
								<dd>
									<p>例）主菜 2 〜 3品、副菜 3 〜 5品</p>
								</dd>
							</dl>
							<dl>
								<dt>時間</dt>
								<dd>
									<p>2時間30分 〜 3時間程度</p>
								</dd>
							</dl>
							<dl>
								<dt>料金</dt>
								<dd>
									<?php if ($regular_cooking && isset($regular_cooking['regular_cooking_fee'])): ?>
										<?php foreach ($regular_cooking['regular_cooking_fee'] as $fee): ?>
											<div class="box">
												<p><?php echo esc_html($fee['regular_cooking_fee_frequency']); ?></p>
												<p><em><?php echo esc_html($fee['regular_cooking_fee_price']); ?>円（税込）</em><span><?php echo esc_html($fee['regular_cooking_fee_price_sub']); ?></span></p>
											</div>
										<?php endforeach; ?>
									<?php else: ?>
										<p>料金情報が設定されていません。</p>
									<?php endif; ?>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
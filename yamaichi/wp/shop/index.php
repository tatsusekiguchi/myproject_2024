<?php
/*
Template Name: 店舗紹介
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="shop">
		<div class="pageKvPanel">
			<div class="pageKvTitle">
				<p>SHOP</p>
				<h1>店舗紹介</h1>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap01">
				<div class="pageSecTtlBox">
					<div class="pageSecTtl">
						<p>YAMAICHI</p>
						<h2>山一</h2>
					</div>
				</div>
				<div class="infoBox">
					<dl>
						<dt>店名</dt>
						<dd>山一</dd>
					</dl>
					<dl>
						<dt>住所</dt>
						<dd>愛知県豊田市四郷町千田63</dd>
					</dl>
					<dl>
						<dt>電話番号</dt>
						<dd><a href="tel:0565450378">0565-45-0378</a></dd>
					</dl>
					<dl>
						<dt>営業時間</dt>
						<dd>10:00〜19:00</dd>
					</dl>
					<dl>
						<dt>定休日</dt>
						<dd>火曜日</dd>
					</dl>
					<dl>
						<dt>駐車場</dt>
						<dd>15台（STORIA共用）</dd>
					</dl>
				</div>
				<div class="listBox">
					<ul>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_sec01_list_01.png" alt=""></div>
							<p>とても広々とした駐車場は15台分<br>車間が広いので安心してお停めいただけます。</p>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_sec01_list_02.png" alt=""></div>
							<p>個別スペースで<br>落ち着いてご相談いただけます。</p>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_sec01_list_03.png" alt=""></div>
							<p>クリーニングやメンテナンスも<br>お任せください。</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="slidePanel">
			<div class="slideBox">
				<ul>
					<li><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_slide_01.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_slide_02.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_slide_03.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_slide_04.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_slide_05.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="mapPanel">
			<div class="mapBox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.1755537578033!2d137.1635003757632!3d35.127292372771166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60035f998f3a0f0d%3A0xd1e613140019b9a9!2z5bGx5LiAICjml6cg5a6d55-z44Gu5bGx5LiA77yJ!5e0!3m2!1sja!2sjp!4v1723188745055!5m2!1sja!2sjp" allow="fullscreen"></iframe></div>
		</div>
		<div class="sec02">
			<div class="secWrap01">
				<div class="pageSecTtlBox">
					<div class="pageSecTtl">
						<p>ACCSESS</p>
						<h2>アクセス</h2>
					</div>
				</div>
				<div class="secBox01">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_sec02_img_01.png" alt=""></div>
					<div class="txtBox">
						<div class="box">
							<div class="ttl">
								<h3>お車でお越しの場合</h3>
							</div>
							<dl>
								<dt>猿投グリーンロード</dt>
								<dd>猿投ICから車で約10分</dd>
							</dl>
							<dl>
								<dt>東海環状自動車道</dt>
								<dd>豊田勘八 ICから車で約15分</dd>
							</dl>
						</div>
						<div class="box">
							<div class="ttl">
								<h3>電車でお越しの場合</h3>
							</div>
							<dl>
								<dt>愛知環状鉄道線</dt>
								<dd>四郷駅から徒歩で約15分</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="secBox02">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/shop/shop_sec02_img_02.png" alt=""></div>
					<div class="txtBox">
						<div class="sub">
							<p>豊田市内・みよし市内</p>
						</div>
						<h3>出張訪問サービス</h3>
						<div class="txt">
							<p>ご高齢の方や、交通手段が無く山一までご来店いただけないお客様には、ご自宅、入居施設、病院等に出張訪問をいたします。<br>お気軽にご相談ください。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
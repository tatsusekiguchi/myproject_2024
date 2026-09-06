<?php get_header(); ?>
</div>
	<!-- ▽メイン▽-->
	<main class="main" id="top">
		<div class="topKvContainer">
			<div class="secWrap">
				<div class="topKvTitleBox">
					<div class="topKvTitle mincho">
						<h1>ストレス発散の究極体験<br>心も体も解き放て！</h1>
					</div>
					<div class="sub mincho">
						<p>Ultimate stress-relief experience.</p>
						<p>Free your mind and body!</p>
					</div>
				</div>
			</div>
			<div class="kvSliderPanel">
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_01.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_02.png" alt=""></div>
				<div class="kvSlider"><img src="<?php bloginfo('template_url'); ?>/image/top/top_kv_03.png" alt=""></div>
			</div>
		</div>
		<div class="sec01">
			<div class="secPanel">
				<div class="photo videoBox"><img src="<?php bloginfo('template_url'); ?>/image/top/sec01_img.png" alt=""></div>
				<div class="secBox">
					<div class="secTtl mincho fadeUp">
						<h2>AXE Throwingとはなに？</h2>
						<p>ABOUT</p>
					</div>
					<div class="txt fadeUp">
						<p>AXE Throwing（アックススローイング）は、ダーツのように斧を的に投げてスコアを競うスポーツです。<br>単に斧を投げるだけではなく、そのスリリングな体験が魅力です。<br>初心者でも簡単に始められる競技で、ルールはシンプル。<br>プレイヤーは一定の距離から斧を握り、的に向かって投げます。<br>的には中心に近いほど高得点が設定されており、中心の「ブルズアイ」を狙うことで最高得点が得られます。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap">
				<div class="pageSecTtlBox mincho fadeUp">
					<div class="pageSecTtl">
						<h2>BRAVE BLOG</h2>
					</div>
					<div class="sub">
						<p>BLOG</p>
					</div>
				</div>
				<div class="listBox fadeUp">
					<ul>
						<?php
							$the_query = new WP_Query( array(
							'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
							'post_type'   => 'post',
							'posts_per_page' => 3,
							) ); ?>
						<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<div class="photo"><?php the_post_thumbnail('full'); ?></div>
							<div class="title">
								<p><?php the_title(); ?></p>
							</div><a href="<?php the_permalink() ?>">read more</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="btnMore mincho"><a href="<?php echo home_url(); ?>/bloglist/">VIEW MORE</a></div>
			</div>
		</div>
		<div class="sec03">
			<div class="secWrap">
				<div class="message fadeUp"><img src="<?php bloginfo('template_url'); ?>/image/top/sec03_message.png" alt=""></div>
				<div class="pageSecTtlBox white mincho fadeUp">
					<div class="pageSecTtl">
						<h2>BRAVEの特徴</h2>
					</div>
					<div class="sub">
						<p>FEATURES</p>
					</div>
				</div>
			</div>
			<div class="secContainer">
				<div class="secPanel">
					<div class="secBox fadeUp">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec03_img_01.png" alt=""></div>
						<div class="txtBox">
							<div class="inner">
								<div class="ttl mincho"><em>01</em><span>毎日通える定額制</span></div>
								<div class="txt">
									<p>２４時間・３６５日利用可能の定額制だからいつでも気軽に通うことが可能！<br>（的のメンテナンス除く）</p>
								</div>
							</div>
						</div>
					</div>
					<div class="secBox fadeUp">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec03_img_02.png" alt=""></div>
						<div class="txtBox">
							<div class="inner">
								<div class="ttl mincho"><em>02</em><span>完全個室の空間</span></div>
								<div class="txt">
									<p>貸し切りの完全プライベート空間だから人の目を気にせずプレイが可能。<br>1人でじっくりプレイも仲間とワイワイプレイも楽しめます。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="secPanel">
					<div class="secBox fadeUp">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec03_img_03.png" alt=""></div>
						<div class="txtBox">
							<div class="inner">
								<div class="ttl mincho"><em>03</em><span>手軽でらくちん</span></div>
								<div class="txt">
									<p>Tシャツ、靴の貸し出しがあるので、初めての方でもお手軽に参加OK♪</p>
								</div>
							</div>
						</div>
					</div>
					<div class="secBox fadeUp">
						<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec03_img_04.png" alt=""></div>
						<div class="txtBox">
							<div class="inner">
								<div class="ttl mincho"><em>04</em><span>充実した設備</span></div>
								<div class="txt">
									<p>WIFI・コンセント完備でワーキングスペースとしても利用可能。<br>ちょっとした隠れ家的な使い方も可能です。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec04">
			<div class="secWrap">
				<div class="pageSecTtlBox white mincho fadeUp">
					<div class="pageSecTtl">
						<h2>利用料金</h2>
					</div>
					<div class="sub">
						<p>PLAN</p>
					</div>
				</div>
				<div class="experiencePanel mincho fadeUp">
					<div class="ttl">
						<h3>まずは<em>体験</em>してみよう！</h3>
					</div>
					<div class="secBox">
						<div class="firstTtl"><img src="<?php bloginfo('template_url'); ?>/image/top/sec04_ttl_first.png" alt=""></div><span>1時間Play</span><em>4,500</em><span>円</span>
					</div>
				</div>
				<div class="message mincho fadeUp">
					<p>通い放題で楽しむ。月2回くらいで気楽に。<br>お好きなプランをお選びください。</p>
				</div>
				<div class="listBox mincho">
					<ul class="listAnim">
						<li>
							<div class="box">
								<div class="ttl">
									<p>月２回まで遊べます<br>(最大１コマ毎月２回まで)</p>
								</div>
								<div class="price"><em>13,200</em><span>円/月</span></div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="ttl">
									<p>月４回まで遊べます<br>(最大１コマ毎月４回まで)</p>
								</div>
								<div class="price"><em>20,000</em><span>円/月</span></div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="time">
									<p>0:00-6:00</p>
								</div>
								<div class="ttl">
									<p>夜や深夜朝早くに遊べます<br>(最大2コマ　通い放題)</p>
								</div>
								<div class="price"><em>25,000</em><span>円/月</span></div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="ttl">
									<p>回数制限無しの通い放題<br>(最大１コマ　通い放題)</p>
								</div>
								<div class="price"><em>35,000</em><span>円/月</span></div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="ttl">
									<p>通い放題で長時間遊べます<br>(最大２コマ通い放題)</p>
								</div>
								<div class="price"><em>60,000</em><span>円/月</span></div>
							</div>
						</li>
					</ul>
				</div>
				<div class="btnMore white mincho"><a href="<?php echo home_url(); ?>/plan/">VIEW MORE</a></div>
			</div>
		</div>
		<div class="sec05">
			<div class="secWrap01">
				<div class="pageSecTtlBox white mincho fadeUp">
					<div class="pageSecTtl">
						<h2>ご利用の流れ</h2>
					</div>
					<div class="sub">
						<p>FLOW</p>
					</div>
				</div>
				<div class="message mincho fadeUp">
					<p>カンタン３ステップでご利用開始！</p>
				</div>
				<div class="listBox">
					<ol class="listAnim">
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec05_img_01.png" alt=""></div>
							<div class="ttl mincho"><span>STEP.</span><em>01</em></div>
							<dl>
								<dt class="mincho">会員登録・決済</dt>
								<dd>WEBからいつでも、会員登録と決済が可能です。<br>利用日をご予約ください。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec05_img_02.png" alt=""></div>
							<div class="ttl mincho"><span>STEP.</span><em>02</em></div>
							<dl>
								<dt class="mincho">解除QRコード通知</dt>
								<dd>予約後に配布される指定した時間のみ読込み可能なQRコードをQRリーダーにかざして入ります。</dd>
							</dl>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/sec05_img_03.png" alt=""></div>
							<div class="ttl mincho"><span>STEP.</span><em>03</em></div>
							<dl>
								<dt class="mincho">ご利用開始</dt>
								<dd>完全貸し切りのプライベート空間で思う存分アックススローイングをお楽しみください。</dd>
							</dl>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="top">
		<div class="topKvPanel">
			<div class="topKv">
				<div class="kvContents">
					<div class="kvTitlePanel">
						<div class="kvTitle">
							<h1>ぼくたちは「里山」で癒される。<br>「ただいま」が似合うキャンプ場。</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="topLogoBox">
			<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></div>
		</div>
		<div class="sec01">
			<div class="secWrap">
				<div class="secPanel">
					<div class="secBox">
						<div class="txtBox fadeUp">
							<div class="ttl">
								<h2>名古屋から車で<em>１時間！</em><br><em>田舎のおばあちゃんの家</em>に遊びに来たような<br>懐かしい気分になれるキャンプ場。</h2>
							</div>
							<div class="txt">
								<p>岐阜県本巣市にある金原里山キャンプ場は、里山の懐かしさや日本らしさを感じてもらえるキャンプ場です。<br>若い世代が里山の良さを感じ、家族で癒され、ゆっくりとした時間を過ごせる、そんな「のどか」なキャンプ場です。</p>
							</div>
							<div class="btnReserve"><a href="https://www.nap-camp.com/gifu/16548" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/image/top/sec01_btn_reserve.png" alt=""></a></div>
						</div>
						<div class="accessMapBox fadeUp">
							<div class="accessBtn"><a href="<?php echo home_url(); ?>/access"><img src="<?php bloginfo('template_url'); ?>/image/top/sec01_btn_access.png" alt=""></a></div>
							<div class="map"><img src="<?php bloginfo('template_url'); ?>/image/top/sec01_map.png" alt=""></div>
						</div>
						<div class="weatherPanel fadeUp">
							<script src="https://www.sototenki.jp/widget/widget.php?id=456435&auto=1"></script>
							<div id="COURSE_WRAPPER">
								<div class="COURSE_WIDGET">
									<div id="COURSE_WIDGET_AUTO"></div>
								</div>
							</div>
							<script>
								render_widget('COURSE_WIDGET_AUTO', 'COURSE_WRAPPER', 580);
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap">
				<div class="pageSecTtlBox fadeUp">
					<h2>イベント<em>ブ</em>ログ</h2>
				</div>
				<div class="postListPanel fadeUp">
					<ul>
						<?php
							$the_query = new WP_Query( array(
							'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
							'post_type'   => 'post',
							'posts_per_page' => 4,
							) ); ?>
						<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>">
								<div class="photo"><?php the_post_thumbnail('full'); ?></div>
								<div class="infoBox">
									<div class="info">
										<div class="time">
											<p><?php the_time("Y.m.d") ?></p>
										</div>
										<div class="cate">
											<?php
												$category = get_the_category();
												$cat_name = $category[0]->cat_name;
												$cat_slug = $category[0]->category_nicename;
											?>
											<p class="cate"><?php echo $cat_name; ?></p>
										</div>
									</div>
									<div class="ttl">
										<p><?php the_title(); ?></p>
									</div>
								</div>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="btnMore"><a href="<?php echo home_url(); ?>/newslist">一覧を見る</a></div>
				<div class="bnrList">
					<ul>
						<li class="fadeUp"><a href="<?php echo home_url(); ?>/price#sec03"><img src="<?php bloginfo('template_url'); ?>/image/top/sec02_bnr_01.png" alt=""></a></li>
						<li class="fadeUp"><a href="<?php echo home_url(); ?>/price#sec04"><img src="<?php bloginfo('template_url'); ?>/image/top/sec02_bnr_02.png" alt=""></a></li>
						<li class="fadeUp"><a href="<?php echo home_url(); ?>/price#sec05"><img src="<?php bloginfo('template_url'); ?>/image/top/sec02_bnr_03.png" alt=""></a></li>
						<li class="fadeUp"><a href="<?php echo home_url(); ?>/newslist"><img src="<?php bloginfo('template_url'); ?>/image/top/sec02_bnr_04.png" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sec03">
			<div class="secWrap">
				<div class="pageSecTtlBox fadeUp">
					<h2>施設<em>案</em>内</h2>
				</div>
				<div class="listContainer">
					<div class="listWrap">
						<div class="listBox fadeUp">
							<ul>
								<li>
									<div class="ttl"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_ttl_01.png" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_img_01.png" alt=""></div>
									<div class="txt">
										<p>自然をゆっくり感じて頂くためにゆったり広いテントサイトを11区画ご用意しています。</p>
									</div>
								</li>
								<li>
									<div class="ttl"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_ttl_02.png" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_img_02.png" alt=""></div>
									<div class="txt">
										<p>和を感じることのできる8畳の畳間のあるバンガローで故郷にかってきたような安心感をご堪能ください。</p>
									</div>
								</li>
								<li>
									<div class="ttl"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_ttl_03.png" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_img_03.png" alt=""></div>
									<div class="txt">
										<p>手軽にお泊りいただけるコテージを2棟ご用意しております。<br>落ち着いた木の匂いに癒されます。</p>
									</div>
								</li>
								<li>
									<div class="ttl"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_ttl_04.png" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_img_04.png" alt=""></div>
									<div class="txt">
										<p>古民家をリフォームした和と自然を感じながらの休憩やイベントに利用いただけるスペースです。</p>
									</div>
								</li>
								<li>
									<div class="ttl"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_ttl_05.png" alt=""></div>
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/facility_list_img_05.png" alt=""></div>
									<div class="txt">
										<p>受付・売店・見て触って借りられるレンタル倉庫など充実した設備でお客様のキャンプライフをサポートします。</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec04">
			<div class="secWrap02">
				<div class="pageSecTtlBox fadeUp">
					<h2><em>空</em>き状況</h2>
				</div>
				<div class="calendarContainer">
					<div class="calendarPanel"></div>
				</div>
			</div>
			<div class="mapPanel">
				<div class="accessBox">
					<dl>
						<dt>アクセス</dt>
						<dd>
							<div class="txt">
								<p>〒501-1232<br>岐阜県本巣市金原字<br>西ノ越661-1</p>
							</div><a href="<?php echo home_url(); ?>/access">各方面からのアクセスはこちら</a>
						</dd>
					</dl>
				</div>
				<div class="mapBox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.065164956028!2d136.63965671146627!3d35.576783372506924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60024f9792884125%3A0x9231d5bac68934fe!2z44CSNTAxLTEyMzIg5bKQ6Zic55yM5pys5bej5biC6YeR5Y6f77yW77yW77yQ!5e0!3m2!1sja!2sjp!4v1729813582350!5m2!1sja!2sjp" allow="fullscreen"></iframe></div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
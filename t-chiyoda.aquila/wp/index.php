<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main id="top">
		<div class="topKvPanel">
			<div class="topKv">
				<div class="kvContents">
					<div class="kvTitlePanel">
						<div class="kvTitle">
							<h1>想像を創造に変える</h1>
							<p>金型製作・精密金型製作・試作品製作・木質流動成形品製作</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap01">
				<div class="secPanel">
					<div class="leftBox fadeUp">
						<div class="secTtlBox">
							<h2>最新情報</h2>
							<p>NEWS</p>
						</div>
					</div>
					<div class="rightBox fadeUp">
						<div class="newsTabList">
							<div class="tabBtn active" data-category="info">ニュースリリース</div>
							<div class="tabBtn" data-category="event">イベント</div>
						</div>
						<ul>
							<?php
							// 投稿を取得するためのWP_Queryを設定
							$args = array(
								'post_type'      => 'post',   // 投稿タイプを指定
								'post_status'    => 'publish', // 公開済みの投稿のみを取得
								// 'posts_per_page' => 5,        // 表示する投稿数を指定
							);
							$the_query = new WP_Query( $args );

							// 投稿があるかどうかを確認
							if ( $the_query->have_posts() ) :
								// ループ開始
								while ( $the_query->have_posts() ) : $the_query->the_post();
										// カテゴリーのスラッグを取得
										$categories = get_the_category();
										$cat_slugs = array();
										if ( ! empty( $categories ) ) {
											foreach ( $categories as $category ) {
												$cat_slugs[] = $category->slug;
											}
										}
										$cat_class = ! empty( $cat_slugs ) ? implode( ' ', $cat_slugs ) : 'uncategorized';
							?>
							<li class="news-item <?php echo esc_attr( $cat_class ); ?>">
								<!-- 投稿のタイトルを <time> タグ内に表示 -->
								<time><?php the_title(); ?></time>
								<div class="box">
									<!-- 投稿のコンテンツを .box 内に表示 -->
									<?php the_content(); ?>
								</div>
							</li>
							<?php
								endwhile;
								wp_reset_postdata(); // 投稿データのリセット
								else :
									echo '<p>投稿が見つかりませんでした。</p>';
								endif;
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sec02">
			<div class="secWrap01">
				<div class="secTtlBox fadeUp">
					<h2>チヨダ工業が選ばれる理由</h2>
					<p>Our Feature</p>
				</div>
				<div class="secBox fadeUp">
					<div class="ttl">
						<h3>プレス金型設計・製作及び試作品製作から新技術の木質流動成形まで製造業を強力にサポート致します。</h3>
					</div>
					<div class="txt">
						<p>「ものづくりの地」愛知を拠点に常に新しい発想で自動車部品の金型を作り世界14か国に輸出しています。<br>長年培ってきた経験と知識を基盤に次世代に向けた高精度な金型を製作する精密機械加工やEV化に向けて軽量化と高強度を維持する様々な技術を提供致します。<br>木材の「流動成形」という新技術の開発にも取り組んでいます。</p>
					</div>
				</div>
				<div class="listBox fadeUp">
					<ul>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_img_01.png" alt=""></div>
							<div class="txt">
								<p>長年培った確かな経験と技術力でご要望にフレキシブルに対応します。</p>
							</div>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_img_02.png" alt=""></div>
							<div class="txt">
								<p>問題点を丁寧にクイックな対応でお客様にフィードバックし、精度の高い図面を作成。</p>
							</div>
						</li>
						<li>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec02_img_03.png" alt=""></div>
							<div class="txt">
								<p>徹底した業務効率化で高品質・短納期・低コストを実現します。</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="btnMore white"><a href="<?php echo home_url(); ?>/feature/">
						<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_more_white.png" alt=""></div>
						<div class="more">
							<p>Read More</p>
						</div>
					</a></div>
			</div>
		</div>
		<div class="sec03">
			<div class="secPanel01">
				<div class="secWrap01">
					<div class="secTtlBox fadeUp">
						<h2>事業内容</h2>
						<p>Our Service</p>
					</div>
					<div class="secBox fadeUp">
						<div class="ttl">
							<h3>プレス金型・精密金型の設計、製作及び試作品製作から木質流動成形まで承ります。</h3>
						</div>
						<div class="txt">
							<p>チヨダ工業株式会社は様々な金型の設計を試作品から製造、量産まで金型作りのあらゆるニーズにお応えいたします。<br>また、独自技術を生かした木質流動成形でこれまでにない新技術の研究開発に取り組んでいます。</p>
						</div>
						<div class="btnMore"><a href="<?php echo home_url(); ?>/service/">
								<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_more_blue.png" alt=""></div>
								<div class="more">
									<p>Read More</p>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div class="secPanel02">
				<ul>
					<li><a href="<?php echo home_url(); ?>/service?sec01">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec03_img_01.png" alt=""></div>
							<dl>
								<dt>金型製作</dt>
								<dd>Mold production</dd>
							</dl>
						</a></li>
					<li><a href="<?php echo home_url(); ?>/service?sec02">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec03_img_02.png" alt=""></div>
							<dl>
								<dt>精密金型製作</dt>
								<dd>Precision mold production</dd>
							</dl>
						</a></li>
					<li><a href="<?php echo home_url(); ?>/service?sec03">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec03_img_03.png" alt=""></div>
							<dl>
								<dt>試作製作</dt>
								<dd>Prototype production</dd>
							</dl>
						</a></li>
					<li><a href="<?php echo home_url(); ?>/service?sec04">
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec03_img_04.png" alt=""></div>
							<dl>
								<dt>木質流動成形</dt>
								<dd>Wood development</dd>
							</dl>
						</a></li>
				</ul>
			</div>
		</div>
		<div class="sec04">
			<div class="secContainer">
				<div class="secPanel01">
					<div class="secWrap01">
						<div class="secTtlBox fadeUp">
							<h2>企業情報</h2>
							<p>Company</p>
						</div>
						<div class="secBox fadeUp">
							<div class="txt">
								<p>チヨダ工業株式会社は愛知県豊田市に程近い東郷町で自動車部品の金型・精密金型の設計・製造及び試作品の製作を承っております。<br>近年では「木質流動成形」という新技術の開発にも取り組んでおります。</p>
							</div>
							<div class="btnItem">
								<ul>
									<li><a href="<?php echo home_url(); ?>/company/"><span>ご挨拶</span></a></li>
									<li><a href="<?php echo home_url(); ?>/company?sec02"><span>会社概要</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="secPanel02">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec04_img.png" alt=""></div>
				</div>
			</div>
		</div>
		<div class="sec05">
			<div class="secContainer">
				<div class="secPanel01">
					<div class="secWrap">
						<div class="secPanel">
							<div class="secTtlBox fadeUp">
								<h2>採用情報</h2>
								<p>Recruit</p>
							</div>
							<div class="secBox fadeUp">
								<div class="ttl">
									<h3>技術力は、未来をデザインする力だ！</h3>
								</div>
								<div class="txt">
									<p>チヨダ工業は自ら考え行動し、より向上心を持って仕事に取り組む姿勢を歓迎いたします。<br>確かな技術力と柔軟なアイデアを生かす「モノづくり」を目指す仲間を待っています。</p>
								</div>
								<div class="btnMore white"><a href="<?php echo home_url(); ?>/recruit">
										<div class="icon"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_more_white_green.png" alt=""></div>
										<div class="more">
											<p>採用情報を見る</p>
										</div>
									</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="secPanel02">
					<div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/top_sec05_img.png" alt=""></div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
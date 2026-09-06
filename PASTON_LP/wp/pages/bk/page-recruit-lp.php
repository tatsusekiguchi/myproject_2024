<?php
/*
Template Name: 採用エントリーページ
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="パストーングループ(PASTONE)は、岐阜県羽島市を中心に8店舗を展開する美容室・ヘアメイクサロンです。お客様のトータルビューティーを極めながら、心地よい時間を提供し続けることで、地元・岐阜に根ざし、必要とされるサロンを目指しています。">
	<meta name="keywords" content="">
	<!--OGP-->
	<meta property="fb:app_id" content="1186707148962255">
	<meta property="og:title" content="岐阜の美容室・ヘアメイクサロン｜パストーングループ" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://hattori-zaidan.or.jp" />
	<meta property="og:image" content="https://www.pastone.jp/wp/wp-content/uploads/2019/03/ogp.png">
	<meta property="og:site_name" content="パストーングループ" />
	<meta property="og:description" content="パストーングループ(PASTONE)は、岐阜県羽島市を中心に8店舗を展開する美容室・ヘアメイクサロンです。お客様のトータルビューティーを極めながら、心地よい時間を提供し続けることで、地元・岐阜に根ざし、必要とされるサロンを目指しています。" />
	<!-- css-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/reset.css?ver=<?php echo filemtime(get_template_directory() . '/css/reset.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/layout.css?ver=202402261715">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/layout_sp.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/attach.css?ver=202402261715">
	<link rel="shortcut icon" href="/wp/wp-content/themes/original_theme/favicon.ico">
	<!-- js-->
	<script src="<?php echo get_template_directory_uri(); ?>/asset/js/jquery-1.11.3.min.js?ver=<?php echo filemtime(get_template_directory() . '/js/jquery-1.11.3.min.js'); ?>"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/asset/js/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/asset/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/asset/js/scrollAnimation.js"></script>
	<!-- title-->
	<title><?php wp_title(''); ?>｜岐阜の美容室・ヘアメイクサロン｜パストーングループ</title>
</head>


<body>
	<div class="pageWrapper">
		<!-- ▽header▽-->
		<header class="header">
			<div class="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/header_logo.png" alt="PASTONE"></a></div>
			<nav class="navBox">
				<div class="nav__wrap">
					<div class="nav__inner">
						<div class="nav__logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/header_nav_logo.png" alt="PASTONE"></a></div>
						<div class="nav__category">
							<p class="ttl">CATEGORY</p>
							<div class="nav__category__list">
								<ul>
									<li><a href="#">⚪︎ TOP</a></li>
									<li><a href="#section__about">⚪︎ ABOUT</a></li>
									<li><a href="#section__works">⚪︎ WORKS</a></li>
									<li><a href="#section__people">⚪︎ PEOPLE</a></li>
									<li><a href="#interviewPanel">⚪︎ INTERVIEW</a></li>
								</ul>
								<ul>
									<li><a href="#section__data">⚪︎ JOB DATA</a></li>
									<li><a href="#section__company">⚪︎ COMPANY</a></li>
									<li><a href="#section__recruit">⚪︎ RECRUIT</a></li>
									<li><a href="#section__contact">⚪︎ CONTACT</a></li>
								</ul>
							</div>
						</div>
						<div class="nav__bottom">
							<div class="nav__img"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/left_sec_img.png" alt=""></div>
							<div class="nav__sns">
								<dl>
									<dt>FOLLOW ME</dt>
									<dd>
										<ul>
											<li><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_insta.png" alt=""></a></li>
											<li><a href="https://youtube.com/@pastone5743?si=POT4x9GGi1Iwsktc" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_youtube.png" alt=""></a></li>
											<li><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_line.png" alt=""></a></li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="nav__copy">
								<p>Copyright &copy; PASTONE, Ltd. All rights reserved.</p>
							</div>
						</div>
					</div>
					<div class="nav__photo"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/header_nav_photo.png" alt=""></div>
				</div>
			</nav>
			<div class="hamburger"><span></span><span></span><span></span></div>
		</header>
		<!-- △header△-->
		<!-- ▽メイン▽-->
		<main id="top">
			<div id="loading">
				<div id="loading__image"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/top_loading_img.png" alt=""></div>
			</div>
			<div id="mainContainer">
				<div class="topKvPanel">
					<div class="topKv"><img class="switch" src="<?php bloginfo('template_url'); ?>/asset/image/top/top_kv_pc.png" alt=""></div>
					<div class="topKvTitle">
						<h1><img class="switch" src="<?php bloginfo('template_url'); ?>/asset/image/top/top_kv_title_pc.png" alt="岐阜の美容室パストーンの採用サイト"></h1>
					</div>
				</div>
				<div class="section__top" id="section__top">
					<div class="photoBox">
						<div class="photo scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/top_photo.png" alt=""></div>
						<div class="title01"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/top_title_01.png" alt=""></div>
						<div class="title02"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/top_title_02.png" alt=""></div>
					</div>
					<div class="txtBox">
						<div class="txt">
							<p>このサロンの扉を開けた<br>全ての人を美しくする<br>その人の暮らしが<br>美しくなる提案をする<br>そうすることで<br>この街が美しくなる<br>そして<br>環境までも美しくする。<br>このヘアサロンの約束です。</p>
						</div>
					</div>
				</div>
				<div class="section__about" id="section__about">
					<div class="section__about__container">
						<div class="secTitleBox">
							<p>（ABOUT US）</p>
							<h2>パストーンについて</h2>
						</div>
						<div class="secTitle">
							<h3>お客様へ、地域へ、社会へ。<br>私たちができることをコツコツと。</h3>
						</div>
						<div class="txt">
							<p>全てのご縁に感謝し、実を結ぶために、関わる全ての方に幸せを感じてもらえるよう企業としてできることを続けています。パストーングループは創業地である岐阜を中心に店舗を展開し、地域でのボランティア活動や小中学校での教育活動などを通じて、地域住民に必要とされる「地域一番店」を目指しています。また、弊社独自の社会貢献活動の一環としてネパール・ルンビニに学校をつくり、現地にいくつかの井戸を掘りました。海外にも目を向けて、地道な活動を続けています。</p>
						</div>
						<div class="areaContainer">
							<div class="areaPanel">
								<p class="title">PASTONE Group</p>
								<ul>
									<li><span>Utatane</span></li>
									<li><span>utut</span></li>
									<li><span>VAN COUNCIL</span></li>
									<li><span>ABADI</span></li>
									<li><span>BEYOND L’INK</span></li>
								</ul>
							</div>
							<div class="areaMap"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/about_map_hover_00.png" alt=""></div>
						</div>
					</div>
					<div class="section__about__bottomPhoto scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/about_sec_bottom_photo.png" alt=""></div>
				</div>
				<div class="section__works" id="section__works">
					<div class="section__works__wrap">
						<div class="section__works__container">
							<div class="secTitleBox">
								<p>（WORKS）</p>
								<h2>事業内容</h2>
							</div>
							<div class="listBox">
								<ul>
									<?php if(get_field('works_icon')): ?>
    								<?php while(the_repeater_field('works_icon')):?>
										<li><img src="<?php the_sub_field('works_icon_image'); ?>" alt=""></li>
									<?php endwhile;?>
    								<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					<?php if(get_field('shop_info')): ?>
					<?php while(the_repeater_field('shop_info')):?>
						<div class="shopSection">
							<div class="mvTop scaleImage"><img src="<?php the_sub_field('shop_info_mv'); ?>" alt=""></div>
							<div class="section__works__wrap">
								<div class="shopSection__container">
									<div class="titleOpen">
										<p>（<?php the_sub_field('shop_info_open'); ?>・OPEN）</p>
									</div>
									<div class="mvShop"><img src="<?php the_sub_field('shop_info_image'); ?>" alt=""></div>
									<div class="shopLogo"><img src="<?php the_sub_field('shop_info_logo'); ?>" alt=""></div>
									<div class="sns"><a href="<?php the_sub_field('shop_info_insta_url'); ?>" target="_blank" rel="noopener"><?php the_sub_field('shop_info_insta_title'); ?></a></div>
									<div class="site"><a href="<?php the_sub_field('shop_info_url'); ?>" target="_blank" rel="noopener">
											<dl>
												<dt><?php the_sub_field('shop_info_name'); ?> SITE</dt>
												<dd>MORE</dd>
											</dl>
										</a></div>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					<?php endif; ?>
					<div class="shopListSection">
						<div class="section__works__wrap">
							<div class="shopListSection__container">
								<div class="listBox">
									<ul>
										<?php if(get_field('affiliated_store')): ?>
										<?php while(the_repeater_field('affiliated_store')):?>
											<li>
												<div class="photoBox"><img src="<?php the_sub_field('affiliated_store_image'); ?>" alt=""></div>
											</li>
										<?php endwhile;?>
										<?php endif; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="volunteerSection">
						<div class="mv scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/works_volunteer_mv.png" alt=""></div>
						<div class="section__works__wrap">
							<div class="volunteerSection__container">
								<div class="secTitleBox">
									<p>（VOLUNTEER）</p>
									<h2>パストーンの活動</h2>
								</div>
								<div class="listImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/works_volunteer_list.png" alt=""></div>
								<div class="sdgsImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/works_volunteer_sdgs.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="section__people" id="section__people">
					<div class="topMv">
						<div class="mvTitle"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/people_top_mv_title.png" alt=""></div>
						<div class="mv scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/people_top_mv.png" alt=""></div>
					</div>
					<div class="titlePanel">
						<div class="secTitleBox">
							<p>（PASTONE PEOPLE）</p>
							<h2>パストーンで働くスタッフ</h2>
						</div>
					</div>
					<div class="staffIntroduction">
						<div class="staffContainer">
							<div class="introPanel">
								<div class="introBox">
									<div class="photo"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/people_staff_top_photo_01.png" alt=""></div>
									<dl>
										<dt>utut・utatane／スタイリスト</dt>
										<dd>高村 和希</dd>
										<dd>Kazuki Takamura</dd>
									</dl>
									<div class="sns"><a href="https://www.instagram.com/utut_kazuki/" target="_blank" rel="noopener">utut_kazuki</a></div>
								</div>
							</div>
							<div class="interviewPanel" id="interviewPanel">
								<div class="interviewBox">
									<div class="interviewTitle">
										<p>interview</p>
									</div>
									<div class="interviewPhoto">
										<div class="photo"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/people_interview_photo_01.gif" alt=""></div>
									</div>
									<div class="interviewSlider">
										<?php if(get_field('interview')): ?>
										<?php while(the_repeater_field('interview')):?>
											<div class="slider">
												<div class="sliderBox">
													<div class="detailBox">
														<dl>
															<dt><span><?php the_sub_field('interview_q'); ?></span></dt>
															<dd>
																<?php the_sub_field('interview_a'); ?>
															</dd>
														</dl>
													</div>
												</div>
											</div>
										<?php endwhile;?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section__mamasWorker" id="section__mamasWorker">
					<div class="secTitleBox">
						<p>（MAMA’S WORKER）</p>
						<h2>子育て応援</h2>
					</div>
					<div class="topMv">
						<div class="mv scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/mamas_top_mv.png" alt=""></div>
					</div>
					<div class="workingWayPanel">
						<div class="title">
							<p>選べる働き方</p>
						</div>
						<div class="holiday"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/mamas_title_holiday.png" alt=""></div>
						<div class="explain">
							<p>パストーンでは、子育て・家庭・趣味などスタッフにプライベートも大切にしてほしいという思いから、勤務時間を自分で選択して働くことができます。「自分のペースで働きたい」そんな人に寄り添える会社であり続けたいと考えます。</p>
							<aside>
								<p>※対応店舗があります。</p>
							</aside>
						</div>
					</div>
				</div>
				<div class="section__entry" id="section__entry">
					<div class="section__entry__title"><a href="https://www.instagram.com/pastone_recruit/"><span>会社見学に応募してみる</span></a></div>
					<div class="section__entry__image scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/entry_sec_image.png" alt=""></div>
				</div>
				<div class="section__recruit" id="section__recruit">
					<div class="section__recruit__container">
						<div class="secTitleBox">
							<p>（RECRUIT）</p>
							<h2>募集要項</h2>
						</div>
						<div class="itemList">
							<div class="title">
								<p>美容師</p>
							</div>
							<ul>
								<li>
									<dl>
										<dt>MANAGER</dt>
										<dd>マネージャー</dd>
									</dl>
									<div class="btnMore recruitModalOpen" data-modal-id="modal1">
										<p>MORE</p>
									</div>
								</li>
								<li>
									<dl>
										<dt>STYLIST</dt>
										<dd>スタイリスト</dd>
									</dl>
									<div class="btnMore recruitModalOpen" data-modal-id="modal2">
										<p>MORE</p>
									</div>
								</li>
								<li>
									<dl>
										<dt>ASSISTANT</dt>
										<dd>アシスタント</dd>
									</dl>
									<div class="btnMore recruitModalOpen" data-modal-id="modal3">
										<p>MORE</p>
									</div>
								</li>
								<li>
									<dl>
										<dt>PART-TIME</dt>
										<dd>パート/アルバイト</dd>
									</dl>
									<div class="btnMore recruitModalOpen" data-modal-id="modal4">
										<p>MORE</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="itemList">
							<div class="title">
								<p>サポート</p>
							</div>
							<ul>
								<li>
									<dl>
										<dt>PRESS</dt>
										<dd>広報</dd>
									</dl>
									<div class="btnMore recruitModalOpen" data-modal-id="modal5">
										<p>MORE</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="btnEntry"><a href="https://lin.ee/Ir25Sdh">ENTRY!!</a></div>
					</div>
				</div>
				<div class="section__data" id="section__data">
					<div class="topMv">
						<div class="mvTitle"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_top_mv_title.png" alt=""></div>
						<div class="mv scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_top_mv.png" alt=""></div>
					</div>
					<div class="titlePanel">
						<div class="secTitleBox">
							<p>（JOB DATA）</p>
							<h2>数字でみるパストーン</h2>
						</div>
						<div class="txt">
							<p>パストーンでは、変化するライフステージや地域柄に合わせて幅広い世代が働きやすい環境を積極的に整えています。</p>
						</div>
					</div>
					<div class="dataTable">
						<table>
							<tbody>
								<tr>
									<td>
										<dl>
											<dt>従業員数</dt>
											<dd>
												<div class="icon icon01"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_01.png" alt=""></div>
												<div class="numBox">
													<p><em>45</em><span>人</span></p>
												</div>
											</dd>
										</dl>
									</td>
									<td>
										<dl>
											<dt>平均勤続年数</dt>
											<dd>
												<div class="icon icon02"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_02.png" alt=""></div>
												<div class="numBox">
													<p><em>9</em><span>年</span></p>
												</div>
											</dd>
										</dl>
									</td>
								</tr>
								<tr>
									<td>
										<dl>
											<dt>社員平均年齢</dt>
											<dd>
												<div class="icon icon01"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_01.png" alt=""></div>
												<div class="numBox">
													<p><em>36</em><span>歳</span></p>
												</div>
											</dd>
										</dl>
									</td>
									<td>
										<dl>
											<dt>最長勤続年数</dt>
											<dd>
												<div class="icon icon02"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_02.png" alt=""></div>
												<div class="numBox">
													<p><em>22</em><span>年</span></p>
												</div>
											</dd>
										</dl>
									</td>
								</tr>
								<tr>
									<td>
										<dl>
											<dt>男女比率</dt>
											<dd>
												<div class="numBox">
													<p><small>WOMEN</small><em>75</em><span>%</span></p>
												</div>
												<div class="numBox">
													<p><small>MEN</small><em>25</em><span>%</span></p>
												</div>
											</dd>
										</dl>
									</td>
									<td>
										<dl>
											<dt>月間休日数</dt>
											<dd>
												<div class="numBox">
													<p><small>TYPE 01</small><em>8</em><span>日</span></p>
												</div>
												<div class="numBox">
													<p><small>TYPE 02</small><em>10</em><span>日</span></p>
												</div>
											</dd>
										</dl>
									</td>
								</tr>
								<tr>
									<td>
										<dl>
											<dt>給与</dt>
											<dd>
												<div class="icon icon03"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_03.png" alt=""></div>
												<div class="numBox">
													<p><em>20</em><span>万〜</span></p>
												</div>
											</dd>
										</dl>
									</td>
									<td>
										<dl>
											<dt>年間休日日数</dt>
											<dd>
												<div class="icon icon04"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/data_table_icon_04.png" alt=""></div>
												<div class="numBox">
													<p><em>110</em><span>日</span></p>
												</div>
											</dd>
										</dl>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="section__company" id="section__company">
					<div class="section__company__container">
						<div class="secTitleBox">
							<p>（COMPANY）</p>
							<h2>会社概要</h2>
						</div>
						<div class="infoBox">
							<?php
								$companyInfo = get_field('company');
							?>
							<ul>
								<li>
									<p><?php echo $companyInfo['company_name']; ?></p>
								</li>
								<li>
									<p><?php echo $companyInfo['company_establishment']; ?> 設立</p>
								</li>
								<li>
									<p><?php echo $companyInfo['company_address']; ?></p><a href="tel:<?php echo $companyInfo['company_tel']; ?>">tel.<?php echo $companyInfo['company_tel']; ?></a>
								</li>
								<li>
									<p>代表 <?php echo $companyInfo['company_representative']; ?></p>
								</li>
								<li>
									<p>従業員数 <?php echo $companyInfo['company_staff']; ?>人</p>
								</li>
								<li>
									<p>店舗数 <?php echo $companyInfo['company_shop']; ?>店舗</p>
								</li>
								<li>
									<p>顧問弁護士<br><?php echo $companyInfo['company_lawyer']; ?></p>
								</li>
							</ul>
						</div>
						<div class="site"><a href="https://www.pastone.jp/" target="_blank" rel="noopener">
								<dl>
									<dt>OFFICIAL SITE</dt>
									<dd>MORE</dd>
								</dl>
							</a></div>
					</div>
				</div>
				<div class="section__instagram" id="section__instagram">
					<div class="secTitleBox">
						<p>（Instagram）</p>
						<h2>インスタグラム</h2>
					</div>
					<div class="section__instagram__container">
						<div class="instagramFeedPanel">
							<div class="instaHeader"><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/top_insta_user_01.png" alt=""></div>
								</a>
							</div>
							<?php echo do_shortcode( '[instagram-feed feed=1]' ); ?>
						</div>
						<div class="sns"><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener">pastone_recruit</a></div>
					</div>
				</div>
				<div class="section__contact" id="section__contact">
					<div class="topMv">
						<div class="mv scaleImage"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/contact_top_mv.png" alt=""></div>
					</div>
					<div class="section__contact__container">
						<div class="contactPanel">
							<div class="secTitleBox">
								<p>（CONTACT）</p>
								<h2>質問・お問合せ</h2>
							</div>
							<div class="txt">
								<p>ご質問・お問合せ・ご応募につきましては<br>エントリーフォーム又は、InstagramのDMにて<br>お気軽にご連絡ください。</p>
							</div>
							<div class="buttonList">
								<div class="buttonLink"><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener">+LINE</a></div>
								<div class="buttonLink"><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener">+INSTAGRAM</a></div>
							</div>
							<div class="imageBox">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/contact_bottom_img.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="section__pastone" id="section__paston">
					<div class="section__pastone__container">
						<div class="secBox">
							<div class="logo"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/pastone_sec_logo.png" alt=""></div>
							<div class="photo"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/pastone_sec_img.png" alt=""></div>
							<div class="site"><a href="https://www.pastone.jp" target="_blank" rel="noopener">
									<dl>
										<dt>OFFICIAL SITE</dt>
										<dd>MORE</dd>
									</dl>
								</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="decorationWrapper">
				<div class="leftSection">
					<div class="leftSection__inner">
						<div class="leftSection__category">
							<p class="ttl">CATEGORY</p>
							<ul>
								<li><a href="#">⚪︎ TOP</a></li>
								<li><a href="#section__about">⚪︎ ABOUT</a></li>
								<li><a href="#section__works">⚪︎ WORKS</a></li>
								<li><a href="#section__people">⚪︎ PEOPLE</a></li>
								<li><a href="#interviewPanel">⚪︎ INTERVIEW</a></li>
								<li><a href="#section__data">⚪︎ JOB DATA</a></li>
								<li><a href="#section__company">⚪︎ COMPANY</a></li>
								<li><a href="#section__recruit">⚪︎ RECRUIT</a></li>
								<li><a href="#section__contact">⚪︎ CONTACT</a></li>
							</ul>
						</div>
						<div class="leftSection__bottom">
							<div class="leftSection__img"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/left_sec_img.png" alt=""></div>
							<div class="leftSection__sns">
								<dl>
									<dt>FOLLOW ME</dt>
									<dd>
										<ul>
											<li><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_insta.png" alt=""></a></li>
											<li><a href="https://youtube.com/@pastone5743?si=POT4x9GGi1Iwsktc" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_youtube.png" alt=""></a></li>
											<li><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_line.png" alt=""></a></li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="leftSection__copy">
								<p>Copyright &copy; PASTONE, Ltd. All rights reserved.</p>
							</div>
						</div>
						<div class="leftSection__pagetop pagetop"><a href="#"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/pagetop.png" alt=""></a></div>
					</div>
				</div>
				<div class="rightSection">
					<div class="rightSection__inner">
						<div class="rightSection__title"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_title.png" alt=""></div>
						<div class="rightSection__bnr">
							<div class="bnr"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_bnr_01.png" alt=""></div>
							<div class="bnr"><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_bnr_02.png" alt=""></a></div>
							<div class="img01"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_img_01.png" alt=""></div>
							<div class="img02"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_img_02.png" alt=""></div>
						</div>
						<div class="img03"><img src="<?php bloginfo('template_url'); ?>/asset/image/top/right_sec_img_03.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="recruitItemOverlay overlay"></div>
			<div class="itemModalContainer">
				<div class="recruitItemModal itemModal" data-modal="modal1">
					<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/btn_modal_close.png" alt=""></div>
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="titleBox">
								<p>美容師</p>
								<dl>
									<dt>MANAGER</dt>
									<dd>マネージャー</dd>
								</dl>
							</div>
							<div class="infoBox">
								<ul>
									<?php while (have_rows('manager')) : the_row();
										while (have_rows('manager_list')) : the_row();
											$title = get_sub_field('manager_title');
											$text = get_sub_field('manager_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="recruitItemModal itemModal" data-modal="modal2">
					<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/btn_modal_close.png" alt=""></div>
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="titleBox">
								<p>美容師</p>
								<dl>
									<dt>STYLIST</dt>
									<dd>スタイリスト</dd>
								</dl>
							</div>
							<div class="infoBox">
								<ul>
									<?php while (have_rows('stylist')) : the_row();
										while (have_rows('stylist_list_1')) : the_row();
											$title = get_sub_field('stylist_title');
											$text = get_sub_field('stylist_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
									<li>
										<?php
											$stylistSalary = get_field('stylist');
										?>
										<div class="planBox">
											<dl>
												<dt>給与</dt>
												<dd>勤務プラン①*</dd>
												<dd><?php echo $stylistSalary['stylist_salary_1']; ?></dd>
											</dl>
											<dl>
												<dt>給与</dt>
												<dd>勤務プラン②*</dd>
												<dd><?php echo $stylistSalary['stylist_salary_2']; ?></dd>
											</dl>
											<aside>
												<p>*勤務プランによって対象店舗が異なります</p>
											</aside>
										</div>
									</li>
									<?php while (have_rows('stylist')) : the_row();
										while (have_rows('stylist_list_2')) : the_row();
											$title = get_sub_field('stylist_title');
											$text = get_sub_field('stylist_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="recruitItemModal itemModal" data-modal="modal3">
					<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/btn_modal_close.png" alt=""></div>
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="titleBox">
								<p>美容師</p>
								<dl>
									<dt>ASSISTANT</dt>
									<dd>アシスタント</dd>
								</dl>
							</div>
							<div class="infoBox">
								<ul>
									<?php while (have_rows('assistant')) : the_row();
										while (have_rows('assistant_list_1')) : the_row();
											$title = get_sub_field('assistant_title');
											$text = get_sub_field('assistant_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
									<li>
										<?php
											$assistantSalary = get_field('assistant');
										?>
										<div class="planBox">
											<dl>
												<dt>給与</dt>
												<dd>勤務プラン①*</dd>
												<dd><?php echo $assistantSalary['assistant_salary_1']; ?></dd>
											</dl>
											<dl>
												<dt>給与</dt>
												<dd>勤務プラン②*</dd>
												<dd><?php echo $assistantSalary['assistant_salary_2']; ?></dd>
											</dl>
											<aside>
												<p>*勤務プランによって対象店舗が異なります</p>
											</aside>
										</div>
									</li>
									<?php while (have_rows('assistant')) : the_row();
										while (have_rows('assistant_list_2')) : the_row();
											$title = get_sub_field('assistant_title');
											$text = get_sub_field('assistant_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="recruitItemModal itemModal" data-modal="modal4">
					<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/btn_modal_close.png" alt=""></div>
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="titleBox">
								<p>美容師</p>
								<dl>
									<dt>PART-TIME</dt>
									<dd>パート/アルバイト</dd>
								</dl>
							</div>
							<div class="infoBox">
								<ul>
									<?php while (have_rows('part')) : the_row();
										while (have_rows('part_list')) : the_row();
											$title = get_sub_field('part_title');
											$text = get_sub_field('part_text');
									?>
									<li>
										<dl>
											<dt><?php echo $title; ?></dt>
											<dd><?php echo $text; ?></dd>
										</dl>
									</li>
									<?php
										endwhile;
										endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="recruitItemModal itemModal" data-modal="modal5">
					<div class="modalClose"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/btn_modal_close.png" alt=""></div>
					<div class="modalBox">
						<div class="modalBoxInner">
							<div class="titleBox">
								<p>サポート</p>
								<dl>
									<dt>PRESS</dt>
									<dd>広報</dd>
								</dl>
							</div>
							<div class="infoBox">
								<?php if (have_rows('press')): ?>
									<ul>
										<?php while (have_rows('press')) : the_row(); ?>
											<?php if (have_rows('press_list')): ?>
												<?php while (have_rows('press_list')) : the_row(); ?>
													<?php
													$title = get_sub_field('press_title');
													$text = get_sub_field('press_text');
													?>
													<li>
														<dl>
															<dt><?php echo $title; ?></dt>
															<dd><?php echo $text; ?></dd>
														</dl>
													</li>
												<?php endwhile; ?>
											<?php else: ?>
												<li>
													<div class="comingSoon">
														<p>COMING SOON…</p>
													</div>
												</li>
											<?php endif; ?>
										<?php endwhile; ?>
									</ul>
								<?php else: ?>
									<ul>
										<li>
											<div class="comingSoon">
												<p>COMING SOON…</p>
											</div>
										</li>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- △メイン△-->
		<!-- ▽footer▽-->
		<footer class="footer">
			<div class="footer__items">
				<div class="footer__items__line"><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener">
					<dl>
						<dt>（CONTACT）</dt>
						<dd>質問・お問合せ</dd>
					</dl>
				</a></div>
				<div class="footer__items__entry"><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener">
						<dl>
							<dt>（ENTRY）</dt>
							<dd>応募してみる</dd>
						</dl>
					</a></div>
			</div>
			<div class="footer__container">
				<div class="footer__panel">
					<div class="footer__category">
						<p class="ttl">CATEGORY</p>
						<div class="listBox">
							<ul>
								<li><a href="#">⚪︎ TOP</a></li>
								<li><a href="#section__about">⚪︎ ABOUT</a></li>
								<li><a href="#section__works">⚪︎ WORKS</a></li>
								<li><a href="#section__people">⚪︎ PEOPLE</a></li>
								<li><a href="#interviewPanel">⚪︎ INTERVIEW</a></li>
							</ul>
							<ul>
								<li><a href="#section__data">⚪︎ JOB DATA</a></li>
								<li><a href="#section__company">⚪︎ COMPANY</a></li>
								<li><a href="#section__recruit">⚪︎ RECRUIT</a></li>
								<li><a href="#section__contact">⚪︎ CONTACT</a></li>
							</ul>
						</div>
					</div>
					<div class="footer__sns">
						<dl>
							<dt>FOLLOW ME</dt>
							<dd>
								<ul>
									<li><a href="https://www.instagram.com/pastone_recruit/" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_insta.png" alt=""></a></li>
									<li><a href="https://youtube.com/@pastone5743?si=POT4x9GGi1Iwsktc" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_youtube.png" alt=""></a></li>
									<li><a href="https://lin.ee/Ir25Sdh" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/sns_line.png" alt=""></a></li>
								</ul>
							</dd>
						</dl>
					</div>
					<div class="footer__logo"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/footer_logo.png" alt=""></div>
					<div class="footer__copy">
						<p>Copyright &copy; PASTONE, Ltd. All rights reserved.</p>
					</div>
				</div>
				<div class="footer__pagetop pagetop"><a href="#"><img src="<?php bloginfo('template_url'); ?>/asset/image/common/pagetop.png" alt=""></a></div>
			</div>
		</footer>
		<!-- △footer△-->
		<?php wp_footer(); ?>
	</div>
</body>

</html>
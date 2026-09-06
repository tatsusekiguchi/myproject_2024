<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			金原里山キャンプ村｜岐阜県本巣市の里山気分を味わえるキャンプ場
		<?php else: ?>
		<?php wp_title(''); ?>｜金原里山キャンプ村｜岐阜県本巣市の里山気分を味わえるキャンプ場
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body id="top">
	<!-- ▽header▽-->
	<header class="header">
		<div class="headBox">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
		</div>
		<nav class="navBox">
			<div class="navList">
				<ul>
					<li><a href="<?php echo home_url(); ?>/about"><span>金原里山キャンプ場について</span></a></li>
					<li><a href="<?php echo home_url(); ?>/price"><span>料金のご案内</span></a></li>
					<li><a href="<?php echo home_url(); ?>/terms"><span>ご利用案内</span></a></li>
					<li><a href="<?php echo home_url(); ?>/guide"><span>周辺ガイド</span></a></li>
					<li><a href="<?php echo home_url(); ?>/access"><span>アクセス</span></a></li>
					<li><a href="<?php echo home_url(); ?>/newslist"><span>お知らせ</span></a></li>
					<li><a href="<?php echo home_url(); ?>/contact"><span>お問い合わせ</span></a></li>
				</ul>
			</div>
			<div class="navItem">
				<div class="telBox">
					<p>まずはお気軽にご相談ください。</p><a href="tel:0581785171"><em>0581-78-5171</em></a>
				</div>
				<div class="qaBox"><a href="<?php echo home_url(); ?>/faq"><span>よくあるご質問</span></a></div>
				<div class="reserveBox"><a href="<?php echo home_url(); ?>/reservation"><span>予約について</span></a></div>
			</div>
		</nav>
		<div class="hamburgerBox">
			<div class="hamburger"><span></span><span></span><span></span></div>
			<div class="hamburgerTxt">
				<p>menu</p>
			</div>
		</div>
		<div class="kvBnr"><a href="https://www.nap-camp.com/gifu/16548" target="_blank" rel="noopener"><img class="switch" src="image/top/top_kv_bnr_pc.png" alt=""></a></div>
	</header>
	<!-- △header△-->
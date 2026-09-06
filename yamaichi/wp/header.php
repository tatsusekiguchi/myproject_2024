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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css?202409161900">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js?202409161900"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/image/common/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/image/common/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/image/common/apple-touch-icon.png">
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			補聴器・時計・眼鏡の山一｜豊田市で補聴器・時計の修理・眼鏡をお探しの方は山一へお越しください。
		<?php else: ?>
		<?php wp_title(''); ?>｜豊田市で補聴器・時計の修理・眼鏡をお探しの方は山一へお越しください。
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headWrap">
			<div class="leftBox">
				<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
				<div class="headTtl">
					<p>愛知県豊田市 |<br>補聴器・時計・メガネの山一</p>
				</div>
			</div>
			<div class="rightBox">
				<nav class="navBox">
					<div class="navList">
						<ul>
							<li><a href="<?php echo home_url(); ?>/hearing/">補聴器</a></li>
							<li><a href="<?php echo home_url(); ?>/clock/">時計の販売・修理</a></li>
							<li><a href="<?php echo home_url(); ?>/glasses/">眼鏡</a></li>
							<li><a href="<?php echo home_url(); ?>/other/">その他サービス</a></li>
							<li><a href="<?php echo home_url(); ?>/consult/">各種相談</a></li>
							<li><a href="<?php echo home_url(); ?>/shop/">店舗紹介</a></li>
							<li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
						</ul>
					</div>
					<div class="navItem">
						<div class="telBox"><a href="tel:0565450378"><span>TEL.</span><em>0565-45-0378</em></a>
							<p>営業時間：10:00～19:00<br>（定休日：火曜）</p>
						</div>
						<div class="reserveBox"><a href="<?php echo home_url(); ?>/contact/"><span>来店予約</span></a></div>
					</div>
				</nav>
			</div>
		</div>
		<div class="hamburger">
			<div class="span"></div>
			<div class="span"></div>
			<div class="span"></div>
		</div>
	</header>
	<!-- △header△-->
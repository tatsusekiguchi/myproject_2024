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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
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
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/image/common/favicon.ico">
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			AXE BAR BRAVE｜大田区鎌田にある24時間貸し切り・会員制アックススローイングバー(斧投げバー)
		<?php else: ?>
		<?php wp_title(''); ?>｜大田区鎌田にある24時間貸し切り・会員制アックススローイングバー(斧投げバー)
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headBox">
			<div class="ttl">
				<p>大田区鎌田にある24時間貸し切り・会員制アックスバー</p>
			</div>
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
			<nav class="navBox mincho">
				<div class="navList">
					<ul>
						<li><a href="<?php echo home_url(); ?>/features/">FEATURES</a></li>
						<li><a href="<?php echo home_url(); ?>/plan/">PLAN</a></li>
						<li><a href="<?php echo home_url(); ?>/about/">ACCESS</a></li>
						<li><a href="<?php echo home_url(); ?>/bloglist/">BLOG</a></li>
					</ul>
				</div>
				<div class="btnContact"><a href="https://axebarbrave.hacomono.jp/home" target="_blank" rel="noopener"><span>RESERVE</span></a></div>
			</nav>
		</div>
		<div class="hamburger"><span></span><span></span><span></span></div>
	</header>
	<!-- △header△-->
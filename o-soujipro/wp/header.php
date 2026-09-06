<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="川口市の家事代行サービスなら『お掃除プロ小川』。日常の掃除や料理、ベビーシッター、オフィス清掃まで対応。信頼と安心のサービスをご提供します。">
	<meta name="keywords" content="川口市, 家事代行, お掃除, 掃除サービス, オフィス清掃, ベビーシッター, ハウスクリーニング, お掃除プロ小川">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<!-- css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/attach.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/infiniteslide.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scrollAnimation.js"></script>
	<!-- title-->
	<title>
		<?php if(is_home()): ?>
			川口市の家事代行サービス[お掃除プロ小川]
		<?php else: ?>
		<?php wp_title(''); ?>｜川口市の家事代行サービス[お掃除プロ小川]
		<?php endif; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<!-- ▽header▽-->
	<header class="header">
		<div class="headBox">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></a></div>
			<nav class="navBox">
				<div class="navList">
					<ul>
						<li><a href="<?php echo home_url(); ?>/service/">サービスプラン</a></li>
						<li><a href="<?php echo home_url(); ?>/about/">お掃除プロについて</a></li>
						<?php if(is_home()): ?>
							<li class="navPageLink"><a href="#faqSection">よくあるご質問</a></li>
						<?php else : ?>
							<li><a href="<?php echo home_url(); ?>/#faqSection">よくあるご質問</a></li>
						<?php endif; ?>
						<li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
						<li><a href="<?php echo home_url(); ?>/bloglist/">ブログ</a></li>
					</ul>
				</div>
				<div class="btnContact"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></div>
			</nav>
		</div>
		<div class="hamburger"><span></span><span></span><span></span></div>
	</header>
	<!-- △header△-->
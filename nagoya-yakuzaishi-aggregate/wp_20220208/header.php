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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" media="print">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<!-- title-->
	<title>
    <?php if(is_home()): ?>
    <?php bloginfo('name'); ?>
    <?php else: ?>
    <?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
    <?php endif; ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
	<!-- ▽header▽-->
	<header>
		<div class="headWrap">
			<div class="title">
				<h1>学校薬剤師検査入力表システム</h1>
				<p>学校薬剤師委員会</p>
			</div>
			<div class="logout"><a href="/membersite/?a=logout"><img src="<?php bloginfo('template_url'); ?>/image/common/btn_logout.png" alt="ログアウト"></a></div>
		</div>
	</header>
	<!-- △header△-->
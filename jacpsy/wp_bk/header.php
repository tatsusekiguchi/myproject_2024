<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="../favicon.ico">
	<!-- css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css?202002241800">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css?202002241800">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47125520-44"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-47125520-44');
	</script>
	<!-- title-->
	<!--title-->
    <title>
    <?php if(is_home()): ?>
    <?php bloginfo('name'); ?>
    <?php else: ?>
    <?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?>
    <?php endif; ?>
    </title>

    <?php wp_head(); ?>	
</head>

<?php if(is_home()): ?>
<body id="top">
<?php else: ?>
<body class="page">
<?php endif; ?>
	<!-- ▽header▽-->
	<header>
		<?php if(is_home()): ?>
		<div class="enLink">
			<a href="<?php echo home_url() ?>/en/">English</a>
		</div>
		<?php elseif(is_page('about')): ?>
		<div class="enLink">
			<a href="<?php echo home_url() ?>/en/about/">English</a>
		</div>
		<?php elseif(is_page('journal')): ?>
		<div class="enLink">
			<a href="<?php echo home_url() ?>/en/journal/">English</a>
		</div>
		<?php endif; ?>
		<div class="headTop">
			<div class="logo"><a href="<?php echo home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_logo.png" alt="日本犯罪心理学会"></a></div>
			<div class="btnBox">
				<div id="slideBtn"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_menu.png" alt="MENU"></div>
				<div id="closeBtn"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_close.png" alt="CLOSE"></div>
			</div>
		</div>
		<nav>
			<ul id="pcNav">
				<li<?php if (is_home()): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/image/common/icon_home.png" alt="TOP"></a></li>
				<li<?php if (is_page('about')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/about/">学会について<span>About us</span></a></li>
				<li<?php if (is_page('meeting')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/meeting/">大会<span>Annual Conference</span></a></li>
				<li<?php if (is_page('training')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/training/">研修・研究<span>Training/Research</span></a></li>
				<li<?php if (is_page('journal')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/journal/">会誌・投稿<span>Journals/Articles</span></a></li>
				<li<?php if (is_page('information')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/information/">情報<span>Info</span></a></li>
				<li<?php if (is_page('member')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/member/">会員のひろば<span>For Members</span></a></li>
			</ul>
			<div id="spNav">
				<ul class="clearfix">
					<li><a href="<?php echo home_url() ?>/about/">学会について</a></li>
					<li><a href="<?php echo home_url() ?>/meeting/">大会</a></li>
					<li><a href="<?php echo home_url() ?>/training/">研修・研究会</a></li>
					<li><a href="<?php echo home_url() ?>/columnlist/">コラム</a></li>
					<li><a href="<?php echo home_url() ?>/journal/">学会誌・投稿</a></li>
					<li><a href="<?php echo home_url() ?>/information/">情報</a></li>
					<li><a href="<?php echo home_url() ?>/member/">会員のひろば</a></li>
					<li><a href="<?php echo home_url() ?>/contact/">お問い合わせ</a></li>
					<li><a href="<?php echo home_url() ?>/admission/">入会案内</a></li>
					<li><a href="<?php echo home_url() ?>/sitemap/">サイトマップ</a></li>

					<li><a href="<?php echo home_url() ?>/">トップへ</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- △header△-->
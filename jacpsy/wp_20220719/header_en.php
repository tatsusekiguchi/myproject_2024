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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css?202002241800">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/common_sp.css?202002241800">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout_sp.css">
	<!-- js-->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<!-- title-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47125520-44"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-47125520-44');
	</script>
	<!--title-->
    <title>
    <?php if(is_page('en')): ?>
    <?php wp_title(''); ?> 
    <?php else: ?>
    <?php wp_title(''); ?> ｜ Japanese Association of Criminal Psychology 
    <?php endif; ?>
    </title>

    <?php wp_head(); ?>	
</head>

<?php if(is_page('en')): ?>
<body id="top" class="enPage">
<?php else: ?>
<body class="page enPage">
<?php endif; ?>
	<!-- ▽header▽-->
	<header>
		<div class="headTop">
			<div class="logo"><a href="<?php echo home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_logo.png" alt="日本犯罪心理学会"></a></div>
			<div class="btnBox">
				<div id="slideBtn"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_menu.png" alt="MENU"></div>
				<div id="closeBtn"><img src="<?php echo get_template_directory_uri(); ?>/image/common/header_close.png" alt="CLOSE"></div>
			</div>
		</div>
		<nav>
			<ul id="pcNav">
				<li<?php if (is_page('en')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/en/"><img src="<?php echo get_template_directory_uri(); ?>/image/common/icon_home.png" alt="TOP"></a></li>
				<li<?php if (is_page('about')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/en/about/"><span>About us</span></a></li>
				<li<?php if (is_page('meeting')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/meeting/"><span>Annual Conference</span></a></li>
				<li<?php if (is_page('training')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/training/"><span>Training/Research</span></a></li>
				<li<?php if (is_page('journal')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/en/journal/"><span>Journals/Articles</span></a></li>
				<li<?php if (is_page('information')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/information/"><span>Info</span></a></li>
				<li<?php if (is_page('member')): ?> class="current"<?php endif; ?>><a href="<?php echo home_url() ?>/member/"><span>For Members</span></a></li>
			</ul>
			<div id="spNav">
				<ul class="clearfix">
					<li><a href="<?php echo home_url() ?>/en/about/">About us</a></li>
					<li><a href="<?php echo home_url() ?>/meeting/">Annual Conference</a></li>
					<li><a href="<?php echo home_url() ?>/training/">Training/Research </a></li>
					<li><a href="<?php echo home_url() ?>/regist/">Regist</a></li>
					<li><a href="<?php echo home_url() ?>/en/journal/">Academic Journals/ Articles</a></li>
					<li><a href="<?php echo home_url() ?>/information/">Information</a></li>
					<li><a href="<?php echo home_url() ?>/member/">For Members</a></li>
					<li><a href="<?php echo home_url() ?>/contact/">Contact Us</a></li>
					<li><a href="<?php echo home_url() ?>/admission/">Join</a></li>
					<li><a href="<?php echo home_url() ?>/sitemap/">Sitemap</a></li>
					<li><a href="<?php echo home_url() ?>/columnlist/">Guidance to Admission</a></li>
					<li><a href="<?php echo home_url() ?>/en/">Top page</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- △header△-->
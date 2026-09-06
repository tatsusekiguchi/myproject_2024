<?php
/*
Template Name: 集計表一覧
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li>集計表 一覧</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="recordListMain">
		<div class="recordListBox">
			<h2>集計表 一覧</h2>
			<ul>
				<li>
					<a href="<?php echo home_url(); ?>/total_result/?cat=pool"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_01.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_dispensary/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_02.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_noise_summer/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_03.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_air_summer/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_04.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_blackboard/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_05.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_lighting_summer/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_06.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_result/?cat=kitchen""><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_07.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_air_winter/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_08.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_noise_winter/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_09.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_lighting_winter"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_10.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/total_pest/"><img src="<?php bloginfo('template_url'); ?>/image/common/record_list_11.png" alt=""></a>
				</li>
			</ul>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
<?php
/*
Template Name: トップメニュー
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="http://www.nagoya-yakuzaishi.com/membersite/">トップページ</a></li>
				<li>トップメニュー</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="topMenuMain">
		<div class="menuListBox">
			<ul>
				<li><a href="<?php echo home_url(); ?>/record_list/"><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_01.png" alt=""></a></li>
				<li><a href="<?php echo home_url(); ?>/record_pdf/"><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_02.png" alt=""></a></li>
				<li><a href="<?php echo home_url(); ?>/total_list/"><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_03.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_04.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_05.png" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/image/common/topmenu_list_06.png" alt=""></a></li>
			</ul>
		</div>
		<div class="infoListBox">
			<h2>新着連絡事項</h2>
			<ul>
				<li>
					<div class="time">
						<p>2021.04.26 </p>
					</div>
					<div class="txt"><a href="">新着情報のタイトルが入ります。新着情報のタイトルが入ります。</a></div>
				</li>
				<li>
					<div class="time">
						<p>2021.04.26 </p>
					</div>
					<div class="txt"><a href="">新着情報のタイトルが入ります。新着情報のタイトルが入ります。</a></div>
				</li>
				<li>
					<div class="time">
						<p>2021.04.26 </p>
					</div>
					<div class="txt"><a href="">新着情報のタイトルが入ります。新着情報のタイトルが入ります。</a></div>
				</li>
			</ul>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
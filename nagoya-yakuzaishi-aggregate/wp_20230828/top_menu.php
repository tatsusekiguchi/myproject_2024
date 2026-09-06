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
			<div class="titleBox">
				<h2>新着連絡事項</h2>
				<div class="more"><a href="<?php echo home_url(); ?>/newslist/">more</a></div>
			</div>
			<ul>
				<?php
				$args = array(
					'post_type' => 'news',
					'posts_per_page' => 3,
					'order' => 'DESC',
					'orderby' => 'date'
				);
				$the_query = new WP_Query($args);

				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
				?>
						<li>
							<div class="time">
								<p><?php echo get_the_date('Y.m.d'); ?></p>
							</div>
							<div class="txt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						</li>
				<?php
					endwhile;
				else :
					echo '<li>新着情報はありません。</li>';
				endif;
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="postMain" id="news">
		<div class="pageTitlePanel">
			<div class="pageTitle">
				<h1>お知らせ</h1>
				<p>News</p>
			</div>
		</div>
		<div class="postPanel">
			<div class="secWrap01">
				<div class="detail__news">
					<div class="titleHeader">
						<div class="infoBox">
							<p class="time"><?php the_time("Y.m.d") ?></p>
						</div>
						<div class="title">
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
					<div class="thumbnailBox"><?php the_post_thumbnail('full'); ?></div>
					<div class="postContents">
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="detail__back">
					<div class="btnBack"><a href="<?php echo home_url(); ?>/newslist/"><span>戻る</span></a></div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
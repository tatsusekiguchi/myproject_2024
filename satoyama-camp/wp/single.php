<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="news">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>お知らせ</h1>
				</div>
			</div>
		</div>
		<div class="pageLogoBox">
			<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></div>
		</div>
		<div class="newsSection">
			<div class="secWrap">
				<div class="cateList">
					<ul>
						<?php $cat_info = get_categories('orderby=count&order=desc&show_count=1&title_li=');
							foreach ($cat_info as $category) { if($category->count != 0) : ?>
							<li><a href="<?php echo home_url() ?>/category/<?php echo $category->category_nicename; ?>/"><?php echo $category->cat_name; ?></a></li>
						<?php endif; };?>
					</ul>
				</div>
				<div class="blogContainer">
					<div class="detail__news">
						<div class="titleHeader">
							<div class="infoBox">
								<p class="time"><?php the_time("Y.m.d") ?></p>
								<?php
									$category = get_the_category();
									$cat_name = $category[0]->cat_name;
									$cat_slug = $category[0]->category_nicename;
								?>
								<p class="cate"><?php echo $cat_name; ?></p>
							</div>
							<div class="title">
								<h2><?php the_title(); ?></h2>
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
						<div class="btnMore"><a href="<?php echo home_url(); ?>/newslist"><span>一覧に戻る</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
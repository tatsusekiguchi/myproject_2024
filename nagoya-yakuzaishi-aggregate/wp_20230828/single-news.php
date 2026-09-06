<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li>新着情報</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="newsMain">
		<div class="newsContainer">
			<h2>新着情報</h2>
			<div class="newsPanel">
				<div class="newsBox">
					<div class="leftBox">
						<div class="newsDetail">
							<div class="infoTop">
								<div class="time">
									<p><?php the_time("Y.m.d") ?></p>
								</div>
								<div class="cate">
									<?php
										$terms = get_the_terms( $post->ID, 'news_cat' );

										if ( $terms && ! is_wp_error( $terms ) ) {
											$cat_name = $terms[0]->name;
											$cat_slug = $terms[0]->slug;
										?>
										<p><?php echo $cat_name; ?></p>
									<?php } ?>
								</div>
							</div>
							<div class="title">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="postContents">
								<?php while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="rightBox">
						<div class="cateLust">
							<dl>
								<dt>カテゴリ</dt>
								<dd>
									<ul>
										<?php
											$catlist = wp_list_categories(array(
												'taxonomy' => 'news_cat',
												'title_li' => '',
											));
											echo $catlist;
										?>
									</ul>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="btnBack"><a href="<?php echo home_url(); ?>/newslist/"><span>戻る</span></a></div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
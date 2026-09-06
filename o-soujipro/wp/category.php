<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="postMain" id="news">
		<div class="pageTitlePanel">
			<div class="pageTitle">
				<h1>ブログ</h1>
				<p>Blog</p>
			</div>
		</div>
		<div class="postPanel">
			<div class="secWrap01">
				<div class="categoryList">
					<ul>
						<li><a href="<?php echo home_url() ?>/bloglist">ALL</a></li>
						<?php $cat_info = get_categories('orderby=count&order=desc&show_count=1&title_li=');
							foreach ($cat_info as $category) { if($category->count != 0) : ?>
							<li><a href="<?php echo home_url() ?>/category/<?php echo $category->category_nicename; ?>/"><?php echo $category->cat_name; ?></a></li>
						<?php endif; };?>
					</ul>
				</div>
				<div class="list__news">
					<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<div class="list__news__section">
						<a href="<?php the_permalink() ?>">
							<div class="photo"><?php the_post_thumbnail('full'); ?></div>
							<div class="txtBox">
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
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="postTxt">
								<?php
									if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
										$content = str_replace( '\n', '', mb_substr( strip_tags( $post->post_content ), 0, 100, 'UTF-8' ) );
										echo $content . '…';
									} else {
										echo str_replace( '\n', '', strip_tags( $post->post_content ) );
									}
								?>
								</div>
							</div>
						</a>
					</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="list__pagination">
					<?php
						//Pagenation
						if (function_exists("responsive_pagination")) {
							responsive_pagination($wp_query->max_num_pages);
						}
			        ?>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
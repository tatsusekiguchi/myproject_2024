<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/newslist/">新着情報</a></li>
				<li><?php single_term_title(); ?></li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="newsMain">
		<div class="newsContainer">
			<h2>新着情報:<?php single_term_title(); ?></h2>
			<div class="newsPanel">
				<div class="newsBox">
					<div class="leftBox">
						<div class="newsList">
							<ul>
								<?php if(have_posts()): while(have_posts()):the_post(); ?>
								<li>
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
									<div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
								</li>
								<?php endwhile; endif; ?>
							</ul>
						</div>
						<div class="list__pagination">
							<?php
								//Pagenation
								if (function_exists("responsive_pagination")) {
									responsive_pagination($additional_loop->max_num_pages);
									wp_reset_postdata();
								}
							?>
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
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
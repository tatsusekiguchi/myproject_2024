<?php
/*
Template Name: お知らせ一覧
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
				<div class="list__news">
					<?php
						$the_query = new WP_Query( array(
						'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
						'post_type'   => 'news',
						'posts_per_page' => 8,
						) ); ?>
					<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<ul>
						<li>
							<a href="<?php the_permalink() ?>">
								<time><?php the_time("Y.m.d") ?></time><span><?php the_title(); ?></span>
							</a>
						</li>
					</ul>
					<?php endwhile; ?>
				</div>
				<div class="list__pagination">
					<?php
		            //Pagenation
		            if (function_exists("responsive_pagination")) {
						$GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
						responsive_pagination($the_query->max_num_pages);
						wp_reset_postdata();
					}
		            ?>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
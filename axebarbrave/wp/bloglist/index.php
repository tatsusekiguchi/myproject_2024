<?php
/*
Template Name: ブログ一覧
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="blog">
		<div class="pageKvContainer">
			<div class="pageKvPanel mincho">
				<div class="pageKvTitle">
					<h1>BLOG</h1>
				</div>
				<div class="subTitle">
					<p>BLOG</p>
				</div>
			</div>
		</div>
		<div class="sec01">
			<div class="secWrap">
				<div class="pageSecTtlBox mincho">
					<div class="pageSecTtl">
						<h2>BRAVE BLOG</h2>
					</div>
					<div class="sub">
						<p>BLOG</p>
					</div>
				</div>
				<div class="cateList mincho">
					<ul>
						<!-- <li><a href="<?php echo home_url() ?>/bloglist">ALL</a></li> -->
						<?php $cat_info = get_categories('orderby=count&order=desc&show_count=1&title_li=');
							foreach ($cat_info as $category) { if($category->count != 0) : ?>
							<li><a href="<?php echo home_url() ?>/category/<?php echo $category->category_nicename; ?>/"><?php echo $category->cat_name; ?></a></li>
						<?php endif; };?>
					</ul>
				</div>
				<div class="listBox">
					<ul>
						<?php
							$the_query = new WP_Query( array(
							'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
							'post_type'   => 'post',
							'posts_per_page' => 12,
							) ); ?>
						<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<div class="photo"><?php the_post_thumbnail('full'); ?></div>
							<div class="title">
								<p><?php the_title(); ?></p>
							</div><a href="<?php the_permalink() ?>">read more</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="list__pagination">
					<?php
		            //Pagenation
		            if (function_exists("responsive_pagination")) {
		                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
		                responsive_pagination($additional_loop->max_num_pages);
		                wp_reset_postdata();
		            }
		            ?>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
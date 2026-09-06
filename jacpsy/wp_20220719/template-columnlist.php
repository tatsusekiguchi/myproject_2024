<?php
/*
Template Name: コラム一覧
*/
?>

<?php get_header(); ?>

<div id="columnList">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>コラム</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>コラム一覧</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section class="column">
			<h2>コラム</h2>
			<div class="cntBox">
				<div class="leftBox" id="listBox">
					<ul>
						<?php
			                $the_query = new WP_Query( array(
			                  'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
			                  'post_type'   => 'column',
			                  'posts_per_page' => 10,
			                ) ); ?>

			                <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<time datetime="<?php the_time("Y.m.d") ?>"><?php the_time("Y.m.d") ?></time>
							<?php
							  $category = get_the_category();
							  $cat_name = $category[0]->cat_name;
							  $cat_slug = $category[0]->category_nicename;
							?>
							<span class="column">コラム</span>
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php
		            //Pagenation 
		            if (function_exists("responsive_pagination")) {
		                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
		                responsive_pagination($additional_loop->max_num_pages);
		                wp_reset_postdata();
		            }
		            ?>
				</div>
				<div class="sidebar pastPost">
					<dl>
						<dt>過去の記事</dt>
						<dd>
							<ul>
								<?php wp_get_archives('type=yearly&post_type=column'); ?>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
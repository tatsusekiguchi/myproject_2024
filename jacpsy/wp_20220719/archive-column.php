<?php get_header(); ?>

<div id="columnList">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>コラム一覧</h1>
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
			<?php echo "<h2 class='page-title'>" . get_the_archive_title() . "</h2>"; ?>
			<div class="cntBox">
				<div class="leftBox" id="listBox">
					<ul>

						<?php if(have_posts()): while(have_posts()):the_post(); ?>
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
						<?php endwhile; endif; ?>

					</ul>
					<?php
			        //Pagenation
			        if (function_exists("responsive_pagination")) {
			            responsive_pagination($additional_loop->max_num_pages);
			            wp_reset_postdata();
			        }
			        ?>
				</div>
				<div class="sidebar pastPost">
					<dl>
						<dt>過去の記事</dt>
						<dd>
							<ul><?php wp_get_archives('type=yearly&post_type=column'); ?></ul>
						</dd>
					</dl>
				</div>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
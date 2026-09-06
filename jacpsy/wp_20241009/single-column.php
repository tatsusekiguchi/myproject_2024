<?php
/*
Template Name: single-column
*/
?>
<?php get_header(); ?>

<div id="columnDetail">

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
		<li>コラム</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section class="column">
			<h2>コラム</h2>
			<div class="cntBox">
				<div class="leftBox" id="detailBox">

					<section>
						<p>
							<time datetime="<?php the_time("Y.m.d") ?>"><?php the_time("Y.m.d") ?></time>
							<?php
							  $category = get_the_category();
							  $cat_name = $category[0]->cat_name;
							  $cat_slug = $category[0]->category_nicename;
							?>
							<span class="<?php echo $cat_slug; ?>">
								<?php echo $cat_name; ?>
							</span>
						</p>
						<h3><?php the_title(); ?></h3>
						<div class="postBox">
							<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; ?>
						</div>
					</section>
					<ul class="pager">
						<li><?php previous_post_link('%link', '<'); ?></li>
						<li><?php next_post_link('%link', '>'); ?></li>
					</ul>
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
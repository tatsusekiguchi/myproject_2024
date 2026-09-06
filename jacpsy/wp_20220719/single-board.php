<?php
/*
Template Name: single-board
*/
?>
<?php get_header(); ?>

<div id="columnDetail">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>掲示板</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>掲示板詳細</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section class="column">
			<h2>掲示板</h2>
			<div class="cntBox">
				<div class="leftBox" id="detailBox">

					<section>
						<p>
							<time datetime="<?php the_time("Y.m.d") ?>"><?php the_time("Y.m.d") ?></time>
							<span>
							<?php
							if ($terms = get_the_terms($post->ID, 'board_cat')) {
								foreach ( $terms as $term ) {
									echo esc_html($term->name);
								}
							}
							?></span>
						</p>
						<h3><?php the_title(); ?></h3>
						<div class="postBox">
							<div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
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
					<dl class="cateList">
						<dt>カテゴリ</dt>
						<dd>
							<ul><?php echo get_the_term_list($post->ID,'board_cat'); ?></ul>
						</dd>
					</dl>
					<dl>
						<dt>過去の記事</dt>
						<dd>
							<ul><?php wp_get_archives('type=yearly&post_type=board'); ?></ul>
						</dd>
					</dl>
				</div>
			</div>
		</section>
	</div>
	<!-- △メイン△-->

</div>

<?php get_footer(); ?>
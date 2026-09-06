<?php get_header(); ?>

<div id="columnList">

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
		<li>掲示板</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section class="column">
			<?php echo "<h2 class='page-title'>" . get_the_archive_title() . "</h2>"; ?>
			<div class="cntBox">
				<div class="leftBox" id="boardList">
					<div class="postList">
						<ul>

							<?php if(have_posts()): while(have_posts()):the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>">
									<div class="photoBox">
										<div class="photo">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('board'); ?>
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/image/common/noimage.png" alt="no image">
										<?php endif ; ?>
										</div>
									</div>
									<div class="txtBox">
										<span class="<?php $terms = wp_get_object_terms($post->ID,'board_cat'); foreach($terms as $term){echo $term->slug . '';} ?>">
										<?php
											if ($terms = get_the_terms($post->ID, 'board_cat')) {
												foreach ( $terms as $term ) {
													echo esc_html($term->name);
												}
											}
										?>
										</span>
										<time datetime="<?php the_time("Y.m.d") ?>"><?php the_time("Y.m.d") ?></time>
										<p><?php the_title(); ?></p>
									</div>
								</a>
							</li>
							<?php endwhile; endif; ?>

						</ul>
					</div>
					<?php
			        //Pagenation
			        if (function_exists("responsive_pagination")) {
			            responsive_pagination($additional_loop->max_num_pages);
			            wp_reset_postdata();
			        }
			        ?>
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
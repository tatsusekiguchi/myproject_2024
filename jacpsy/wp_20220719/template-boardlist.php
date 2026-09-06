<?php
/*
Template Name: 掲示板一覧
*/
?>

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
			<h2>掲示板</h2>
			<div class="cntBox">
				<div class="leftBox" id="boardList">
					<div class="postList">
						<ul>
							<?php
								$the_query = new WP_Query( array(
								'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
								'post_type'   => 'board',
								'posts_per_page' => 6,
								) ); ?>

								<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
							<?php endwhile; ?>
						</ul>
					</div>
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
					<dl class="cateList">
						<dt>カテゴリ</dt>
						<dd>
							<ul>
							<?php
								$terms = get_terms('board_cat');
									foreach ( $terms as $term ) {
										echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
									}
								?>
							</ul>
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
<?php
/*
Template Name: YouTube記事一覧
*/
?>

<?php get_header(); ?>

<div id="movieList">
	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>YouTube記事一覧</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>YouTube記事一覧</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<div class="cateBox">
			<ul>
			<?php
				$terms = get_terms('movie_cat');
					foreach ( $terms as $term ) {
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
					}
				?>
			</ul>
		</div>
		<section id="sec01">
			<h2>YouTube記事一覧</h2>
			<div class="listBox">
				<ul>
					<?php
						$the_query = new WP_Query( array(
						'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
						'post_type'   => 'movie',
						'posts_per_page' => 9,
						) ); ?>
					<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>
						<a href="https://youtu.be/<?php echo esc_attr(get_post_meta($post->ID, 'youtube_id', true)); ?>?si=ZR4k-Oy5aNMqK4K7" target="_blank">
							<div class="thumb">
								<img src="https://img.youtube.com/vi/<?php echo esc_attr(get_post_meta($post->ID, 'youtube_id', true)); ?>/hqdefault.jpg" alt="">
							</div>
							<div class="cate">
								<p>
									<?php
										if ($terms = get_the_terms($post->ID, 'movie_cat')) {
											foreach ( $terms as $term ) {
												echo esc_html($term->name);
											}
										}
									?>
								</p>
							</div>
							<div class="ttl">
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
		</section>
	</div>
	<!-- △メイン△-->
</div>
<?php get_footer(); ?>
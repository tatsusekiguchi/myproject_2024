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
			<div class="secWrap01">
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
				<div class="detailPanel">
					<div class="title mincho">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="slickSlide">
						<div class="slider thumb-item">
							<div class="li">
								<div class="webgene-item-main-image"><?php the_post_thumbnail('full'); ?></div>
							</div>
							<?php
							$photos = SCF::get('gr_blog_photo');
							if ($photos) {
								foreach ($photos as $photo) {
									$image_url = wp_get_attachment_url($photo['blog_photo']);
									if ($image_url) : ?>
										<div class="li">
											<div><img class="webgene-item-main-image" src="<?php echo esc_url($image_url); ?>" alt=""></div>
										</div>
									<?php endif;
								}
							}
							?>
						</div>
						<div class="slideNav">
							<div class="slider thumb-item-nav">
								<div class="li">
									<div class="webgene-item-main-image"><?php the_post_thumbnail('full'); ?></div>
								</div>
								<?php
								$photos = SCF::get('gr_blog_photo');
								if ($photos) {
									foreach ($photos as $photo) {
										$image_url = wp_get_attachment_url($photo['blog_photo']);
										if ($image_url) : ?>
											<div class="li">
												<div><img class="webgene-item-main-image" src="<?php echo esc_url($image_url); ?>" alt=""></div>
											</div>
										<?php endif;
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="postContents">
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="btnBack mincho"><a href="<?php echo home_url(); ?>/bloglist/">一覧に戻る</a></div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
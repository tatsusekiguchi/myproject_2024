<?php get_header(); ?>

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1 translate="no"><img src="<?php echo get_template_directory_uri(); ?>/image/top/kvtit.png" alt=""><span>Japanese Association of Criminal Psychology</span></h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section id="news">
			<div class="ttl clearfix">
				<h2><span>What’s</span><em>New</em></h2><span>ニュース一覧</span><a href="<?php echo home_url() ?>/newslist/">一覧を見る</a>
			</div>
			<ul>
				<?php
	                $the_query = new WP_Query( array(
	                  'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
	                  'post_type'   => 'post',
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
					<span class="<?php echo $cat_slug; ?>">
						<?php echo $cat_name; ?>
					</span>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>
		</section>
		<div id="aboutBox">
			<dl>
				<dt>「犯罪心理学とは」</dt>
				<dd>犯罪心理学とは，犯罪行為，それをとりまく周辺事象の理解に心理学的方法論を用いて明らかにする学問体系である。研究の対象は幅広く，犯罪に関連する人間の行動，犯罪の発生機序や意味，捜査手法，犯罪に至った者（被疑者，非行少年，触法精神障害者を含む）や被害者等の諸特徴や行動予測，法廷での証言や鑑定，犯罪者や非行少年等に対する治療的・教育的処遇の効果，一般市民の犯罪及び犯罪者（非行少年）に対する態度や感情，社会における防犯策などである。</dd>
			</dl>
			<ul>
				<li><a href="<?php echo home_url() ?>/columnlist/">コラム</a></li>
				<li><a href="<?php echo home_url() ?>/admission/">入会案内</a></li>
				
			</ul>
		</div>
	</div>
	<!-- △メイン△-->

<?php get_footer(); ?>
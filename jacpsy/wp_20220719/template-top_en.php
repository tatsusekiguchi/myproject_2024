<?php
/*
Template Name: 英語サイトトップ
*/
?>
<?php get_template_part('header_en'); ?>

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
				<h2><span>What’s</span><em>New</em></h2><span>ニュース一覧</span><a href="<?php echo home_url() ?>/columnlist/">一覧を見る</a>
			</div>
			<ul>
				<?php
	                $the_query = new WP_Query( array(
	                  'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
	                  'post_type'   => 'post',
	                  'posts_per_page' => 5,
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
				<dt>What is criminal psychology?</dt>
				<dd>Criminal psychology is a study that identifies the understanding of the criminal act and its peripheral phenomenon by using a methodology in psychology. The targets of research are extensive: human behavior related to crime, occurrence mechanism and meaning of crime, the methods of investigation, features and action behavior of those who committed a crime (including suspects, juvenile delinquents, and criminals who are mentally ill) and victims, testimony and investigation in court, an effect of therapeutic/pedagogical treatments for criminals and juvenile delinquents, ordinary citizen's attitude and emotion toward crime and criminals (juvenile delinquents), crime-prevention measures, etc.</dd>
			</dl>
			<ul>
				<li><a href="<?php echo home_url() ?>/admission/">入会案内 Join</a></li>
				<li><a href="<?php echo home_url() ?>/columnlist/">コラム</a></li>
			</ul>
		</div>
	</div>
	<!-- △メイン△-->

<?php get_template_part('footer_en'); ?>
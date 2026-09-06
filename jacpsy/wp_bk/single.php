<?php get_header(); ?>

<div id="columnDetail">

	<!-- ▽kv▽-->
	<div class="kv">
		<div>
			<h1>ニュース</h1>
		</div>
	</div>
	<!-- △kv△-->
	<!-- ▽ぱんくず▽-->
	<ol class="topicPath">
		<li><a href="../">TOP</a></li>
		<li>ニュース</li>
	</ol>
	<!-- △ぱんくず△-->
	<!-- ▽メイン▽-->
	<div class="main">
		<section class="column">
			<h2>ニュース</h2>
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
				<div class="sidebar">
					<dl>
						<dt>カテゴリ</dt>
						<dd>
							<ul>
								<?php $cat_info = get_categories('orderby=count&order=desc&show_count=1&title_li=');
								    foreach ($cat_info as $category) { if($category->count != 0) : ?>
								    <li><a href="<?php echo home_url() ?>/category/<?php echo $category->category_nicename; ?>/"><span><?php echo $category->cat_name; ?></span></a></li>
								<?php endif; };?>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>過去の記事</dt>
						<dd>
							<?php
							$y_flg = true; //年の切替フラグ
							$f_flg = true; //初回フラグ
							$year = idate('Y'); //本日の年
							$month = idate('m'); //本日の月
							$oldest_year = get_oldest_year(); //一番古い投稿日の年
							while ( $year >= $oldest_year ) { //一番古い投稿年を指定年が下回るまでループ
								//年見出し出力
								if ( $y_flg == true ){ //年切替フラグが立っていたら
									$year_archives_num = get_year_archives_num( $year ); //指定年の投稿数を取得
									if ( $year_archives_num > 0 ){ //指定年の投稿があったら閉じた年見出しを出力
										if ( $f_flg == true ){ //初回は閉じタグ不要&開いておく
							?>

							<ul>
							<?php
								$f_flg = false; //1度通ったらフラグを倒しておく
							} else { //2回目以降は閉じタグ必要&閉めておく
							?>
							</ul>

							<ul class="hide">
							<?php
									}
									$y_flg = false; //年見出しが出力されたら年切替フラグを倒しておく
								} else { //該当の年に投稿がなかった場合
									$year--; //1年前へ
									$month = 12; //12月へ
								}
							}
							//月アーカイブ出力
							if ( $y_flg == false ){ //年切替フラグが倒れていたら
								$month_archives_num = get_month_archives_num($year, $month); //指定年月の投稿数を取得
								if ( $month_archives_num > 0 ) { //指定年月の投稿があったらアーカイブリンクを出力
							?>
							<li><a href="<?php echo home_url('/').$year."/".str_pad($month, 2, 0, STR_PAD_LEFT); ?>"><span><?php echo $year."年"; ?></span></a></li>
							<?php
									}
									$month--; //1月前へ
									if ( $month < 1 ){ //0月になってしまったら
										$year--; //1年前へ
										$month = 12; //12月へ
										$y_flg = true; //年切替フラグを立てる
									}
								}
							}
							?>
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
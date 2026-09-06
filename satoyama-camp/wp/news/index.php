<?php
/*
Template Name: お知らせ一覧
*/
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<main class="main" id="news">
		<div class="pageKvContainer">
			<div class="pageKvPanel">
				<div class="pageKvTitle">
					<h1>お知らせ</h1>
				</div>
			</div>
		</div>
		<div class="pageLogoBox">
			<div class="logo"><img src="<?php bloginfo('template_url'); ?>/image/common/header_logo.png" alt=""></div>
		</div>
		<div class="newsSection">
			<div class="secWrap">
				<div class="cateList">
					<ul>
						<li><a href="">お知らせ</a></li>
						<li><a href="">イベント情報</a></li>
						<li><a href="">スタッフブログ</a></li>
					</ul>
				</div>
				<div class="blogContainer">
					<div class="detail__news">
						<div class="titleHeader">
							<div class="infoBox">
								<p class="time">2022.12.01</p>
								<p class="cate">お知らせ</p>
							</div>
							<div class="title">
								<h3>タイトルが入ります。</h3>
							</div>
						</div>
						<div class="thumbnailBox"><img src="<?php bloginfo('template_url'); ?>/image/news/post_img.png" alt=""></div>
						<div class="postContents">
							<p>平素よりお掃除プロをご愛顧いただき、誠にありがとうございます。</p>
							<p>誠に勝手ながら、以下の期間を年末年始休業とさせていただきます。</p>
							<p>ーーーーーーーーーーーーーーーーーーーーーーーー</p>
							<p>休業期間：2022年12月30日(金)～2023年1月3日(火)</p>
							<p>ーーーーーーーーーーーーーーーーーーーーーーーー</p>
							<p>ご不便をお掛けいたしますが、何卒ご理解いただきますようお願い致します。</p>
							<p>期間中の電話でのお問い合わせについてはお休みさせていただきます。</p>
							<p>なお、メールでいただきましたお問い合わせにつきましては、2023年1月4日(水)以降に順次対応させていただきます。</p>
							<p>来年も引き続き、変わらぬご愛顧を賜りますようお願い申し上げます。</p>
						</div>
					</div>
					<div class="detail__back">
						<div class="btnMore"><a href=""><span>一覧に戻る</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
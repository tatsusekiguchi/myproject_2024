<?php
/*
 Template Name: 集計結果
*/
$obj = new RecordClass();
$arr_data = $obj->getData();
$mode = CommonClass::mode;
?>
<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/total_list">集計表 一覧</a></li>
				<li><?php echo $obj->getTitle(); ?></li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main id="recordListMain">
		<div class="recordListBox">
			<h2><?php ?><?php echo $obj->getTitle(); ?> <?php if ($mode) { echo '（'.$obj->getYear().'年度）';} ?></h2>
			<?php
				if ($arr_data) {
					echo $arr_data;
				} else {
					echo 'データがありません。';
				}
			 ?>
		</div>
		<?php if ($arr_data) { ?>
			<div class="pdf-box"><a href="<?php echo $obj->getPDFLink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/func/images/pdf-bt.png" alt="PDFで表示"></a></div>
		<?php } ?>
		</main>
	<!-- △メイン△-->
<?php get_footer(); ?>
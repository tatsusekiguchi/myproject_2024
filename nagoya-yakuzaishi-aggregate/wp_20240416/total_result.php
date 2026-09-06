<?php
/*
 Template Name: 集計結果
*/
$obj = new RecordClass();
$arr_data = '';
// 学校単位の場合
if ($obj->getArea() && $obj->getSchoolType()) {
	$arr_data = $obj->getSchoolData();
} else {
	$arr_data = $obj->getData();
}
$mode = CommonClass::mode;
?>
<?php get_header('result'); ?>
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
			<h2><?php ?><?php echo $obj->getTitle(); ?>
			<?php if ($mode) {
				$title = $obj->getYear().'年度';
				$title .= $obj->getAreaName() ? ' '.$obj->getAreaName().'区' : '';
				$title .= $obj->getSchoolTypeName() ? ' '.$obj->getSchoolTypeName() : '';
				echo '（'.$title.'）';} 
			?>
			</h2>

			
			<div class="" style="margin-bottom: 10px;">
				<form method="get" method="?">
					<select name="y" style="margin-right: 10px;">
						<?php echo CommonClass::makeSelectYear($obj->getYear()); ?>
					</select>
					<input type="hidden" name="cat" value="<?php echo $obj->getCategory() ?>">
					<?php
						if ($obj->getArea()) {
							echo '<input type="hidden" name="area" value="'.$obj->getArea().'">';
						}
						if ($obj->getSchoolType()) {
							echo '<input type="hidden" name="school_type" value="'.$obj->getSchoolType().'">';
						}
					?>
					<button type="submit" value="submit">表示</button>    
				</form>
			</div>
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
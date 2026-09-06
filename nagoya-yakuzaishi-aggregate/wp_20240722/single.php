<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<?php
	$category = get_the_category();
	$cat_slug = $category[0]->category_nicename;
	$cat_name = $category[0]->cat_name;?>
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/record_list/">検査表の記入 一覧</a></li>
				<li>
					<?php echo $cat_name;?>
				</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<?php if($cat_slug == 'pool'): ?>
	<?php get_template_part('record/pool'); ?>
	<?php elseif($cat_slug == 'dispensary'): ?>
	<?php get_template_part('record/dispensary'); ?>
	<?php elseif($cat_slug == 'noise_summer'): ?>
	<?php get_template_part('record/noise_summer'); ?>
	<?php elseif($cat_slug == 'noise_winter'): ?>
	<?php get_template_part('record/noise_winter'); ?>
	<?php elseif($cat_slug == 'air_summer'): ?>
	<?php get_template_part('record/air_summer'); ?>
	<?php elseif($cat_slug == 'air_winter'): ?>
	<?php get_template_part('record/air_winter'); ?>
	<?php elseif($cat_slug == 'lighting_summer'): ?>
	<?php get_template_part('record/lighting_summer'); ?>
	<?php elseif($cat_slug == 'lighting_winter'): ?>
	<?php get_template_part('record/lighting_winter'); ?>
	<?php elseif($cat_slug == 'kitchen'): ?>
	<?php get_template_part('record/kitchen'); ?>
	<?php elseif($cat_slug == 'blackboard'): ?>
	<?php get_template_part('record/blackboard'); ?>
	<?php elseif($cat_slug == 'pest'): ?>
	<?php get_template_part('record/pest'); ?>
	<?php endif; ?>
	<!-- △メイン△-->
<?php get_footer(); ?>
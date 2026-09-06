<?php
require get_template_directory() . '/func/class/CommonClass.php';
require get_template_directory() . '/func/class/MakeTable.php';

class RecordClass {
	private $category;
	private $post_id;
	private $y;
	private $m;

	function __construct() {
		$this->init();
	}

	function init() {
		$this->category = checkData($_GET['cat']);
		$this->y = checkData($_GET['y']);
		$this->m = 4;
		if (!$this->category) return false;

	}

	function getData() {
		$arr_post = $this->getPosts();
		$html = '';
		if ($arr_post) {
			switch ($this->category) {
				// プール
				case 'pool':
					$html = pool\makeHtml($arr_post);
					break;

				// 給食調理場
				case 'kitchen':
					$html = kitchen\makeHtml($arr_post);
					break;
				
				// 保健室
				case 'dispensary':
					$html = dispensary\makeHtml($arr_post);
					break;

				// 衛生検査
				case 'blackboard':
					$html = blackboard\makeHtml($arr_post);
					break;

				// 照度10月
				case 'lighting_summer':
					$html = lighting_summer\makeHtml($arr_post);
					break;

				// 照度2月
				case 'lighting_winter':
					$html = lighting_winter\makeHtml($arr_post);
					break;
				
				// 騒音（夏季）
				case 'noise_summer':
					$html = noise_summer\makeHtml($arr_post);
					break;
					
				// 騒音（冬季）
				case 'noise_winter':
					$html = noise_winter\makeHtml($arr_post);
					break;
					
				// 空気（夏季）
				case 'air_summer':
					$html = air_summer\makeHtml($arr_post);
					break;
					
				// 空気（冬季）
				case 'air_winter':
					$html = air_winter\makeHtml($arr_post);
					break;
			}
		}
		return $html;
	}

	function getPosts() {
		$ret = '';
		$y = $this->y;
		if (!$y) {
			$y = $this->checkYear();
		}
		$m = $this->m;
		$args = array(
			'post_type' => 'post',
			'category_name' => $this->category,
			'post_status' => 'publish',
			'orderby' => 'date',
			'posts_per_page' => -1,
			'order' => 'DESC'
		);
		$args['date_query'] = array(
				'after'    => array(
						'year'  => $y,
						'month' => $m - 1,
				),
				'before'    => array(
						'year'  => $y + 1,
						'month' => $m,
				),
		);
		$ret = get_posts($args);
		return $ret;
	}

	function getTitle() {
		$ret = '';
		$ret = checkData(get_category_by_slug($this->category));
		if ($ret) {
			$ret = $ret->name;
		}
		return $ret;
	}

	function getCategory() {
		$ret = '';
		$cat = $this->category;
		$ret = $cat;
		return $ret;
	}

	function getYear() {
		$ret = '';
		$y = $this->y;
		if (!$y) {
			$y = $this->checkYear();
		}
		$ret = $y;
		return $ret;
	}

	function getPDFLink() {
		$ret = '';
		$ret = get_theme_file_uri().'/func/pdf.php?cat='.$this->category;
		return $ret;
	}

	function checkYear() {
		$ret = date('Y');
		$m = date('n');
		if (1<= $m && $m <= 3) {
			$ret = $ret - 1;
		}
		return $ret;
	}
}


function checkData ($data = null) {
	$ret = isset($data) && $data ? $data : '';
	return $ret;
}
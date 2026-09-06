<?php
require get_template_directory() . '/func/class/CommonClass.php';
require get_template_directory() . '/func/class/MakeTable.php';
require get_template_directory() . '/func/class/MakeTableSchool.php';

class RecordClass
{
	private $category;
	private $y;
	private $m;
	private $area;
	private $school_type;

	function __construct()
	{
		$this->init();
	}

	function init()
	{
		
		$this->category = checkData($_GET['cat']);
		$this->y = checkData($_GET['y']);
		$this->area = checkData($_GET['area']);
		$this->school_type = checkData($_GET['school_type']);

		// 年度が未選択の場合は今年度に設定
		if (!$this->y) {
			$this->y = self::getYear();
		}

		$this->m = date('n');

		// カテゴリー未選択の場合はトップにリダイレクト
		if (!$this->category) {
			wp_redirect(home_url());
		};
	}

	// 年度のみ
	function getData($pdf = false)
	{
		$arr_post = $this->getPosts();
		$html = '';
		if ($arr_post) {
			switch ($this->category) {
					// プール
				case 'pool':
					$html = pool\makeHtml($arr_post, $pdf);
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

	// 学校タイプ単位
	function getSchoolData()
	{
		$arr_post = $this->getPostsSchool();
		$html = '';
		if ($arr_post) {
			switch ($this->category) {
					// プール
				case 'pool':
					$html = pool_school\makeHtml($arr_post);
					break;

					// 給食調理場
				case 'kitchen':
					$html = kitchen_school\makeHtml($arr_post);
					break;

					// 保健室
				case 'dispensary':
					$html = dispensary_school\makeHtml($arr_post);
					break;

					// 衛生検査
				case 'blackboard':
					$html = blackboard_school\makeHtml($arr_post);
					break;

					// 照度10月
				case 'lighting_summer':
					$html = lighting_summer_school\makeHtml($arr_post);
					break;

					// 照度2月
				case 'lighting_winter':
					$html = lighting_winter_school\makeHtml($arr_post);
					break;

					// 騒音（夏季）
				case 'noise_summer':
					$html = noise_summer_school\makeHtml($arr_post);
					break;

					// 騒音（冬季）
				case 'noise_winter':
					$html = noise_winter_school\makeHtml($arr_post);
					break;

					// 空気（夏季）
				case 'air_summer':
					$html = air_summer_school\makeHtml($arr_post);
					break;

					// 空気（冬季）
				case 'air_winter':
					$html = air_winter_school\makeHtml($arr_post);
					break;
			}
		}
		return $html;
	}

	function getPosts()
	{
		$result = '';
		$y = $this->y;
		if (!$y) {
			$y = $this->checkYear();
		}
		// 翌年
		$next_y = $y + 1;
		
		$post_key_year = $this->category . '_date_year';
		$post_key_month = $this->category . '_date_month';

		// プールの場合はmeta_keyのフィールド名が違う
		if ($this->category == "pool") {			
			$post_key_year = $this->category . '_start_year';
			$post_key_month = $this->category . '_start_month';
		}

		global $wpdb;

		// 年度04月～12月分
		$result_01 = '';

		// 年度01月～03月分
		$result_02 = '';



		// エリア・学校タイプなし
		$result_01 = $wpdb->get_results("
		SELECT
    *
FROM
    wp_posts as t1
    inner join
		wp_postmeta as t2
    on  t1.id = t2.post_id
    inner join
		wp_postmeta as t3
    on  t1.id = t3.post_id
where
    t2.meta_key = '{$post_key_year}'
and t2.meta_value = {$y}
and t3.meta_key = '{$post_key_month}'
and t3.meta_value BETWEEN 4 AND 12
and t1.post_status = 'publish'
order by
    t1.ID asc
");

$result_02 = $wpdb->get_results("
		SELECT
    *
FROM
    wp_posts as t1
    inner join
		wp_postmeta as t2
    on  t1.id = t2.post_id
    inner join
		wp_postmeta as t3
    on  t1.id = t3.post_id
where
	t2.meta_key = '{$post_key_year}'
and t2.meta_value = {$next_y}
and t3.meta_key = '{$post_key_month}'
and t3.meta_value BETWEEN 1 AND 3
and t1.post_status = 'publish'
order by
    t1.ID asc
");

		// 年度合計
		$result = array_merge($result_01, $result_02);
		return $result;
	}

	function getPostsSchool()
	{
		$result = '';
		$y = $this->y;
		if (!$y) {
			$y = $this->checkYear();
		}
		// 翌年
		$next_y = $y + 1;
		$area = $this->area;
		$school_type = $this->school_type;
		$m = $this->m;

		$post_key_year = $this->category . '_date_year';
		$post_key_month = $this->category . '_date_month';
		$post_key_area = $this->category . '_ward_id';
		$post_key_school_type = $this->category . '_school_type';

		// プールの場合はmeta_keyのフィールド名が違う
		if ($this->category == "pool") {			
			$post_key_year = $this->category . '_start_year';
			$post_key_month = $this->category . '_start_month';
		}

		global $wpdb;

		// 年度04月～12月分
		$result_01 = '';

		// 年度01月～03月分
		$result_02 = '';

		// エリア・学校タイプなし
		$result_01 = $wpdb->get_results("
		SELECT
    *
FROM
    wp_posts as t1
    inner join
		wp_postmeta as t2
    on  t1.id = t2.post_id
    inner join
		wp_postmeta as t3
    on  t1.id = t3.post_id
	inner join
		wp_postmeta as t4
    on  t1.id = t4.post_id
	inner join
		wp_postmeta as t5
    on  t1.id = t5.post_id
where
    t2.meta_key = '{$post_key_year}'
and t2.meta_value = {$y}
and t3.meta_key = '{$post_key_month}'
and t3.meta_value BETWEEN 4 AND 12
and t4.meta_key = '{$post_key_area}'
and t4.meta_value = '{$area}'
and t5.meta_key = '{$post_key_school_type}'
and t5.meta_value = '{$school_type}'
and t1.post_status = 'publish'
order by
    t1.ID asc
");


$result_02 = $wpdb->get_results("
		SELECT
    *
FROM
    wp_posts as t1
    inner join
		wp_postmeta as t2
    on  t1.id = t2.post_id
    inner join
		wp_postmeta as t3
    on  t1.id = t3.post_id
	inner join
		wp_postmeta as t4
    on  t1.id = t4.post_id
	inner join
		wp_postmeta as t5
    on  t1.id = t5.post_id
where
	t2.meta_key = '{$post_key_year}'
and t2.meta_value = {$next_y}
and t3.meta_key = '{$post_key_month}'
and t3.meta_value BETWEEN 1 AND 3
and t4.meta_key = '{$post_key_area}'
and t4.meta_value = '{$area}'
and t5.meta_key = '{$post_key_school_type}'
and t5.meta_value = '{$school_type}'
and t1.post_status = 'publish'
order by
    t1.ID asc
");

		// 年度合計
		$result = array_merge($result_01, $result_02);

		return $result;
	}

	function getTitle()
	{
		$ret = '';
		$ret = checkData(get_category_by_slug($this->category));
		if ($ret) {
			$ret = $ret->name;
		}
		return $ret;
	}

	function getCategory()
	{
		$ret = '';
		$ret = $this->category;
		return $ret;
	}

	function setCategory() {
		$ret = $_GET['cat'];
		return $ret;
	}

	function getArea()
	{
		$ret = '';
		$ret = $this->area;
		return $ret;
	}

	// エリア名取得
	function getAreaName()
	{
		$area = self::getArea();
		$arr_area = CommonClass::$AREA;
		$ret = '';
		if ($area) {
			$area = ltrim($area, 0);
			$ret = $arr_area[$area];
		}
		return $ret;
	}

	// 学校種別取得
	function getSchoolType()
	{
		$ret = '';
		$ret = $this->school_type;
		return $ret;
	}
	
	// 学校種別名取得
	function getSchoolTypeName() {
		$school_type = self::getSchoolType();
		$arr_school_type = CommonClass::$SCHOOL_TYPE;
		$ret = '';
		if ($school_type) {
			$school_type = ltrim($school_type, 0);
			$ret = $arr_school_type[$school_type];
		}
		return $ret;

	}

	function getYear()
	{
		$ret = '';
		$y = $this->y;
		if (!$y) {
			$y = $this->checkYear();
		}
		$ret = $y;
		return $ret;
	}

	function getPDFLink()
	{
		$ret = '';
		$link = '';
		$link .= $this->category ? 'cat='.$this->category : '';
		$link .= $this->y ? '&y='.$this->y : '';
		$link .= $this->area ? '&area='.$this->area : '';
		$link .= $this->school_type ? '&school_type='.$this->school_type : '';
		$ret = get_theme_file_uri() . '/func/pdf.php?' . $link;
		return $ret;
	}

	function checkYear()
	{
		$ret = date('Y');
		$m = date('n');
		if (1 <= $m && $m <= 3) {
			$ret = $ret - 1;
		}
		return $ret;
	}

	// 各学校単位のURL生成
	public function makeSchoolUrl($area_id, $type) {
		$y = self::getYear();
		$category = self::getCategory();
		$url = home_url()."/total_result/?y={$y}&cat={$category}&area={$area_id}&school_type={$type}";
		return $url;
	}

	// カテゴリートップに戻るURL生成
	public function makeCategoryTopUrl() {
		$category = self::getCategory();
		$url = home_url()."/total_result/?cat={$category}";
		return $url;
	}

	// 一覧表に戻るURL生成
	public function makeTopUrl() {
		$category = self::getCategory();
		$url = home_url()."/total_list/";
		return $url;
	}

	// 学校単位一覧リンクのターゲット設定
	public function setSchoolListLinkTarget() {
		$target = ' target="_blank"';
		return $target;
	}
}


function checkData($data = null)
{
	$ret = isset($data) && $data ? $data : '';
	return $ret;
}

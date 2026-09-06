<?php

class CommonClass {

	const mode = 1;

	// エリア名
	static public $AREA =
	array (
			1 => "千種",
			2 => "東",
			3 => "北",
			4 => "西",
			5 => "中村",
			6 => "中",
			7 => "昭和",
			8 => "瑞穂",
			9 => "熱田",
			10 => "中川",
			11 => "港",
			12 => "南",
			13 => "守山",
			14 => "緑",
			15 => "名東",
			16 => "天白",
	);

	// 学校種別
	static public $SCHOOL_TYPE =
	array (
			1 => "小学校",
			2 => "中学校",
			3 => "高校",
			4 => "特・幼",
	);

	function checkData($data, $type = 'a') {
		$ret = $data;

		// 半角処理
		if ($type == 'a') {
			$tmp = mb_convert_kana($data, $type);
			if (strlen($tmp) == mb_strlen($tmp)) {
				$ret = (float)$tmp;
			} else {
				$ret = '';
			}
		}
		return $ret;
	}

	// 年度選択ボックス生成
	static function makeSelectYear($slectedYear) {
		$obj = new RecordClass;
		$start_year = 2020;
		$end_year = $obj->checkYear();
		$ret = '';
		for ($i = $end_year; $i >= $start_year; $i--) {
			$selected = ($i == $slectedYear) ? ' selected' : '';
			$ret .= '<option value="'.$i.'"'.$selected.'>'.$i.'年度</option>';
		}
		return $ret;

	}

	// エリア・学校種別を指定して該当する学校一覧取得
	static function getSchoolList($area = null, $school_type = null) {
		$arr_school_lists = self::getSchoolLists();
		$arr = '';
		$cnt = 1;
		foreach ($arr_school_lists as $arr_school_list) {
			if ($arr_school_list[$area]) {
				foreach ($arr_school_list[$area]['school'] as $arr_school) {
					if ($arr_school['type'] == $school_type) {
						$arr[$cnt] = $arr_school; 
						++$cnt;
					}
				}
			}
		}
		return $arr;
	}

	// 学校一覧取得
	static function getSchoolLists() {
		$url = get_template_directory_uri()."/js/school_list.json";
		$json = file_get_contents($url);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$arr = json_decode($json, true);
		return $arr;
	}


}
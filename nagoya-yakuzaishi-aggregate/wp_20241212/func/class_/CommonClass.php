<?php

class CommonClass {

	const mode = 0;

	// カテゴリ
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

	function checkData($data, $type = 'N') {
		$ret = $data;

		// 数字およびピリオド
		if ($type == 'N') {
			$tmp = mb_convert_kana($data, "n");
			$tmp = preg_replace('/[^0-9\.]/', '', $tmp);
			$ret = (float)$tmp;
		}

		return $ret;
	}

}
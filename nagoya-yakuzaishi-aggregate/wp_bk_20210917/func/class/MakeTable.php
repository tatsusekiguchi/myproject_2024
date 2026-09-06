<?php
namespace pool {
	function makeHtml($arr_post) {
		$arr_data = setData($arr_post);

		$html = '';
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$html .= '<table class="pool" border="0">';

		// header
		// 1行目
		$html .= '<tr class="head">';
		$html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
		$html .= '<td colspan="5">検査校数</td>';
		$html .= '<td>場所</td>';
		$html .= '<td colspan="2">pH値</td>';
		$html .= '<td colspan="2">残留塩素<br>（ppm）</td>';
		$html .= '<td colspan="2">細菌検査</td>';
		$html .= '<td rowspan="2"><span class="tate">有機物等<br>不適</span></td>';
		$html .= '<td rowspan="2"><span class="tate">総トリハロ<br>メタン</span></td>';
		$html .= '<td rowspan="2"><span class="tate">濁度<br>不適</span></td>';
		$html .= '<td rowspan="2"><span class="tate">沈殿物・<br>浮遊物不適</span></td>';
		$html .= '<td rowspan="2"><span class="tate">ろ過器出口の<br>濁度不適</span></td>';
		$html .= '<td colspan="4">全換水の回数</td>';
		$html .= '<td rowspan="2"><span class="tate">温水シャワー<br>あり</span></td>';
		//$html .= '<td rowspan="2">検査回数<br>平均</td>';
		$html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
		$html .= '</tr>';

		// 2行目
		$html .= '<tr class="head2">';
		//$html .= '<td rowspan="2">&nbsb;</td>';
		$html .= '<td>小</td>';
		$html .= '<td>中</td>';
		$html .= '<td>高</td>';
		$html .= '<td>他</td>';
		$html .= '<td>計</td>';
		$html .= '<td>屋上</td>';
		$html .= '<td>5.8<br>より<br>↓</td>';
		$html .= '<td>8.6<br>より<br>↑</td>';
		$html .= '<td>0.4<br>より<br>↓</td>';
		$html .= '<td>1.0<br>より<br>↑</td>';
		$html .= '<td><span class="tate">一般細菌<br>不適</span></td>';
		$html .= '<td><span class="tate">大腸菌<br>不適</span></td>';
		//$html .= '<td rowspan="2">有機物等<br>不適</td>';
		//$html .= '<td rowspan="2">総トリハロ<br>メタン</td>';
		//$html .= '<td rowspan="2">濁度<br>不適</td>';
		//$html .= '<td rowspan="2">沈殿物・<br>浮遊物不適</td>';
		//$html .= '<td rowspan="2">ろ過器出口の<br>濁度不適</td>';
		$html .= '<td><span class="tate">なし</span></td>';
		$html .= '<td>１</td>';
		$html .= '<td>２</td>';
		$html .= '<td><span class="tate">３回以上</span></td>';
		//$html .= '<td rowspan="2">温水シャワー<br>あり</td>';
		//$html .= '<td rowspan="2">検査回数<br>平均</td>';
		//$html .= '<td rowspan="2">&nbsb;</td>';
		$html .= '</tr>';

		// end header

		// contents
		foreach ($arr_data as $k => $v) {

			$class = '';
			if ($k == 1) $class = ' content-head';

			$html .= '<tr class="content'.$class.'">';
			$html .= '<td class="area">'.$v['pool_place_name'].'区</td>';
			$html .= '<td>'.$v['pool_school_type_01'].'</td>';
			$html .= '<td>'.$v['pool_school_type_02'].'</td>';
			$html .= '<td>'.$v['pool_school_type_03'].'</td>';
			$html .= '<td>'.$v['pool_school_type_04'].'</td>';
			$html .= '<td>'.$v['pool_school_type_total'].'</td>';
			$html .= '<td>'.$v['pool_place'].'</td>';
			$html .= '<td>'.$v['pool_ph1'].'</td>';
			$html .= '<td>'.$v['pool_ph2'].'</td>';
			$html .= '<td>'.$v['pool_chlorine1'].'</td>';
			$html .= '<td>'.$v['pool_chlorine2'].'</td>';
			$html .= '<td>'.$v['pool_general_bacteria'].'</td>';
			$html .= '<td>'.$v['pool_bacteria_coliform'].'</td>';
			$html .= '<td>'.$v['pool_organic_matter'].'</td>';
			$html .= '<td>'.$v['pool_trihalomethane'].'</td>';
			$html .= '<td>'.$v['pool_turbidity'].'</td>';
			$html .= '<td>'.$v['pool_deposition'].'</td>';
			$html .= '<td>'.$v['pool_turbidity_exit'].'</td>';
			$html .= '<td>'.$v['pool_water_change_0'].'</td>';
			$html .= '<td>'.$v['pool_water_change_1'].'</td>';
			$html .= '<td>'.$v['pool_water_change_2'].'</td>';
			$html .= '<td>'.$v['pool_water_change_3'].'</td>';
			$html .= '<td>'.$v['pool_shower'].'</td>';
			$html .= '<td>'.$v['pool_place_name'].'区</td>';
			$html .= '</tr>';
		}

		// total
		$html .= '<tr class="total">';
		$html .= '<td class="area">合　計</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_school_type_01')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_school_type_02')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_school_type_03')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_school_type_04')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_school_type_total')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_place')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_ph1')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_ph2')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_chlorine1')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_chlorine2')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_general_bacteria')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_bacteria_coliform')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_organic_matter')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_trihalomethane')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_turbidity')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_deposition')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_turbidity_exit')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_water_change_0')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_water_change_1')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_water_change_2')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_water_change_3')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'pool_shower')).'</td>';
		$html .= '<td class="area">合　計</td>';
		$html .= '</tr>';

		$html .= '</table>';
		return $html;
	};

	function setData($arr_post) {
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$arr = array();

		foreach ($area as $area_k => $area_v) {

			$arr[$area_k] = array();
			$arr[$area_k]['pool_place_name'] = '';
			$arr[$area_k]['pool_school_type_01'] = 0;
			$arr[$area_k]['pool_school_type_02'] = 0;
			$arr[$area_k]['pool_school_type_03'] = 0;
			$arr[$area_k]['pool_school_type_04'] = 0;
			$arr[$area_k]['pool_school_type_total'] = 0;
			$arr[$area_k]['pool_place'] = 0;
			$arr[$area_k]['pool_ph1'] = 0;
			$arr[$area_k]['pool_ph2'] = 0;
			$arr[$area_k]['pool_chlorine1'] = 0;
			$arr[$area_k]['pool_chlorine2'] = 0;
			$arr[$area_k]['pool_general_bacteria'] = 0;
			$arr[$area_k]['pool_bacteria_coliform'] = 0;
			$arr[$area_k]['pool_organic_matter'] = 0;
			$arr[$area_k]['pool_trihalomethane'] = 0;
			$arr[$area_k]['pool_turbidity'] = 0;
			$arr[$area_k]['pool_deposition'] = 0;
			$arr[$area_k]['pool_turbidity_exit'] = 0;
			$arr[$area_k]['pool_water_change_0'] = 0;
			$arr[$area_k]['pool_water_change_1'] = 0;
			$arr[$area_k]['pool_water_change_2'] = 0;
			$arr[$area_k]['pool_water_change_3'] = 0;
			$arr[$area_k]['pool_shower'] = 0;

			// 学校重複チェック用
			$arr_school = array();
			$dup_flg = 0;

			foreach ($arr_post as $k => $v) {
				$id = $v->ID;
				$ward = get_field('pool_ward', $id);
				if (!$ward) continue;
				$arr[$area_k]['pool_place_name'] = $area_v;
				if ($ward != $area_v) continue;

				// 学校名
				$field = 'pool_school_name';
				if (get_field($field, $id)) {
					if (in_array(get_field($field, $id), $arr_school)) {
						$dup_flg = 1;
					} else {
						$arr_school[] = get_field($field, $id);
					}
				}

				// 学校種別
				if ($dup_flg == 0) {

					// 屋上
					$field = 'pool_place';
					if (get_field($field, $id) && get_field($field, $id) == '屋上') {
						$arr[$area_k][$field] += 1;
					}

					$field = 'pool_school_type';
					if (get_field($field, $id) && get_field($field, $id) == '01') {
						$arr[$area_k][$field.'_01'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '02') {
						$arr[$area_k][$field.'_02'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '03') {
						$arr[$area_k][$field.'_03'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '04') {
						$arr[$area_k][$field.'_04'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}

					// 全5回
					for ($i=1; $i<=5; $i++) {

						// pH値
						if (get_field('pool_ph_first_'.$i, $id) && $obj::checkData(get_field('pool_ph_first_'.$i, $id)) < 5.8) {
							$arr[$area_k]['pool_ph1'] += 1;
						}
						if (get_field('pool_ph_first_'.$i, $id) && $obj::checkData(get_field('pool_ph_first_'.$i, $id)) > 8.6) {
							$arr[$area_k]['pool_ph2'] += 1;
						}

						// 残留塩素
						if (get_field('pool_chlorine_first_'.$i, $id) && $obj::checkData(get_field('pool_chlorine_first_'.$i, $id)) < 0.4) {
							$arr[$area_k]['pool_chlorine1'] += 1;
						}
						if (get_field('pool_chlorine_first_'.$i, $id) && $obj::checkData(get_field('pool_chlorine_first_'.$i, $id)) > 1.0) {
							$arr[$area_k]['pool_chlorine2'] += 1;
						}

						// 細菌検査
						// 一般細菌
						if (get_field("pool_general_bacteria_first_{$i}", $id) && get_field("pool_general_bacteria_first_{$i}", $id) == 'あり') {
							$arr[$area_k]['pool_general_bacteria'] += 1;
						}
						// バクテリア
						if (get_field("pool_bacteria_coliform_first_{$i}", $id) && get_field("pool_bacteria_coliform_first_{$i}", $id) == 'あり') {
							$arr[$area_k]['pool_bacteria_coliform'] += 1;
						}

						// 有機物
						if (get_field("pool_organic_matter_first_{$i}", $id) && $obj::checkData(get_field("pool_organic_matter_first_{$i}", $id)) > 12) {
							$arr[$area_k]['pool_organic_matter'] += 1;
						}

						// 総トリハロメタン 0.2より上
						if (get_field("pool_trihalomethane_first_{$i}", $id) && $obj::checkData(get_field("pool_trihalomethane_first_{$i}", $id)) > 0.2) {
							$arr[$area_k]['pool_trihalomethane'] += 1;
						}

						// 濁度
						if (get_field("pool_turbidity_first_{$i}", $id) && get_field("pool_turbidity_first_{$i}", $id) == 'あり') {
							$arr[$area_k]['pool_turbidity'] += 1;
						}

						// 沈殿物・浮遊物
						if (get_field("pool_deposition_first_{$i}", $id) && get_field("pool_deposition_first_{$i}", $id) == '有') {
							$arr[$area_k]['pool_deposition'] += 1;
						}

						// ろ過器出口の濁度
						if (get_field("pool_turbidity_exit_first_{$i}", $id) && $obj::checkData(get_field("pool_turbidity_exit_first_{$i}", $id)) > 0.5) {
							$arr[$area_k]['pool_turbidity_exit'] += 1;
						}
					}

					// 全換水の回数
					if (get_field('pool_water_change', $id) && get_field('pool_water_change', $id) == 'なし') {
						$arr[$area_k]['pool_water_change_0'] += 1;
					}
					if (get_field('pool_water_change', $id) && get_field('pool_water_change', $id) == '1回') {
						$arr[$area_k]['pool_water_change_1'] += 1;
					}
					if (get_field('pool_water_change', $id) && get_field('pool_water_change', $id) == '2回') {
						$arr[$area_k]['pool_water_change_2'] += 1;
					}
					if (get_field('pool_water_change', $id) && get_field('pool_water_change', $id) == '3回以上') {
						$arr[$area_k]['pool_water_change_3'] += 1;
					}

					// シャワー
					if (get_field('pool_shower', $id) && get_field('pool_shower', $id) == '有') {
						$arr[$area_k]['pool_shower'] += 1;
					}
				}
			}
			unset($area[$area_k]);
		}
		return $arr;
	}
}

namespace kitchen {
	function makeHtml($arr_post) {
		$arr_data = setData($arr_post);

		$html = '';
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$cat = 'kitchen';

		$html .= '<table class="'.$cat.'" border="0">';

		// header
		// 1行目
		$html .= '<tr class="head">';
		$html .= '<td rowspan="3" class="area empty-l">&nbsp;</td>';
		$html .= '<td rowspan="3" class=""><span class="tate">検査校数</span></td>';
		$html .= '<td rowspan="3"><span class="tate">日常点検なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">乾湿計なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">便所なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">休憩室なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">シャワーなし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">手洗消毒器なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">消毒薬品なし</span></td>';
		$html .= '<td rowspan="3"><span class="tate">ツメブラシなし</span></td>';
		$html .= '<td>温度</td>';
		$html .= '<td>湿度</td>';
		$html .= '<td colspan="2">パン皿</td>';
		$html .= '<td colspan="2">中食器皿</td>';
		$html .= '<td colspan="2">少食器皿</td>';
		$html .= '<td>マナ板</td>';
		$html .= '<td class="wide">照度</td>';
		$html .= '<td rowspan="3" class="area empty-r">&nbsp;</td>';
		$html .= '</tr>';

		// 2行目
		$html .= '<tr class="head2">';
// 		$html .= '<td rowspan="3" class="area empty-l">&nbsp;</td>';
// 		$html .= '<td rowspan="3">検査校数</td>';
// 		$html .= '<td rowspan="3">日常点検なし</td>';
// 		$html .= '<td rowspan="3">乾湿計なし</td>';
// 		$html .= '<td rowspan="3">便所なし</td>';
// 		$html .= '<td rowspan="3">休憩室なし</td>';
// 		$html .= '<td rowspan="3">シャワーなし</td>';
// 		$html .= '<td rowspan="3">手洗消毒器なし</td>';
// 		$html .= '<td rowspan="3">消毒薬品なし</td>';
// 		$html .= '<td rowspan="3">ツメブラシなし</td>';
		$html .= '<td rowspan="2">25℃<br>より↑</td>';
		$html .= '<td rowspan="2">80%<br>より↑</td>';
		$html .= '<td colspan="2">残留物</td>';
		$html .= '<td colspan="2">残留物</td>';
		$html .= '<td colspan="2">残留物</td>';
		$html .= '<td rowspan="2">大腸菌<br><br>検出<br>あり</td>';
		$html .= '<td rowspan="2" class="wide">調理室<br><br><span class="small">200LX</span><br>より↓</td>';
		$html .= '</tr>';

		// 3行目
		$html .= '<tr class="head3">';
		// 		$html .= '<td rowspan="3" class="area empty-l">&nbsp;</td>';
		// 		$html .= '<td rowspan="3">検査校数</td>';
		// 		$html .= '<td rowspan="3">日常点検なし</td>';
		// 		$html .= '<td rowspan="3">乾湿計なし</td>';
		// 		$html .= '<td rowspan="3">便所なし</td>';
		// 		$html .= '<td rowspan="3">休憩室なし</td>';
		// 		$html .= '<td rowspan="3">シャワーなし</td>';
		// 		$html .= '<td rowspan="3">手洗消毒器なし</td>';
		// 		$html .= '<td rowspan="3">消毒薬品なし</td>';
		// 		$html .= '<td rowspan="3">ツメブラシなし</td>';
// 		$html .= '<td rowspan="2">25℃<br>より↑</td>';
// 		$html .= '<td rowspan="2">80%<br>より↑</td>';
		$html .= '<td>澱粉</td>';
		$html .= '<td>脂肪</td>';
		$html .= '<td>澱粉</td>';
		$html .= '<td>脂肪</td>';
		$html .= '<td>澱粉</td>';
		$html .= '<td>脂肪</td>';
		$html .= '</tr>';

		// end header

		// contents
		foreach ($arr_data as $k => $v) {

			$class = '';
			if ($k == 1) $class = ' content-head';

			$html .= '<tr class="content'.$class.'">';
			$html .= '<td class="area">'.$v[$cat.'_place_name'].'区</td>';
			$html .= '<td>'.$v[$cat.'_school_type_total'].'</td>';
			$html .= '<td>'.$v['kitchen_is_record'].'</td>';
			$html .= '<td>'.$v['kitchen_is_sychrometer'].'</td>';
			$html .= '<td>'.$v['kitchen_is_toilet'].'</td>';
			$html .= '<td>'.$v['kitchen_is_restroom'].'</td>';
			$html .= '<td>'.$v['kitchen_is_shower'].'</td>';
			$html .= '<td>'.$v['kitchen_is_sterilizer'].'</td>';
			$html .= '<td>'.$v['kitchen_is_disinfectant'].'</td>';
			$html .= '<td>'.$v['kitchen_is_brush'].'</td>';
			$html .= '<td>'.$v['kitchen_temperature'].'</td>';
			$html .= '<td>'.$v['kitchen_humidity'].'</td>';
			$html .= '<td>'.$v['kitchen_starch_pan'].'</td>';
			$html .= '<td>'.$v['kitchen_fat_pan'].'</td>';
			$html .= '<td>'.$v['kitchen_starch_mid'].'</td>';
			$html .= '<td>'.$v['kitchen_fat_mid'].'</td>';
			$html .= '<td>'.$v['kitchen_starch_small'].'</td>';
			$html .= '<td>'.$v['kitchen_fat_small'].'</td>';
			$html .= '<td>'.$v['kitchen_coli'].'</td>';
			$html .= '<td class="wide">'.$v['kitchen_luminosity_kitchen_min'].'</td>';
			$html .= '<td class="area">'.$v[$cat.'_place_name'].'区</td>';
			$html .= '</tr>';
		}

		// total
		$html .= '<tr class="total">';
		$html .= '<td class="area">合　計</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, $cat.'_school_type_total')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_record')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_sychrometer')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_toilet')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_restroom')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_shower')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_sterilizer')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_disinfectant')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_is_brush')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_temperature')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_humidity')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_starch_pan')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_fat_pan')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_starch_mid')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_fat_mid')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_starch_small')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_fat_small')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_coli')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'kitchen_luminosity_kitchen_min')).'</td>';
		$html .= '<td class="area">合　計</td>';
		$html .= '</tr>';

		$html .= '</table>';

		return $html;
	};

	function setData($arr_post) {
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$arr = array();
		$cat = 'kitchen';

		foreach ($area as $area_k => $area_v) {

			$arr[$area_k] = array();
			$arr[$area_k][$cat.'_place_name'] = '';
			$arr[$area_k][$cat.'_school_type_total'] = 0;
			$arr[$area_k]['kitchen_is_record'] = 0;
			$arr[$area_k]['kitchen_is_sychrometer'] = 0;
			$arr[$area_k]['kitchen_is_toilet'] = 0;
			$arr[$area_k]['kitchen_is_restroom'] = 0;
			$arr[$area_k]['kitchen_is_shower'] = 0;
			$arr[$area_k]['kitchen_is_sterilizer'] = 0;
			$arr[$area_k]['kitchen_is_disinfectant'] = 0;
			$arr[$area_k]['kitchen_is_brush'] = 0;
			$arr[$area_k]['kitchen_temperature'] = 0;
			$arr[$area_k]['kitchen_humidity'] = 0;

			// 食器
			$arr[$area_k]['kitchen_starch_pan'] = 0;
			$arr[$area_k]['kitchen_fat_pan'] = 0;
			$arr[$area_k]['kitchen_starch_mid'] = 0;
			$arr[$area_k]['kitchen_fat_mid'] = 0;
			$arr[$area_k]['kitchen_starch_small'] = 0;
			$arr[$area_k]['kitchen_fat_small'] = 0;

			// マナ板
			$arr[$area_k]['kitchen_coli'] = 0;

			// 照明
			$arr[$area_k]['kitchen_luminosity_kitchen_min'] = 0;

			// 学校重複チェック用
			$arr_school = array();
			$dup_flg = 0;

			foreach ($arr_post as $k => $v) {
				$id = $v->ID;
				$ward = get_field($cat.'_ward', $id);
				if (!$ward) continue;
				$arr[$area_k][$cat.'_place_name'] = $area_v;
				if ($ward != $area_v) continue;

				// 学校名
				if (get_field($cat.'_school_name', $id)) {
					if (in_array(get_field($cat.'_school_name', $id), $arr_school)) {
						$dup_flg = 1;
					} else {
						$arr_school[] = get_field($cat.'_school_name', $id);
					}
				}

				// 学校種別
				if ($dup_flg == 0) {

					$field = $cat.'_school_type';
					if (get_field($field, $id) && get_field($field, $id) == '01') {
						$arr[$area_k][$field.'_01'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '02') {
						$arr[$area_k][$field.'_02'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '03') {
						$arr[$area_k][$field.'_03'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '04') {
						$arr[$area_k][$field.'_04'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}

					// 日常点検
					$field = 'kitchen_is_record';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 乾湿計
					$field = 'kitchen_is_sychrometer';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 便所
					$field = 'kitchen_is_toilet';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 休憩室
					$field = 'kitchen_is_toilet';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// シャワー
					$field = 'kitchen_is_shower';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 手洗消毒器
					$field = 'kitchen_is_sterilizer';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 消毒薬品
					$field = 'kitchen_is_disinfectant';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// ツメブラシ
					$field = 'kitchen_is_brush';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 温度
					$field = 'kitchen_temperature';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 25) {
						$arr[$area_k][$field] += 1;
					}
					// 湿度
					$field = 'kitchen_humidity';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 80) {
						$arr[$area_k][$field] += 1;
					}

					// パン皿
					// 澱粉
					$field = 'kitchen_starch_pan';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}
					// 脂肪
					$field = 'kitchen_fat_pan';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}

					// 中食器皿
					// 澱粉
					$field = 'kitchen_starch_mid';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}
					// 脂肪
					$field = 'kitchen_fat_mid';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}

					// 小食器皿
					// 澱粉
					$field = 'kitchen_starch_small';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}
					// 脂肪
					$field = 'kitchen_fat_small';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
						$arr[$area_k][$field] += (int)$obj::checkData(get_field($field, $id));
					}

					// マナ板
					$field = 'kitchen_coli';
					if (get_field($field, $id) && get_field($field, $id) == 'あり') {
						$arr[$area_k][$field] += 1;
					}
					// 照度
					$field = 'kitchen_luminosity_kitchen_min';
					if (get_field($field, $id) &&$obj::checkData(get_field($field, $id)) < 200) {
						$arr[$area_k][$field] += 1;
					}
				}
			}
			unset($area[$area_k]);
		}
		return $arr;
	}
}

namespace dispensary {
	function makeHtml($arr_post) {
		$arr_data = setData($arr_post);

		$html = '';
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$html .= '<table class="dispensary" border="0">';

		// header
		// 1行目
		$html .= '<tr class="head">';
		$html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
		$html .= '<td colspan="5" class="sch-head">検査校数</td>';
		$html .= '<td rowspan="2"><span class="tate">保管室が<br>狭いと思う</span></td>';
		$html .= '<td colspan="2">ベッド</td>';
		$html .= '<td colspan="2">マット</td>';
		$html .= '<td colspan="2">布団</td>';
		$html .= '<td rowspan="2"><span class="tate">冷蔵庫または<br>冷暗所がない</span></td>';
		$html .= '<td rowspan="2"><span class="tate">薬品戸棚に<br>鍵がない</span></td>';
		$html .= '<td rowspan="2" class="small"><span class="tate">薬品戸棚、冷蔵庫の<br>配置が不適</span></td>';
		$html .= '<td rowspan="2"><span class="tate">内・外用薬<br>の区別がない</span></td>';
		$html .= '<td rowspan="2"><span class="tate">毒劇薬や<br>毒劇物がある</span></td>';
		$html .= '<td rowspan="2"><span class="tate">不良薬品<br>がある</span></td>';
		$html .= '<td colspan="6">保健室に</td>';
		$html .= '<td colspan="2">照度不適</td>';
		$html .= '<td>ダニ</td>';
		//$html .= '<td rowspan="2">検査回数<br>平均</td>';
		$html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
		$html .= '</tr>';

		// 2行目
		$html .= '<tr class="head2">';
		//$html .= '<td rowspan="2">&nbsb;</td>';
		$html .= '<td class="sch"><span class="tate">小</span></td>';
		$html .= '<td class="sch"><span class="tate">中</span></td>';
		$html .= '<td class="sch"><span class="tate">高</span></td>';
		$html .= '<td class="sch"><span class="tate">特・幼</span></td>';
		$html .= '<td class="sch"><span class="tate">計</span></td>';
		//$html .= '<td></td>';
		$html .= '<td><span class="tate">１０年<br>以上使用</span></td>';
		$html .= '<td><span class="tate">破損あり</span></td>';
		$html .= '<td><span class="tate">１０年<br>以上使用</span></td>';
		$html .= '<td><span class="tate">破損あり</span></td>';
		$html .= '<td><span class="tate">１０年<br>以上使用</span></td>';
		$html .= '<td><span class="tate">破損あり</span></td>';
		// 保健室に
		$html .= '<td><span class="tate">冷房設備<br>がない</span></td>';
		$html .= '<td><span class="tate">シャワー<br>がある</span></td>';
		$html .= '<td><span class="tate">専用トイレ<br>がある</span></td>';
		$html .= '<td><span class="tate">専用掃除機<br>がある</span></td>';
		$html .= '<td><span class="tate">専用洗濯機<br>がある</span></td>';
		$html .= '<td><span class="tate">外線電話が<br>がある</span></td>';

		// 照度不適
		$html .= '<td><span class="tate">保健室</span></td>';
		$html .= '<td><span class="tate">休憩室</span></td>';
		$html .= '<td><span class="tate">検査不適</span></td>';
		$html .= '</tr>';

		// end header

		// contents
		foreach ($arr_data as $k => $v) {

			$class = '';
			if ($k == 1) $class = ' content-head';

			$html .= '<tr class="content'.$class.'">';
			$html .= '<td class="area">'.$v['dispensary_place_name'].'区</td>';
			$html .= '<td>'.$v['dispensary_school_type_01'].'</td>';
			$html .= '<td>'.$v['dispensary_school_type_02'].'</td>';
			$html .= '<td>'.$v['dispensary_school_type_03'].'</td>';
			$html .= '<td>'.$v['dispensary_school_type_04'].'</td>';
			$html .= '<td>'.$v['dispensary_school_type_total'].'</td>';
			$html .= '<td>'.$v['dispensary_size_select'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_body_year'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_body_damage'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_mat_year'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_mat_damage'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_futon_year'].'</td>';
			$html .= '<td>'.$v['dispensary_bed_futon_damage'].'</td>';
			$html .= '<td>'.$v['dispensary_refrigerator'].'</td>';
			$html .= '<td>'.$v['dispensary_shelf_key'].'</td>';
			$html .= '<td>'.$v['dispensary_placement'].'</td>';
			$html .= '<td>'.$v['dispensary_distinction'].'</td>';
			$html .= '<td>'.$v['dispensary_poisonous_drug'].'</td>';
			$html .= '<td>'.$v['dispensary_bad_medicine'].'</td>';
			$html .= '<td>'.$v['dispensary_airconditioning'].'</td>';
			$html .= '<td>'.$v['dispensary_shower'].'</td>';
			$html .= '<td>'.$v['dispensary_toilet'].'</td>';
			$html .= '<td>'.$v['dispensary_vacuum_cleaner'].'</td>';
			$html .= '<td>'.$v['dispensary_washing_machine'].'</td>';


			$html .= '<td>'.$v['dispensary_phone'].'</td>';
			$html .= '<td>'.$v['dispensary_room_luminosity'].'</td>';
			$html .= '<td>'.$v['dispensary_rest_room_luminosity'].'</td>';
			$html .= '<td>'.$v['dispensary_tick_allergen_result'].'</td>';

			$html .= '<td>'.$v['dispensary_place_name'].'区</td>';
			$html .= '</tr>';
		}

		// total
		$html .= '<tr class="total">';
		$html .= '<td class="area">合　計</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_school_type_01')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_school_type_02')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_school_type_03')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_school_type_04')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_school_type_total')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_size_select')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_body_year')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_body_damage')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_mat_year')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_mat_damage')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_futon_year')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bed_futon_damage')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_refrigerator')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_shelf_key')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_placement')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_distinction')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_poisonous_drug')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_bad_medicine')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_airconditioning')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_shower')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_toilet')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_vacuum_cleaner')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_washing_machine')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_phone')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_room_luminosity')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_rest_room_luminosity')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'dispensary_tick_allergen_result')).'</td>';
		$html .= '<td class="area">合　計</td>';
		$html .= '</tr>';

		$html .= '</table>';
		return $html;
	};

	function setData($arr_post) {
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$arr = array();
		$cat = 'dispensary';

		foreach ($area as $area_k => $area_v) {

			$arr[$area_k] = array();
			$arr[$area_k][$cat.'_place_name'] = '';
			$arr[$area_k][$cat.'_school_type_01'] = 0;
			$arr[$area_k][$cat.'_school_type_02'] = 0;
			$arr[$area_k][$cat.'_school_type_03'] = 0;
			$arr[$area_k][$cat.'_school_type_04'] = 0;
			$arr[$area_k][$cat.'_school_type_total'] = 0;
			$arr[$area_k]['dispensary_size_select'] = 0;
			$arr[$area_k]['dispensary_bed_body_year'] = 0;
			$arr[$area_k]['dispensary_bed_body_damage'] = 0;
			$arr[$area_k]['dispensary_bed_mat_year'] = 0;
			$arr[$area_k]['dispensary_bed_mat_damage'] = 0;
			$arr[$area_k]['dispensary_bed_futon_year'] = 0;
			$arr[$area_k]['dispensary_bed_futon_damage'] = 0;
			$arr[$area_k]['dispensary_refrigerator'] = 0;
			$arr[$area_k]['dispensary_shelf_key'] = 0;
			$arr[$area_k]['dispensary_placement'] = 0;
			$arr[$area_k]['dispensary_distinction'] = 0;
			$arr[$area_k]['dispensary_poisonous_drug'] = 0;
			$arr[$area_k]['dispensary_bad_medicine'] = 0;
			$arr[$area_k]['dispensary_airconditioning'] = 0;
			$arr[$area_k]['dispensary_shower'] = 0;
			$arr[$area_k]['dispensary_toilet'] = 0;
			$arr[$area_k]['dispensary_vacuum_cleaner'] = 0;
			$arr[$area_k]['dispensary_washing_machine'] = 0;
			$arr[$area_k]['dispensary_phone'] = 0;
			$arr[$area_k]['dispensary_room_luminosity'] = 0;
			$arr[$area_k]['dispensary_rest_room_luminosity'] = 0;
			$arr[$area_k]['dispensary_tick_allergen_result'] = 0;

			// 学校重複チェック用
			$arr_school = array();
			$dup_flg = 0;

			foreach ($arr_post as $k => $v) {
				$id = $v->ID;
				$ward = get_field('dispensary_ward', $id);
				if (!$ward) continue;
				$arr[$area_k]['dispensary_place_name'] = $area_v;
				if ($ward != $area_v) continue;

				// 学校名
				$field = 'dispensary_school_name';
				if (get_field($field, $id)) {
					if (in_array(get_field($field, $id), $arr_school)) {
						$dup_flg = 1;
					} else {
						$arr_school[] = get_field($field, $id);
					}
				}

				// 学校種別
				if ($dup_flg == 0) {

					$field = 'dispensary_school_type';
					if (get_field($field, $id) && get_field($field, $id) == '01') {
						$arr[$area_k][$field.'_01'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '02') {
						$arr[$area_k][$field.'_02'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '03') {
						$arr[$area_k][$field.'_03'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '04') {
						$arr[$area_k][$field.'_04'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}

					// 保健室の広さ
					$field = 'dispensary_size_select';
					if (get_field($field, $id) && get_field($field, $id) == '狭い') {
						$arr[$area_k][$field] += 1;
					}
					// ベッド本体
					// 使用年数
					$field = 'dispensary_bed_body_year';
					if (get_field($field, $id) && get_field($field, $id) == 'それ以上') {
						$arr[$area_k][$field] += 1;
					}
					// 破損
					$field = 'dispensary_bed_body_damage';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// ベッドマット
					// 使用年数
					$field = 'dispensary_bed_mat_year';
					if (get_field($field, $id) && get_field($field, $id) == 'それ以上') {
						$arr[$area_k][$field] += 1;
					}
					// 破損
					$field = 'dispensary_bed_mat_damage';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 布団
					// 使用年数
					$field = 'dispensary_bed_futon_year';
					if (get_field($field, $id) && get_field($field, $id) == 'それ以上') {
						$arr[$area_k][$field] += 1;
					}
					// 破損
					$field = 'dispensary_bed_futon_damage';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 冷蔵庫または冷暗所
					$field = 'dispensary_refrigerator';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 薬品戸棚に鍵
					$field = 'dispensary_shelf_key';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 薬品戸棚、冷蔵庫の配置
					$field = 'dispensary_placement';
					if (get_field($field, $id) && get_field($field, $id) == '不適') {
						$arr[$area_k][$field] += 1;
					}
					// 内・外用薬が区別
					$field = 'dispensary_distinction';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 毒劇薬・毒劇物
					$field = 'dispensary_poisonous_drug';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 不良薬品
					$field = 'dispensary_bad_medicine';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室に冷房設備
					$field = 'dispensary_airconditioning';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室にシャワー設備
					$field = 'dispensary_shower';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室に専用トイレ
					$field = 'dispensary_toilet';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室に専用掃除機
					$field = 'dispensary_vacuum_cleaner';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室に専用洗濯機
					$field = 'dispensary_washing_machine';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室に外線電話
					$field = 'dispensary_phone';
					if (get_field($field, $id) && get_field($field, $id) == '有') {
						$arr[$area_k][$field] += 1;
					}
					// 保健室の照度
					$field = 'dispensary_room_luminosity';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 200) {
						$arr[$area_k][$field] += 1;
					}
					// 休養室の照度
					$field = 'dispensary_rest_room_luminosity';
					if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 75) {
						$arr[$area_k][$field] += 1;
					}
					// ダニアレルゲン結果
					$field = 'dispensary_tick_allergen_result';
					if (get_field($field, $id) && get_field($field, $id) == '100匹/㎡より↑') {
						$arr[$area_k][$field] += 1;
					}
				}
			}
			unset($area[$area_k]);
		}
		return $arr;
	}
}

namespace blackboard {
	function makeHtml($arr_post) {
		$arr_data = setData($arr_post);

		$html = '';
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$html .= '<table class="blackboard" border="0">';

		// header
		// 1行目
		$html .= '<tr class="head">';
		$html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
		$html .= '<td colspan="5">検査校数</td>';
		$html .= '<td colspan="2">外観の状況</td>';
		$html .= '<td colspan="2">黒板面の拭き取り<br>状況</td>';
		$html .= '<td colspan="2">黒板拭きの状態</td>';
		$html .= '<td colspan="2" class="small">黒板拭きクリーナー<br>の状態</td>';
		$html .= '<td colspan="2">黒板面の色彩</td>';
		$html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
		$html .= '</tr>';

		// 2行目
		$html .= '<tr class="head2">';
		//$html .= '<td rowspan="2">&nbsb;</td>';
		$html .= '<td>小</td>';
		$html .= '<td>中</td>';
		$html .= '<td>高</td>';
		$html .= '<td>他</td>';
		$html .= '<td>計</td>';
		$html .= '<td>適</td>';
		$html .= '<td>不適</td>';
		$html .= '<td>適</td>';
		$html .= '<td>不適</td>';
		$html .= '<td>適</td>';
		$html .= '<td>不適</td>';
		$html .= '<td>適</td>';
		$html .= '<td>不適</td>';
		$html .= '<td>適</td>';
		$html .= '<td>不適</td>';
		$html .= '</tr>';

		// end header

		// contents
		foreach ($arr_data as $k => $v) {

			$class = '';
			if ($k == 1) $class = ' content-head';

			$html .= '<tr class="content'.$class.'">';
			$html .= '<td class="area">'.$v['blackboard_place_name'].'区</td>';
			$html .= '<td>'.$v['blackboard_school_type_01'].'</td>';
			$html .= '<td>'.$v['blackboard_school_type_02'].'</td>';
			$html .= '<td>'.$v['blackboard_school_type_03'].'</td>';
			$html .= '<td>'.$v['blackboard_school_type_04'].'</td>';
			$html .= '<td>'.$v['blackboard_school_type_total'].'</td>';
			$html .= '<td>'.$v['blackboard_appearance_check'].'</td>';
			$html .= '<td>'.$v['blackboard_appearance_check_f'].'</td>';
			$html .= '<td>'.$v['blackboard_status_check'].'</td>';
			$html .= '<td>'.$v['blackboard_status_check_f'].'</td>';
			$html .= '<td>'.$v['blackboard_wipe_check'].'</td>';
			$html .= '<td>'.$v['blackboard_wipe_check_f'].'</td>';
			$html .= '<td>'.$v['blackboard_cleaner_check'].'</td>';
			$html .= '<td>'.$v['blackboard_cleaner_check_f'].'</td>';
			$html .= '<td>'.$v['blackboard_color_check'].'</td>';
			$html .= '<td>'.$v['blackboard_color_check_f'].'</td>';
			$html .= '<td>'.$v['blackboard_place_name'].'区</td>';
			$html .= '</tr>';
		}

		// total
		$html .= '<tr class="total">';
		$html .= '<td class="area">合　計</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_01')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_02')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_03')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_04')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_total')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_appearance_check')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_appearance_check_f')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_status_check')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_status_check_f')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_wipe_check')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_wipe_check_f')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_cleaner_check')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_cleaner_check_f')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_color_check')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_color_check_f')).'</td>';
		$html .= '<td class="area">合　計</td>';
		$html .= '</tr>';

		$html .= '</table>';
		return $html;
	};

	function setData($arr_post) {
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$arr = array();
		$cat = 'blackboard';

		foreach ($area as $area_k => $area_v) {

			$arr[$area_k] = array();
			$arr[$area_k][$cat.'_place_name'] = '';
			$arr[$area_k][$cat.'_school_type_01'] = 0;
			$arr[$area_k][$cat.'_school_type_02'] = 0;
			$arr[$area_k][$cat.'_school_type_03'] = 0;
			$arr[$area_k][$cat.'_school_type_04'] = 0;
			$arr[$area_k][$cat.'_school_type_total'] = 0;
			$arr[$area_k]['blackboard_appearance_check'] = 0;
			$arr[$area_k]['blackboard_appearance_check_f'] = 0;
			$arr[$area_k]['blackboard_status_check'] = 0;
			$arr[$area_k]['blackboard_status_check_f'] = 0;
			$arr[$area_k]['blackboard_wipe_check'] = 0;
			$arr[$area_k]['blackboard_wipe_check_f'] = 0;
			$arr[$area_k]['blackboard_cleaner_check'] = 0;
			$arr[$area_k]['blackboard_cleaner_check_f'] = 0;
			$arr[$area_k]['blackboard_color_check'] = 0;
			$arr[$area_k]['blackboard_color_check_f'] = 0;

			// 学校重複チェック用
			$arr_school = array();
			$dup_flg = 0;

			foreach ($arr_post as $k => $v) {
				$id = $v->ID;
				$ward = get_field($cat.'_ward', $id);
				if (!$ward) continue;
				$arr[$area_k][$cat.'_place_name'] = $area_v;
				if ($ward != $area_v) continue;

				// 学校名
				$field = $cat.'_school_name';
				if (get_field($field, $id)) {
					if (in_array(get_field($field, $id), $arr_school)) {
						$dup_flg = 1;
					} else {
						$arr_school[] = get_field($field, $id);
					}
				}

			// 学校種別
				if ($dup_flg == 0) {

					$field = 'dispensary_school_type';
					if (get_field($field, $id) && get_field($field, $id) == '01') {
						$arr[$area_k][$field.'_01'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '02') {
						$arr[$area_k][$field.'_02'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '03') {
						$arr[$area_k][$field.'_03'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '04') {
						$arr[$area_k][$field.'_04'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}

					// 外観の状況
					$field = 'blackboard_appearance_check';
					$flg = 0;
					if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
						$flg = 1;
						$arr[$area_k][$field] += 1;
					}
					if (!$flg) {
						if (get_field($field, $id)) {
							$field = 'blackboard_appearance_check_f';
							$arr[$area_k][$field] += 1;
						}
					}

					// 黒板面の拭き取り状況
					$field = 'blackboard_status_check';
					$flg = 0;
					if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
						$flg = 1;
						$arr[$area_k][$field] += 1;
					}
					if (!$flg) {
						$field = 'blackboard_wiping_status_text';
						if (get_field($field, $id)) {
							$field = 'blackboard_status_check_f';
							$arr[$area_k][$field] += 1;
						}
					}

					// 黒板拭きの状態
					$field = 'blackboard_wipe_check';
					$flg = 0;
					if (get_field($field, $id) && in_array('良', (array)get_field($field, $id), true)) {
						$flg = 1;
						$arr[$area_k][$field] += 1;
					}
					if (!$flg) {
						if (get_field($field, $id)) {
							$field = 'blackboard_wipe_check_f';
							$arr[$area_k][$field] += 1;
						}
					}

					// 黒板拭きクリーナーの状態
					$field = 'blackboard_cleaner_check';
					$flg = 0;
					if (get_field($field, $id) && in_array('良', (array)get_field($field, $id), true)) {
						$flg = 1;
						$arr[$area_k][$field] += 1;
					}
					if (!$flg) {
						if (get_field($field, $id)) {
							$field = 'blackboard_cleaner_check_f';
							$arr[$area_k][$field] += 1;
						}
					}

					// 黒板面の色彩
					$field = 'blackboard_color_check';
					$flg = 0;
					if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
						$flg = 1;
						$arr[$area_k][$field] += 1;
					}
					if (!$flg) {
						$field = 'blackboard_color_text';
						if (get_field($field, $id)) {
							$field = 'blackboard_color_check_f';
							$arr[$area_k][$field] += 1;
						}
					}
				}
			}
			unset($area[$area_k]);
		}

		return $arr;
	}
}

namespace lighting_summer {
	function makeHtml($arr_post) {
		$arr_data = setData($arr_post);

		$html = '';
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$html .= '<table class="lighting_summer" border="0">';

		// header
		// 1行目
		$html .= '<tr class="head">';
		$html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
		$html .= '<td colspan="5" class="sch-head">検査校数</td>';
		$html .= '<td colspan="3" class="weather-head">天候</td>';
		$html .= '<td colspan="2" class="lx-head">照度計</td>';
		$html .= '<td rowspan="2"><span class="tate">カーテンが<br>無い学校</span></td>';
		$html .= '<td colspan="3" class="bb-head">黒板</td>';
		$html .= '<td colspan="3" class="room-head">教室</td>';
		$html .= '<td colspan="4">まぶしさ</td>';
		$html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
		$html .= '</tr>';

		// 2行目
		$html .= '<tr class="head2">';
		//$html .= '<td rowspan="2">&nbsb;</td>';
		$html .= '<td>小</td>';
		$html .= '<td>中</td>';
		$html .= '<td>高</td>';
		$html .= '<td>他</td>';
		$html .= '<td>計</td>';
		$html .= '<td>晴</td>';
		$html .= '<td>曇</td>';
		$html .= '<td>雨</td>';
		$html .= '<td>自校</td>';
		$html .= '<td>他校</td>';
		//$html .= '<td></td>';
		$html .= '<td>40W×2本未満</td>';
		$html .= '<td>300Lx未満</td>';
		$html .= '<td class="small"><span class="small">最大:最小比<br>10:1より↑</span></td>';
		$html .= '<td>40W×9本未満</td>';
		$html .= '<td>300Lx未満</td>';
		$html .= '<td class="small"><span class="small">最大:最小比<br>10:1より↑</span></td>';
		$html .= '<td>黒板</td>';
		$html .= '<td>机上</td>';
		$html .= '<td>テレビ</td>';
		$html .= '<td>ディスプレー</td>';
		$html .= '</tr>';

		// end header

		// contents
		foreach ($arr_data as $k => $v) {

			$class = '';
			if ($k == 1) $class = ' content-head';

			$html .= '<tr class="content'.$class.'">';
			$html .= '<td class="area">'.$v['lighting_summer_place_name'].'区</td>';
			$html .= '<td>'.$v['lighting_summer_school_type_01'].'</td>';
			$html .= '<td>'.$v['lighting_summer_school_type_02'].'</td>';
			$html .= '<td>'.$v['lighting_summer_school_type_03'].'</td>';
			$html .= '<td>'.$v['lighting_summer_school_type_04'].'</td>';
			$html .= '<td>'.$v['lighting_summer_school_type_total'].'</td>';
			$html .= '<td>'.$v['lighting_summer_weather_s'].'</td>';
			$html .= '<td>'.$v['lighting_summer_weather_c'].'</td>';
			$html .= '<td>'.$v['lighting_summer_weather_r'].'</td>';
			$html .= '<td>'.$v['lighting_summer_illuminometer_type_own'].'</td>';
			$html .= '<td>'.$v['lighting_summer_illuminometer_type_other'].'</td>';
			$html .= '<td>'.$v['lighting_summer_is_curtain'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_blackboard_w'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_blackboard_min'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_blackboard_minmax'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_classroom_w'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_classroom_min'].'</td>';
			$html .= '<td>'.$v['lighting_summer_light_classroom_minmax'].'</td>';
			$html .= '<td>'.$v['lighting_summer_glare_bb'].'</td>';
			$html .= '<td>'.$v['lighting_summer_glare_desk'].'</td>';
			$html .= '<td>'.$v['lighting_summer_glare_tv'].'</td>';
			$html .= '<td>'.$v['lighting_summer_glare_disp'].'</td>';
			$html .= '<td>'.$v['lighting_summer_place_name'].'区</td>';
			$html .= '</tr>';
		}

		// total
		$html .= '<tr class="total">';
		$html .= '<td class="area">合　計</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_01')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_02')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_03')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_04')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_total')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_weather_s')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_weather_c')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_weather_r')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_illuminometer_type_own')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_illuminometer_type_other')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_is_curtain')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_w')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_min')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_minmax')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_classroom_w')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_classroom_min')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_classroom_minmax')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_glare_bb')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_glare_desk')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_glare_tv')).'</td>';
		$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_glare_disp')).'</td>';
		$html .= '<td class="area">合　計</td>';
		$html .= '</tr>';

		$html .= '</table>';
		return $html;
	};

	function setData($arr_post) {
		$obj = new \CommonClass();
		$area = $obj::$AREA;
		$arr = array();
		$cat = 'lighting_summer';

		foreach ($area as $area_k => $area_v) {

			$arr[$area_k] = array();
			$arr[$area_k][$cat.'_place_name'] = '';
			$arr[$area_k][$cat.'_school_type_01'] = 0;
			$arr[$area_k][$cat.'_school_type_02'] = 0;
			$arr[$area_k][$cat.'_school_type_03'] = 0;
			$arr[$area_k][$cat.'_school_type_04'] = 0;
			$arr[$area_k][$cat.'_school_type_total'] = 0;
			$arr[$area_k]['lighting_summer_weather_s'] = 0;
			$arr[$area_k]['lighting_summer_weather_c'] = 0;
			$arr[$area_k]['lighting_summer_weather_r'] = 0;
			$arr[$area_k]['lighting_summer_illuminometer_type_own'] = 0;
			$arr[$area_k]['lighting_summer_illuminometer_type_other'] = 0;
			$arr[$area_k]['lighting_summer_is_curtain'] = 0;
			$arr[$area_k]['lighting_summer_light_blackboard_w'] = 0;
			$arr[$area_k]['lighting_summer_light_blackboard_min'] = 0;
			$arr[$area_k]['lighting_summer_light_blackboard_minmax'] = 0;
			$arr[$area_k]['lighting_summer_light_classroom_w'] = 0;
			$arr[$area_k]['lighting_summer_light_classroom_min'] = 0;
			$arr[$area_k]['lighting_summer_light_classroom_minmax'] = 0;
			$arr[$area_k]['lighting_summer_glare_bb'] = 0;
			$arr[$area_k]['lighting_summer_glare_desk'] = 0;
			$arr[$area_k]['lighting_summer_glare_tv'] = 0;
			$arr[$area_k]['lighting_summer_glare_disp'] = 0;

			// 学校重複チェック用
			$arr_school = array();
			$dup_flg = 0;

			foreach ($arr_post as $k => $v) {
				$id = $v->ID;

				//var_dump(get_fields($id));
				$ward = get_field($cat.'_ward', $id);
				if (!$ward) continue;
				$arr[$area_k][$cat.'_place_name'] = $area_v;
				if ($ward != $area_v) continue;

				// 学校名
				$field = $cat.'_school_name';
				if (get_field($field, $id)) {

					//var_dump(get_field($field, $id));
					if (in_array(get_field($field, $id), $arr_school)) {
						$dup_flg = 1;
					} else {
						$arr_school[] = get_field($field, $id);
					}
				}

				// 学校種別
				if ($dup_flg == 0) {

					$field = 'lighting_summer_school_type';
					if (get_field($field, $id) && get_field($field, $id) == '01') {
						$arr[$area_k][$field.'_01'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '02') {
						$arr[$area_k][$field.'_02'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '03') {
						$arr[$area_k][$field.'_03'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '04') {
						$arr[$area_k][$field.'_04'] += 1;
						$arr[$area_k][$field.'_total'] += 1;
					}

					// 天候
					$field = 'lighting_summer_weather';
					if (get_field($field, $id) && get_field($field, $id) == '晴') {
						$arr[$area_k]['lighting_summer_weather_s'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '曇') {
						$arr[$area_k]['lighting_summer_weather_c'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '雨') {
						$arr[$area_k]['lighting_summer_weather_r'] += 1;
					}

					// 照度計
					$field = 'lighting_summer_illuminometer_type';
					if (get_field($field, $id) && get_field($field, $id) == '自校') {
						$arr[$area_k]['lighting_summer_illuminometer_type_own'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '借用') {
						$arr[$area_k]['lighting_summer_illuminometer_type_other'] += 1;
					}

					// カーテン
					$field = 'lighting_summer_is_curtain';
					if (get_field($field, $id) && get_field($field, $id) == '無') {
						$arr[$area_k][$field] += 1;
					}

					// 黒板
					// 40W-本数
					$field  = 'lighting_summer_light_blackboard_w';
					$field2 = 'lighting_summer_light_blackboard_num';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 40) ||
						 (get_field($field2, $id) && $obj::checkData(get_field($field2, $id)) < 2)) {
						$arr[$area_k][$field] += 1;
					}
					// 300LX
					$field  = 'lighting_summer_light_blackboard_min';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 300)) {
						$arr[$area_k][$field] += 1;
					}
					// 最大・最小比
					$field  = 'lighting_summer_light_blackboard_minmax';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 10)) {
						$arr[$area_k][$field] += 1;
					}

					// 教室
					// 40W-本数
					$field  = 'lighting_summer_light_classroom_w';
					$field2 = 'lighting_summer_light_classroom_num';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 40) ||
					(get_field($field2, $id) && $obj::checkData(get_field($field2, $id)) < 9)) {
						$arr[$area_k][$field] += 1;
					}
					// 300LX
					$field  = 'lighting_summer_light_classroom_min';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 300)) {
						$arr[$area_k][$field] += 1;
					}
					// 最大・最小比
					$field  = 'lighting_summer_light_classroom_minmax';
					if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 10)) {
						$arr[$area_k][$field] += 1;
					}

					// まぶしさ
					$field = 'lighting_summer_glare';
					if (get_field($field, $id) && get_field($field, $id) == '黒板') {
						$arr[$area_k]['lighting_summer_glare_bb'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == '机上') {
						$arr[$area_k]['lighting_summer_glare_desk'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == 'テレビ') {
						$arr[$area_k]['lighting_summer_glare_tv'] += 1;
					}
					if (get_field($field, $id) && get_field($field, $id) == 'ディスプレー') {
						$arr[$area_k]['lighting_summer_glare_disp'] += 1;
					}

				}
			}
			unset($area[$area_k]);
		}
		return $arr;
	}
}

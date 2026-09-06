<?php
namespace pool;
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
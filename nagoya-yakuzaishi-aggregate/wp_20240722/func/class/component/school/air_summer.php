<?php

namespace air_summer_school;

function makeHtml($arr_post)
{
    $arr_data = setData($arr_post);

    $html = '';
    $html .= '<table class="air_summer air" border="0">';

    // header
    // 1行目
    $html .= '<tr class="head">';
    $html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
    //$html .= '<td colspan="5">検査校数</td>';

    //$html .= '<td colspan="2">平均気温</td>';
    $html .= '<td colspan="2">平均室温</td>';

    $html .= '<td rowspan="2">外気との差<br>5℃以上</td>';
    //$html .= '<td rowspan="2">相対湿度<br>30～80％</td>';
    $html .= '<td rowspan="2">相対湿度</td>';
    $html .= '<td rowspan="2">二酸化炭素<br>1500ppm<br>以上</td>';
    $html .= '<td rowspan="2">浮遊粉じん<br>0.1㎎/m3より↑</td>';


    $html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
    $html .= '</tr>';

    // 2行目
    $html .= '<tr class="head2">';
    // $html .= '<td>小</td>';
    // $html .= '<td>中</td>';
    // $html .= '<td>高</td>';
    // //$html .= '<td>他</td>';
    // $html .= '<td>特・幼</td>';
    // $html .= '<td>計</td>';

    $html .= '<td><span class="">18℃未満</span></td>';
    $html .= '<td><span class="">28℃超</span></td>';
    $html .= '</tr>';

    // contents
    foreach ($arr_data as $k => $v) {

        $class = '';
        if ($k == 1) $class = ' content-head';

        $html .= '<tr class="content' . $class . '">';
        $html .= '<td class="area">' . $v['air_summer_place_name'] . '</td>';
        // $html .= '<td>'.$v['air_summer_school_type_01'].'</td>';
        // $html .= '<td>'.$v['air_summer_school_type_02'].'</td>';
        // $html .= '<td>'.$v['air_summer_school_type_03'].'</td>';
        // $html .= '<td>'.$v['air_summer_school_type_04'].'</td>';
        // $html .= '<td>'.$v['air_summer_school_type_total'].'</td>';

        // 平均気温18℃未満
        $html .= '<td>' . $v['air_summer_temperature_room_01'] . '</td>';

        // 平均気温28℃超
        $html .= '<td>' . $v['air_summer_temperature_room_02'] . '</td>';

        // 外気との差
        $html .= '<td>' . $v['air_summer_temperature_difference'] . '</td>';

        // 相対湿度
        $html .= '<td>' . $v['air_summer_humidity_room'] . '</td>';

        // 二酸化炭素
        $html .= '<td>' . $v['air_summer_co2'] . '</td>';

        // 浮遊粉じん
        $html .= '<td>' . $v['air_summer_dust'] . '</td>';

        $html .= '<td>' . $v['air_summer_place_name'] . '</td>';
        $html .= '</tr>';
    }

    // total
    $html .= '<tr class="total">';
    $html .= '<td class="area">合　計</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'air_summer_school_type_01')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'air_summer_school_type_02')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'air_summer_school_type_03')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'air_summer_school_type_04')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'air_summer_school_type_total')).'</td>';

    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_temperature_room_01')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_temperature_room_02')) . '</td>';

    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_temperature_difference')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_humidity_room')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_co2')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'air_summer_dust')) . '</td>';

    $html .= '<td class="area">合　計</td>';
    $html .= '</tr>';

    $html .= '</table>';
    return $html;
};

function setData($arr_post)
{
    $record = new \RecordClass;
    $obj = new \CommonClass();
    $area = $record->getArea();
    $school_type = $record->getSchoolType();
    $school_lists = $obj->getSchoolList($area, $school_type);

    $arr = array();

    foreach ($school_lists as $school_k => $school_v) {

        $arr[$school_k] = array();
        $arr[$school_k]['air_summer_place_name'] = $school_v['name'];
        // $arr[$school_k]['air_summer_school_type_01'] = 0;
        // $arr[$school_k]['air_summer_school_type_02'] = 0;
        // $arr[$school_k]['air_summer_school_type_03'] = 0;
        // $arr[$school_k]['air_summer_school_type_04'] = 0;
        // $arr[$school_k]['air_summer_school_type_total'] = 0;

        $arr[$school_k]['air_summer_temperature_room_01'] = 0;        // 平均室温18℃未満
        $arr[$school_k]['air_summer_temperature_room_02'] = 0;        // 平均室温28℃超

        $arr[$school_k]['air_summer_temperature_difference'] = 0;     // 外気との差
        $arr[$school_k]['air_summer_humidity_room'] = 0;              // 相対湿度（室内湿度（30分後））
        $arr[$school_k]['air_summer_co2'] = 0;                        // 二酸化炭素
        $arr[$school_k]['air_summer_dust'] = 0;                       // 浮遊粉じん

        // 学校重複チェック用
        $arr_school = array();
        $dup_flg = 0;

        foreach ($arr_post as $k => $v) {
            $id = $v->ID;

            // 学校名
            $field = 'air_summer_school_name';
            $school_name = get_field($field, $id);

            // 投稿データに学校名がある場合、処理を続ける
            if ($school_v['name'] == $school_name) {

                if (get_field($field, $id)) {
                    if (in_array(get_field($field, $id), $arr_school)) {
                        $dup_flg = 1;
                    } else {
                        $arr_school[] = get_field($field, $id);
                    }
                }

                // 学校種別
                if ($dup_flg == 0) {

                    // $field = 'air_summer_school_type';
                    // if (get_field($field, $id) && get_field($field, $id) == '01') {
                    //     $arr[$school_k][$field . '_01'] += 1;
                    //     $arr[$school_k][$field . '_total'] += 1;
                    // }
                    // if (get_field($field, $id) && get_field($field, $id) == '02') {
                    //     $arr[$school_k][$field . '_02'] += 1;
                    //     $arr[$school_k][$field . '_total'] += 1;
                    // }
                    // if (get_field($field, $id) && get_field($field, $id) == '03') {
                    //     $arr[$school_k][$field . '_03'] += 1;
                    //     $arr[$school_k][$field . '_total'] += 1;
                    // }
                    // if (get_field($field, $id) && get_field($field, $id) == '04') {
                    //     $arr[$school_k][$field . '_04'] += 1;
                    //     $arr[$school_k][$field . '_total'] += 1;
                    // }

                    // 室温
                    $field = 'air_summer_temperature_room';

                    // 平均室温18℃未満
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 18) {
                        $arr[$school_k]['air_summer_temperature_room_01'] += 1;
                    }

                    // 平均室温28℃超
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 28) {
                        $arr[$school_k]['air_summer_temperature_room_02'] += 1;
                    }

                    // 外気との差
                    $field = 'air_summer_temperature_difference';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) >= 5) {
                        $arr[$school_k][$field] += 1;
                    }

                    // 相対湿度（室内湿度（30分後））
                    $field = 'air_summer_humidity_room';
                    if (
                        get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 30
                        || get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 80
                    ) {
                        $arr[$school_k][$field] += 1;
                    }

                    // 二酸化炭素1500ppm超の場合をカウント
                    $count_co2 = 0;

                    // 二酸化炭素(始業時)
                    $field = 'air_summer_co2_1';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 1500) {
                        $count_co2 = 1;
                    }
                    // 二酸化炭素(15分後)
                    $field = 'air_summer_co2_2';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 1500) {
                        $count_co2 = 1;
                    }
                    // 二酸化炭素(30分後)
                    $field = 'air_summer_co2_3';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 1500) {
                        $count_co2 = 1;
                    }
                    // 二酸化炭素(終業時)
                    $field = 'air_summer_co2_4';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 1500) {
                        $count_co2 = 1;
                    }
                    if ($count_co2 == 1) {
                        $arr[$school_k]['air_summer_co2'] += 1;
                    }

                    // 浮遊粉じん（0.1㎎/m3より↑）
                    $field = 'air_summer_dust';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 0.1) {
                        $arr[$school_k][$field] += 1;
                    }
                }
            }
        }
        //unset($area[$school_k]);
    }
    return $arr;
}

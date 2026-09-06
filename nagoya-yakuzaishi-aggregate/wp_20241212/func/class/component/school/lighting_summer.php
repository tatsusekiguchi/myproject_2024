<?php

namespace lighting_summer_school;

function makeHtml($arr_post)
{
    $arr_data = setData($arr_post);

    $html = '';
    $recordClass = new \RecordClass();
    $html .= '<table class="lighting_summer" border="0">';

    // header
    // 1行目
    $html .= '<tr class="head">';
    $html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
    //$html .= '<td colspan="5" class="sch-head">検査校数</td>';
    $html .= '<td colspan="3" class="weather-head">天候</td>';
    $html .= '<td colspan="2" class="lx-head">照度計</td>';
    $html .= '<td rowspan="2"><span class="tate">カーテンが<br>無い学校</span></td>';
    // $html .= '<td colspan="3" class="bb-head">黒板</td>';
    // $html .= '<td colspan="3" class="room-head">教室</td>';
    $html .= '<td colspan="2" class="bb-head">黒板</td>';
    $html .= '<td colspan="2" class="room-head">教室</td>';
    $html .= '<td colspan="4">まぶしさ</td>';
    $html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
    $html .= '</tr>';

    // 2行目
    $html .= '<tr class="head2">';
    //$html .= '<td rowspan="2">&nbsb;</td>';
    // $html .= '<td>小</td>';
    // $html .= '<td>中</td>';
    // $html .= '<td>高</td>';
    // //$html .= '<td>他</td>';
    // $html .= '<td class="tate">特・幼</td>';
    // $html .= '<td>計</td>';
    $html .= '<td>晴</td>';
    $html .= '<td>曇</td>';
    $html .= '<td>雨</td>';
    $html .= '<td>自校</td>';
    $html .= '<td>他校</td>';
    //$html .= '<td></td>';
    //$html .= '<td>40W×2本未満</td>';
    $html .= '<td>300Lx未満</td>';
    $html .= '<td class="small"><span class="small">最大:最小比<br>10:1より↑</span></td>';
    //$html .= '<td>40W×9本未満</td>';
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

        $html .= '<tr class="content' . $class . '">';
        $html .= '<td class="area">' . $v['lighting_summer_place_name'] . '</td>';
        // $html .= '<td>'.$v['lighting_summer_school_type_01'].'</td>';
        // $html .= '<td>'.$v['lighting_summer_school_type_02'].'</td>';
        // $html .= '<td>'.$v['lighting_summer_school_type_03'].'</td>';
        // $html .= '<td>'.$v['lighting_summer_school_type_04'].'</td>';
        // $area_id =  sprintf('%02d', $k);
        // $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '01') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['lighting_summer_school_type_01'] . '</a></td>';
        // $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '02') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['lighting_summer_school_type_02'] . '</a></td>';
        // $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '03') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['lighting_summer_school_type_03'] . '</a></td>';
        // $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '04') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['lighting_summer_school_type_04'] . '</a></td>';

        // $html .= '<td>'.$v['lighting_summer_school_type_total'].'</td>';
        $html .= '<td>' . $v['lighting_summer_weather_s'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_weather_c'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_weather_r'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_illuminometer_type_own'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_illuminometer_type_other'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_is_curtain'] . '</td>';
        //$html .= '<td>'.$v['lighting_summer_light_blackboard_w'].'</td>';
        $html .= '<td>' . $v['lighting_summer_light_blackboard_min'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_light_blackboard_minmax'] . '</td>';
        //$html .= '<td>'.$v['lighting_summer_light_classroom_w'].'</td>';
        $html .= '<td>' . $v['lighting_summer_light_classroom_min'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_light_classroom_minmax'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_glare_bb'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_glare_desk'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_glare_tv'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_glare_disp'] . '</td>';
        $html .= '<td>' . $v['lighting_summer_place_name'] . '</td>';
        $html .= '</tr>';
    }

    // total
    $html .= '<tr class="total">';
    $html .= '<td class="area">合　計</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_01')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_02')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_03')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_04')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_school_type_total')).'</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_weather_s')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_weather_c')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_weather_r')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_illuminometer_type_own')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_illuminometer_type_other')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_is_curtain')) . '</td>';
    //$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_w')).'</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_min')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_light_blackboard_minmax')) . '</td>';
    //$html .= '<td>'.array_sum(array_column($arr_data, 'lighting_summer_light_classroom_w')).'</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_light_classroom_min')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_light_classroom_minmax')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_glare_bb')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_glare_desk')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_glare_tv')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'lighting_summer_glare_disp')) . '</td>';
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
    $cat = 'lighting_summer';

    foreach ($school_lists as $school_k => $school_v) {

        $arr[$school_k] = array();
        $arr[$school_k][$cat . '_place_name'] = $school_v['name'];
        // $arr[$school_k][$cat.'_school_type_01'] = 0;
        // $arr[$school_k][$cat.'_school_type_02'] = 0;
        // $arr[$school_k][$cat.'_school_type_03'] = 0;
        // $arr[$school_k][$cat.'_school_type_04'] = 0;
        // $arr[$school_k][$cat.'_school_type_total'] = 0;
        $arr[$school_k]['lighting_summer_weather_s'] = 0;
        $arr[$school_k]['lighting_summer_weather_c'] = 0;
        $arr[$school_k]['lighting_summer_weather_r'] = 0;
        $arr[$school_k]['lighting_summer_illuminometer_type_own'] = 0;
        $arr[$school_k]['lighting_summer_illuminometer_type_other'] = 0;
        $arr[$school_k]['lighting_summer_is_curtain'] = 0;
        //$arr[$school_k]['lighting_summer_light_blackboard_w'] = 0;
        $arr[$school_k]['lighting_summer_light_blackboard_min'] = 0;
        $arr[$school_k]['lighting_summer_light_blackboard_minmax'] = 0;
        //$arr[$school_k]['lighting_summer_light_classroom_w'] = 0;
        $arr[$school_k]['lighting_summer_light_classroom_min'] = 0;
        $arr[$school_k]['lighting_summer_light_classroom_minmax'] = 0;
        $arr[$school_k]['lighting_summer_glare_bb'] = 0;
        $arr[$school_k]['lighting_summer_glare_desk'] = 0;
        $arr[$school_k]['lighting_summer_glare_tv'] = 0;
        $arr[$school_k]['lighting_summer_glare_disp'] = 0;

        // 学校重複チェック用
        $arr_school = array();

        foreach ($arr_post as $k => $v) {
            $id = $v->ID;
            $dup_flg = 0;

            // 学校名
            $field = $cat . '_school_name';
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

                    // 天候
                    $field = 'lighting_summer_weather';
                    if (get_field($field, $id) && get_field($field, $id) == '晴') {
                        $arr[$school_k]['lighting_summer_weather_s'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == '曇') {
                        $arr[$school_k]['lighting_summer_weather_c'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == '雨') {
                        $arr[$school_k]['lighting_summer_weather_r'] += 1;
                    }

                    // 照度計
                    $field = 'lighting_summer_illuminometer_type';
                    if (get_field($field, $id) && get_field($field, $id) == '自校') {
                        $arr[$school_k]['lighting_summer_illuminometer_type_own'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == '借用') {
                        $arr[$school_k]['lighting_summer_illuminometer_type_other'] += 1;
                    }

                    // カーテン
                    $field = 'lighting_summer_is_curtain';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }

                    // 黒板
                    // 40W-本数
                    // $field  = 'lighting_summer_light_blackboard_w';
                    // $field2 = 'lighting_summer_light_blackboard_num';
                    // if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 40) &&
                    //      (get_field($field2, $id) && $obj::checkData(get_field($field2, $id)) < 2)) {
                    //     $arr[$school_k][$field] += 1;
                    // }
                    // 300LX
                    $field  = 'lighting_summer_light_blackboard_min';
                    if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 300)) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 最大・最小比
                    $field  = 'lighting_summer_light_blackboard_minmax';
                    if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 10)) {
                        $arr[$school_k][$field] += 1;
                    }

                    // 教室
                    // 40W-本数
                    // $field  = 'lighting_summer_light_classroom_w';
                    // $field2 = 'lighting_summer_light_classroom_num';
                    // if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 40) &&
                    // (get_field($field2, $id) && $obj::checkData(get_field($field2, $id)) < 9)) {
                    //     $arr[$school_k][$field] += 1;
                    // }
                    // 300LX
                    $field  = 'lighting_summer_light_classroom_min';
                    if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 300)) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 最大・最小比
                    $field  = 'lighting_summer_light_classroom_minmax';
                    if ((get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 10)) {
                        $arr[$school_k][$field] += 1;
                    }

                    // まぶしさ
                    $field = 'lighting_summer_glare';
                    if (get_field($field, $id) && get_field($field, $id) == '黒板') {
                        $arr[$school_k]['lighting_summer_glare_bb'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == '机上') {
                        $arr[$school_k]['lighting_summer_glare_desk'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == 'テレビ') {
                        $arr[$school_k]['lighting_summer_glare_tv'] += 1;
                    }
                    if (get_field($field, $id) && get_field($field, $id) == 'ディスプレー') {
                        $arr[$school_k]['lighting_summer_glare_disp'] += 1;
                    }
                }
            }
        }
        //unset($area[$school_k]);
    }
    return $arr;
}

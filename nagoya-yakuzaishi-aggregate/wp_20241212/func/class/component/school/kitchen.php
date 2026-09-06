<?php

namespace kitchen_school;

function makeHtml($arr_post)
{
    $arr_data = setData($arr_post);

    $html = '';
    $cat = 'kitchen';

    $html .= '<table class="' . $cat . '" border="0">';

    // header
    // 1行目
    $html .= '<tr class="head">';
    $html .= '<td rowspan="3" class="area empty-l">&nbsp;</td>';
    //$html .= '<td rowspan="3" class=""><span class="tate">検査校数</span></td>';
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

        $html .= '<tr class="content' . $class . '">';
        $html .= '<td class="area">' . $v[$cat . '_place_name'] . '</td>';
        // $html .= '<td>'.$v[$cat.'_school_type_total'].'</td>';
        //$area_id =  sprintf('%02d', $k);
        //$html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '01') . '"' . $recordClass->setSchoolListLinkTarget() . '>' . $v[$cat.'_school_type_total'] . '</a></td>';

        $html .= '<td>' . $v['kitchen_is_record'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_sychrometer'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_toilet'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_restroom'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_shower'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_sterilizer'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_disinfectant'] . '</td>';
        $html .= '<td>' . $v['kitchen_is_brush'] . '</td>';
        $html .= '<td>' . $v['kitchen_temperature'] . '</td>';
        $html .= '<td>' . $v['kitchen_humidity'] . '</td>';
        $html .= '<td>' . $v['kitchen_starch_pan'] . '</td>';
        $html .= '<td>' . $v['kitchen_fat_pan'] . '</td>';
        $html .= '<td>' . $v['kitchen_starch_mid'] . '</td>';
        $html .= '<td>' . $v['kitchen_fat_mid'] . '</td>';
        $html .= '<td>' . $v['kitchen_starch_small'] . '</td>';
        $html .= '<td>' . $v['kitchen_fat_small'] . '</td>';
        $html .= '<td>' . $v['kitchen_coli'] . '</td>';
        $html .= '<td class="wide">' . $v['kitchen_luminosity_kitchen_min'] . '</td>';
        $html .= '<td class="area">' . $v[$cat . '_place_name'] . '</td>';
        $html .= '</tr>';
    }

    // total
    $html .= '<tr class="total">';
    $html .= '<td class="area">合　計</td>';
    //$html .= '<td>' . array_sum(array_column($arr_data, $cat . '_school_type_total')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_record')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_sychrometer')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_toilet')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_restroom')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_shower')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_sterilizer')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_disinfectant')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_is_brush')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_temperature')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_humidity')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_starch_pan')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_fat_pan')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_starch_mid')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_fat_mid')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_starch_small')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_fat_small')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_coli')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'kitchen_luminosity_kitchen_min')) . '</td>';
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
    $cat = 'kitchen';

    foreach ($school_lists as $school_k => $school_v) {

        $arr[$school_k] = array();
        $arr[$school_k][$cat . '_place_name'] = $school_v['name'];
        //$arr[$school_k][$cat . '_school_type_total'] = 0;
        $arr[$school_k]['kitchen_is_record'] = 0;
        $arr[$school_k]['kitchen_is_sychrometer'] = 0;
        $arr[$school_k]['kitchen_is_toilet'] = 0;
        $arr[$school_k]['kitchen_is_restroom'] = 0;
        $arr[$school_k]['kitchen_is_shower'] = 0;
        $arr[$school_k]['kitchen_is_sterilizer'] = 0;
        $arr[$school_k]['kitchen_is_disinfectant'] = 0;
        $arr[$school_k]['kitchen_is_brush'] = 0;
        $arr[$school_k]['kitchen_temperature'] = 0;
        $arr[$school_k]['kitchen_humidity'] = 0;

        // 食器
        $arr[$school_k]['kitchen_starch_pan'] = 0;
        $arr[$school_k]['kitchen_fat_pan'] = 0;
        $arr[$school_k]['kitchen_starch_mid'] = 0;
        $arr[$school_k]['kitchen_fat_mid'] = 0;
        $arr[$school_k]['kitchen_starch_small'] = 0;
        $arr[$school_k]['kitchen_fat_small'] = 0;

        // マナ板
        $arr[$school_k]['kitchen_coli'] = 0;

        // 照明
        $arr[$school_k]['kitchen_luminosity_kitchen_min'] = 0;

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
                if (get_field($cat . '_school_name', $id)) {
                    if (in_array(get_field($cat . '_school_name', $id), $arr_school)) {
                        $dup_flg = 1;
                    } else {
                        $arr_school[] = get_field($cat . '_school_name', $id);
                    }
                }

                // 学校種別
                if ($dup_flg == 0) {

                    // 日常点検
                    $field = 'kitchen_is_record';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 乾湿計
                    $field = 'kitchen_is_sychrometer';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 便所
                    $field = 'kitchen_is_toilet';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 休憩室
                    $field = 'kitchen_is_toilet';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // シャワー
                    $field = 'kitchen_is_shower';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 手洗消毒器
                    $field = 'kitchen_is_sterilizer';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 消毒薬品
                    $field = 'kitchen_is_disinfectant';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // ツメブラシ
                    $field = 'kitchen_is_brush';
                    if (get_field($field, $id) && get_field($field, $id) == '無') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 温度
                    $field = 'kitchen_temperature';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 25) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 湿度
                    $field = 'kitchen_humidity';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 80) {
                        $arr[$school_k][$field] += 1;
                    }

                    // パン皿
                    // 澱粉
                    $field = 'kitchen_starch_pan';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 脂肪
                    $field = 'kitchen_fat_pan';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }

                    // 中食器皿
                    // 澱粉
                    $field = 'kitchen_starch_mid';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 脂肪
                    $field = 'kitchen_fat_mid';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }

                    // 小食器皿
                    // 澱粉
                    $field = 'kitchen_starch_small';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }
                    // 脂肪
                    $field = 'kitchen_fat_small';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id))) {
                        $arr[$school_k][$field] += 1;
                    }

                    // マナ板
                    $field = 'kitchen_coli';
                    if (get_field($field, $id) && get_field($field, $id) == 'あり') {
                        $arr[$school_k][$field] += 1;
                    }
                    // 照度
                    $field = 'kitchen_luminosity_kitchen_min';
                    if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) < 200) {
                        $arr[$school_k][$field] += 1;
                    }
                }
            }
        }
        //unset($area[$school_k]);
    }
    return $arr;
}

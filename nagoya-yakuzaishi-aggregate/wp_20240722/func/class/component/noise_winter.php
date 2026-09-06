<?php
namespace noise_winter;
function makeHtml($arr_post) {
    $arr_data = setData($arr_post);

    $html = '';
    $recordClass = new \RecordClass();
    $html .= '<table class="noise_winter noise" border="0">';

    // header
    // 1行目
    $html .= '<tr class="head">';
    $html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
    $html .= '<td colspan="5">検査校数</td>';
    $html .= '<td rowspan="2"><span class="tate">二重窓などの<br>防音設備</span></td>';
    $html .= '<td rowspan="2"><span class="tate">換気設備</span></td>';
    $html .= '<td colspan="2">騒音について</td>';
    $html .= '<td colspan="6">測定時の最大音</td>';
    $html .= '<td>窓閉鎖</td>';
    $html .= '<td>窓開放</td>';
    $html .= '<td rowspan="2" class="area empty-r">&nbsp;</td>';
    $html .= '</tr>';

    // 2行目
    $html .= '<tr class="head2">';
    $html .= '<td>小</td>';
    $html .= '<td>中</td>';
    $html .= '<td>高</td>';
    //$html .= '<td>他</td>';
    $html .= '<td>特・幼</td>';
    $html .= '<td>計</td>';
    $html .= '<td><span class="tate">騒音源が<br>ある</span></td>';
    $html .= '<td><span class="tate vlh">授業の<br>中断が<br>よくある</span></td>';
    $html .= '<td><span class="tate">自動車</span></td>';
    $html .= '<td><span class="tate">列車</span></td>';
    $html .= '<td><span class="tate">航空機</span></td>';
    $html .= '<td><span class="tate">工事</span></td>';
    $html .= '<td><span class="tate">別教室から</span></td>';
    $html .= '<td><span class="tate">その他</span></td>';
    $html .= '<td>LAeq 50db より↑</td>';
    $html .= '<td>LAeq 55db より↑</td>';
    $html .= '</tr>';

    // contents
    foreach ($arr_data as $k => $v) {

        $class = '';
        if ($k == 1) $class = ' content-head';

        $html .= '<tr class="content'.$class.'">';
        $html .= '<td class="area">'.$v['noise_winter_place_name'].'区</td>';
        // $html .= '<td>'.$v['noise_winter_school_type_01'].'</td>';
        // $html .= '<td>'.$v['noise_winter_school_type_02'].'</td>';
        // $html .= '<td>'.$v['noise_winter_school_type_03'].'</td>';
        // $html .= '<td>'.$v['noise_winter_school_type_04'].'</td>';
        $area_id =  sprintf('%02d', $k);
        $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '01') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['noise_winter_school_type_01'] . '</a></td>';
        $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '02') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['noise_winter_school_type_02'] . '</a></td>';
        $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '03') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['noise_winter_school_type_03'] . '</a></td>';
        $html .= '<td class="school-type"><a href="' . $recordClass->makeSchoolUrl($area_id, '04') . '"'.$recordClass->setSchoolListLinkTarget().'>' . $v['noise_winter_school_type_04'] . '</a></td>';
        $html .= '<td>'.$v['noise_winter_school_type_total'].'</td>';

        $html .= '<td>'.$v['noise_winter_soundproof'].'</td>';

        $html .= '<td>'.$v['noise_winter_ventilation'].'</td>';

        $html .= '<td>'.$v['noise_winter_source'].'</td>';
        $html .= '<td>'.$v['noise_winter_airplane'].'</td>';

        $html .= '<td>'.$v['noise_winter_maximum_01'].'</td>';
        $html .= '<td>'.$v['noise_winter_maximum_02'].'</td>';
        $html .= '<td>'.$v['noise_winter_maximum_03'].'</td>';
        $html .= '<td>'.$v['noise_winter_maximum_04'].'</td>';
        $html .= '<td>'.$v['noise_winter_maximum_06'].'</td>';
        $html .= '<td>'.$v['noise_winter_maximum_05'].'</td>';
        
        $html .= '<td>'.$v['noise_winter_close_measuring_level'].'</td>';
        $html .= '<td>'.$v['noise_winter_open_measuring_level'].'</td>';

        $html .= '<td>'.$v['noise_winter_place_name'].'区</td>';
        $html .= '</tr>';
    }

    // total
    $html .= '<tr class="total">';
    $html .= '<td class="area">合　計</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_school_type_01')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_school_type_02')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_school_type_03')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_school_type_04')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_school_type_total')).'</td>';

    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_soundproof')).'</td>';

    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_ventilation')).'</td>';

    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_source')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_airplane')).'</td>';

    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_01')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_02')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_03')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_04')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_06')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_maximum_05')).'</td>';

    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_close_measuring_level')).'</td>';
    $html .= '<td>'.array_sum(array_column($arr_data, 'noise_winter_open_measuring_level')).'</td>';
    
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
        $arr[$area_k]['noise_winter_place_name'] = '';
        $arr[$area_k]['noise_winter_school_type_01'] = 0;
        $arr[$area_k]['noise_winter_school_type_02'] = 0;
        $arr[$area_k]['noise_winter_school_type_03'] = 0;
        $arr[$area_k]['noise_winter_school_type_04'] = 0;
        $arr[$area_k]['noise_winter_school_type_total'] = 0;

        $arr[$area_k]['noise_winter_soundproof'] = 0;        // 二重窓などの防音設備
        $arr[$area_k]['noise_winter_ventilation'] = 0;       // 換気設備
        $arr[$area_k]['noise_winter_source'] = 0;            // 騒音源
        $arr[$area_k]['noise_winter_airplane'] = 0;          // 授業の中断

        $arr[$area_k]['noise_winter_maximum_01'] = 0;    // 測定時の最大音（自動車）
        $arr[$area_k]['noise_winter_maximum_02'] = 0;    // 測定時の最大音（列車）
        $arr[$area_k]['noise_winter_maximum_03'] = 0;    // 測定時の最大音（航空機）
        $arr[$area_k]['noise_winter_maximum_04'] = 0;    // 測定時の最大音（工事）
        $arr[$area_k]['noise_winter_maximum_06'] = 0;    // 測定時の最大音（別教室から）2024.04.08追加
        $arr[$area_k]['noise_winter_maximum_05'] = 0;    // 測定時の最大音（その他）

        $arr[$area_k]['noise_winter_close_measuring_level'] = 0;    // 窓閉鎖
        $arr[$area_k]['noise_winter_open_measuring_level'] = 0;    // 窓開放

        // 学校重複チェック用
        $arr_school = array();
        $dup_flg = 0;

        foreach ($arr_post as $k => $v) {
            $id = $v->ID;
            $ward = get_field('noise_winter_ward', $id);
            if (!$ward) continue;
            $arr[$area_k]['noise_winter_place_name'] = $area_v;
            if ($ward != $area_v) continue;

            // 学校名
            $field = 'noise_winter_school_name';
            if (get_field($field, $id)) {
                if (in_array(get_field($field, $id), $arr_school)) {
                    $dup_flg = 1;
                } else {
                    $arr_school[] = get_field($field, $id);
                }
            }

            // 学校種別
            if ($dup_flg == 0) {

                $field = 'noise_winter_school_type';
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

                // 二重窓などの防音設備
                $field = 'noise_winter_soundproof';
                if (get_field($field, $id) && get_field($field, $id) == '有') {
                    $arr[$area_k][$field] += 1;
                }
                
                // 換気設備
                $field = 'noise_winter_ventilation';
                if (get_field($field, $id) && get_field($field, $id) == '無') {
                    $arr[$area_k][$field] += 1;
                }
                
                // 騒音について
                // 騒音源
                $field = 'noise_winter_source';
                if (get_field($field, $id) && get_field($field, $id) == 'ある') {
                    $arr[$area_k][$field] += 1;
                }

                // 授業が中断
                $field = 'noise_winter_airplane';
                if (get_field($field, $id) && get_field($field, $id) == '良くある') {
                    $arr[$area_k][$field] += 1;
                }
                
                // 測定時の最大音
                // 車
                $field = 'noise_winter_maximum';
                if (get_field($field, $id) && get_field($field, $id) == '自動車') {
                    $arr[$area_k][$field.'_01'] += 1;
                }
                if (get_field($field, $id) && get_field($field, $id) == '列車') {
                    $arr[$area_k][$field.'_02'] += 1;
                }
                if (get_field($field, $id) && get_field($field, $id) == '航空機') {
                    $arr[$area_k][$field.'_03'] += 1;
                }
                if (get_field($field, $id) && get_field($field, $id) == '工事') {
                    $arr[$area_k][$field.'_04'] += 1;
                }
                if (get_field($field, $id) && get_field($field, $id) == '別教室から') {
                    $arr[$area_k][$field.'_06'] += 1;
                }
                if (get_field($field, $id) && get_field($field, $id) == 'その他') {
                    $arr[$area_k][$field.'_05'] += 1;
                }

                //窓閉鎖
                $field = 'noise_winter_close_measuring_level';
                if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 50) {
                    $arr[$area_k][$field] += 1;
                }
                
                //窓開放
                $field = 'noise_winter_open_measuring_level';
                if (get_field($field, $id) && $obj::checkData(get_field($field, $id)) > 55) {
                    $arr[$area_k][$field] += 1;
                }
            }

            
            
        }
        unset($area[$area_k]);
    }
    return $arr;
}

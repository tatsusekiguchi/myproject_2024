<?php
namespace dispensary;
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
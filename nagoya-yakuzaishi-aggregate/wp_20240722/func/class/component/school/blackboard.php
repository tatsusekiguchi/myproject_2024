<?php

namespace blackboard_school;

function makeHtml($arr_post)
{
    $arr_data = setData($arr_post);

    $html = '';
    $html .= '<table class="blackboard" border="0">';

    // header
    // 1行目
    $html .= '<tr class="head">';
    $html .= '<td rowspan="2" class="area empty-l">&nbsp;</td>';
    //$html .= '<td colspan="5">検査校数</td>';
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
    // $html .= '<td>小</td>';
    // $html .= '<td>中</td>';
    // $html .= '<td>高</td>';
    // //$html .= '<td>他</td>';
    // $html .= '<td>特・幼</td>';
    // $html .= '<td>計</td>';
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

        $html .= '<tr class="content' . $class . '">';
        $html .= '<td class="area">' . $v['blackboard_place_name'] . '</td>';
        // $html .= '<td>'.$v['blackboard_school_type_01'].'</td>';
        // $html .= '<td>'.$v['blackboard_school_type_02'].'</td>';
        // $html .= '<td>'.$v['blackboard_school_type_03'].'</td>';
        // $html .= '<td>'.$v['blackboard_school_type_04'].'</td>';
        // $html .= '<td>'.$v['blackboard_school_type_total'].'</td>';
        $html .= '<td>' . $v['blackboard_appearance_check'] . '</td>';
        $html .= '<td>' . $v['blackboard_appearance_check_f'] . '</td>';
        $html .= '<td>' . $v['blackboard_status_check'] . '</td>';
        $html .= '<td>' . $v['blackboard_status_check_f'] . '</td>';
        $html .= '<td>' . $v['blackboard_wipe_check'] . '</td>';
        $html .= '<td>' . $v['blackboard_wipe_check_f'] . '</td>';
        $html .= '<td>' . $v['blackboard_cleaner_check'] . '</td>';
        $html .= '<td>' . $v['blackboard_cleaner_check_f'] . '</td>';
        $html .= '<td>' . $v['blackboard_color_check'] . '</td>';
        $html .= '<td>' . $v['blackboard_color_check_f'] . '</td>';
        $html .= '<td>' . $v['blackboard_place_name'] . '</td>';
        $html .= '</tr>';
    }

    // total
    $html .= '<tr class="total">';
    $html .= '<td class="area">合　計</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_01')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_02')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_03')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_04')).'</td>';
    // $html .= '<td>'.array_sum(array_column($arr_data, 'blackboard_school_type_total')).'</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_appearance_check')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_appearance_check_f')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_status_check')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_status_check_f')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_wipe_check')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_wipe_check_f')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_cleaner_check')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_cleaner_check_f')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_color_check')) . '</td>';
    $html .= '<td>' . array_sum(array_column($arr_data, 'blackboard_color_check_f')) . '</td>';
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
    $cat = 'blackboard';

    foreach ($school_lists as $school_k => $school_v) {

        $arr[$school_k] = array();
        $arr[$school_k][$cat . '_place_name'] = $school_v['name'];
        // $arr[$school_k][$cat.'_school_type_01'] = 0;
        // $arr[$school_k][$cat.'_school_type_02'] = 0;
        // $arr[$school_k][$cat.'_school_type_03'] = 0;
        // $arr[$school_k][$cat.'_school_type_04'] = 0;
        // $arr[$school_k][$cat.'_school_type_total'] = 0;
        $arr[$school_k]['blackboard_appearance_check'] = 0;
        $arr[$school_k]['blackboard_appearance_check_f'] = 0;
        $arr[$school_k]['blackboard_status_check'] = 0;
        $arr[$school_k]['blackboard_status_check_f'] = 0;
        $arr[$school_k]['blackboard_wipe_check'] = 0;
        $arr[$school_k]['blackboard_wipe_check_f'] = 0;
        $arr[$school_k]['blackboard_cleaner_check'] = 0;
        $arr[$school_k]['blackboard_cleaner_check_f'] = 0;
        $arr[$school_k]['blackboard_color_check'] = 0;
        $arr[$school_k]['blackboard_color_check_f'] = 0;

        // 学校重複チェック用
        $arr_school = array();
        $dup_flg = 0;

        foreach ($arr_post as $k => $v) {
            $id = $v->ID;

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

                    // $field = $cat . '_school_type';
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

                    // 外観の状況
                    $field = 'blackboard_appearance_check';
                    $flg = 0;
                    if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
                        $flg = 1;
                        $arr[$school_k][$field] += 1;
                    }
                    if (!$flg) {
                        if (get_field($field, $id)) {
                            $field = 'blackboard_appearance_check_f';
                            $arr[$school_k][$field] += 1;
                        }
                    }

                    // 黒板面の拭き取り状況
                    $field = 'blackboard_status_check';
                    $flg = 0;
                    if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
                        $flg = 1;
                        $arr[$school_k][$field] += 1;
                    }
                    if (!$flg) {
                        $field = 'blackboard_wiping_status_text';
                        if (get_field($field, $id)) {
                            $field = 'blackboard_status_check_f';
                            $arr[$school_k][$field] += 1;
                        }
                    }

                    // 黒板拭きの状態
                    $field = 'blackboard_wipe_check';
                    $flg = 0;
                    if (get_field($field, $id) && in_array('良', (array)get_field($field, $id), true)) {
                        $flg = 1;
                        $arr[$school_k][$field] += 1;
                    }
                    if (!$flg) {
                        if (get_field($field, $id)) {
                            $field = 'blackboard_wipe_check_f';
                            $arr[$school_k][$field] += 1;
                        }
                    }

                    // 黒板拭きクリーナーの状態
                    $field = 'blackboard_cleaner_check';
                    $flg = 0;
                    if (get_field($field, $id) && in_array('良', (array)get_field($field, $id), true)) {
                        $flg = 1;
                        $arr[$school_k][$field] += 1;
                    }
                    if (!$flg) {
                        if (get_field($field, $id)) {
                            $field = 'blackboard_cleaner_check_f';
                            $arr[$school_k][$field] += 1;
                        }
                    }

                    // 黒板面の色彩
                    $field = 'blackboard_color_check';
                    $flg = 0;
                    if (get_field($field, $id) && in_array('適', (array)get_field($field, $id), true)) {
                        $flg = 1;
                        $arr[$school_k][$field] += 1;
                    }
                    if (!$flg) {
                        $field = 'blackboard_color_text';
                        if (get_field($field, $id)) {
                            $field = 'blackboard_color_check_f';
                            $arr[$school_k][$field] += 1;
                        }
                    }
                }
            }
        }
        //unset($area[$school_k]);
    }

    return $arr;
}

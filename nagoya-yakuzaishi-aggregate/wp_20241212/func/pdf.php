<?php
require '../../../../wp-load.php';
include (dirname(__FILE__).'/../func/tcpdf/tcpdf.php');

$obj = new RecordClass();
//$arr_data = $obj->getData();
$arr_data = '';
// 学校単位の場合
if ($obj->getArea() && $obj->getSchoolType()) {
	$arr_data = $obj->getSchoolData();
} else {
	$arr_data = $obj->getData(true);
}

// var_dump($arr_data);
// exit;
$mode = CommonClass::mode;

$tcpdf = new TCPDF("L", "mm", "A4", true, "UTF-8");
//$tcpdf->SetFont('kozminproregular', "", 10);
$tcpdf->SetFont('kozgopromedium', "", 10);
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
$tcpdf->SetMargins(15, 15, 15);
$tcpdf->SetTitle($obj->getTitle());
$tcpdf->SetAuthor('学校薬剤師委員会');
$tcpdf->AddPage();

//自動改ページをONにする
$margin = 15;
$tcpdf->SetAutoPageBreak(true, $margin);

//$year = ($mode) ? $obj->getYear().'年度' : '';
$title = '';
if ($mode) {
	$title = $obj->getYear().'年度';
	$title .= $obj->getAreaName() ? ' '.$obj->getAreaName().'区' : '';
	$title .= $obj->getSchoolTypeName() ? ' '.$obj->getSchoolTypeName() : '';
} 
$table_title = $obj->getTitle();

$content = <<< EOF
<h1><span class="year">{$title}</span>&nbsp;&nbsp;{$table_title}</h1>
{$arr_data}
EOF;

$css = <<< EOF
<style>
	a {
		color: #000000;
		text-decoration: none;
	}
	h1 {
		text-align: center;
	}
	table {
		padding-top: 5px;
		padding-bottom: 5px;
		border: 2px solid #000;
	}
	table td {
		border :1px solid #000;
		text-align: center;
		vertical-align: middle;
		padding: 10px;
	}
	table td.area {
		width: 40px;
	}
	table tr.total td {
		border-top: 2px double #000;
	}
	table tr.content-head td {
		border-top: 2px double #000;
	}
	table.kitchen td.wide {
		width: 40px;
	}
	table.dispensary td {
		font-size: 93%;
	}
	table.dispensary tr.head td,
	table.dispensary tr.head2 td {
		font-size: 90%;
	}
	table.dispensary tr.head td.small {
		font-size: 85%;
	}
	table.dispensary td.sch-head {
		width: 100px;
	}
	table.dispensary td.sch {
		width: 20px;
	}

	table.lighting_summer tr.head2 td.small {
		font-size: 70%;
	}
	table.lighting_summer tr.head td,
	table.lighting_summer tr.head2 td, {
		font-size: 90%;
	}
	table.lighting_summer td.sch-head {
		width: 100px;
	}
	table.lighting_summer td.weather-head {
		width: 60px;
	}
	table.lighting_summer td.lx-head {
		width: 50px;
	}
	table.lighting_summer td.bb-head,
	table.lighting_summer td.room-head {
		width: 150px;
	}
</style>
EOF;

$html = $css . $content;
$tcpdf->writeHTML($html);

// ファイル名
$y = ($mode) ? $obj->getYear().'_' : '';
$category = $obj->getCategory() ? $obj->getCategory() : '';
$filename = $y.$category.'.pdf';
$tcpdf->Output($filename, 'I');

?>
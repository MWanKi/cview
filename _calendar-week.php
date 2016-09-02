<?php

$year = isset($_GET['year']) ? $_GET['year'] : date('Y'); 
$month = isset($_GET['month']) ? $_GET['month'] : date('m'); 
$day = isset($_GET['day']) ? $_GET['day'] : date('d'); 

$w = date('w',mktime(0,0,0,$month,$day,$year)); 
$m = $day-($w+7)%7;

$data = '<li class="li-week add" data-month='.(int)date("m",strtotime($day-date('d')." day")).'>';
$data .= '  <table class="calendar">';
$data .= '      <tr>';

for ($i=0; $i < 7; $i++) { 
    $data_day = (int)date('d',mktime(0,0,0,$month,$m+$i,$year));

    // 현재달과 지난달 구분하기
    if ($month == date('m') && $data_day == date('d')) {
        $data .= "  <td class='today'><span>$data_day</span></td>";
    } else {
        $data .= "  <td><span>$data_day</span></td>";
    }
}

$data .= '      </tr>';
$data .= '  </table>';
$data .= '</li>';

echo $data;


?>
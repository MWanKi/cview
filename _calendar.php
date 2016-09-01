<?php

// 해당 연, 월의 일수를 계산한다. t -> 월의 총일수 

function getTotalDays ($month, $year) { 
        $date = date ("t",mktime(0,0,1,$month,1,$year)); 
        return $date; 
} 

/* 
해당 연월의 달력을 출력한다. w -> 요일 
date 함수를 사용하여 함수의 인자로 년/ 월이 입력되고 월의 1일을 기준으로 달력의 1일이 위치하는 곳을 지정하게 된다. 

*/ 


function showCalendar ($year, $month, $totalDays) { 

    $firstDay = date ("w", mktime(0,0,0,$month,1,$year)); 

    echo ("<table class='calendar'><tr>");

    $d = mktime(0,0,0, date("m"), 1, date("Y")); //이번달 1일
    $prev_month = strtotime("-1 month", $d); //한달전
    // echo date("Y-m-01", $prev_month ); //지난달 1일
    // echo date("t", $prev_month ); //지난달 말일

$col = 0; 
$tr = 1;
$td = 0;
// for 구문으로 해당 월의 첫번째 요일이 무슨 요일인지를 확인   

for ($i = 0; $i < $firstDay; $i++) { 
    echo ("<td class='not-current'><span>".($i-$firstDay+date("t", $prev_month)+1)."</span></td>"); 
    $col++; 
    $td++; 
} 


for ($j = 1; $j <= $totalDays; $j++) { 

        if ($col == 7) { 
            echo ("</tr>"); 

            if ($j != $totalDays) { 
                echo ("<tr>"); 
                $tr++;
                // $col++; 
            } 
            $col = 0; 
        }

        if ($j == date('d')) {
            echo "<td class='today'> <span>$j</span> </td>"; 
            $col++; 
            $td++; 
        } else {
            echo "<td> <span>$j</span> </td>"; 
            $col++; 
            $td++;     
        }
        
} 

for ($next_day = 1; $next_day < 43-$td; $next_day++) { 

    if ($col == 7) { 
        echo ("</tr>"); 

        if ($next_day != $totalDays) { 
            echo ("<tr>"); 
            $tr++;
        } 
        $col = 0; 
    }

    echo "<td class='not-current'> <span>$next_day</span> </td>"; 
    $col++;     

}

echo (" </tr></table>"); 

} 
if ( isset($_GET['year']) && isset($_GET['month']) ) { 

    $totalDays = getTotalDays($_GET['month'],$_GET['year']); 
    showCalendar($_GET['year'],$_GET['month'],$totalDays); 

} else {

    $year = 2016;
    $month = 9;

    $totalDays = getTotalDays($month,$year); 
    showCalendar($year,$month,$totalDays); 

} 

?> 
<?php

// 해당 연, 월의 일수를 계산한다. t -> 월의 총일수 

function getTotalDays ($month, $year) { 
        $date = date ("t",mktime(0,0,1,$month,1,$year)); 
        return $date; 
} 

function showCalendar ($year, $month, $totalDays) { 

    $firstDay = date ("w", mktime(0,0,0,$month,1,$year)); 

    echo ("<li>");
    echo ("<table class='calendar'><tr>");

    $nowmonth_lastday = date("t"); 
    $lastday = date("t", mktime(0,0,0, $month, 0, $year));

    $col = 0; 
    $tr = 1;
    $td = 0;
    // for 구문으로 해당 월의 첫번째 요일이 무슨 요일인지를 확인   

for ($i = 0; $i < $firstDay; $i++) { 
    echo ("<td class='not-current'><span>".($i-$firstDay+$lastday+1)."</span></td>"); 
    $col++; 
    $td++; 
} 


for ($j = 1; $j <= $totalDays; $j++) { 

    if ($td > 0 && $td%7 == 0) {
        echo ("</tr></table></li><li><table class='calendar'><tr>");
    }

    if ($col == 7) { 
        echo ("</tr>"); 

        if ($j != $totalDays) { 
            echo ("<tr>"); 
            $tr++;
        } 
        $col = 0; 
    }

    if ($j == date('d') && $month == date('m')) {
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
echo ("</li>"); 

} 
if ( isset($_GET['year']) && isset($_GET['month']) ) { 

    $totalDays = getTotalDays($_GET['month'],$_GET['year']); 
    showCalendar($_GET['year'],$_GET['month'],$totalDays); 

} else {

    $year = date('Y');
    $month = date('m');

    $totalDays = getTotalDays($month,$year); 
    showCalendar($year,$month,$totalDays); 

} 

?> 
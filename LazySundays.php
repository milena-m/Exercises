<?php
$firstSunday = date("Y-m-d", strtotime("first Sunday of ".date('M')." ".date('Y').""));

$lastSunday = date("Y-m-d", strtotime("last Sunday of ".date('M')." ".date('Y').""));

$sun = $firstSunday;
$n = 0;

echo "This month's sundays:<br><br>"; 
while ($sun < $lastSunday) {
    $sun = date('Y-m-d', strtotime($firstSunday. " + $n days"));   
    
    $converted =  date("jS F, Y", strtotime($sun));   
    
    echo $converted.'<br />';
    
    $n += 7;
}





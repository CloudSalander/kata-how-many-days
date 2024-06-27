<?php
/*
This solution has timestamp limitation!
*/

define('SECONDS_IN_A_DAY', 86400);

function getDaysDifference(string $date1, string $date2): int {
    $date1_timestamp = strtotime($date1);
    $date2_timestamp = strtotime($date2);
    $days_difference = abs($date1_timestamp - $date2_timestamp);
    return floor($days_difference / SECONDS_IN_A_DAY);
}

$date1 = "18-09-2024";
$date2 = "20-09-2024";

echo "Entre ".$date1." i ".$date2." hi ha ".getDaysDifference($date1,$date2)." dia(es) de diferència";

?>
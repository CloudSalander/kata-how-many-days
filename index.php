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

function isValidDate(string $date): bool {
    /*TODO: This should be a regex, but I'm not expert on regex. 
      I'm sure all of us can search how to do it in ChatGPT so i will try a workaround */
      var_dump($date);
    return strlen($date) == 10 && $date[2] == "/" && $date[5] == "/" && isValidDateFormat($date);
}

function isValidDateFormat(string $date): bool {
    $date_parts = explode("/",$date);
    //TODO: Validate day,month,year range...
    //if(int($date_parts[0])
    return false;
}

$date1 = readline("Enter 1 date(dd/mm/yyyy)");
$date2 = readline("Another one!(dd/mm/yyyy)");

if(isValidDate($date1) && isValidDate($date2)) {
    echo "Entre ".$date1." i ".$date2." hi ha ".getDaysDifference($date1,$date2)." dia(es) de diferència";
}
?>
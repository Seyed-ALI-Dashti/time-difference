<?php 


// time input
$year = 1401;
$month = 12;
$day = 12;
$hour = 8;
$minute = 20;

// time output
$year1 = 1401;
$month1 = 12;
$day1 = 12;
$hour1 = 15;
$minute1 = 0;

// --------------------------------------------------------

// minutes diff :
if($minute1 < $minute){
    $hour1--;
    $minuteDiff = ($minute1 + 60) - $minute;
} 
else{
    $minuteDiff = $minute1 - $minute;
}
// echo $minuteDiff;

// --------------------------------------------------------
// hour diff :
if($hour1 < $hour){
    $day1--;
    $hourDiff = ($hour1 + 24) - $hour;
}
else {
    $hourDiff = $hour1 - $hour;
}
// echo $hourDiff;

// --------------------------------------------------------
// day diff :
if($day1 < $day){
    $month1--;
    // $dayDiff = ($day1 + 30) - $day;
    if($month1 < 7 && $month == 12 && $year % 4 == 3){
        $dayDiff = ($day1 + 31) - $day;
    }
    elseif($month1 < 7 && $month == 12){
        $dayDiff = ($day1 + 30) - $day;
    }
    elseif($month1 < 7){
        $dayDiff = ($day1 + 31) - $day;
    }
    elseif($month1 > 7 && $month1 < 12){
        $dayDiff = ($day1 + 30) - $day;
    }
    elseif ($month1 == 12 && $year1 % 4 == 3){
        $dayDiff = ($day1 + 30) - $day;
    }
    else{
        $dayDiff = ($day1 + 29) - $day;
    }
}
else{
    $dayDiff = $day1 - $day;
}
// echo $dayDiff;

// --------------------------------------------------------
// mounth diff :
if($month1 < $month){
    $year1--;
    $monthDiff = ($month1 + 12) - $month;
}
else{
    $monthDiff = $month1 - $month;
}
// echo $monthDiff;

// --------------------------------------------------------

// year diff :
$yearDiff = $year1 - $year;

// ********************************************************

// javab :
echo $yearDiff . '/' . $monthDiff . '/' . $dayDiff . '  ' . $hourDiff . ':' . $minuteDiff;

// echo 1407 % 4;
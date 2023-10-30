<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <?php include '../../myfunction.php'; ?>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            width: 60px;
            height: 50px;
            text-align: center;
        }

        th {
            font-size: 20px;
        }

        td {
            font-size: 15px;
        }

        th:first-child {
            background-color: #FFB5B5;
        }

        td:first-child {
            background-color: #FFB5B5;
        }

        th:nth-child(7) {
            background-color: #FFB5B5;
        }

        td:nth-child(7) {
            background-color: #FFB5B5;
        }
    </style>
</head>
<body>

<?php


if(isset($_GET['month'])) {
$month=$_GET['month'];
$year=$_GET['year'];
}else{
    $month=date('m');
    $year=date('Y');
}
$nextyear=$year;
$preyear=$year;
if($month+1>12){
    $next=1;
    $nextyear=$year+1;
}else{
    $next=$month+1;
}

if($month-1<1){
    $prev=12;
    $preyear=$year-1;

}else{
    $prev=$month-1;
}





?>

<a href="?year=<?= $preyear ?>&month=<?= $prev ?>">上個月</a>
<a href="?year=<?= $nextyear ?>&month=<?= $next ?>">下個月</a>


<?php
// $m=$month;
// $y=$year;



// $thisFirstDay=date("Y-m-01");
// $thisFirstDate=date('w',strtotime($thisFirstDay));
$thisFirstDay = date("$year-$month-1");
$thisFirstDate = date('w', strtotime($thisFirstDay));
// 這個月的1號從星期幾開始
// echo $thisFirstDay;
// $thisMonthDay = date("t");
// 這個月有幾天
// $thisLastDay = date("Y-m-$thisMonthDay");
br();
echo date("$year-$month-d");

// 自己訂變數，主要是方便做計算

$null = $thisFirstDate;

// $null=6;
// $null=$null%7;


$maxday = date("t", strtotime("$year-$month-1"));
// echo"$thisLastDay";
// $maxday=30;
// $weeks=ceil(($maxday+$thisFristDate)/7);

// echo $thisMonth;


echo "<table>";
echo "<tr>";
echo "<th>" . "日" . "</th>";
echo "<th>" . "一" . "</th>";
echo "<th>" . "二" . "</th>";
echo "<th>" . "三" . "</th>";
echo "<th>" . "四" . "</th>";
echo "<th>" . "五" . "</th>";
echo "<th>" . "六" . "</th>";
echo "</tr>";

for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {

        $day = (7 * $i + $j) - $null;
        // echo $day;
        do_form($day, $maxday);

        // echo "<td>";
// if($day>0 && $day<=$maxday){
//     echo $day;
// }

        // echo "</td>";

    }
    echo "</tr>";
    if ($day >= $maxday) {
        break;
    }
}

echo "</table>";















function do_form($day, $maxday)
{

    echo "<td>";
    if ($day > $maxday) {
        echo " ";
    } elseif ($day <= 0) {
        echo " ";

    } else {
        echo $day;
    }


    echo "</td>";

}







?>

<br>
<hr><br>
<!-- ---------------------------------------------3------------------------------------ -->

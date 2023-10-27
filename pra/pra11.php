<!DOCTYPE html>
<html lang="en">
<li><a href="P_list.html">返回</a></li>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <?php include '../myfunction.php'; ?>
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
            width: 120px;
            height: 100px;
            text-align: center;
        }

        th {
            font-size: 40px;
        }

        td {
            font-size: 35px;
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
<!-- ---------------------------------------------1------------------------------------ -->
<body>
    <h2>線上月曆製作</h2>
    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>

    <br><br><br>

    <table>
        <tr>
            <th>日</th>
            <th>一</th>
            <th>二</th>
            <th>三</th>
            <th>四</th>
            <th>五</th>
            <th>六</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
        <tr>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
        </tr>
        <tr>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
        </tr>
        <tr>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br><br><hr>
</body>

</html>
<!-- ---------------------------------------------2------------------------------------ -->
<?php

$thisMonth = date("Y-m");

// $thisFirstDay=date("Y-m-01");
// $thisFirstDate=date('w',strtotime($thisFirstDay));
$thisFirstDay = date("Y-m-1");
$thisFirstDate = date('w', strtotime($thisFirstDay));
// 這個月的1號從星期幾開始
echo $thisFirstDay;
$thisMonthDay = date("t");
// 這個月有幾天
$thisLastDay = date("Y-m-$thisMonthDay");
br();
echo $thisFirstDate;

// 自己訂變數，主要是方便做計算

$null = $thisFirstDate;

// $null=6;
// $null=$null%7;


$maxday = $thisMonthDay;
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
    } elseif ($day < 0) {
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
<?php

$thisMonth = date("Y-m");

// $thisFirstDay=date("Y-m-01");
// $thisFirstDate=date('w',strtotime($thisFirstDay));
$thisFirstDay = date("Y-m-1");
$thisFirstDate = date('w', strtotime($thisFirstDay));
// 這個月的1號從星期幾開始
echo $thisFirstDay;
$thisMonthDay = date("t");
// 這個月有幾天
$thisLastDay = date("Y-m-$thisMonthDay");
br();
echo $thisFirstDate;

// 自己訂變數，主要是方便做計算



$null = $thisFirstDate;
$lastmnull=$null;

// $null=6;
// $null=$null%7;


$maxday = $thisMonthDay;
// $maxday=30;
// $weeks=ceil(($maxday+$thisFristDate)/7);

$lastmonth=date('Y-m',strtotime("-1 month",strtotime($thisMonth)));
$Lday=date("t",strtotime($lastmonth));

$nextmonth=date('Y-m',strtotime("+1 month",strtotime($thisMonth)));
$Nday=0;



// echo $Lday;


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
        echo "<td>";
        if ($day > 0 && $day <= $maxday) {
            echo date("Y-m-$day");
        }else if($day<=0){
            $newLday=$Lday-$lastmnull+1;
            $Ldate=date("Y-m-$newLday",strtotime($lastmonth));
            echo $Ldate;
            $lastmnull--;
            // echo $lastmnull;
        }else{
            $newNday=$Nday+($day-$maxday);
            $Ndate=date("Y-m-$newNday",strtotime($nextmonth));
            echo $Ndate;
        }

        echo "</td>";

    }
    echo "</tr>";
    // if ($day >= $maxday) {
    //     break;
    // }
}

echo "</table>";










?>
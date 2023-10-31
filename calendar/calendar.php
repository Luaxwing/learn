<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <?php include_once 'myfunction.php'; ?>

    <link rel="stylesheet" href="calendar.css">

</head>

<body >

    <!-- 更換月份 -->
    <?php

    if (isset($_GET['month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('m');
        $year = date('Y');
    }
    $nextyear = $year;
    $preyear = $year;
    if ($month + 1 > 12) {
        $next = 1;
        $nextyear = $year + 1;
    } else {
        $next = $month + 1;
    }

    if ($month - 1 < 1) {
        $prev = 12;
        $preyear = $year - 1;

    } else {
        $prev = $month - 1;
    }

    ?>

    <!-- 設定判斷當月天數的變數 -->

    <?php
    $thisFirstDay = date("$year-$month-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));


    // 自己訂變數，主要是方便做計算
    $null = $thisFirstDate;
    $maxday = date("t", strtotime($thisFirstDay));
    $today = date("d");
    // 顯示特定年月的當日日期
    br();
    $date_mon = date("m", strtotime($thisFirstDay));
    $date_wek = date("l", strtotime("now"));
    // $date_day = ($today>$maxday) ? date("$month-$maxday") : date("$month-$today");
    // $date_day = ($today > $maxday) ? $maxday : $today;
    // echo $date_str;
// echo $date_mon;
    


    // 輸出"月份"
    switch ($date_mon) {
        case 1:
            $mon_str = "January";
            break;
        case 2:
            $mon_str = "February";
            break;
        case 3:
            $mon_str = "March";
            break;
        case 4:
            $mon_str = "April";
            break;
        case 5:
            $mon_str = "May";
            break;
        case 6:
            $mon_str = "June";
            break;
        case 7:
            $mon_str = "July";
            break;
        case 8:
            $mon_str = "August";
            break;
        case 9:
            $mon_str = "September";
            break;
        case 10:
            $mon_str = "October";
            break;
        case 11:
            $mon_str = "November";
            break;
        case 12:
            $mon_str = "December";
            break;
        default:
            $mon_str = "";
    }


    switch (date("m", strtotime("ow"))) {

        case 1:
            $month_str = "January";
            break;
        case 2:
            $month_str = "February";
            break;
        case 3:
            $month_str = "March";
            break;
        case 4:
            $month_str = "April";
            break;
        case 5:
            $month_str = "May";
            break;
        case 6:
            $month_str = "June";
            break;
        case 7:
            $month_str = "July";
            break;
        case 8:
            $month_str = "August";
            break;
        case 9:
            $month_str = "September";
            break;
        case 10:
            $month_str = "October";
            break;
        case 11:
            $month_str = "November";
            break;
        case 12:
            $month_str = "December";
            break;
        default:
            $month_str = "";
    }


    // 輸出"星期"
    // switch ($date_wek) {
    //     case 1:
    //         $wek_str = "星期一";
    //         break;
    //     case 2:
    //         $wek_str = "星期二";
    //         break;
    //     case 3:
    //         $wek_str = "星期三";
    //         break;
    //     case 4:
    //         $wek_str = "星期四";
    //         break;
    //     case 5:
    //         $wek_str = "星期五";
    //         break;
    //     case 6:
    //         $wek_str = "星期六";
    //         break;
    //     case 7:
    //         $wek_str = "星期日";
    
    //     default:
    //         $wek_str = "";
    // }
    
    // 指定當日的年月分
    if ($date_mon == date('m') && $year == date("Y")) {
        $hightlight = 1;
    } else {
        $hightlight = 0;
    }


    ?>
    <div class="container">


        <?php
        // 製作日曆表格
        echo "<div class=calendar>";
        echo "<div class=header>";
        ?>
        <div>
            <table>
                <tr>
                    <td>
                        <h1 class="year">
                            <?php echo date("Y"); ?>

                        </h1>
                    </td>
                    <td class="todate">
                        <?php echo " &nbsp;&nbsp;<span >" . $month_str . "-" . $today . "&nbsp;&nbsp;" . $date_wek . "</span>"; ?>
                    </td>
                    <td class="clocktd">
                        <!-- <div class="clock">
                        <div class="timerun">
                        </div>
                        </div> -->
                        <img src="./clock/clock.gif" alt="" srcset=""style="width:150px">
                    </td>
                </tr>
            </table>


            <hr>

        </div>
        <?php
        echo " <div class=showdate>";
        echo " <span class=month>" . $year . "&nbsp;&nbsp;" . $mon_str . "</span>";
        echo " </div>";
        echo " </div>";
        echo "<table class=table>";
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
                do_form($day, $maxday, $hightlight);
            }
            echo "</tr>";
            // if ($day >= $maxday) {
            //     break;
            // }
        }

        echo "</table>"; ?>
        
        <footer class="footer">
            <br>
            <div class="resetbuttom">
                <a href="?year=<?= date("Y") ?>&month=<?= date("m") ?>" class="pagebuttom"> Reset </a>
            </div>
            <div class="pagebuttom_group">
                <a href="?year=<?= $preyear ?>&month=<?= $prev ?>" class="pagebuttom">
                    <| </a>
                        <a href="?year=<?= $nextyear ?>&month=<?= $next ?>" class="pagebuttom">|></a>

            </div>
            <br>
        </footer>

        
        <?php
        echo " </div>";



        // 函式
        function do_form($day, $maxday, $hightlight)
        {



            if ($day == date("d") && $day <= $maxday && $hightlight == 1) {
                echo "<td class=today_HL>";
            } else {
                echo "<td>";
            }
            // echo "<td>";
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
    </div>
    <br>
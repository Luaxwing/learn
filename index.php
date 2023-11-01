<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        課堂內容
    </title>
    <style>
        .hr{
            height: 2px;
            width: 120%;
            background-color: blue;
        }
    </style>
</head>
<body>
<h1>上課內容</h1>
<div class="hr"></div>


<ul>
    <!-- 上課內容 -->
    <li><a href="./lesson/ver.php">一、變數</a></li>
    <li><a href="./lesson/if.php">二、if 判斷式</a></li>
    <li><a href="./lesson/for.php">三、迴圈</a></li>
    <li><a href="./lesson/array.php">四、陣列</a></li>
    <li><a href="./lesson/array_fn.php">五、陣列常用函數式</a></li>
    <li><a href="./lesson/DATE.php">六、日期時間</a></li>
    <li><a href="./lesson/get_post.php">七、網頁傳值</a></li>
    <br><br><hr><br>
    <li><a href="./pra/P_list.html">課堂練習</a></li>
    <li><a href="./mytest">測試</a></li>
</ul>
<link rel="stylesheet" href="./calendar/calendar.css">
<?php include './calendar/calendar.php';
?>


</body>
</html>



<!-- NOTE -->

<!-- 
$array - COPY
(複製的新陣列)
&$array - 參照 
-->
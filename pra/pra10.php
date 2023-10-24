<?php include '../myfunction.php'; ?>
<li><a href="P_list.html">返回</a></li>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>

</ul>
<?php
echo date("Y/m/d",strtotime("now"));

br();

echo date("m月d日 l",strtotime("now"));

br();

echo date("Y-m-d H:i:s",strtotime("now"));

br();

echo date("Y-n-j G:i:s",strtotime("now"));

br();

echo date("今天是西元Y年m月d日",strtotime("now"));

if(date("N")<=5){
    echo "上班日";
}else{
    echo "假日";
}








?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
<ul>
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>

</ul>


<?php


// 計算周一
$todayweek=date('N');
echo $todayweek;
br();
$diff=1-$todayweek;
$lastMonday=strtotime("$diff days");
$nextMonday=date("Y-m-d" ,strtotime("+1 week",$lastMonday));


for($i=0;$i<5;$i++){
    $nextMonday=date("Y-m-d l",strtotime("+1 week",strtotime($nextMonday)));
    echo $nextMonday;
    br();


}



// =======================================================
// $lastMonday=strtotime("$diff days");
// $today=date("Y-m-d",strtotime("now"));
// $newdays=strtotime($today);
// for($i=0;$i<5;$i++){
//     if($i==0){
//         $newdays= date("Y-m-d");
//         echo $newdays."&nbsp"."星期一";
//         $newdays=strtotime($newdays);
//         br();
//     }else{
//         $newdays= date("Y-m-d", strtotime("+7*$i days", $newdays));
//         echo $newdays."&nbsp"."星期一";
//         $newdays=strtotime($newdays);
//         br();
//     }
   
// }
?>

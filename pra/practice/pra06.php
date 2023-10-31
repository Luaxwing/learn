    <link rel="stylesheet" href="../header_style.css">
 <?php include_once "../header.php"; ?>
<?php include '../myfunction.php'; ?>
<!-- <li><a href="P_list.html">返回</a></li> -->

<h2>找出五百年內的閏年</h2>
<ul>
    <li>請依閏年攻勢找出五百年內的閏年</li>
    <li>使用陣列來找出閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php
// if(($year%4==0 && $year%100 !=0) || $year %400 ==0){
//     echo $year . "是閏年";
// }else{
//     echo $year . "是平年";
// }


$time=2023;
$newtime=$time;
$timelist=[];
$countyear=0;

for($i=0;$i<500;$i++){
    $newtime=$time+$i;
    if(($newtime%4==0 && $newtime%100 !=0) || $newtime %400 ==0){
        $timelist[]=$newtime;
        $countyear++;
    }
}

// print_r($timelist);

foreach ($timelist as $year) {
    echo $year . "\n";
}

br_(3);

echo"共&nbsp;". $countyear ."&nbsp;個年分";
?>

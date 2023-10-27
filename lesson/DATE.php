
<?php include '../myfunction.php'; ?>
<li><a href="../index.html">返回</a></li>

<li><a href="../pra/pra10.php">練習I</a></li>
<li><a href="../pra/pra11.php">練習II</a></li>
<h1>日期與時間</h1>

<?php
date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d H:i:s");

?>
<h2>strtotime</h2>

<?php

echo strtotime("now");
$time=strtotime("now");
br();
echo date("Y-m-d H:i:s",$time);

$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);


echo '<hr>';
echo $date1 . '到'.$date2.'有'.$days.'天';
?>

<h2>計算下一次生日天數</h2>
<?php
$date="1974-10-07";
$datesomebodyear=date("Y",strtotime($date));
// $newYear=0;
// $newDate=0;



$days=(strtotime($date)-strtotime("now"))/(60*60*24);



if($days<0){
    // 儲存新的年份
    $newYear= date("Y", strtotime("+1 year", strtotime("now")));
    // 將生日的年分替換成隔年的年份
    $newDate = str_replace($datesomebodyear, $newYear, $date);
    // 計算新的天數
    $days=(strtotime($newDate)-strtotime("now"))/(60*60*24);
}else{ 
    $newDate=$date;
}

$a=date("Y-m-d",strtotime($newDate));

echo "距離下一次生日的時間".$a."還有".floor($days)."天";
// br();
// echo floor($days)."天";
// ==================================================================
// $days=(strtotime($date)-strtotime("now"))/(60*60*24);
// if($days<0){
//     $newDate = date("Y-m-d", strtotime("+1 year", strtotime("$date")));
//     $days=(strtotime($newDate)-strtotime("now"))/(60*60*24);
// }else{ 
//     // $newDate=$date;
// }
// echo $newDate;
// echo floor($days)."天";

?>
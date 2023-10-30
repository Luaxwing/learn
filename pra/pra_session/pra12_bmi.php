<?php include '../../myfunction.php'; ?>
<!-- <style>
    table,tr,th,td{
        border: 1px solid black;
    }
    .hightlight-thin{
        color: lightskyblue;
        font-size: 40px;
    }
    .hightlight-normal{
        color: green;
        font-size: 40px;
    }
    .hightlight-fat{
        color: red;
        font-size: 40px;
    }
</style> -->
<?php

br();
$h = $_POST['height'];
$w = $_POST['weight'];
if(is_numeric($h)&&is_numeric($w)){
    if ($h > 10) {
        $h = $h / 100;
    }
    if ($w > 1000) {
        $w = $w / 1000;
    }
    
    // $bmi = $w / pow($h, 2);
    $bmi = $w / ($h*$h);
    // $bmi=35;
    header("location:pra12.php?weight=$w&height=$h&bmi=$bmi");
}else{
    // echo"請輸入正確的資料";
    $none="none";
    header("location:pra12.php?m=$none");
}





// ------

// brline("身高:".$h."公尺");
// brline("體重:".$w."公斤");
// brline("BMI值為&nbsp;&nbsp;" . $bmi . "（kg/㎡）");
// br();


// if($bmi < 18.5){
//     echo"<span class=hightlight-thin>";
// }elseif($bmi >= 24){
//     echo"<span class=hightlight-fat>";
// }else{
//     echo"<span class=hightlight-normal>";
// }
// echo"-";
// if ($bmi < 18.5) {
//     echo "體重過輕";
// } elseif ($bmi >= 24) {
//     if ($bmi >= 35) {
//         echo "重度肥胖";
//     } elseif ($bmi >= 30) {
//         echo "中度肥胖";
//     } elseif ($bmi >= 27) {
//         echo "輕度肥胖";
//     } else {
//         echo "過重";
//     }

// } else {
//     echo "健康體位";
// }
// echo"-";
// echo"</span>";

// br_(3);

// echo"<table>";
// // ------
// echo "<tr>";
// th("成人肥胖定義");
// th("身體質量指數(BMI)(kg/㎡)");
// echo "</tr>";
// // ------
// echo "<tr>";
// td("體重過輕");
// td("BMI<18.5");
// echo "</tr>";
// // ------
// echo "<tr>";
// td("健康體位");
// td("18.5<=BMI<24");
// echo "</tr>";
// // ------
// echo "<tr>";
// td("體位異常");
// td("過重：24<=BMI<27"."<br>"."輕度肥胖：27 <= BMI < 30"."<br>"."中度肥胖：30 <= BMI < 35"."<br>"."重度肥胖：BMI >= 35"."<br>");
// echo "</tr>";
// // ------
// echo"</table>";


?>
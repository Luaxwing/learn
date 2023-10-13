<li><a href="P_list.html">返回</a></li>


<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>

<?php
$year=2000;
echo "年份:西元". $year."年";
echo "<br>";
echo "<br>";
echo "<br>";

if($year%4==0 && $year%100!=0){
    echo $year . "是閏年";
}elseif($year%400==0){
    echo $year . "是閏年";
}else{
    echo $year . "是平年";

}

echo "<br>";
echo "----------------------------------------";
echo "<br>";

if($year%4==0){
// 公元年分除以4不可整除，為平年。
    if($year%100 !=0){
        // 公元年分除以4可整除但除以100不可整除，為閏年。
        echo $year . "是閏年";
    } else{
        if($year%400 !=0){
            // 公元年分除以100可整除但除以400不可整除，為平年。
            echo $year . "是平年";
        }else{
            echo $year . "是閏年";
        }
    }

}else{
    echo $year . "是平年";
}

echo "<br>";
echo "----------------------------------------";
echo "<br>";

if($year%4==0){
    if(($year%100!= 0) || ($year%100==0 && $year %400==0)){
 echo $year . "是閏年";
    }else{
        echo $year . "是平年";
    }
}else{
    echo $year . "是平年";
}
echo "<br>";
echo "----------------------------------------";
echo "<br>";

// 短路原則:把較少計算的過程放置於前，運算成本比較小
if(($year%4==0 && $year%100 !=0) || $year %400 ==0){

    echo $year . "是閏年";

}else{
    echo $year . "是平年";
}




?>


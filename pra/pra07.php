<?php include '../myfunction.php'; ?>
<li><a href="P_list.html">返回</a></li>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ul>
<li>天干：甲乙丙丁戊己庚辛壬癸</li>
<li>地支：子丑寅卯辰巳午未申酉戌亥</li>
<li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
<?php

// 天干:10年
// 地支:12年
// 1024年=甲子年
// 下一個甲年為1034
// 下一個子年為1036
// ------------------------
// 資料的部分
$year=2000;
$oryear=1024;
$num=$year-$oryear;
// 主要的資料
$yearslist=[];

// 紀錄天干地支
$list_ten=[];
$list_twe=[];


for($i=0;$i<=$num;$i++){
    tenyears($i,$list_ten);
    twelveyears($i,$list_twe);


    $yearslist[]=$list_ten[$i] . $list_twe[$i];
}
// print_r($yearslist);

// ---------------------
// 查詢的部分
$inputnum=2000;
$result=$yearslist[$inputnum-1024];
// print_r($result);

echo"$inputnum".  "&nbsp;年為&nbsp;" ."$result"."&nbsp;年";

br_(2);

echo "下界為&nbsp;".$oryear."&nbsp;上界為&nbsp;".$year;

?>
<?php
function tenyears($i,&$list){
    if($i%10==0){
        $list[]="甲";
    }elseif($i%10==1){
        $list[]="乙";
    }elseif($i%10==2){
        $list[]="丙";
    }elseif($i%10==3){
        $list[]="丁";
    }elseif($i%10==4){
        $list[]="戊";
    }elseif($i%10==5){
        $list[]="己";
    }elseif($i%10==6){
        $list[]="庚";
    }elseif($i%10==7){
        $list[]="辛";
    }elseif($i%10==8){
        $list[]="壬";
    }elseif($i%10==9){
        $list[]="癸";
    }


}

function twelveyears($i,&$list){
    if($i%12==0){
        $list[]="子";
    }elseif($i%12==1){
        $list[]="丑";
    }elseif($i%12==2){
        $list[]="寅";
    }elseif($i%12==3){
        $list[]="卯";
    }elseif($i%12==4){
        $list[]="辰";
    }elseif($i%12==5){
        $list[]="巳";
    }elseif($i%12==6){
        $list[]="午";
    }elseif($i%12==7){
        $list[]="未";
    }elseif($i%12==8){
        $list[]="申";
    }elseif($i%12==9){
        $list[]="酉";
    }elseif($i%12==10){
        $list[]="戌";
    }elseif($i%12==11){
        $list[]="亥";
    }

}
?>
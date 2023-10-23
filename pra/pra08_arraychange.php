<?php include '../myfunction.php'; ?>
<li><a href="P_list.html">返回</a></li>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<ul>
<li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>

</ul>
<?php
$a=[2,4,6,1,8];
pre(1);
print_r($a);
pre(0);

br();
echo"array_reverse";

pre(1);
print_r(array_reverse($a));
pre(0);

for($i=0;$i<floor(count($a)/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    // count($a)-1 為最大索引值
    //陣列中"$i"與其對應的"(count($a)-1)-$i"的和皆相等
    $a[count($a)-1-$i]=$tmp;
}

br();
echo"使用迴圈兩兩交換";

pre(1);
print_r($a);
pre(0);

?>


<?php

?>
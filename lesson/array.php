<li><a href="../index.html">返回</a></li>

<?php


// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]="泰山";
$a[]="新莊";



echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];

$b=[];
$b['姓名']='呂宗翰';
$b['最高學歷']='國北教大';
$b['tel']='0912345678';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];

echo $b['tel'];

$c=[];
$c['name']='Nick Lu';
$c['興趣']=['看書','打電動','追劇'];


echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][1];
echo $c['興趣'][2];

?>
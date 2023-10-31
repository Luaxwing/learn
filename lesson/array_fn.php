
    <link rel="stylesheet" href="../header_style.css">
 <?php include_once "../header.php"; ?>
<?php include '../myfunction.php';?>
<!-- 
<li><a href="../index.html">返回</a></li> -->

<br>

<?php
$array=[3,2,7,10,30,17];
$score=[
    '姓名'=>'小明',
    '成績'=>98
];

// 在array找數字

echo'in_array(3,$array)';
br();

if (in_array(3,$array)){
    echo "---數字有在陣列中";
}else{
    echo "---數字不在陣列中";
}
br();

br();
if (in_array(22,$array)){
    echo "---數字有在陣列中";
}else{
    echo "---數字不在陣列中";
}

// ------------------------
br_(3);
// expolde/join & expolde
$ss="todoy is a good day";
$tt=explode(" ",$ss);
print_r($tt);

$cc=implode("--",$tt);
br();
echo $cc;



// ------------------------
br_(3);
// array_keys

echo'array_keys($array)';
br();
$tmp=array_keys($array);
$string=array_keys($score);


echo "<pre>";
print_r($tmp);
echo "</pre>";
br();
echo'array_keys($score)';
echo "<pre>";
print_r($score);
echo "</pre>";





echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

?>

<?php




?>
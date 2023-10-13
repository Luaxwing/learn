<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎</title>
</head>
<body>
<li><a href="index.html">返回</a></li>
<?php
define('age',23); 
// $age=23;
// echo $age;
echo age;
$name='呂宗翰';
echo $name;



print '<br>';

$a=15;
$b=43;

// print 'a=';
// echo $a;
// print '  ';
// print 'b=';
// echo $b;

// print '--- a b Change to b a ---';

// $c=$a;
// $a=$b;
// $b=$c;

// print 'a=';
// echo $a;
// print '  ';
// print 'b=';
// echo $b;

function chg_1($a,$b){
    print 'a=';
    echo $a;
    print '  ';
    print 'b=';
    echo $b; 
}
function change($a,$b){
    // print 'a=';
    // echo $a;
    // print '  ';
    // print 'b=';
    // echo $b;
    chg_1($a,$b);
    
    print ' --- a b Change to b a --- ';
    
    $c=$a;
    $a=$b;
    $b=$c;
    
    // print 'a=';

    // echo $a;
    // print '  ';
    // print 'b=';
    // echo $b;
    chg_1($a,$b);
}

change(15,43);

?>
    
</body>
</html>
<li><a href="index.html">返回</a></li>
<a href="for.php">for <br></a>
<?php

$SUM=0;
$i=1;

while ($i <= 10) {
	$SUM += $i ;

    p_sum($SUM,$i);

	$i++;
}

function p_sum($a,$b){

   // $a放$i $b放$SUM
    echo $a ;

    if($b !=10){
        echo " , ";
    }
}

?>

<!-- ---------------------------------------------- -->

<h1>迴圈練習</h1>

<h3>使用for迴圈來產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9,....n</li>
    <li>10,20,30,40,50,60....n</li>
    <li>3,5,7,11,13,17</li>
</ul>

<?php

$n = 10;
$sum=0;

echo "n=" . $n . "<br>". "<br>";



echo "奇數數列" . "<br>";
odd($n,$sum);

echo "十數列" . "<br>";
tenplus($n,$sum);

echo "質數列" . "<br>";
prime_N($n,$sum);

function odd($n,$sum){
    for ($i=1;$i<=$n;$i++){
        $sum=($i-1)*2+1;
        echo $sum;
        endline($i,$n);
    }
}
function tenplus($n,$sum){
    for ($i=1;$i<=$n;$i++){
        $sum=$i*10;
        echo $sum;
        endline($i,$n);
    }
}
function prime_N($n,$sum){
    $num=2;
    for ($i=1;$i<=$n;$i+=1){

        for ($j=2;$flag=true;$j++){
            if(($num % $j)==0){
                if($num != $j){
                    $num++; 
                }
                else{
                    $sum=$num;
                    echo $sum;
                    endline($i,$n);
                    $num++;
                    break;
                }
                $j=2;
                
            }




        }
        


            

    }
        
            
        

}
function endline($i,$n){
    if($i != $n){
        echo " , ";
    }else{
        echo "<br>";
    }
}

?>

<h3>陣列</h3>

<?php
$a=['甲','乙','丙','丁','戊'];
$length = count($a);

for($i=0;$i<$length;$i++){
    echo $a[$i];
}
echo "<br>";
echo $i;

// $b=$a[0];
// $b=$a[1];
// $b=$a[2];
echo "<br>"."<br>";
foreach($a as $b){
    echo $b;
}

echo "<br>";

foreach($a as $idx => $b){
    echo $idx. "=>" . $b;
    echo "<br>";
}

?>
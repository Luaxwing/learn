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
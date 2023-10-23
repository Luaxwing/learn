<li><a href="../index.html">返回</a></li>
<a href="while.php">while <br></a>
<?php
$SUM=0;

for($i=1;$i<=10;$i++){
    $SUM += $i;
    // $newSUM = $SUM;
    // echo $SUM . "&" . $i ."#";
    // echo $SUM ;

    // if($i !=10){
    //     echo " , ";
    // }
    p_sum($SUM,$i);
}




function p_sum($a,$b){

// $a放$i $b放$SUM
    echo $a ;

    if($b !=10){
        echo " , ";
    }

}
?>
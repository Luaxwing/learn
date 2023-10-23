<?php
// 斷行

function br()
{
    echo '<br>';
}
function br_($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo "<br>";
    }
}


function brline($str){
   br();
    echo $str;
   br();
}


// 空格


function space()
{
    echo '&nbsp&nbsp';
}



//輸出(原格式)

function pre($n){
    if($n=1){
        echo "<pre>";
    }elseif($n=0){
        echo "</pre>";
    }
}

?>
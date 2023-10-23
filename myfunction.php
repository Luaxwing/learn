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



 function brline_($str,$n){
    br_($n);
     echo $str;
    br_($n);
 }
 
 function brline__($str,$n,$space){
    br_($n);
    space_($space);
     echo $str;
    br_($n);
 }

// 空格


function space()
{
    echo '&nbsp&nbsp';
}

function space_($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo '&nbsp&nbsp';
    }

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
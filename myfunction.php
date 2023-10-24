


<?php
// 斷行
function hr()
{
    echo '<hr>';
}
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


// 表格方便使用
function td($str){
    echo "<td>".$str."</td>";
}

function th($str){
    echo "<th>".$str."</th>";
}


?>




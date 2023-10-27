<style>
    table{
        width:70%;
    }
    table,th,tr,td{
        border-collapse: collapse;
        border:1px solid black ;
    }
    th,td{
        width:90px;
        height: auto;
        text-align:center;
    }
    th{
        background-color:lightblue;
    }
    .tdbg{
        width:100%;
        height: 100%;
        background-color:rgb(233, 233, 233 );
        margin:auto;
    }
    .th_row{
        background-color:lightpink;
    }
    .th_null{
        background-color:rgb(157, 157, 157 );
    }

    /* td{
        border:1px solid black ;
    } */
</style>

<!-- <li><a href="get_post.php">返回</a></li> -->
<?php include './get_post.php'; ?>
<h1>九九乘法表</h1>
<!-- <h2>-1 原理</h2>
<?php

for ($i=1;$i<=9;$i++){
    echo '1 X ' . $i . ' = ' . (1*$i) . '&nbsp&nbsp&nbsp';
}
br();



?>

<h2>-2 實作</h2>
<?php

for ($j=1;$j<=9;$j++){
    for ($i=1;$i<=9;$i++){
        echo $i .' X ' . $i . ' = ' . ($j*$i) . '&nbsp&nbsp&nbsp';
        if(($j*$i)<10){
            space();
        }
    }
    br();
}


?>

<h2>-3 表格</h2>
<?php
echo '<table>';
for ($j=1;$j<=9;$j++){
    echo '<tr>';
    for ($i=1;$i<=9;$i++){
        echo '<td>';
        echo $i .' X ' . $i . ' = ' . ($j*$i) . '&nbsp&nbsp&nbsp';
        echo '</td>';
        }
    echo '</tr>';
    }
    br();
echo '</table>';

?> -->

<h2>-4 自訂義</h2>
<?php
$v=$_POST['num'];
br();
if($v>20){
    $new_v=20;
    echo "輸入值為:".$v."<br><br>"."已修正為20"."<br>";
    echo "///不要超過20///"."<br>";
    $v=$new_v;
}
br();
multiTable($v);

?>



<h2>-5 自訂義表格</h2>
<?php
// 自行輸入數值



?>
<?php
multiTableNUM($v);
?>

<h2>-6 自訂義表格_火車時刻表</h2>
<p>If &nbsp&nbsp&nbsp j < i</p>
<?php
multiTableNUM_02($v);
?>
<p>If &nbsp&nbsp&nbsp j > i</p>
<?php
multiTableNUM_03($v);
?>

<?php
printB('<hr>','<br><br><br>');
?>












<!-- function -->
<?php

// 斷行
function br(){
    echo'<br>' ;
}

// 乘法表
function multi($r){
    for ($a=1;$a<=$r;$a++){
        for ($b=1;$b<=$r;$b++){
            echo $b .' X ' . $b . ' = ' . ($a*$b) . '&nbsp&nbsp&nbsp';
            // space(($a*$b),($r*$r));
            space();
        }
        br();
    }
}

// 乘法表
function multiTable($r){
    echo '輸入:' . $r ;
    br();
    echo'<table>' ;
    for ($a=1;$a<=$r;$a++){
        echo'<tr>' ;
        for ($b=1;$b<=$r;$b++){
            echo'<td>' ;
            echo $b .' X ' . $b . ' = ' . ($a*$b) . '&nbsp&nbsp&nbsp';
            echo'</td>' ;
        }
        echo'</tr>' ;
    }
    echo'</table>' ;
}

//格子表
function multiTableNUM($r){
    echo '輸入:' . $r ;
    br();
    echo'<table>' ;
    echo '<tr>';
    echo '<th class="th_null">';
    echo '';
    echo '</th>';
    for ($col=1;$col<=$r;$col++){
        echo '<th>';
        echo $col;
        echo '</th>';
    }
    echo '</tr>';
    for ($a=1;$a<=$r;$a++){
        echo'<tr>' ;
        echo '<th class="th_row">';
        echo $a;
        echo '</th>';
        for ($b=1;$b<=$r;$b++){
            echo'<td>' ;
            echo ($a*$b);
            echo'</td>' ;
        }
        echo'</tr>' ;
    }
    echo'</table>' ;
}





//火車表
function multiTableNUM_02($r){
    echo '輸入:' . $r ;
    br();
    echo'<table>' ;
    echo '<tr>';
    echo '<th class="th_null">';
    echo '';
    echo '</th>';
    for ($col=1;$col<=$r;$col++){
        echo '<th>';
        echo $col;
        echo '</th>';
    }
    echo '</tr>';
    for ($a=1;$a<=$r;$a++){
        echo'<tr>' ;
        echo '<th class="th_row">';
        echo $a;
        echo '</th>';
        for ($b=1;$b<=$r;$b++){
            echo'<td>' ;
            if($a<$b){
                nullblock();
            }else{
                echo ($a*$b);
            }
            
            echo'</td>' ;
        }
        echo'</tr>' ;
    }
    echo'</table>' ;
}

//火車表_反
function multiTableNUM_03($r){
    echo '輸入:' . $r ;
    br();
    echo'<table>' ;
    echo '<tr>';
    echo '<th class="th_null">';
    echo '';
    echo '</th>';
    for ($col=1;$col<=$r;$col++){
        echo '<th>';
        echo $col;
        echo '</th>';
    }
    echo '</tr>';
    for ($a=1;$a<=$r;$a++){
        echo'<tr>' ;
        echo '<th class="th_row">';
        echo $a;
        echo '</th>';
        for ($b=1;$b<=$r;$b++){
            echo'<td>' ;
            if($a>$b){
                    nullblock();
            }else{
                echo ($a*$b);
            }
            
            echo'</td>' ;
        }
        echo'</tr>' ;
    }
    echo'</table>' ;
}

// 空格
// function space($m,$n){

//     while($n>=10){
//         echo '&nbsp&nbsp';
//         $n=$n/$m;
//     }
    
// }
function nullblock(){
    echo '<div class="tdbg">';
    echo ' &nbsp';
    echo '</div>';
}

function space(){
    echo '&nbsp&nbsp';
}

function printB($v,$t) {
   echo $t;
   echo $v;
   echo $t;
}
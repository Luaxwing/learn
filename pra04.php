
<li><a href="P_list.html">返回</a></li>

<br>
<?php

echo "*";
br();
echo "**";
br();
echo "***";
br();
echo "****";
br();
echo "*****";
br_(3);
for($i=0;$i<5;$i++){

    echo "*";
    
    }
echo "<hr>";

// --------------------------------------------------------------
$n=25;
echo"輸入:".$n;
// --------------------------------------------------------------
br();
echo "<hr>";
br();
echo "Star";
br_(2);
printStar($n);

br_(2);
echo "StarInv";
br_(2);
printStarInv($n);

br_(2);
echo "StarInvSIDE";
br_(2);
printStarINVSIDE($n);

br_(2);
echo "StarInvAside";
br_(2);
printStarINVAside($n);

br_(2);

printequTri($n);

br_(2);

printINVequTri($n);

br_(2);

// printclub(9);

?>


<h2>菱形</h2>
<?php
club($n);
// for($i=0;$i<9;$i++){
//     if($i<=4){
//         $tmp=$i;
//     }else{
//         $tmp--;
//     }

//     for($j=0;$j<(4-$tmp);$j++){
//         space();
//     }
//     for($k=0;$k<($tmp*2+1);$k++){
//         echo "*";
//     }
//     echo "<br>";
// }
?>


<h2>矩形</h2>

<?php

mysquare($n);
square($n);
square_diagonal($n);



// for($i=0;$i<7;$i++){
//     for($j=0;$j<7;$j++){
//         if($i != 0 && $i !=6){
//             if($j != 0 && $j !=6){
//                 space();
//             }else{
//                 echo"*";
//             }
//         }else{
//             echo"*";

//         }
       
//     }
//     br();
// }

// br_(3);
// // ---------------------------------------
// for($i=0;$i<7;$i++){

//     for($j=0;$j<7;$j++){
//         if($i==0 || $i==6){
//             echo "*";
//         }elseif($j==0 || $j==6){
//             echo"*";
//         }else{
//             space();

//         }
//     }
//     br();
// }
// // ---------------------------------------
// for($i=0;$i<7;$i++){

//     for($j=0;$j<7;$j++){
//         if($i==0 || $i==6){
//             echo "*";
//         }elseif($j==0 || $j==6 || $j==$i || ($j+$i)==6){
//             echo"*";
//         }else{
//             echo "&nbsp;&nbsp;";

//         }
//     }
//     br();
// }
// echo"<hr>";

// // ---------------------------------------
// for($i=0;$i<7;$i++){

//     for($j=0;$j<7;$j++){
//         if($i==0 || $i==6){
//             echo "*";
//         }elseif($j==0 || $j==6 ){
//             echo"*";
//         }elseif( $j==$i || ($j+$i)==6){
//             echo"<span style=color:red>";
//             echo"*";
//             echo"</span>";
//         }else{
//             echo "&nbsp;&nbsp;";

//         }
//     }
//     br();
// }

br_(10);



?>

<?php

function printStar($n){
    for($b=1;$b<=$n;$b++){
        for($a=0;$a<$b;$a++){
            echo "*";
        }
        // if($b < $n){
        //     br_($br);
        // }
        br();
    }

}

function printStarInv($n){
    for($b=1;$b<=$n;$b++){
        for($a=$n;$a>=$b;$a--){
            echo "*";
        }
        // if($b < $n){
        //     br_($br);
        // }
        br();
    }

}

function printStarINVSIDE($n){
    for($b=1;$b<=$n;$b++){
        for($a=0;$a<$b;$a++){
            space();
        }
        for($c=$n;$c>=$a;$c--){
            echo "*";
        }
        // if($b < $n){
        //     br_($br);
        // }
        br();
    }

}

function printStarINVAside($n){
    for($b=1;$b<=$n;$b++){
        for($a=$n;$a>=$b;$a--){
            space();
        }
        for($a=0;$a<$b;$a++){
            echo "*";
        }
        // if($b < $n){
        //     br_($br);
        // }
        br();
        }
        
}



// 正三角形
function printequTri($n){

    for($a=1;$a<=$n;$a++){
        for($b=$n;$b>$a;$b--){
            space();
        }
        for($c=0;$c<((2*$a)-1);$c++){
            echo"*";
        }
        br();
    }

}

// 倒三角形
function printINVequTri($n){
    for($b=0;$b<=$n;$b++){
        for($a=0;$a<$b;$a++){
            space();
        }
        for($c=2*$n-1;$c>2*$a;$c--){
            echo"*";
        }
        br();

    }

}





//合體
// function printclub($n){
//     printequTri(ceil($n/2)-1);
//     printINVequTri(ceil($n/2));
// }




function club($n){
    for($i=0;$i<((2*$n)-1);$i++){
        if($i<=floor(((2*$n)-1))/2){
            $tmp=$i;
        }else{
            $tmp--;
        }
    
        for($j=0;$j<((floor((2*$n)-1)/2)-$tmp);$j++){
            space();
        }
        for($k=0;$k<($tmp*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
}





function mysquare($n){
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i != 0 && $i !=$n-1){
            if($j != 0 && $j !=$n-1){
                space();
            }else{
                echo"*";
            }
        }else{
            echo"*";

        }
       
    }
    br();
}
}


// ---------------------------------------
function square($n){
for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }elseif($j==0 || $j==($n-1)){
            echo"*";
        }else{
            space();

        }
    }
    br();
}
// ---------------------------------------
for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }elseif($j==0 || $j==($n-1) || $j==$i || ($j+$i)==($n-1)){
            echo"*";
        }else{
            echo "&nbsp;&nbsp;";

        }
    }
    br();
}
}


// ---------------------------------------
function square_diagonal($n){
for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }elseif($j==0 || $j==($n-1) ){
            echo"*";
        }elseif( $j==$i || ($j+$i)==($n-1)){
            echo"<span style=color:red>";
            echo"*";
            echo"</span>";
        }else{
            echo "&nbsp;&nbsp;";

        }
        
    }
    br();
}
}















// 換行@@
function br(){
    echo "<br>";
}

function br_($n){
    for($i=0;$i<$n;$i++){
        echo "<br>";
    }
    
}

function space(){
    echo"&nbsp;&nbsp;";
}
?>
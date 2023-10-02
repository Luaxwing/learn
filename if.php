<?php

$score=75;
$score=checkscore($score);

if($score!=1000){
    echo "我的成績:" . $score;
    echo "<br>";
    echo "判斷為";
    
    if($score>60){
        echo "及格";
    }else{
        echo "不及格";
    }
    
    echo "<br>";
    
    odd_01($score);
    
    br();
    
    
    // $lv=($score>=60)?'及格':'不及格';
    // echo $score;
    // echo $lv;
    
    
    br();
}
else{
    echo "///錯誤!///";
    br();
}

// echo "我的成績:" . $score;
// echo "<br>";
// echo "判斷為";

// if($score>60){
//     echo "及格";
// }else{
//     echo "不及格";
// }

// echo "<br>";

// odd_01($score);

// br();


// $lev=($score>=60)?'及格':'不及格';
// echo $score;
// echo $lev;
        
// $level="B";

// br();

// -----------------------------------

if($score>100){
    $level='S';
}
elseif($score>=85){
    $level='A';
}
elseif($score>=70){
    $level='B';
}
elseif($score>=60){
    $level='C';
}
elseif($score>=40){
    $level='D';
}else{
    $level='E';
}


// $level="B";

switch($level){
    case "S":
        echo "[此成績不存在，請重新輸入]";
    break;
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";

}

br();








function checkscore($a){
    if($a>100){
        $a=1000;
        return $a;
    }
    elseif($a<0){
        $a=1000;
        return $a;
    }
    else{
        return $a;
    }
}

function odd_01($number){
    if($number==0){
        
    }
    elseif(fmod($number, 2)==0){
        echo "此分數為偶數";
    }else{
        echo "此分數為奇數";
    }
}

function br(){
    echo "<br>";
};
?>
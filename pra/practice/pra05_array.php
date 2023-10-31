    <link rel="stylesheet" href="../header_style.css">
 <?php include_once "../header.php"; ?>
<?php include '../myfunction.php'; ?>

<style>
    table {
        width: 70%;
    }

    table,
    th,
    tr,
    td {
        border-collapse: collapse;
        border: 1px solid black;
    }

    th,
    td {
        width: 50px;
        height: auto;
        text-align: center;
    }
</style>
<li><a href="P_list.html">返回</a></li>

<?php
$subject = ["國文", "英文", "數學", "地理", "歷史"];
// [0]國文,[1]英文,[2]數學,[3]地理,[4]歷史
// fun1不用動


$name = ["Judy", "Amo", "John", "Peter", "Hebe"];
// 個別成績
// fun2大迴圈

//  $judy=[95,64,70,90,84];
//  $amo=[88,78,54,81,71];
//  $john=[45,60,68,70,62];
//  $peter=[59,32,77,54,42];
//  $hebe=[71,62,80,62,64];


// fun2小迴圈
$score = [
    [95, 64, 70, 90, 84],
    [88, 78, 54, 81, 71],
    [45, 60, 68, 70, 62],
    [59, 32, 77, 54, 42],
    [71, 62, 80, 62, 64],
];
$name2score=[
    "Judy"=>[95,64,70,90,84],
    "Amo"=>[88,78,54,81,71],
    "John"=>[45,60,68,70,62],
    "Peter"=>[59,32,77,54,42],
    "Hebe"=>[71,62,80,62,64],
];


// --------------------------------------------

// scorelist($subject);
// abc($name,$score);
echo"以索引導出成績";
br();
scorelist($subject, $name, $score);
br();
echo"<pre>";
echo'
$score = [
    [95, 64, 70, 90, 84],
    [88, 78, 54, 81, 71],
    [45, 60, 68, 70, 62],
    [59, 32, 77, 54, 42],
    [71, 62, 80, 62, 64],
];';
echo"</pre>";

br_(5);

echo"以字串導出成績";
br();
scorelist2($subject, $name, $name2score);
br();
echo"<pre>";
echo'$name2score=[
    "Judy"=>[95,64,70,90,84],
    "Amo"=>[88,78,54,81,71],
    "John"=>[45,60,68,70,62],
    "Peter"=>[59,32,77,54,42],
    "Hebe"=>[71,62,80,62,64],
];';
echo"</pre>";
// ----------------------------------------------
?>


<?php

function scorelist($subject, $name, $score)
{
    echo "<table>";
    subjectlist($subject);
    grade_print($name, $score);
    echo "</table>";
}

function subjectlist($subject)
{

    echo "<tr>";
    echo "<th>";
    echo " ";
    echo "</th>";
    for ($i = 0; $i <= 4; $i++) {
        echo "<th>";
        echo "$subject[$i]";
        echo "</th>";
    }
    echo "</tr>";

}


function grade_print($name, $score)
{
    for ($i = 0; $i < count($name); $i++) {
        echo "<tr>";
        echo "<th>{$name[$i]}</th>";
        for ($j = 0; $j < count($score[$i]); $j++) {
            echo "<td>{$score[$i][$j]}</td>";
        }
        echo "</tr>";
    }
}

// ----------------------------------------


function scorelist2($subject, $name, $score)
{
    echo "<table>";
    subjectlist2($subject);
    grade_print_name($name, $score);
    echo "</table>";
}
function subjectlist2($name)
{

    echo "<tr>";
    echo "<th>";
    echo " ";
    echo "</th>";
    for ($i = 0; $i <= 4; $i++) {
        echo "<th>";
        echo "$name[$i]";
        echo "</th>";
    }
    echo "</tr>";

}

function grade_print_name($name, $score)
{
    for ($i = 0; $i < count($name); $i++) {
        $sub=$name[$i];
        echo "<tr>";
        echo "<th>$sub</th>";
        for ($j = 0; $j < count($score[$sub]); $j++) {
            echo "<td>{$score[$sub][$j]}</td>";
        }
        echo "</tr>";
    }
}


?>
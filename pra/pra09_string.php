<?php include '../myfunction.php'; ?>
<style>
.container{
    background-color: lightblue;
}
span.keyword{
    color: blueviolet;
    font-size: 40px;
    border: 2px solid blueviolet;
    border-radius: 5px;
    position: relative;
    top: 6px;
}

</style>
<li><a href="P_list.html">返回</a></li>
<ul>
<h2>字串取代</h2>

<li>將”aaddw1123”改成”*********”</li>

<?php
br();
$s="aaddww112313123131321321321";
$t=str_replace('a','*',$s);
echo $t;
br();
echo str_repeat("*",mb_strlen($s));
?>



<h2>字串分割</h2>

<li>將”this,is,a,book”依”,”切割後成為陣列</li>

<div class="container"><?php
br();
$s="this,is,a,book";
$a = explode(",", $s);
pre(1);
print_r($a);
pre(0);
br();

?></div>



<h2>字串組合</h2>

<li>將上例陣列重新組合成“this is a book”</li>
<div class="container">
<?php
br_(5);
echo join(' ',$a);
br_(5);
?>
</div>

<h2>子字串取用</h2>

<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
<div class="container">
<?php
br_(5);
$s="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($s,0,10)."...";
br_(5);
?>
</div>



<h2>尋找字串與HTML、css整合應用</h2>

<li>給定一個句子，將指定的關鍵字放大</li>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>




<div class="container">
<?php
br();
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
space_(4);
$key="薪水";
echo str_replace($key,"&nbsp;<span class=keyword>$key</span>&nbsp;",
$str
);


// ----------------------------------------------------------------------------------------
br_(5);
brline("------------暴力解------------");
$s="學會PHP&nbsp;<span class= keyword >網頁程式設計</span>&nbsp;，薪水會加倍，工作會好找";
br_(3);
space_(4);
echo $s;
brline__($s,5,4);
?>
</div>

</ul>
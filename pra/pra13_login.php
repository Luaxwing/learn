

<?php
if(!empty($_GET['account'])){
if($_GET['account']=="access"){
    echo"登入成功";
    // header("location:pra13_member.php");
    $waitInSeconds = 0.5;

// 设置目标 URL
$targetUrl = 'pra13_member.php';

// 使用 header 函数来执行页面重定向
header("refresh:$waitInSeconds;url=$targetUrl");
}
else if($_GET["account"]== "none"){
    echo"帳號或密碼錯誤";
}
else{
    echo"請輸入正確的帳號密碼格式";
}
}


?>
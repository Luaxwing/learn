<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='pra15_login.php'>回登入頁</a>";
}else{
    $_SESSION['error']="沒有登入相關驗證，非法登入";
   header("location:pra15_login.php");
    //echo "沒有登入相關驗證，非法登入";
}

?>

</body>
</html>
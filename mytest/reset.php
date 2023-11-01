<?php
// 设置会话存储路径
session_save_path("uploads/tmp");

session_start(); 

//在session_start();底下才能使用$_SESSION

// unset($_SESSION['orderlist']);
unset($_SESSION['pay']);
unset($_SESSION['payment']);   //將「指定」的session清除

if (isset($_GET['csv'])&& $_GET['csv']=="none") {
session_destroy();      	   //清除使用中的session
}

header("location:index.php ") ; 
?>
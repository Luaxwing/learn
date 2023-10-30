<?php
session_start();

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    $_SESSION['login']=$_POST['acc'];

    header("location:pra15_member.php");

}else{
    $_SESSION['error']="帳號或密碼錯誤,請重新登入";
    header("location:pra15_login.php");
}
?>
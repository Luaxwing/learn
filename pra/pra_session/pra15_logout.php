<?php
session_start();

unset($_SESSION['login']);

header("location:pra15_login.php");

?>
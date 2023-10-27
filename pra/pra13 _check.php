<?php
include "../myfunction.php";
?>
<!-- ----------------------------- -->
<?php

$acc=$_POST["acc"];
$pwd=$_POST["pwd"];

if(empty($acc)||empty($pwd)){
    header("location:pra13.php?account=noinput");
}else{
    if($acc=="nickcl08" && $pwd== "nickcl08"){
        header("location:pra13_login.php?account=access");
    }else{
        header("location:pra13.php?account=none");
    }
}

?>
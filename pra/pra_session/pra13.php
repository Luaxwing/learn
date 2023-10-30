<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "../../myfunction.php" ?>
</head>
<style>
    .access{
        width: 50%;
        height: 75vh;
        background-color: aqua;
    }
    .success{opacity:0 ;}
</style>
<body>
<li><a href="../P_list.html">返回</a></li>
    <?php
    session_start();
    // session_save_path("./sessav");

    
    
    if(isset($_SESSION["login"])&& !empty($_SESSION["login"])){

            echo $_SESSION["login"].'已成功登入';
            header("refresh:0.5;url=./pra13_member.php");
        echo"<span class=success>";
    
    } 
    ?>


    <form action="pra13 _check.php" method="post">
        <hr>
        <div>
            <label for="acc">帳號:<br></label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pwd">密碼:<br></label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div>
            <br>
        <input type="submit" value="送出">
        </div>
        
        <hr>
    </form>

    <?php if(!empty($_GET['m'])){
         if($_GET['m']==1){
        echo"</span>";
         }
    } 
    ?>


    <?php  include "pra13_login.php" ;?>

    

</body>

</html>
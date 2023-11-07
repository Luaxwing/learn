<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
</head>

<?php
    if (!isset($_GET["bright"])) {
        $_GET["bright"]=0;
        $_GET["tmp_bright"]=0;

    }
    ?>
<?php  if($_GET["bright"]==0){ ?>
<link rel="stylesheet" type="text/css" href="calendar.css">
<?php }elseif($_GET["bright"]==1){?>
<link rel="stylesheet" type="text/css" href="calendar_bright.css">
<?php }elseif($_GET["bright"]==2){?>
<link rel="stylesheet" type="text/css" href="calendar_retro.css">
<?php }else{?>
<link rel="stylesheet" type="text/css" href="calendar_yellow.css">
<?php } ?>



<style>



    .C_box{
        margin: auto;
    }
</style>


<body>


<div class="nav">

<?php
$_GET["tmp_bright"]=$_GET["bright"];
    $_GET["bright"] = ($_GET["bright"]<3) ? $_GET["bright"]+=1 : 0;
    ?>
<?php if (isset($_GET['month'])) { ?>
<a href="index.php?year=<?=$_GET['year']?>&month=<?=$_GET['month']?>&bright=<?=$_GET['bright']?>"class="linkbox">Click to Change Style</a>
<?php }else{ ?>
<a href="index.php?bright=<?=$_GET['bright']?>"class="linkbox">Click to Change Style</a>
<?php } ?>

</div>


<div class="container">
<br><br>

<br>
<div class="C_box">
<?php include "calendar.php" ?>
</div>

</div>





</body>
</html>
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

/* *{
    cursor:url(cursor/ani1147.ani),default ;
} */

<?php  if($_GET["bright"]==0){ ?>
    .Nullbox{
        width: 70%;
        height: 100px;
        /* background-color: blue; */
        display: flex;
        flex-direction: row-reverse;
    }

    .C_box{
        width: 80%;
        /* background-color: blue; */
        margin: auto;
    }
    .nav{
        display: flex;
        /* justify-content:space-between; */
       
    }
    .link-box{
        padding-top: 10px;
        background-color: blue;
    }
    .clock_cal{
        margin-top: -14px;
        width: 300px;
        height: 80%;
       /* justify-content: flex-end; */
       /* background-color: blue; */
       
    }
    


<?php }elseif($_GET["bright"]==1){?>
    .Nullbox{
        width: 70%;
        height: 100px;
        /* background-color: blue; */
        display: flex;
        flex-direction: row-reverse;
    }

    .C_box{
        width: 80%;
        /* background-color: blue; */
        margin: auto;
    }
    .nav{
        display: flex;
        /* justify-content:space-between; */
       
    }
    .link-box{
        padding-top: 10px;
        background-color: blue;
    }
    .clock_cal{
        margin-top: -14px;
        width: 300px;
        height: 80%;
       /* justify-content: flex-end; */
       /* background-color: blue; */
       
    }


<?php }elseif($_GET["bright"]==2){?>
    .Nullbox{
        width: 90%;
        height: 100px;
        /* background-color: blue; */
        display: flex;
        flex-direction: row-reverse;
    }

    .C_box{
        width: 80%;
        /* background-color: blue; */
        margin: auto;
    }
    .nav{
        display: flex;
        /* justify-content:space-between; */
       
    }
    .link-box{
        padding-top: 10px;
        background-color: blue;
    }
    .clock_cal{
        margin-top: 100px;
        width: 300px;
        height: 80%;
       /* justify-content: flex-end; */
       /* background-color: blue; */
       
    }
    

<?php }else{?>
    .Nullbox{
        width: 50%;
        height: 100px;
        /* background-color: blue; */
        display: flex;
        flex-direction: row-reverse;
    }

    .C_box{
        width: 80%;
        /* background-color: blue; */
        margin: auto;
    }
    .nav{
        display: flex;
        /* justify-content:space-between; */
       
    }
    .link-box{
        padding-top: 10px;
        background-color: blue;
    }
    .clock_cal{
        margin-top: -10px;
        width: 300px;
        height: 80%;
       /* justify-content: flex-end; */
       /* background-color: blue; */
       
    }
    

<?php } ?>


</style>


<body>


<div class="nav">
<br><br>


<?php
$_GET["tmp_bright"]=$_GET["bright"];
    $_GET["bright"] = ($_GET["bright"]<3) ? $_GET["bright"]+=1 : 0;
    ?>
<?php if (isset($_GET['month'])) { ?>
    <div><a href="i_cal.php?year=<?=$_GET['year']?>&month=<?=$_GET['month']?>&bright=<?=$_GET['bright']?>"class="linkbox">Click to Change Style</a></div>
<?php }else{ ?>
    <div><a href="i_cal.php?bright=<?=$_GET['bright']?>"class="linkbox">Click to Change Style</a></div>

<?php } ?>
<div class="Nullbox">

<div class="clock_cal">
    <?php include "d_clock.php" ?>
</div>
</div>


<br>
<br>


</div>


<div class="container">
<div class="Nullbox">

</div>

<br>
<div class="C_box">
<?php include "calendar.php" ?>
</div>
<div class="Nullbox">

</div>
</div>





</body>
</html>




<!-- <script>

  auto(document.getElementById("./cursor/ani1147.ani").style.cursor);

</script> -->



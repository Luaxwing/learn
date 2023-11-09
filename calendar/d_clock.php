<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dynamic Digital Clock</title>

</head>
<style>

<?php  if($_GET["tmp_bright"]==0){ ?>
    /* .container{
        width: 90%;
        margin: auto;
        padding-top: 30px;
    } */
    .clock{

border: 2px solid rgb(116, 116, 116);
border-radius: 10px;
padding: 20px;
background-color: rgb(66, 66, 66);
}
.item_row{
display: flex;
/* background-color: blue; */
}
.item{
border: 3px solid rgb(116, 116, 116);
margin: auto;
background-color: white;
width: 40px;
height: 40px;
}
.text{
text-align: center;
padding-top: 20px;
}

<?php }elseif($_GET["tmp_bright"]==1){?>

    .clock{

border: 2px solid rgb(35, 128, 211);
border-radius: 10px;
padding: 20px;
background-color: rgb(35, 128, 211);
}
.item_row{
display: flex;
/* background-color: blue; */
}
.item{
/* border: 3px solid blue; */
border-radius: 50px;
margin: auto;
background-color: white;
width: 40px;
height: 40px;
}
.text{
    font-family: sans-serif;
    color: rgb(77, 159, 231);
text-align: center;
padding-top: 20px;
}

<?php }elseif($_GET["tmp_bright"]==2){?>

    .clock{

/* border: 2px solid rgb(116, 116, 116); */
padding: 20px;
/* background-color: black; */
}
.item_row{
display: flex;
/* background-color: blue; */
}
.item{
/* border: 3px solid rgb(116, 116, 116); */
margin: auto;
/* background-color: black; */
width: 40px;
height: 40px;
}
.text{
text-align: center;
padding-top: 20px;
color: white;
    font-family: 'Vladimir Script';
    font-size:40px;
}

<?php }else{?>


    .clock{

/* border: 2px solid rgb(116, 116, 116); */
border-radius: 10px;
padding: 20px;
background-color: rgba(244, 244, 244, 0.5);

}
.item_row{
display: flex;
/* background-color: blue; */
}
.item{
/* border: 3px solid rgb(116, 116, 116); */
margin: auto;
background-color: white;
width: 40px;
height: 40px;
}
.text{
text-align: center;
padding-top: 20px;
font-family: Arial, Helvetica, sans-serif;
}
<?php } ?>
    

</style>

<body>
    <?php include_once "myfunction.php" ;?>

    <div class="container">

    <div class="clock">
    <div class="screen">
        <div class="item_row">
            <!-- <div class="col"></div> -->
            <div class=" item text">    <span class="hour_num"><?php echo date("h",strtotime('now')) ;?></span></div>
            <div class=" item text">    <span class="min_num"><?php echo date("i",strtotime('now')) ;?></span></div>
            <div class=" item text">    <span class="sec_num"><?php echo date("s",strtotime('now')) ;?></span></div>
            <div class=" item text">    <span class="am_pm"><?php echo date("A",strtotime('now')) ;?></span></div>
            <!-- <div class="col"></div> -->
        </div>

    </div>

</div>




    </div>
    



    <script>

        setInterval(() => {

            // init
            let date = new Date(),
                hour = date.getHours(),
                min = date.getMinutes(),
                sec = date.getSeconds();

            let d;
            d = hour < 12 ? "AM" : "PM"; //if hour is smaller than 12, than its value will be AM else its value will be pm
            hour = hour > 12 ? hour - 12 : hour; //if hour value is greater than 12 than 12 will subtracted ( by doing this we will get value till 12 not 13,14 or 24 )
            hour = hour == 0 ? hour = 12 : hour; // if hour value is  0 than it value will be 12

            // adding 0 to the front of all the value if they will less than 10
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;

            // get value
            document.querySelector(".hour_num").innerText = hour;
            document.querySelector(".min_num").innerText = min;
            document.querySelector(".sec_num").innerText = sec;
            document.querySelector(".am_pm").innerText = d;

        }, 1000); // 1000 milliseconds = 1s

    </script>

</body>

</html>

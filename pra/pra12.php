
<!DOCTYPE html>
<html lang="en">
<li><a href="./P_list.html">返回</a></li>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算</title>
    <style>
    table,tr,th,td{
        border: 1px solid black;
    }
    .hightlight-thin{
        color: lightskyblue;
        font-size: 40px;
    }
    .hightlight-normal{
        color: green;
        font-size: 40px;
    }
    .hightlight-fat{
        color: red;
        font-size: 40px;
    }
    .resetbuttom{
        background-color: lightblue;
        border: 2px solid skyblue;
        text-decoration: none;
        font-size: 40px;
    }
    .warning{
        color: red;
    }
</style>
</head>

<body>

    <h2>BMI計算</h2>
    <?php include '../myfunction.php'; ?>
    <?php
    
        if(!isset($_GET['bmi'])){
    ?>
    <form action="<?php echo "pra12_bmi.php";?>" method="post" id="myform">
        <?php 
        if(!empty($_GET['weight']))
        {$test=$_GET['weight'];
        if($test=="none"){echo"<span class=warning>請輸入正確的值</span>";}
    }
        
        ?>
        <div>
            <label for="height">身高(公尺):</label>
            <input type="text" name="height" id="height" required>
        </div>
        <div>
            <label for="weight">體重(公斤):</label>
            <input type="text" name="weight" id="weight" required>
        </div>

        <br>
        <input type="submit" value="計算">
        <!-- <input type="reset" value="重置"> -->

    </form>
    <?php
        }else{
            brline("<a href=./pra12.php class=resetbuttom>重整</a>");
            br();
            $h = $_GET['height'];
            $w = $_GET['weight'];
            $bmi= $_GET['bmi'];
            
        
            
            
            // ------
            
            brline("身高:".$h."公尺");
            brline("體重:".$w."公斤");
            brline("BMI值為&nbsp;&nbsp;" . $bmi . "（kg/㎡）");
            br();
            
            
            if($bmi < 18.5){
                echo"<span class=hightlight-thin>";
            }elseif($bmi >= 24){
                echo"<span class=hightlight-fat>";
            }else{
                echo"<span class=hightlight-normal>";
            }
            echo"-";
            if ($bmi < 18.5) {
                echo "體重過輕";
            } elseif ($bmi >= 24) {
                if ($bmi >= 35) {
                    echo "重度肥胖";
                } elseif ($bmi >= 30) {
                    echo "中度肥胖";
                } elseif ($bmi >= 27) {
                    echo "輕度肥胖";
                } else {
                    echo "過重";
                }
            
            } else {
                echo "健康體位";
            }
            echo"-";
            echo"</span>";
            
            br_(3);
            
            echo"<table>";
            // ------
            echo "<tr>";
            th("成人肥胖定義");
            th("身體質量指數(BMI)(kg/㎡)");
            echo "</tr>";
            // ------
            echo "<tr>";
            td("體重過輕");
            td("BMI<18.5");
            echo "</tr>";
            // ------
            echo "<tr>";
            td("健康體位");
            td("18.5<=BMI<24");
            echo "</tr>";
            // ------
            echo "<tr>";
            td("體位異常");
            td("過重：24<=BMI<27"."<br>"."輕度肥胖：27 <= BMI < 30"."<br>"."中度肥胖：30 <= BMI < 35"."<br>"."重度肥胖：BMI >= 35"."<br>");
            echo "</tr>";
            // ------
            echo"</table>";



        }

        ?>

    

    <!-- <iframe id="resultFrame" src="get_post_pra.php" width="600" height="400" frameborder="0"></iframe>



    <script>
        function submitForm() {
            document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault(); // 阻止默认的表单提交行为

            var form = document.getElementById("myForm");
            var number = document.getElementById("num").value;
            var resultFrame = document.getElementById("resultFrame");
            
            // 使用 AJAX 发送表单数据到 b.php 并将结果加载到 iframe
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "get_post_pra.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    resultFrame.contentDocument.open();
                    resultFrame.contentDocument.write(xhr.responseText);
                    resultFrame.contentDocument.close();
                }
            };
            xhr.send("number=" + number);
        }
    </script> -->












</body>

</html>


<!DOCTYPE html>
<html lang="en">
<li><a href="../index.html">返回</a></li>
<li><a href="../pra/pra12.php">練習I</a></li>
<li><a href="../pra/pra13.php">練習II</a></li>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁傳值</title>
</head>

<body>
    <h2>GET</h2>
    <form action="?">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>

        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <input type="submit" value="送出">
        <input type="reset" value="重置">
    </form>
    <!-- ---------------------------------------------------- -->
    <h2>POST</h2>
    <form action="?" method="post">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>

        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
           
        </div>
        <input type="submit" value="送出">
        <input type="reset" value="重置">
 
    </form>


















    <!-- ---------------------------------------------------- -->
    <br><br><br><br><br>
    <hr>
    <br><br><br><br><br>

    <h2>TEST</h2>
    <h2>POST</h2>
    <form action="<?php echo "get_post_pra.php";?>" method="post" id="myform">
        
        <div>
            <label for="num">數值:</label>
            <input type="text" name="num" id="num"  value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>"required>
        </div>
        <br>
        <input type="submit" value="送出">

    </form>

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
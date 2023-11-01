<?php
// 设置会话存储路径
session_save_path("uploads/tmp");

// 启动会话
session_start();



$order=$_SESSION["orderlist"];

$pay=$_SESSION["pay"];

for($i= 0; $i<count($order)-1; $i++){
    if(isset($_POST["data$i"] )){
        if($_POST["pay"] ==0 && is_numeric($_POST["data$i"])){
            $pay[$i] = $_POST["data$i"];
        }else{
            $pay[$i] = 0;
        }
        $_SESSION["pay"] [$i]= $pay[$i];
        }
        
}



// $_SESSION["pay"]=$pay;


?>
<!-- ------------------------------------ -->
<?php
header("location:index.php ") ; 
?>
<?php
session_save_path("uploads/tmp");
// 启动会话
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>excel導入和導出的功能</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excel導入和導出的功能</title>
  </head>

  <body>
  <div class="top"><br></div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="excelFile">
      <input type="submit" value="上傳CSV">
    </form>
    <br>
    <hr>
    <br>
    <?php
    if (!empty($_SESSION['orderlist'])) {
      $order = $_SESSION['orderlist'];
      // if(!empty($_SESSION['price'])){
      //   $price=$_SESSION['price'];
      // }
      $price = $_SESSION['price'];

      if (!empty($_SESSION['pay'])) {
        $pay = $_SESSION['pay'];
      }

      // print_r($order);
    
      $num = count($order) - 2;

      echo "共" . $num . "人";
      ?>
      <br>
      <br>
      <div class="container">
      <table>
        <tr>
          <th>座號</th>
          <th>名字</th>
          <th>價格</th>
          <th>支付</th>
          <th>找回</th>
        </tr>
        <?php

        for ($i = 1; $i < count($order) - 1; $i++) {
          if (!empty($pay[$i])) {
            if ($pay[$i] != 0) {
              $balance = $pay[$i] - $price[$i];
              if ($balance > 0) {
                echo "<tr>";
              } elseif ($balance == 0) {
                echo "<tr style=color:blue;>";
              } else {
                echo "<tr>";
              }
            }
          } else {
            echo "<tr>";
          }



          for ($j = 0; $j <= 2; $j++) {
            echo "<td id=$i-$j>";
            echo $order[$i][$j];
            echo "</td>";
          }
          echo "<td class=sendbuttom>";

          ?>
          <?php
          if (!empty($pay[$i]) && $pay[$i] != 0 && $balance == 0) {
            echo "已付款";
          } else {
            ?>
            <form action="calculate.php" method="post">
              <input type="text" name="data<?= $i ?>" id="the.<?= $i ?>.sendbuttom">
              <input type="submit" value="送出">
            </form>
          <?php } ?>
          <?php

          echo "</td>";
          echo "<td >";
          if (!empty($pay[$i])) {
            if ($pay[$i] != 0) {
              balance($balance);
            }

          }

          echo "</td>";
          echo "</tr>";
        }





        ?>



      </table>
      <br>
      <hr>
      <a href="reset.php" class="resetbuttom">重置</a>
      <a href="reset.php?csv=none" class="resetbuttom">刪除表格</a>
      <?php
    } else {

      echo '請上傳 點餐.csv 至上方';

    }
    ?>
    </div>


  </body>

  </html>

  <?php
  //   if(!empty($_SESSION["pay"])) {
//   $pay=$_SESSION["pay"];
//   echo "<pre>";
//   print_r($pay);
//   echo "</pre>";
//   echo "<pre>";
//   print_r($price);
//   echo "</pre>";
  
  // }
  




  function balance($balance)
  {
    // $balance = $pay[$i] - $price[$i];
    if ($balance > 0) {
      echo "找" . $balance . "元";
    } elseif ($balance == 0) {
      echo "V";
    } else {
      echo "少" . abs($balance) . "元";
    }
  }

  ?>
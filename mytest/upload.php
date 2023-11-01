<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["excelFile"])) {
  $file = $_FILES["excelFile"];

  if ($file["error"] === UPLOAD_ERR_OK) {
    $targetDirectory = "uploads/";  // 上传文件的目标目录
    $new_file_name = "contacts.csv";
    $targetFile = $targetDirectory . $new_file_name;

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
      echo "文件上传成功。";
      // 在这里可以添加代码来处理上传的 Excel 文件，例如解析和处理数据。
      header("location:dataarry.php");
    } else {
      echo "文件上傳失敗。";

    }
  } else {
    echo "文件上傳錯誤： " . $file["error"];
  }
}
?>







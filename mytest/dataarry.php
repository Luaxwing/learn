<?php
// 设置会话存储路径
session_save_path("uploads/tmp");

// 启动会话
session_start();


// while (!feof($file))：这是一个 while 循环的开头，它检查是否已到达文件的末尾。
// feof 函数用于检测文件指针是否已经到达文件末尾。
$file = fopen("./uploads/contacts.csv","r");
$tmparry=[];
// $i=0;
while(! feof($file)) {
    $data=fgetcsv($file);
    // echo $i;
    // $i++;
    $tmparry[]=$data;
    // print_r($data);
    
  // print_r(fgetcsv($file));
  // 在循环中，fgetcsv($file) 用于逐行读取 CSV 文件的数据，并将其作为数组打印出来。
  // 这将在每次循环迭代中输出一行数据。
  }
 
fclose($file);

// 在循环结束后，使用 fclose 函数来关闭文件句柄，以释放资源并确保文件不再处于打开状态。
$tmparry[0]=null;

echo"<pre>";
print_r($tmparry);
echo"</pre>";


for($i=1;$i<=count($tmparry)-2;$i++){
    $price[$i]=$tmparry[$i][2];
    
}

$_SESSION['orderlist']=$tmparry;
$_SESSION['price']=$price;
// print_r($_SESSION['orderlist']);



header("location:index.php ") ; 
?>

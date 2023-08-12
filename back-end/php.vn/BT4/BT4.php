<?php
#Bài tập 1
//Tạo biến lưu trữ danh sách thành viên
//  $list_user = array();
//  $listUser = array():
$list_user = array();
#xuất dữ liệu mảng
// prin=r($_SERVER[HTTP_USER_AGENT]);
echo "<pre>";
print_r($_SERVER['HTTP_USER_AGENT']);
echo "</pre>";
?>
<html>
    <title>Bài Tập 4</title>
</html>
<p>hello work</p>
</body>
 <!-- cách chạy dữ liệu số -->
 <?php
 #số nguyên
 $age =10;
 $k =2;
 #số thực
 $m = 123.6;
 $n = 232.4;
 echo $age;
 echo "<br>";
 echo $m;
 ?>
 <!-- nhập dữ liệu kiểu mảng -->
 <?php
  $list_event = array(0 => 0, 1 => 2, 2 => 4, 3 => 6, 4 => 8, 5 => 10);
  echo "<pre>";
  print_r($list_event);
  echo "</pre>";
  #mảng nhiều chiều
 //danh sách thành viên
  /*
  * id:...
  * name:..
  *age:..
  */
  $my_array = array(
    1 => array(
        'id' => '1',
        'Name' => 'Ung Nho Danh',
        'age' => '21',
    ),
    2 => array(
        'id' => '1',
        'Name' => 'Ung Nho Cảnh',
        'age' => '21',
    ),
    3 => array(
        'id' => '3',
        'Name' => 'Ung Nho Vỹ',
        'age' => '22',
    ),
); 
echo "<pre>";
print_r($my_array);
echo "</pre>";
/*
echo "<pre>";
print_r($my_array);
echo "</pre>";
*/ //cách xuất dữ liệu mảng cho php
?>

<?php
/*
*b1:xây dựng giao diện 
*b2:chuẩn bị dữ  liệu => Tạo biến
*b3:đổ dữ liệu php vào html 
*/
$fullname = "Ung Nho Danh";
$Username = "Danh Ung";
$email = 'ungnhodanh0702@gmail.com'
?>

<html>
    <head>
        <title>Bài tập phần 3</title>
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <p>Họ và tên: <strong>Ung Nho Danh</strong></p>
        <p>UserName: <strong>Danhung</strong></p>
        <p>Email: <strong>ungnhodanh0702@gmail.com </strong></p>
    </body>
</html>
<!-- nhúng php vào html  -->
<html>   
    <html>
    <head>
        <title>Bài tập phần 3</title>
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <p>Họ và tên: <strong><?php echo $fullname; ?></strong></p>
        <p>UserName: <strong><?php echo $Username; ?></strong></p>
        <p>Email: <strong><?php echo $email; ?></strong></p>
    </body>
</html>
<!DOCTYPE html>
<html>
<header>
    <?php include_once("header1.php"); ?>
    <title>Nhân Viên</title>
    <?php include_once('header2.php'); ?>
    <link href="../css/hieuung.css" type="text/css" rel="stylesheet">
    <link href="../css/background.css" type="text/css" rel="stylesheet">
    <style>
        /* Thiết kế cơ bản cho văn bản */
h1 {
  font-family: Arial, sans-serif;
  font-size: 3rem;
  text-align: center;
  color: #333;
  position: relative;
}

/* Animation cho văn bản */
@keyframes animateText {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1) rotate(-3deg);
  }
  100% {
    transform: scale(1);
  }
}

/* Áp dụng animation vào văn bản */
.dynamic-text {
  animation: animateText 4s ease-in-out infinite;
}

    </style>
</header>
<body>
<?php include_once('nam.php'); ?>

<div class="background">
<?php include_once('header3.php'); ?>
<?php include_once('vd.php'); ?>
<?php include_once('vd1.php'); ?>

<center><div class="row" style="padding-bottom: 5%;"><h1 style="text-color: black; font-size: 40px; font-weight: bold;">Chào mừng đến với trang nhân viên</h1></div></center>

<center>
            <?php 
                // Lấy tên người đăng nhập từ session hoặc nơi lưu trữ thông tin đăng nhập
                // Giả sử biến $tenNhanVien chứa tên người đăng nhập
                $HoTenK = $_SESSION['HoTenK']; // Thay 'HoTenK' bằng key chứa tên trong session
                
                // Hiển thị tên người đăng nhập trong thẻ h1
                echo "<h1 style=\"font-size: 50px; font-weight: bold; margin-top: -80px; padding-right: 150px;\" class=\"dynamic-text\">$HoTenK</h1>";
            ?>
        </center>
<?php include_once('footer.php'); ?>
<div>
</body>
</html>
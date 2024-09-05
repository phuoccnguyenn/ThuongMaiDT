<?php
session_start();
include("../connection/connect_database.php");

// Kiểm tra xem có dữ liệu được gửi từ form không
if (isset($_POST['Username']) && isset($_POST['Password'])) {
    $username = $_POST['Username'];
    $password = md5($_POST['Password']);
    
    // Kiểm tra xem người dùng có bị khóa tài khoản không
    if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3) {
        $lockout_time = 60; // Thời gian khóa tài khoản trong giây (1 phút)
        $current_time = time();
        $last_attempt_time = $_SESSION['last_attempt_time'];

        if ($current_time - $last_attempt_time < $lockout_time) {
            echo "Tài khoản đã bị khóa. Vui lòng thử lại sau " . ($lockout_time - ($current_time - $last_attempt_time)) . " giây.";
            exit();
        } else {
            // Đặt lại số lần đăng nhập và cho phép một lần thử lại khác
            unset($_SESSION['login_attempts']);
            unset($_SESSION['last_attempt_time']);
        }
    }

    // Xử lý đăng nhập
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

    if ($username == "" || $password == "") {
        echo "Username và password không được để trống!";
    } else {
        $sql = "SELECT * FROM Users WHERE HoTen='" . $username . "' AND Password='" . md5($_POST['Password']) . "'";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);

        if ($num_rows > 0) {
            // Lưu thông tin người dùng vào session
            $_SESSION['Username'] = $username;
            $r_us = mysqli_fetch_array($query);
            $_SESSION['HoTenK'] = $r_us['HoTenK'];
            $_SESSION['IDUser'] = $r_us['idUser'];
            $_SESSION['SDT'] = $r_us['DienThoai'];
            $_SESSION['DC'] = $r_us['DiaChi'];
            $_SESSION['Email'] = $r_us['Email'];
            $_SESSION['idGroup'] = $r_us['idGroup'];

            // Chuyển hướng đến các trang tương ứng dựa trên nhóm người dùng
            if ($_SESSION['idGroup'] == 1) {
                echo "<script language='javascript'>alert('Đăng nhập thành công! Xin chào " . $r_us['HoTenK'] . "');";
                echo "location.href='../admin/index.php';</script>";
            } elseif ($_SESSION['idGroup'] == 4) {
                echo "<script language='javascript'>alert('Đăng nhập thành công! Xin chào " . $r_us['HoTenK'] . "');";
                echo "location.href='../customer/index.php';</script>";
            } elseif ($_SESSION['idGroup'] == 5) {
                // User is locked, show a message or redirect accordingly
                echo "<script language='javascript'>alert('Tài khoản của bạn đã bị khóa!');";
                // Redirect to a locked account page or log them out
                echo "location.href='DangNhap.php';</script>";
            } else {
                echo "<script language='javascript'>alert('Đăng nhập thành công! Xin chào " . $r_us['HoTenK'] . "');";
                if (isset($_SESSION['cart']))
                    echo "location.href='GioHang.php?idSP=1';</script>";
                else
                    echo "location='index.php';</script>";
            }
        } else {
            // Đăng nhập thất bại
            echo "<script language='javascript'>alert('Đăng nhập thất bại!');";
            echo "location.href='DangNhap.php';</script>";

            // Tăng số lần đăng nhập thất bại
            if (!isset($_SESSION['login_attempts'])) {
                $_SESSION['login_attempts'] = 1;
            } else {
                $_SESSION['login_attempts']++;
            }

            // Lưu thời điểm của lần thất bại cuối cùng
            $_SESSION['last_attempt_time'] = time();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<header>
    <?php include_once("header.php"); ?>
    <title>Trang chủ</title>
    <?php include_once("header1.php"); ?>
</header>
<body>
    <?php include_once("header2.php"); ?>
    <!-- Nội dung -->
    <div class="row">
        <marquee behavior="scroll" bgcolor=""><img src="../images/welcome.gif" height="130" width="340"/></marquee>
    </div>
    <div style="background-image: url(../images/banner-nuoc-hoa.jpg); background-repeat: no-repeat;">
        <form method="post" action="DangNhap.php">
            <div style="font-size: 150%; font-family: 'Helvetica Neue', helvetica, arial, sans-serif; color: #0e0079; text-align: center; margin-left: 50px;">
                <b>Đăng Nhập</b>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center; ">
                    <b><i>Nhập tên: </i></b>
                </div>
                <div class="col-md-6" style="color: red;">
                    <input type="text" style="border-radius: 5px; color: black;" size="30" name="Username" id="Username"
                        placeholder="ví dụ: abc" autofocus="autofocus" maxlength="50"
                        value="<?php if (isset($_POST['Username'])) echo $username; ?>"> (*)
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;text-align: center;">
                    <b><i>Nhập mật khẩu: </i></b>
                </div>
                <div class="col-md-6" style="color: red;">
                    <input type="password" style="border-radius: 5px; color: black;" size="30" name="Password" id="Password"
                        placeholder="Nhập password"> (*)<br>
                    <input type="checkbox" onclick="togglePasswordVisibility()"> Hiển thị mật khẩu
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button id="Submit" name="Submit" class="btn btn-success">Đăng nhập</button>
                    <button class="btn btn-success">
                        <a style="text-decoration: none; color: #FFFFFF;" href="../site/quenmatkhau.php">Quên mật khẩu</a>
                    </button>
                    <button class="btn btn-success">
                        <a style="text-decoration: none; color: #FFFFFF;" href="../site/index.php">Thoát</a>
                    </button>
                </div>
            </div>
            <br/><br/><br/>
        </form>
    </div>
    <?php include_once("footer.php"); ?>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("Password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>

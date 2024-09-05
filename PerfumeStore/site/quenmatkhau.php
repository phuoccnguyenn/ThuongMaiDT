<?php
include ('../connection/connect_database.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM `users` WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Tạo mật khẩu mới
        $newPassword = substr(md5(rand(0, 999999)), 0, 8);

        // Hash mật khẩu mới bằng MD5
        $hashedPassword = md5($newPassword);

        // Cập nhật mật khẩu mới vào database
        $updateSql = "UPDATE users SET password = ? WHERE Email = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ss", $hashedPassword, $email);
        $updateStmt->execute();

        // Gửi email chứa mật khẩu mới
        $subject = "Thay Đổi Mật Khẩu Từ Website TT SHOP";
        $message = "Mật khẩu mới của bạn từ website TT SHOP: " . $newPassword;

        // Sử dụng PHPMailer để gửi email
        require '../mail/PHPMailer/src/PHPMailer.php';
        require '../mail/PHPMailer/src/SMTP.php';
        require '../mail/PHPMailer/src/Exception.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pn617234@gmail.com'; // SMTP username
            $mail->Password = 'vxkdwxniwtvukhxx'; // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('pn617234@gmail.com', 'Mailer');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();

            $_SESSION['success_message'] = "Mật khẩu mới đã được gửi qua email.";
        } catch (Exception $e) {
            $_SESSION['error_message'] = "Email không thể gửi: {$mail->ErrorInfo}";
        }

        $updateStmt->close();
    } else {
        $_SESSION['error_message'] = "Email không tồn tại.";
    }

    $stmt->close();
}
?>

<?php
   function guimatkhaumoi($email, $matkhaumoi){
    require "../mail/PHPMailer/src/PHPMailer.php"; 
    require "../mail/PHPMailer/src/SMTP.php"; 
    require '../mail/PHPMailer/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'pn617234@gmail.com';                 // SMTP username
        $mail->Password = 'vxkdwxniwtvukhxx';  
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('pn617234@gmail.com', 'Mailer');
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được mail này, do bạn hoặc ai đó yêu cầu mật khẩu mới từ website Ấn phẩm Shop</p>
            Mật khẩu của bạn là {$matkhaumoi}
        "; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Hm4UqjzZiNUV6tAZ9zF7+PBKFddXZ5wo9rBq4RdS9UaduEvjz1kN5CvmmhK9eUx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mainstyle.css">
    <title>Quên mật khẩu</title>
    <style>
        body {
            background: url(image/banner1.webp);
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }
        .login-box {
            width: 350px;
            margin: 260px auto 125px auto;
            background-color: #ffffffb8;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
            text-align: center;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group p {
            padding: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .password-toggle {
            position: relative;
        }
        .password-toggle input[type="password"] {
            padding-right: 30px;
        }
        .password-toggle .toggle-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        input#email {
            margin-top: 20px;
        }
        .forgot-password {
            margin-top: 10px;
        }

        .register-link {
            margin-top: 10px;
        }
        .register-button {
            width: 100%;
            padding: 8.5px;
            box-sizing: border-box;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .register-button:hover {
            background-color: #0DB7EA;
            color: #000;
        }
        .p-center {
            text-align: center;
        }
        .color-turquoise {
            color: #1b534d;
        }
        .color-turquoise:hover {
            color: #0DB7EA;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="login-container">
        <div class="login-box">
            <h1 class="p-center">Quên mật khẩu</h1>
            <?php
                if (isset($_SESSION['error_message'])) {
                    echo "<p style='color: red; text-align: center; margin-top: 8px;'>" . $_SESSION['error_message'] . "</p>";
                    unset($_SESSION['error_message']);
                }
                if (isset($_SESSION['success_message'])) {
                    echo "<p style='color: green; text-align: center; margin-top: 8px;'>" . $_SESSION['success_message'] . "</p>";
                    unset($_SESSION['success_message']);
                }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="prev_pass" value="<?= $fetch_profile["password"]; ?>">
                    <input type="email" id="email" name="email" required placeholder="Nhập email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="form-group">
                    <input type="submit" value="Gửi yêu cầu" class="register-button" name="submit">
                </div>
                <div class="form-group register-link">
                    <p>Bạn đã có tài khoản? <a class="color-turquoise" href="dangnhap.php">Đăng nhập</a></p>
                    <p>Bạn chưa có tài khoản? <a class="color-turquoise" href="dangky.php">Đăng ký</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
<?php
include_once('../connection/connect_database.php');

if (isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];

    // Update idGroup to 2 to unlock the account
    $query = "UPDATE users SET idGroup = 2 WHERE idUser = $idUser";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Tài khoản đã được mở khóa thành công.";
    } else {
        echo "Không thể mở khóa tài khoản. Lỗi: " . mysqli_error($conn);
    }
} else {
    echo "Không có thông tin tài khoản để mở khóa.";
}

// Đóng kết nối
mysqli_close($conn);
?>

<?php
include_once('../connection/connect_database.php');

if (isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];

    // Update idGroup to 5 to lock the account
    $query = "UPDATE users SET idGroup = 5 WHERE idUser = $idUser";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Tài khoản đã được khóa thành công.";
    } else {
        echo "Không thể khóa tài khoản. Lỗi: " . mysqli_error($conn);
    }
} else {
    echo "Không có thông tin tài khoản để khóa.";
}

// Đóng kết nối
mysqli_close($conn);
?>

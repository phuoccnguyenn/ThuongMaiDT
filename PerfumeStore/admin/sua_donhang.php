<?php
require('../mail/sendmail.php');
include_once('../connection/connect_database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý khi có dữ liệu gửi đi từ form
    $idDH = $_POST['idDH'];
    $newStatus = $_POST['newStatus'];

    // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
    $updateQuery = "UPDATE donhang SET DaXuLy = $newStatus WHERE idDH = $idDH";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo "Cập nhật trạng thái đơn hàng thành công.";
        // Chuyển hướng về trang danh sách đơn hàng
        header("Location: ../admin/index_donhang.php");
        exit(); // Đảm bảo không có mã HTML hoặc dữ liệu nào được xuất ra sau header
    } else {
        echo "Lỗi cập nhật trạng thái đơn hàng: " . mysqli_error($conn);
    }
}

// Lấy thông tin đơn hàng từ tham số trên URL
if (isset($_GET['idKM'])) {
    $idDH = $_GET['idKM'];
    $selectQuery = "SELECT * FROM donhang WHERE idDH = $idDH";
    $result = mysqli_query($conn, $selectQuery);

    if ($result) {
        $order = mysqli_fetch_assoc($result);
    } else {
        echo "Lỗi lấy thông tin đơn hàng: " . mysqli_error($conn);
        // Bạn có thể xử lý lỗi một cách chủ động hơn tại đây
    }
}
?>
<!DOCTYPE html>
<html>
<header>
    <?php include_once ("header1.php");?>
    <title>Cập nhật tình trạng đơn hàng </title>
    <?php include_once('header2.php');?>
    <style>div.row {
            padding-top: 2%;
        }</style>
</header>
<body>
<?php include_once ('header3.php');?>
<!-- Nội dung ở đây -->
<h3 style="text-align: center">Cập nhật tình trạng đơn hàng </h3>
<form method="post" action="" name="sua_dh" enctype="multipart/form-data">
<div class="col-md-2" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><strong>Tình trạng đơn hàng:</strong></div>
<select name="newStatus">
            <?php
                $statuses = array(
                    1 => 'Đã Xử Lý',
                    0 => 'Chưa Xử Lý',
                    2 => 'Đã Giao',
                    3 => 'Yêu Cầu Hủy',
                    4 => 'Bị Hủy'
                );

                foreach ($statuses as $value => $label) {
                    echo "<option value=\"$value\"";
                    if ($order['DaXuLy'] == $value) echo ' selected';
                    echo ">$label</option>";
                }
            ?>
        </select>
        <input type="hidden" name="idDH" value="<?php echo $order['idDH']; ?>">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-9"><button id="Sua" name="Sua"  class="btn btn-success">Cập Nhật Trạng Thái</button>  
        <button class="btn btn-success"><a style="text-decoration: none; color: #FFFFFF;" href="../admin/index_donhang.php">Thoát</a></button></div>
    </div>
</form>

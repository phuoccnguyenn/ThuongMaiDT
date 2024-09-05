<!DOCTYPE html>
<html>
<header>
    <?php include_once("header.php"); ?>
    <title>Thanh toán</title>
    <?php include_once("header1.php"); ?>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <style>
        .dancach {
            margin-bottom: 2%;
        }
    /* Định dạng các nút */
    .button-container {
      display: flex;
      justify-content: space-between; /* Canh các nút ở hai đầu */
    }

    .button-container form {
      flex: 1; /* Nút sẽ mở rộng để điền đầy container */
      margin-right: 10px; /* Khoảng cách giữa các nút */
    }

    /* Các nút giống nhau nhưng có thể thay đổi theo nhu cầu của bạn */
    .btn {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }
    </style>

</header>
<body>
<?php include_once("header2.php"); ?>
<?php 
include '../connection/connect_database.php';
require('../mail/sendmail.php');
if (isset($_SESSION['IDUser'])) {
    $sql_u = "select * from users where idUser=" . (int)$_SESSION['IDUser'];
    $query_u = mysqli_query($conn, $sql_u);
    $r_us = mysqli_fetch_array($query_u);
    $flag = true;/// đã đăng nhập
} else {
    $flag = false;
}/// chưa đăng nhập
$sql_pttt = 'select * from phuongthucgiaohang where AnHien =1';
$rs = mysqli_query($conn, $sql_pttt);
$phivc = 0;
if (isset($_POST['PTGH'])) {
    while ($r_phi = $rs->fetch_assoc()) {
        if ($r_phi['idGH'] == $_POST['PTGH'])
            $phivc = $r_phi['Phi'];
    }
}?>

<!---- Nội dung---->
<div class="indexh3 text-center">
    <?php if (isset($_SESSION['Username'])) echo "<h3>Thông tin đặt hàng</h3>"; else echo "<h3>Đặt hàng không cần đăng ký</h3>" ?>
   <div class='row' align='center'><img src="../images/thanks.gif"></div>
    <div class="sep-wrap center nz-clearfix">
        <div class="nz-separator solid"
             style="margin-top:10px; border-bottom-color:#ddd;width:40%;border-bottom-width:2px;">&nbsp;</div>
    </div>
    <div class="sep-wrap center nz-clearfix">
        <div class="nz-separator solid"
             style="margin-top:1px;margin-left:40%; border-bottom-color:#f1f1f1;width:40%;border-bottom-width:2px;">
            &nbsp;</div>
    </div>
</div>


<div class="row">
    <div class="row">
    <form action="" method="post" name="x">
        <?php if ($flag == true) { ?><!-------------Đã đăng nhập------------>
        <div class="col-md-8">
            <div class="row dancach"><b>Thông tin giao hàng</b></div>
            <div class="row dancach"><b>Tên khách hàng:<b><i><?php if ($flag == true) echo $r_us['HoTenK']; ?></i></b>
                </b></div>
            <div class="row dancach"><b>Địa chỉ:</b><b><?php if ($flag == true) echo $r_us['DiaChi']; ?></b></div>
            <div class="row dancach"><b>Điện thoại:</b><b> <?php if ($flag == true) echo $r_us['DienThoai']; ?></b>
            </div>
            <div class="row dancach"><b>Email:</b><b><?php if ($flag == true) echo $r_us['Email']; ?></b></div>
        </div>
        <?php } else { ?><!-------------Chua đang nhập------------>
        <div class="col-md-8">
            <div class="row center-block">

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3 dancach">Họ tên người nhận:</div>
                        <div class="col-md-9 dancach"><input type="text" class="form-control" name="HoTen"></div>
                        <div class="col-md-3 dancach">Email:</div>
                        <div class="col-md-9 dancach"><input type="email" class="form-control" name="email"
                                                             placeholder="abc@gmail.com"></div>
                        <div class="col-md-3 dancach">Địa chỉ nhận hàng:</div>
                        <div class="col-md-9 dancach"><textarea class="form-control" rows="5" id="DiaChi" name="DiaChi"
                                                                placeholder="Vui lòng nhập chính xác địa chỉ nhận hàng!"></textarea>
                        </div>
                        <div class="col-md-3 dancach">Số điện thoại người nhận:</div>
                        <div class="col-md-9 dancach"><input type="tel" class="form-control" name="SDT"
                                                             placeholder="Vui lòng nhập số điện thoại"></div>
                    </div>
                </div>
                <?php } ?><!----------enđ---CHua đang nhập------------>
                <div class="col-md-8">
                    <div class="row center-block">
                        <div class="row">
                            <div class="col-md-10 dancach"><p>Chúng tôi sẽ liên hệ quý khách theo số điện thoại hoặc
                                    email này để xác nhận hoặc thông báo giao hàng</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 dancach">Chọn phương thức nhận hàng:</div>
                            <div class="col-md-4 dancach">
                                <select name="PTGH" class="check" id="PTGH">
                                    <?php

                                    while ($r = $rs->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $r['idGH']; ?>"
                                                selected='selected'><?php echo $r['TenGH'] . '-' . $r['Phi'] . 'VNĐ'; ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="submit" class="form-control col-md-2" value="Đặt hàng offline" name="OK" style="margin-left: 180%; margin-bottom: 10px; background: #e39546"></div>
            </div>

    </form>
    

<!-- Script để chuyển hướng khi nút được nhấn -->
<script>
    document.getElementById('paymentForm').addEventListener('submit', function() {
        window.location.href = 'onepay.php';
    });
</script>
</from>
</div>

<!----------------------------------------------------->
<div class="row"
">
<div class="col-md-4" style="background-color: #f5f3f1;">
    <div class="row dancach"><h4><b>Thông tin đơn hàng</b></h4></div>
    <div class="row dancach" style="border: dashed; background-color: #effdff; border-color: #3ea2b2;"></div>
    <div class="row dancach">
        <div class="col-md-5"><b>Sản phẩm</b></div>
        <div class="col-md-2"><b>Số lượng</b></div>
        <div class="col-md-5"><b>Giá</b></div>
    </div>
    <div class="row dancach" style="border: dashed; background-color: #effdff; border-color: #3ea2b2;"></div>
    <?php $tongtien = 0; ?>
    <?php if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $list) {
            $tongtien += (int)$list['qty'] * $list['GiaBan']; ?>
            <div class="row dancach">
                <div class="col-md-6"><b><?php echo $list['TenSP']; ?></b></div>
                <div class="col-md-2"><b><?php echo $list['qty']; ?></b></div>
                <div class="col-md-4"><b><?php echo number_format($list['GiaBan'], 0); ?></b></div>
            </div>
            <div class="row dancach" style="border: groove; border-color: #3ea2b2;"></div>
        <?php }
    } ?>

    <div class="row dancach">
        <div class="col-md-7">PHÍ VẬN CHUYỂN (tạm tính):</div>
        <div class="col-md-5" style=" text-align: right;">
            <h4><b style="color: red;">
                    Miễn phí        
                </b>
            </h4>
        </div>
    </div>
    <div class="row dancach" style="border: dashed; background-color: #effdff; border-color: #3ea2b2;"></div>
    <?php
$phivc = 0;

while ($r_phi = $rs->fetch_assoc()) {
    if ($r_phi['idGH'] == $_POST['PTGH']) {
        $phivc = $r_phi['Phi'];
    }
}

// Tính tổng tiền từ giỏ hàng
$tongtien = 0; // Đảm bảo tổng tiền được khởi tạo là 0
foreach ($_SESSION['cart'] as $list) {
    $tongtien += (int)$list['qty'] * $list['GiaBan'];
}

// Cộng thêm phí vào tổng tiền
$tongtien += $phivc;

// Hiển thị tổng tiền
echo "Tổng Tiền: " . number_format($tongtien, 0) . 'VNĐ';
?>
    <div class="row dancach">
        <div class="col-md-5"><h4><b style="color: red;">TỔNG TIỀN:</b></h4></div>
        <div class="col-md-7" style=" text-align: right;"><h4><b
                        style="color: red;"><?php echo number_format($tongtien, 0) . '' . 'VNĐ' ?></b></h4></div>
    </div>
    <div class="button-container">
    <form id="paymentForm" action="onepay.php" method="POST" target="_blank" enctype="application/x-www-form-urlencoded">
      <input type="submit" name="OK" value="OnePay" class="btn btn-danger">
    </form>
    <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomo.php">
        <input type="hidden" name="tongtien" value="<?php echo $tongtien; ?>" />
        <input type="submit" name="momo" value="MOMO QRcode" class="btn btn-danger">
    </form>

    <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomo_atm.php">
        <input type="hidden" name="tongtien" value="<?php echo $tongtien; ?>" />  
        <input type="submit" name="momo" value="MOMO ATM" class="btn btn-danger">
    </form>
  </div>
</div>

<?php

$sl_donhang = "select  idDH  from donhang ORDER By  idDH DESC ";
$rs_donhang = mysqli_query($conn, $sl_donhang);
$sodh = 0;
$date = date('Y-m-d H:m:s');
while ($rsodh = $rs_donhang->fetch_assoc()) {
    $sodh = $rsodh['idDH'];
    break;
}
$sodh = (int)$sodh + 1;
if ($flag != true && isset($_SESSION['cart'])) {
    if (isset($_POST['OK']) && isset($_POST['HoTen']) && isset($_POST['email']) && isset($_POST['DiaChi']) && isset($_POST['SDT'])) {
        $sql_dh1 = "insert into donhang values (" . $sodh . ",0,'" . $date . "','" . $_POST['HoTen'] . "','" . $_POST['DiaChi'] . "'," . $_POST['SDT'] . ",0," . $_POST['PTGH'] . ",0,0,'" . $_POST['email'] . "')";
        $rs_dh1 = mysqli_query($conn, $sql_dh1);
        if (!$rs_dh1) {

            echo "<script language='JavaScript'> alert('Thêm thành công!');</script>";

        } else {
            foreach ($_SESSION['cart'] as $pro) {
                $sql_ctdh = "INSERT INTO donhangchitiet(idDH, idSP, TenSP, SoLuong, Gia) VALUES (" . $sodh . "," . $pro['idSP'] . ",N'" . $pro['TenSP'] . "'," . $pro['qty'] . "," . $pro['GiaBan'] . ")";
                $rs_ctdh = mysqli_query($conn, $sql_ctdh);
                $sql_sanpham = " update sanpham set SoLuongTonKho -=".(int)$pro['qty'].'where idSP='.$pro['idSP'];
                $rs_sanpham = mysqli_query($conn, $sql_sanpham);
                if (!$rs_ctdh) {
                    echo "<script language='JavaScript'> alert('Thêm thành công!');</script>";
                } else {
                    echo "<script language='JavaScript'> alert('Đơn hàng của bạn đã được ghi nhận');";
                    unset($_SESSION['cart']);
                    echo " location.href='../site/index.php?index=1';</script>";
                }
            }


        }


    }
} else {

    if (isset($_POST['OK']) && isset($_SESSION['cart'])) {
        $sql_dh2 = "insert into donhang VALUES (" . $sodh . "," . $_SESSION['IDUser'] . ",'" . $date . "',N'" . $_SESSION['HoTenK'] . "',N'" . $_SESSION['DC'] . "',
                 " . $_SESSION['SDT'] . ",0," . $_POST['PTGH'] . ",0,0,'" . $_SESSION['Email'] . "'
                 ) ";
        $rs_dh2 = mysqli_query($conn, $sql_dh2);
        if (!$rs_dh2) {
            echo "<script language='JavaScript'> alert('Thêm thành công!');</script>";
        } else {
            foreach ($_SESSION['cart'] as $pro) {
                $sql_ctdh = "INSERT INTO donhangchitiet(idDH, idSP, TenSP, SoLuong, Gia) VALUES (" . $sodh . "," . $pro['idSP'] . ",N'" . $pro['TenSP'] . "'," . $pro['qty'] . "," . $pro['GiaBan'] . ")";
                $rs_ctdh = mysqli_query($conn, $sql_ctdh);
                $sql_sanpham = " update sanpham set SoLuongTonKho -=".(int)$pro['qty'].'where idSP='.$pro['idSP'];
                $rs_sanpham = mysqli_query($conn, $sql_sanpham);
                if (!$rs_ctdh) {
                    echo "<script language='JavaScript'> alert('Thêm thành công!');</script>";
                } else {
                    echo "<script language='JavaScript'> alert('Đơn hàng của bạn đã được ghi nhận');";
                    unset($_SESSION['cart']);
                    echo " location.href='../site/index.php?index=1';</script>";
                
                }

            }
            $maildathang=$r_us['Email'];
            $tieude = "CAM ON BAN DA DAT HANG!";
            // Bổ sung thông tin khách hàng vào nội dung email
            $noidung = ''; 
            $noidung .= "<p><strong>Thông tin khách hàng:</strong></p>";
            if ($flag) { // Nếu đã đăng nhập
                $noidung .= "<p><strong>Tên khách hàng:</strong> " . $r_us['HoTenK'] . "</p>";
                $noidung .= "<p><strong>Địa chỉ:</strong> " . $r_us['DiaChi'] . "</p>";
                $noidung .= "<p><strong>Email:</strong> " . $r_us['Email'] . "</p>";
                $noidung .= "<p><strong>Số điện thoại:</strong> " . $r_us['DienThoai'] . "</p>";
                $noidung .= "<p><strong>Chúng tôi sẽ liên hệ quý khách theo số điện thoại hoặc email này để xác nhận hoặc thông báo giao hàng</strong></p>";
                $noidung .= "<div><h4><b style='color: red;'>TỔNG TIỀN:</b></h4></div>";
                $noidung .= "<div style='text-align: left;'><h4><b style='color: red;'>" . number_format($tongtien, 0) . ' VNĐ</b></h4></div>';
                


            } else { // Nếu chưa đăng nhập
                $noidung .= "<p><strong>Tên khách hàng:</strong> " . $_POST['HoTen'] . "</p>";
                $noidung .= "<p><strong>Địa chỉ:</strong> " . $_POST['DiaChi'] . "</p>";
                $noidung .= "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
                $noidung .= "<p><strong>Số điện thoại:</strong> " . $_POST['SDT'] . "</p>";
            }
            $mail = new Mailer();
            $mail->dathangmail($tieude, $noidung, $maildathang);

        }
    }
}
?>
<?php include_once("footer.php"); ?>

</body>
</html>
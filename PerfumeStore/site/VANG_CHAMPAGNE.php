<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<header>
    <?php include_once ("header.php");?>
    <title>Trang chủ</title>
    <?php include_once ("header1.php");?>
    <?php include ('../connection/connect_database.php');?>
    <?php include ('../libs/lib.php');?>
    <style>
        .box{ border-radius: 2%;}
        .box.hover{border-color: green;}
        .boxsizing {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            width: 180px;
            height: 182px;
            border: 1px solid blue;
        }
        div.row{padding-top: 2%;}
        .buyproduct{ background-color: #fbc902;}
    </style>
    <style type="text/css">
        .hovergallery:hover{
            -webkit-transform:scale(1.2); /*Webkit: Scale up image to 1.2x original size*/
            -moz-transform:scale(1.2); /*Mozilla scale version*/
            -o-transform:scale(1.2); /*Opera scale version*/
            box-shadow:0px 0px 30px gray; /*CSS3 shadow: 30px blurred shadow all around image*/
            -webkit-box-shadow:0px 0px 30px gray; /*Safari shadow version*/
            -moz-box-shadow:0px 0px 30px gray; /*Mozilla shadow version*/
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="../css/hoa.min.css" type="text/css">
    <link rel="stylesheet" href="../css/layout.min.css" type="text/css">
</header>
<?php include_once ("header2_index.php");?>
<!-- Nội dung -->
<h3 align="center">VANG CHAMPAGNE</h3>

<form method="GET">
    <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm...">
    <button type="submit">Tìm kiếm</button>
</form>

<?php
// Kiểm tra xem có yêu cầu tìm kiếm hay không
if (isset($_GET['search'])) {
    // Lấy từ khóa tìm kiếm từ biểu mẫu
    $keyword = $_GET['search'];

    // Thực hiện truy vấn cơ sở dữ liệu với từ khóa tìm kiếm
    $query = "SELECT * FROM sanpham WHERE TenSP LIKE '%$keyword%' AND AnHien=1 and idL=1";
    $result = mysqli_query($conn, $query);

    // Kiểm tra xem có kết quả tìm kiếm hay không
    if ($result) {
        echo "<div class=\"row text-center\" style=\"margin-top:40px\">
            <div id=\"productlist\">";
        while ($r = mysqli_fetch_assoc($result)) {
            if ($r['idSP'] == 1) continue;
            displayProduct($r);
        }
        echo "</div></div>";
    } else {
        echo "Không có kết quả tìm kiếm.";
    }
} else {
    // Hiển thị tất cả sản phẩm nếu không có tìm kiếm
    $sl_sanpham = "select * from sanpham WHERE AnHien=1 and idL=1";
    $rs_sanpham = mysqli_query($conn, $sl_sanpham);
    if (!$rs_sanpham) {
        echo "<script language='javascript'>alert('Không thể kết nối !');";
        echo "location.href='index.php?index=1';</script>";
    }

    echo "<div class=\"row text-center\" style=\"margin-top:40px\">
        <div id=\"productlist\">";
    while ($r = $rs_sanpham->fetch_assoc()) {
        if ($r['idSP'] == 1) continue;
        displayProduct($r);
    }
    echo "</div></div>";
}

// Function to display product
function displayProduct($product)
{
    echo "<div class=\"col-md-3 col-sm-6 col-xs-6\" style=\"margin-bottom:10px\">
        <div class=\"item\">
            <div class=\"prod-box\">
                <span class=\"prod-block\">
                    <a href=\"MoTa.php?idSP={$product['idSP']}\" class=\"hover-item\"></a>
                    <span class=\"prod-image-block\">
                        <span class=\"prod-image-box\">
                            <img class=\"prod-image\" src=\"../images/{$product['urlHinh']}\" alt=\"\">
                        </span>
                    </span>
                    <span class=\"productname dislay-block limit limit-product\">
                        {$product['TenSP']}
                    </span>
                    <span class=\"category dislay-block\">
                        <span class=\"pricein168 dislay-block limit\">
                            <span class=\"money\">{$product['GiaBan']}</span> VNĐ
                        </span>
                    </span>
                </span>
                <a href=\"GioHang.php?idSP={$product['idSP']}\" class=\"addcartbtn\" onclick=\"AddCart(1379)\">
                    <img src=\"../images/xe.png\">
                </a>
                <a style=\"color: #0e86c1;\" href=\"MoTa.php?idSP={$product['idSP']}\" onclick=\"BuyNow(1379)\" class=\"btn btn-default buyproduct\">
                    <strong>MUA HÀNG</strong>
                </a>
            </div>
        </div>
    </div>";
}
?>

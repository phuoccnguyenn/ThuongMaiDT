<?php
if(!isset($_SESSION))
{
    session_start();ob_start();
}
$SLuong=0;
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null)
{
    foreach ($_SESSION['cart'] as $list)
        $SLuong+= $list['qty'];
}
else $SLuong =0;
echo "  <header class=\"wrapper clearfix\">
    <div id=\"banner\">
        <div id=\"logo\"><a href=\"\"><img src=\"../images/logo_store.png\" width=\"100px\" height=\"100px\" alt=\"logo\"></a></div>
    </div>

    <!-- main navigation -->
    <nav id=\"topnav\" role=\"navigation\" >
        <div class=\"menu-toggle\">Menu</div>
        <ul class=\"srt-menu\" id=\"menu-main-navigation\">
            <li class=\"current\"><a href=\"index.php?index=1\" style=\"cursor:pointer\" onclick=\"openNav()\">HOME PAGE</a></li>
            <li><a onclick=\"toggleNav()\">LỌC SP</a></li>
            <li><a href=\"#\">DANH MỤC</a>
                <ul>
               <li><a href=\"../site/VANG_CHAMPAGNE.php\">VANG/CHAMPAGNE</a> </li>
                <li><a href=\"../site/WHISKY.php\">WHISKY</a> </li>
                <li><a href=\"../site/SPIRITS.php\">SPIRITS</a></li>
                 <li><a href=\"../site/BIA.php\">BIA</a></li>
                </ul>
            </li>
            <li>
                <a href=\"../site/ds_baiviet.php\">TIN TỨC VỀ RƯỢU</a> 
            </li> ";
if(isset($_SESSION['HoTenK']))
{
    $nameuser = $_SESSION['HoTenK'];
    echo "
            <li>
                <a href=\"#\">";echo "<strong>". $nameuser."</strong>"; echo "</a>
                <ul>
                     <li><a href=\"../site/DangXuat.php\">Đăng xuất</a></li>
                     <li><a href=\"../site/Sua_TaiKhoan.php\">Sửa thông tin</a></li>";?>
<?php 
if (isset($_SESSION['idGroup'])) {
    if ($_SESSION['idGroup'] == 1) {
        echo "<li><a href=\"../admin/index.php\"> Quản trị </a></li>";
    }
    if ($_SESSION['idGroup'] == 4) {
        echo "<li><a href=\"../customer/index.php\"> Quản trị </a></li>";
    }
}
?>

              <?php echo " </ul>
            </li>";

}else
{
    echo "
            <li>
                <a href=\"#\">THÀNH VIÊN</a>
                <ul>
                    <li><a href=\"../site/TaoTaiKhoan.php\">Đăng ký </a></li>
                    <li><a href=\"../site/DangNhap.php\">Đăng nhập</a></li>

                </ul>
            </li>";
}


echo " 
             <li> <div id=\"banner\">
        <div id=\"cart\"><a href=\"../site/GioHang.php?idSP=1\"><img src=\"../images/Cart.png\" width=\"30px\" height=\"30px\" alt=\"cart\">"; echo "  <strong>(".$SLuong.")</strong>"; echo "</a></div>
    </div></li>
        </ul>
    </nav><!-- end main navigation -->

</header><!-- end header -->
<!-- main content area -->
<div id=\"main\" class=\"wrapper\">


    <!-- content area -->
    <section id=\"content\" class=\"wide-content\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-12 col-lg-offset-0\">
";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../site/index.php?index=1">Tất cả</a>
  <a href="../site/index.php?index=2">SP nổi bật</a>
  <a href="../site/index.php?index=3">SP bán chạy</a>
  <a href="../site/index.php?index=4">SP giảm giá</a>
  <a href="../site/index.php?index=5">SP mới về</a>
  <a href="../site/index.php?index=6">SP xem nhiều</a>
  <a href="../site/index.php?index=7">Giá giảm dần</a>
  <a href="../site/index.php?index=8">Giá tăng dần</a>
</div>

<script>
let navIsOpen = false;

function toggleNav() {
  if (navIsOpen) {
    closeNav();
  } else {
    openNav();
  }
  navIsOpen = !navIsOpen;
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 

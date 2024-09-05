<?php
include_once ('../connection/connect_database.php');
$sl_user = "select * from users WHERE idGroup=4";
$rs_user = mysqli_query($conn,$sl_user);
if(!$rs_user)
echo "Không thể truy vấn CSDL";?>

<!DOCTYPE html>
<html>
<header>
    <?php include_once ("header1.php");?>
    <title>Danh sách NHÂN VIÊN </title>
    <?php include_once('header2.php');?>
    <style>div.row {
        padding-top: 2%;
        }</style>
</header>
<body>
<?php include_once ('header3.php');?>
<!--Content Start Here -->
<h3 style="text-align: center">DANH SÁCH NHÂN VIÊN </h3>
<a href="them_nhanvien.php" ><strong><button type="button" class="btn btn-info"> THÊM </button></strong></a>
<div style="overflow-x: scroll"> <table class=" table table-bordered hover"  style="overflow-x: scroll" border="2">
        <thead class="text-center">
        <tr>
            <td width=""><strong> STT</strong></td>
            <td width=""><strong> TÊN NHÂN VIÊN </strong></td>
            <td width=""><strong> HỌ TÊN KHÁCH HÀNG </strong></td>
            <td width=""><strong> ĐỊA CHỈ </strong></td>
            <td width=""><strong> ĐIỆN THOẠI </strong></td>
            <td width=""><strong> EMAIL </strong></td>
            <td width=""><strong> NGÀY ĐĂNG KÝ</strong></td>
            <td COLSPAN="2"><strong> THAO TÁC </strong></a></td>
        </tr>
        </thead>
        <?php $stt = 0;?>
        <?php while ($r = $rs_user->fetch_assoc()) {?>
            <tbody>
            <td width=""><strong> <?php echo ++$stt ;?> </strong></td>
            <td width=""><strong><?php echo $r['HoTen'];?> </strong></td>
            <td width=""><strong><?php echo $r['HoTenK'];?> </strong></td>
            <td width=""><strong><?php echo $r['DiaChi'];?> </strong></td>
            <td width=""><strong><?php echo $r['DienThoai'];?> </strong></td>
            <td width=""><strong><?php echo $r['Email'];?> </td>
            <td width=""><strong><?php echo $r['NgayDangKy'];?> </strong></td>
            <td><a href="sua_nhanvien.php?idUser=<?php echo $r['idUser'];?>" ><strong> SỬA </strong></a></td>
            <td><a href="xoa_nhanvien.php?idUser=<?php echo $r['idUser'];?>"><strong> XÓA </strong></a></td>
            </tbody>
        <?php }?>
    </table></div>
<?php include_once ('footer.php');?>
</body>
</html>

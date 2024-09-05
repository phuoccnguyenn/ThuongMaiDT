<?php
// truy-van-du-lieu.php
include_once('../connection/connect_database.php');

$query = "SELECT d.idDH, SUM(c.SoLuong * c.Gia) AS TongTien, COUNT(c.SoLuong) AS DemSL
          FROM donhang d
          JOIN donhangchitiet c ON d.idDH = c.idDH
          WHERE d.DaXuLy > 0 AND d.DaXuLy < 4
          GROUP BY d.idDH";

$result = mysqli_query($conn, $query);

$chartData = [];

while ($row = mysqli_fetch_assoc($result)) {
    $chartData[] = [
        'idDH' => $row['idDH'],
        'TongTien' => $row['TongTien'],
        'DemSL' => $row['DemSL']
    ];
}

echo json_encode($chartData);
?>

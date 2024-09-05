<!DOCTYPE html>
<html lang="vi">
<head>
    <?php include_once("header1.php"); ?>
    <title>Biểu đồ Donut</title>
    <?php include_once('header2.php'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
    <?php include_once('header3.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <?php
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
    ?>
    <script>
        $(document).ready(function(){
            // Xử lý dữ liệu từ SQL và tạo biểu đồ mặc định
            var chart = new Morris.Donut({
                element: 'myfirstchart',
                data: <?php echo json_encode($chartData); ?>,
                colors: ['#3498db', '#e74c3c'], // Màu sắc cho các phần của biểu đồ
                formatter: function (y) { return y + " - " + Math.round(y * 100) + "%" } // Định dạng hiển thị giá trị trên biểu đồ
            });
        });
    </script>
    <!-- dashboard.php -->

    <p>Biểu đồ Donut:</p>
    <div id="myfirstchart" style="height: 250px;"></div>
</body>
</html>

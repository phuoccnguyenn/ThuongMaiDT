<!DOCTYPE html>
<html lang="vi">
<head>
    <?php include_once("header1.php"); ?>
    <title>Biểu đồ Line</title>
    <?php include_once('header2.php'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
    <?php include_once('header3.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $(document).ready(function(){
            // Xử lý dữ liệu từ SQL và tạo biểu đồ mặc định
            var chart = new Morris.Line({
                element: 'myfirstchart',
                data: <?php echo json_encode($chartData); ?>,
                xkey: 'idDH',
                ykeys: ['TongTien', 'DemSL'],
                labels: ['Tổng doanh thu', 'Số lượng bán ra']
            });
        });
    </script>
    <!-- dashboard.php -->

    <p>Biểu đồ Line:</p>
    <div id="myfirstchart" style="height: 250px;"></div>
</body>
</html>

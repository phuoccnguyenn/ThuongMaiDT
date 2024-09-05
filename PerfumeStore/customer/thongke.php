<!DOCTYPE html>
<html lang="vi">
<head>
    <?php include_once("header1.php"); ?>
    <title>Thống kê</title>
    <?php include_once('header2.php'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
    <?php include_once('header3.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        // Declare chart variable in the global scope
        var chart;

        $(document).ready(function(){
            // Xử lý sự kiện khi nút "Thay đổi" được nhấn
            $('#change-chart-btn').on('click', function() {
                var selectedChartType = $('#chart-type').val();

                // Gọi hàm ajax để truy vấn dữ liệu từ máy chủ
                $.ajax({
                    type: 'GET',
                    url: 'truy-van-du-lieu.php',
                    dataType: 'json',
                    success: function(data) {
                        // Xóa biểu đồ hiện tại
                        if (chart) {
                            chart.destroy();
                        }

                        // Tạo một biểu đồ mới với loại mới được chọn
                        createChart(selectedChartType, data);
                    },
                    error: function(error) {
                        console.log('Lỗi truy vấn dữ liệu:', error);
                    }
                });
            });

            // Xử lý sự kiện khi nút "Load lại" được nhấn
            $('#reload-btn').on('click', function() {
                // Tải lại trang
                location.reload();
            });
            
            // Hàm tạo biểu đồ
            function createChart(chartType, chartData) {
                var chartOptions = {
                    element: 'myfirstchart',
                    data: chartData,
                    xkey: 'idDH',
                    ykeys: ['TongTien', 'DemSL'],
                    labels: ['Tổng doanh thu', 'Số lượng bán ra']
                };

                if (chartType === 'line') {
                    chart = new Morris.Line(chartOptions);
                } else if (chartType === 'bar') {
                    chart = new Morris.Bar(chartOptions);
                } else if (chartType === 'area') {
                    chart = new Morris.Area(chartOptions);
                } else if (chartType === 'donut') {
                    chart = new Morris.Donut(chartOptions);
                }
            }
        });
    </script>
    <!-- dashboard.php -->

    <p>Thống kê đơn hàng theo: </p>
    <div id="myfirstchart" style="height: 250px;"></div>

    <!-- Additional information or options -->
    <div>
        <label for="chart-type">Chọn loại biểu đồ:</label>
        <select id="chart-type">
            <option value="line">Line Chart</option>
            <option value="bar">Bar Chart</option>
            <option value="area">Area Chart</option>
            <option value="donut">Donut Chart</option>
        </select>
        <button id="change-chart-btn">Thay đổi</button>
        <button id="reload-btn">Load lại</button>
    </div>
</body>
</html>

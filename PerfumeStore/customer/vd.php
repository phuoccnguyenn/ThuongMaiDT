<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Fast Rapid Force</title>
    <style>
        		time.icon
{
  font-size: 1em; /* change icon size */
  display: block;
  position: relative;
  width: 10em;
  height: 10em;
  float: left;
  background-color: #fff;
  margin: 2em auto;
  border-radius: 1em;
  box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transform: rotate(0deg) skewY(0deg);
  -webkit-transform-origin: 50% 10%;
  transform-origin: 50% 10%;
}
 
time.icon *
{
  display: block;
  width: 100%;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  text-align: center;
}
 
time.icon strong
{
  position: absolute;
  top: 0;
  padding: 0.5em 0;
  color: #fff;
  background-color: #fd9f1b;
  border-bottom: 1px dashed #f37302;
  box-shadow: 0 2px 0 #fd9f1b;
}
 
time.icon em
{
  position: absolute;
  bottom: 1.5em;
  color: #fd9f1b;
}
 
time.icon span
{
  width: 100%;
  font-size: 2.8em;
  letter-spacing: -0.05em;
  padding-top: 1.2em;
  color: #2f2f2f;
}
 
time.icon:hover, time.icon:focus
{
  -webkit-animation: swing 0.6s ease-out;
  animation: swing 0.6s ease-out;
}
 
@-webkit-keyframes swing {
  0%   { -webkit-transform: rotate(0deg)  skewY(0deg); }
  20%  { -webkit-transform: rotate(12deg) skewY(4deg); }
  60%  { -webkit-transform: rotate(-9deg) skewY(-3deg); }
  80%  { -webkit-transform: rotate(6deg)  skewY(-2deg); }
  100% { -webkit-transform: rotate(0deg)  skewY(0deg); }
}
 
@keyframes swing {
  0%   { transform: rotate(0deg)  skewY(0deg); }
  20%  { transform: rotate(12deg) skewY(4deg); }
  60%  { transform: rotate(-9deg) skewY(-3deg); }
  80%  { transform: rotate(6deg)  skewY(-2deg); }
  100% { transform: rotate(0deg)  skewY(0deg); }
}
    </style>
</head>
<body>
<time datetime="2014-09-20" class="icon">
    <em id="thu"></em>
    <strong id="thang"></strong>
    <span id="ngay"></span>
</time>
<script>
                // Khai báo đối tượng Date
                var date = new Date().toLocaleString("en-US", {timeZone: "Asia/Ho_Chi_Minh"});
            date = new Date(date);

            // Lấy số thứ tự của ngày hiện tại
            var thu = date.getDay();
            var ngay = date.getDate();
            var thang = date.getMonth();

            // Biến lưu tên của thứ
            var day_name = '';

            // Lấy tên thứ của ngày hiện tại
            switch (thu) {
            case 0:
                day_name = "Chủ nhật";
                break;
            case 1:
                day_name = "Thứ hai";
                break;
            case 2:
                day_name = "Thứ ba";
                break;
            case 3:
                day_name = "Thứ tư";
                break;
            case 4:
                day_name = "Thứ năm";
                break;
            case 5:
                day_name = "Thứ sáu";
                break;
            case 6:
                day_name = "Thứ bảy";
            }

            document.getElementById('thu').innerHTML = day_name;
            document.getElementById('ngay').innerHTML = ngay;
            document.getElementById('thang').innerHTML = 'Tháng ' + (parseInt(thang) + 1);
</script>
</body>
</html>

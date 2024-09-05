<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105198729139253");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v18.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php include_once ("phuoc.php");?>

<?php
echo "</div>
    </div><!-- end row -->
</section><!-- end content area -->
</div><!-- #end div #main .wrapper -->
<!-- footer area -->
<div class='row '  style=\"padding-left: 0; font-size: 15px; letter-spacing: 1px; line-height: 20px;\">
<footer style=\"background:#7bb6a5;\">
    <div class=\"wrapper clearfix\" style=\"margin-left: center;\">
        <ul class=\"col-lg-2 col-md-2 col-sm-2\" style=\"list-style-type: none; padding-left: 0; font-size: 15px;\">
            <li style=\"color:#FFF;text-transform: uppercase;\"><strong class=\"font-logo\">Rượu Vĩnh Long</strong></li>
            <li>
                <img style=\"height: 50px; width: 196px;\" src=\"../images/Mancera Wild Fruits_2.PNG\" alt=\"\">
            </li>
            <div  style=\"padding-top: 10px;\"></div>

            <li>ĐC liên hệ: 40 Lưu Văn Việt, P.2, Tp.Vĩnh Long, Vĩnh Long</li>
            <li>Showroom 1: <span style=\"color:#000\">33 Nguyễn Văn Thiệt, P.4, Vĩnh Long</span></li>
            <li>Showroom 2: <span style=\"color:#000\">40 Lưu Văn Việt, P.2, Tp.Vĩnh Long, Vĩnh Long</span></li>
        </ul>
        <ul class=\"col-lg-2 col-md-2 col-sm-2\" style=\"list-style-type: none; padding-left: 0;\">
            <li style=\"color:#FFF;text-transform: uppercase;font-weight:bold; font-size:15px;\"><strong>Thông tin liên hệ</strong></li>
            <li style=\"font-weight:bold; font-size:15px;\">ĐT: (08) 39291524 - 39291526</li>
            <li style=\"font-weight:bold; font-size:12px;\">Email: <a href=\"#\" style=\"text-decoration: none; color: #FFF;\">Rượu Vĩnh Long</a></li>
            <li style=\"font-weight:bold; font-size:12px;\">Hotline P4: <span style=\"color:#000\">0848 433 319</span></li>
            <li style=\"font-weight:bold; font-size:12px;\">Hotline P3: <span style=\"color:#000\">0944 958 429</span></li>
            <hr>
            <li style=\"font-weight:bold; font-size:20px;\"><a href=\"#\" style=\"text-decoration: none; color: #FFF;\">Phân phối sỉ</a></li>
            <hr>
            <li style=\"font-weight:bold; font-size:20px;\"><a href=\"them_lienhe.php\" style=\"text-decoration: none; color: #FFF;\">Liên hệ</a></li>
        </ul>
        <ul class=\"col-lg-2 col-md-2 col-sm-2\" style=\"list-style-type: none; padding-left: 0;\">
            <li style=\"font-weight:bold; font-size:15px; padding-bottom: 10px ;color:#FFF;text-transform: uppercase;\"><strong>Về chúng tôi</strong></li>
            <li><a href=\"GioiThieu.php\" title=\"Giới thiệu\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Giới thiệu</a></li>
            <li><a href=\"ChinhSachBaoMat.php\" title=\"Chính sách bảo mật\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Chính sách bảo mật</a></li>
            <li><a href=\"DieuKhoan.php\" title=\"Điều khoản và điều kiện\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Điều khoản và điều kiện</a></li>
            <li><a href=\"#\" title=\"Cam kết đảm bảo chất lượng\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Cam kết đảm bảo chất lượng</a></li>
            <li><a href=\"#\" title=\"Thanh toán\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Thanh toán</a></li>
            <li><a href=\"#\" title=\"Hỗ trợ\" style=\"font-weight:bold; font-size:15px; padding-top: 10px ;text-decoration: none; color: #FFF;\">Hỗ trợ</a></li>
        </ul>
        <ul class=\"col-lg-2 col-md-2 col-sm-2\" style=\"list-style-type: none; padding-left: 0;\">
        <li style=\"color:#FFF;text-transform: uppercase;padding-bottom: 10px\"><strong>Google Map</strong></li>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15704.611223968144!2d105.9513758948176!3d10.249257303327338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82ce5cf7b76b%3A0x112958f2cb033ec5!2zUGjGsOG7nW5nIDIsIFRwLiBWxKluaCBMb25nLCBWxKluaCBMb25nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1701220826485!5m2!1svi!2s\" width=\"350\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

        </ul>
    </div>
</footer><!-- #end footer area -->
</div>
<div class=\"footer\"> <a class=\"btn-top\" href=\"javascript:void(0);\" title=\"Top\" style=\"display: inline;\"></a> </div>
</div>
</div>
<!-- jQuery -->
<!--<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.9.0.min.js\">\x3C/script>')</script>-->
<script defer src=\"../js/flexslider/jquery.flexslider-min.js\"></script>
<!-- fire ups - read this file!-->
<script src=\"../js/main.js\"></script>";
?>
<?php include_once ("tuyet.php");?>

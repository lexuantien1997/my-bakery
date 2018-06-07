<?php session_start();
if(isset($_POST['btnSearch']))
{
	$_SESSION['search']=$ten=$_POST['txtSearch'];
	header("location:timkiem.php");
}
?><!doctype html> 
<html><!-- InstanceBegin template="/Templates/templates.dwt" codeOutsideHTMLIsLocked="false" -->
<div class="col-7 find">
<?php
if(isset($_SESSION['user']))
{
	$tendn=$_SESSION['user'];
?>
    <a href="user.php"><?php echo $tendn?></a>
    <a href="thoatuser.php" style="padding-left:10px; ">Đăng xuất</a>
<?php
}
else
{
?>
    <a href="dangky.php">Đăng ký</a>
    <a href="dangnhap.php" style="padding-left:10px; ">Đăng nhập</a>
<?php
}
?>
<form method="post">
    <input type="text" id="txtSearch" name="txtSearch" placeholder="Tìm kiếm" style="padding-left:5px; float:left"/>
    <a href="#" style="padding-left:5px"> <input type="submit" name="btnSearch" id="btnSearch" value="GO" /> <a>
    </form>
</div>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<!-- InstanceBeginEditable name="doctitle" -->
    <title>Pastry Bakery</title>
    <!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/thuvien_grid.css"/> 
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/product.css">
<link rel="stylesheet" type="text/css" href="css/backontop.css">
<link rel="stylesheet" type="text/css" href="css/but_timkiem.css">
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:2000,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 4000);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
<!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>

<body>
<!--header-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/top.png"/></button>
<header class="container">
<div class="row">
<div class="col-md-2 col-md-offset-1"><a href="trangchu.php"><img src="images/logo.png" class="logo"/></a></div>


<!--nav-->
<nav class="col-md-8 menu-background">
  <ul>
  <li class="active text-menu"><a href="trangchu.php">Trang chủ</a></li>
  <li style="margin-left:-5px" class="text-menu"><a href="gioithieu.php">Giới thiệu</a></li>
  <li style="margin-left:7px" class="text-menu"><a href="sanpham.php"> Sản phẩm</a></li>
  <li style="margin-left:3px" class="text-menu"><a href="giohang.php">Giỏ hàng</a></li>
  <li style="margin-left:15px" class="text-menu"><a href="lienhe.php"> Liên hệ</a></li>
  </ul>
</nav>
</div>
</header>
<!-- InstanceBeginEditable name="nd" -->
    <main class="bg-1">
    <!--SLIDER-->
    <div class="container">
    <div class="row slider">
    <!-- Loading Screen -->
  		<div id="jssor_1" style="position:relative;margin:0 auto;top:-50px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;"> 
   		 <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
         <img style="margin-top:0px;position:relative;top:100%;width:38px;height:38px;" src="img/spin.svg" />
    	 </div>
       	 <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:377px;overflow:hidden;"> 
      <!--BANNER-->
        <?php
         	include'library/xu_ly_chuoi.php';
			include'library/xuly_tap_tin.php';
			$path='files/trangchu_banner.txt';
			$str=doc_tap_tin($path,'r');
			$arr=tach_chuoi_thanh_mang('/*',$str);
			$arr=array_slice($arr,1);
			foreach($arr as $giatri)
			{
				$arrgiatri=tach_chuoi_thanh_mang('|',$giatri);
			
		 ?>
      <div data-p="170.00"> <span style="position:absolute" class="content-slider-01"><?php echo $arrgiatri[0]?></span> </br>
            <span style="position:absolute" class="content-slider-02"><?php echo $arrgiatri[1]?></span></br>
            <a href="#"><span style="position:absolute" class="content-slider-03">Khám phá nhiều hơn ></span></a> <img data-u="image" src="images/<?php echo $arrgiatri[2]?>" style="position:absolute" /> </div>
            <?php
			}
			?>
            <!--BANNER-->
      
    </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:65px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
      <div data-u="prototype" class="i" style="width:16px;height:16px;"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:30px;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
        </svg> </div>
    </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:-60px;left:-20px;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg> </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:-60px;left:20px;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg> </div>
      </div>
  <!--/SLIDER-->
  <div class="col-md-10 col-md-offset-1">
  <span class="img-product">
  <a href="#"><span class="img-product-01 text-product-01" style="margin-left:40px"><img src="images/menu-bakery/scroller-items_01.png" style="width:100px;"></br>Bánh trẻ em</span></a>
  <a href="#"><span class="img-product-01"><img src="images/menu-bakery/scroller-items_05.png" style="width:100px;"></br>Bánh sinh nhật</span></a>
  <a href="#"><span class="img-product-01"><img src="images/menu-bakery/scroller-items_17.png" style="width:100px;"></br>Bánh mì mặn</span></a>
  <a href="#"><span class="img-product-01"><img src="images/menu-bakery/scroller-items_09.png" style="width:100px;"></br>Bánh mì ngọt</span></a>
  <a href="#"><span class="img-product-01"><img src="images/menu-bakery/scroller-items_11.png" style="width:100px;"></br>Bánh trái cây</span></a>
  <a href="#"><span class="img-product-01"><img src="images/NUOC/caramel suada.png" style="width:85px;"></br>Thức uống</span></a>
  </span>
  </div>
  <!--PRODUCT-->
  <div class="col-md-8 col-md-offset-2">
  <div class="banh-ngon">Bánh ngon mỗi ngày</div>
  </div>
  <div class="col-md-10 col-md-offset-1">
  <div class="container">
    <div id="da-slider" class="da-slider">
      <?php
	 	$path='files/trangchu_slide.txt';
		$str='';
		$str=doc_tap_tin($path,'r');
		$arr=tach_chuoi_thanh_mang('/*',$str);
		$arr=array_slice($arr,1);
		foreach($arr as $giatri)
		{
			$arrgiatri=tach_chuoi_thanh_mang('|',$giatri);
	?>
      <div class="da-slide">
            <h2><?php echo $arrgiatri[0]?></h2>
            <p><?php echo $arrgiatri[1]?></p>
            <a href="#" class="da-link">Xem thêm</a>
            <div class="da-img"><img src="images/<?php echo $arrgiatri[2]?>" alt="image01"/></div>
            </div>
     <?php 
		}
	 ?>
          <nav class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </nav>
        </div>
      </div>
    </div>
  </div>
  <!--PRODUCT-->
  <div class="col-md-8 col-md-offset-2">
  <div class="dau-bep">Đầu Bếp của chúng tôi</div>
  </div>
  <div class="col-md-3 col-md-offset-1"> <img src="images/chefcoocking_01.jpg" class="anh-dau-bep"><span class="ten-dau-bep">Charles Phan</span>
        <p class="text-dau-bep">Charles Phan là người đưa những món ăn Việt như là lẩu mắm, bánh xèo, cá kho tộ… xuất hiện trên những chuyên trang ẩm thực của các tạp chí như New York Times và Gourmet, từng được ca ngợi là đầu bếp xuất sắc California.</p>
        <a href="#" class="info-dau-bep">Xem thêm></a> </div>
  <div class="col-md-4"><img src="images/chefcoocking_02.jpg" class="anh-dau-bep-giua" style="width:85%; height:auto"> <span class="ten-dau-bep" style="padding-left:20px;">Luke Nguyễn</span>
        <p class="text-dau-bep" style="padding: 15px 20px;">Sinh sống tại Australia, Luke Nguyễn lại nổi tiếng với hệ thống nhà hàng Red Lantern, chuyên phục vụ món Việt tại thành phố Sydney. Luke còn tham gia viết sách về ẩm thực và làm khách mời nấu ăn trên một số truyền hình.</p>
        <a href="#" class="info-dau-bep" style="padding-top:45px; padding-left: 20px">Xem thêm></a> </div>
  <div class="col-md-3"> <img src="images/chefcoocking_03.jpg"  class="anh-dau-bep"> <span class="ten-dau-bep">Christine Hà</span>
        <p class="text-dau-bep">Christine Hà, người đưa những món ăn Việt như là lẩu mắm, bánh xèo, cá kho tộ… xuất hiện trên những chuyên trang ẩm thực của các tạp chí như New York Times và Gourmet. Từng được ca ngợi là đầu bếp xuất sắc nhất California.</p>
        <a href="#" class="info-dau-bep">Xem thêm></a> </div>
  <!--Finnish main-->
  <div class="col-md-8 col-md-offset-2" style="padding-top:50px">
        <div class="dich-vu">Dịch vụ của chúng tôi</div>
      </div>
  <div class="col-md-3 col-md-offset-1">
        <p><img src="images/dichvu-01.png" class="anh-van-chuyen"></br>
      <span class="ten-van-chuyen">Dịch vụ chuyển phát nhanh hỏa tốc trong ngày là gì?</span></p>
        <p><span class="text-van-chuyen">Và điều quan trọng nhất khiến nhu cầu sử dụng dịch vụ chuyển phát nhanh hỏa tốc trong ngày gia tăng chính là bởi những ưu điểm vượt trội mà dịch vụ này mang lại. Chuyển phát nhanh hỏa tốc trong ngày đặc biệt phù hợp với những ai đang có nhu cầu gửi cấp tốc hàng hóa, giấy tờ  địa chỉ nhận ngay trong ngày gửi.</span></p>
      </div>
  <div class="col-md-4" style="padding:8px 40px">
        <p><img src="images/dichvu-02.png" class="anh-van-chuyen-giua"></br>
      <span class="ten-van-chuyen">Vì sao dịch vụ chuyển phát nhanh hỏa tốc trong ngày lại được nhiều người sử dụng?</span></p>
        <p><span class="text-van-chuyen">Xu thế vận động rõ nhất của ngành vận chuyển ở nước ta hiện nay chính là sự chuyển biến từ dịch vụ chuyển phát nhanh thông thường sang chuyển phát nhanh hỏa tốc và chuyển phát nhanh hỏa tốc trong ngày. Đây là một xu thế vận động có tính tất yếu nhằm thích nghi tình hình mới của nền kinh tế trong bối cảnh hội nhập.</span></p>
      </div>
  <div class="col-md-3">
        <p><img src="images/dichvu-03.png"  class="anh-van-chuyen"></br>
      <span class="ten-van-chuyen">Dịch vụ chuyển phát nhanh hỏa tốc trong ngày của proship.vn</span></p>
        <p><span class="text-van-chuyen">Dịch vụ chuyển phát nhanh là hỏa tốc trong ngày là một dịch vụ chuyển phát có thời gian toàn trình ngắn nhất trong tất cả các loại hình vận chuyển phát hiện nay. Dịch vụ hướng đến sự tối ưu về thời gian gửi và nhận hàng hóa thư từ chỉ trong phạm vi 24. </span></p>
      </div>
</div>
    </main>
    <!-- InstanceEndEditable --><!--footer-->
<footer class="bg-2">
<div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-1" style="top:60px">
<table>
<tr>
<th class="title-footer">Open:</th>
<th class="content-footer-01" style="width:200px; height:30px">Mon: 6:00 Am – 5:30 Pm</th>
<th class="content-footer-01">Thu: 6:00 Am – 5:30 Pm</th>
</tr>
<tr>
<th>&nbsp;</th>
<th class="content-footer-01" height="35px">Tue: 6:00 Am – 5:30 Pm</th>
<th class="content-footer-01">Fri: 6:00 Am – 5:30 Pm</th>
</tr>
<tr>
<th>&nbsp;</th>
<th class="content-footer-01" height="35px">Wed: 6:00 Am – 5:30 Pm</th>
<th class="content-footer-01">Sat: 6:00 Am – 3:00 Pm</th>
</tr>
</table>
</div>
<div class="col-md-4 col-md-offset-1" style="top:60px;">
<span class="title-footer">Hotline:</span></br>
<span class="content-footer-02">03 9592 8070</span>
</div>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-1" style="top:50px;">
<table style="margin-top:20px">
<tr>
<th colspan="3"></th>
</tr>
<tr>
<th rowspan="6"><a href="trangchu.php"><img src="images/logo-footer.png" class="img-footer"/></a></th>
<td><span class="fa fa-home text-footer-03" style="font-size:24px"></span></td>
<td class="content-footer-01">91 Pasteur, P. Bến Nghé, Q.1, HCM</td>
</tr>
<tr>
<td><span class="fa fa-phone text-footer-03" style="font-size:24px"></span></td>
<td class="content-footer-01">0909 036 117</td>
</tr>
<tr>
<td><span class="fa fa-envelope text-footer-03"></span></td>
<td class="content-footer-01">ddpromotion@dunkindonutsvn.vn</td></tr>
<tr>
<td colspan="2"><a href="https://www.facebook.com/"><span class="text-footer-04"><img src="images/facebook.png">Like us Facebook</span></a></td>
</tr>
<tr>
<th colspan="3"></th>
</tr>
</table>
</div>
<div class="col-md-5">
<span class="img-footer-bando"><a href="lienhe.php"><img src="images/footer-background.png" width="100%"/></a></span>
</div>
</div>
</div>
</footer>
<script>
function thongbao()
{
	alert("Đã thêm vào giỏ");  
}
</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/npm.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
		</script>
        
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '429b77d8-a013-4fc9-a7af-18bdb0808cc3', f: true }); done = true; } }; })();</script> 
</body>
<!-- InstanceEnd --></html>

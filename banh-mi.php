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
<link rel="stylesheet" type="text/css" href="css/tgdd.css"/>
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
<main class="container">
<div class="row slider">
    <!-- Loading Screen -->
  		<div id="jssor_1" style="position:relative;margin:0 auto;top:-50px;left:0px;width:980px;height:245px;overflow:hidden;visibility:hidden;"> 
   		 <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
         <img style="margin-top:0px;position:relative;top:100%;width:38px;height:38px;" src="img/spin.svg" />
    	 </div>
       	 <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:245px;overflow:hidden;"> 
      <!--BANNER-->
       <?php 
		include'library/slide.php';
		xuat_slide();
	  ?>
      <!--/BANNER--> 
    </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:65px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
      <div data-u="prototype" class="i" style="width:16px;height:16px;"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:60px;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
        </svg> </div>
    </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:0px;left:-20px;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg> </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:0px;left:20px;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg> </div>
      </div>
	<div class="row">
      <div class="col-md-2 col-md-offset-1">
		<h2>Đồ ăn</h2>
		<nav class="dat-hang">
			<ul>
			<li><a href="donuts.php">> Bánh Donuts</a></li>
			<li><a href="banh-mi.php">> Bánh mì</a></li>
			<li><a href="mon-an-khac.php">> Món ăn khác</a></li>
			</ul>
		</nav>
        <h2>Thức uống</h2>
		<nav class="dat-hang">
			<ul>
			<li><a href="da-xay.php">> Đá xay</a></li>
			<li><a href="thuc-uong-khac.php">> Thức uống khác</a></li>
			</ul>
		</nav>
	</div>
        <div class="col-md-8 col-md-off-set-1">
		<div class="bg-lienhe-sanpham2 h2-sanpham2" style="padding-left:30px; color:#000">Bánh mì</div>
       
       <div class="homeproduct">
       
        <?php 
		include('PDO/pdo.php');
		if(isset($_GET['sp']))
		{
			$sp=$_GET['sp'];
			$_SESSION['giohang'][$sp]=1;
			echo'<meta http-equiv="refresh" content="0; banh-mi.php" />';
		}
		$page=1;
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
		}
		$vitri=($page-1)*8;
		$dem=0;
		$kq=truyvan("select * from sanpham where maloai='L02' limit $vitri,8");
		foreach($kq as $r)
		{
             $english_format_number = number_format($r["gia"]);
            $r["gia"] = $english_format_number;
            $r['hinhanh'] = "images/BANH/".$r['hinhanh'];
            // $english_format_number = number_format($r["gia"]);
			$style='';
			if($dem==0)
			{
				$style='margin-left:0px;';
			}

            // echo "
            // <div class='product-item'>
            //     <a onClick='thongbao()' href='banh-mi.php?sp={$r['masp']}'>
            //         <img class='image' src='images/BANH/{$r['hinhanh']}'/>                
            //         <span class='title'>{$r['tensp']}</span>
            //         <p class='price-sale'>{$english_format_number} đ</p>
            //     </a>                    
            // </div>";	
            // echo "
            //             <li>
            //                 <a>
            //                     <img width='180' height='180' src='images/BANH/{$r['hinhanh']}'>
            //                     <h3>{$r['tensp']}</h3>
            //                     <div class='price'>
            //                         <strong>{$english_format_number} đ</strong>
            //                     </div>
            //                 </a>
            //             </li>";		

                        ?>
                   
                        <li>
                            <a onClick='GetDataToPopUp(<?php echo json_encode($r) ?>)' href ="#popup" type='button' class='main-btn-rect popup-btn' data-popup='popup-reg'>
                                <img width='180' height='180' src='<?php echo $r['hinhanh']?>'>
                                <h3><?php echo $r['tensp'] ?></h3>
                                <div class='price'>
                                    <strong><?php echo  $r["gia"].'đ' ?> </strong>
                                </div>                              
                            </a>          
                        </li>

<?php
            $dem++;
			if($dem>3)
			{
				$dem=0;
			}
		}	
		?>
        </div>
        <div align="center">
        <hr style="border-width:5px">
        
        <?php
        include("library/phantrang.php");
		$sosp=count(truyvan("select * from sanpham where maloai='L02'"));
		$sotrang=ceil($sosp/8);
		phantrang('banh-mi.php',$page,$sotrang);
		?>
        </div>

        <div class="popup" id="popup">
                <!-- <div class="popup-inner"> -->
                <!-- <div class="lightbox-blanket"> -->
                    <div class="pop-up-container">
                        <div class="pop-up-container-vertical">
                            <div class="pop-up-wrapper">
                            <div>
                                <a class="popup__close" href="#">X</a>
                            </div>
                            <div class="product-details">
                                <div class="product-left">
                                <div class="product-info">
                                    <div class="product-title" id='productname'>
                                         <p></p>
                                    </div>
                                    <div class="product-price" id='productprice'>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img id='productimage' />
                                </div>
                                </div>
                                <div class="product-right">
                                <div class="product-description" id='productdescription'>
                                    <p>Designer Karim Rashid continues to put his signature spin on all genres of design through various collaborations with top-notch companies. Another one to add to the win column is his work with Italian manufacturer Chateau d’Ax.</p>
                                </div>
                                <div class="product-available">
                                    In stock. <span class="product-extended"><a href="#">Buy Extended Warranty</a></span>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star rating" star-data="1"></i>
                                    <i class="fa fa-star rating" star-data="2"></i>
                                    <i class="fa fa-star rating" star-data="3"></i>
                                    <i class="fa fa-star" star-data="4"></i>
                                    <i class="fa fa-star" star-data="5"></i>
                                    <div class="product-rating-details">(3.1 - <span class="rating-count">1203</span> reviews)
                                    </div>

                                </div>
                                <div class="product-quantity">
                                    <label for="product-quantity-input" class="product-quantity-label">Quantity</label>
                                   
                                    <form method="POST">
                                        <div class="product-quantity-subtract">
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                    </form>
                                    <div>
                                    <input type="text" id="product-quantity-input" placeholder="0" value="0" />
                                    </div>

                                    <form method="POST">
                                        <div class="product-quantity-add">                                    
                                            <i class="fa fa-chevron-right"></i>
                                        </div>
                                    </form>
                                    
                                </div>
                                </div>
                                <div class="product-bottom">
                                <div class="product-checkout">
                                    Total Price
                                    <div class="product-checkout-total">
                                    <i class="fa "></i> 
                                    <div class="product-checkout-total-amount">
                                        000,000 đ                                   
                                    </div>
                                    </div>
                                </div>
                                <div class="product-checkout-actions">
                                    <a class="add-to-cart" onClick='AddToCart()' id='producid' >Add to Cart</a>          
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    <!-- </div> -->
                    <!-- <a class="popup__close" href="#">X</a> -->
                <!-- </div> -->
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


function AddToCart(){
   
   var qty = $("#product-quantity-input").val();
  // string data = $(".add-to-cart").attr('href');
  // alert(qty)
  // var para = data.substring(1).split("&");
  // var temp = para[0].split("=");
 //  const id_product = unescape(temp[1]);

 //  $(".add-to-cart").attr('href','sanpham.php?sp='+1+'&nubmer='+qty);

 //  alert($(".add-to-cart").attr('href'));

  // console.log(temp)

   if(qty === '0'){return;}
   var toast = '<div class="toast toast-success">Added '+ qty +' to cart.</div>';  
   $("body").append(toast);
   setTimeout(function(){ 
   $(".toast").addClass("toast-transition");
       }, 100);
   setTimeout(function(){      
       $(".toast").remove();
   }, 3500);
}

function GetDataToPopUp(d)
{

  console.log(1)
       $.ajax({
           method: "POST",
           url: "get_database.php",
           data: { 
               d: 10 
           }
       })
       .done(function( msg ) {
          // alert( "Data Saved: " + msg );
       });



   console.log(d);
   $('#productimage').attr('src',d['hinhanh']);
   $('#productprice p').text(d["gia"] + ' đ');
   $('#productname p').text(d['tensp']);

   $(".add-to-cart").attr('href','sanpham.php?sp='+d['masp']);
 //  alert($("#producid").attr('href'));
   $(".product-checkout-total-amount").text("000,000 đ");
   $("#product-quantity-input").val(0);

 //  $('#productdescription p').text(d['ThongTin']);
   // $('#productdetail').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex velit, viverra non vulputate vitae, blandit vitae nisl. Nullam fermentum orci et erat viverra bibendum. Aliquam sed varius nibh, vitae mattis purus. Mauris elementum sapien non ullamcorper vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eget felis sit amet eros viverra pulvinar.');
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
<script type="text/javascript" src="popup.js"></script>

</body>
<!-- InstanceEnd --></html>

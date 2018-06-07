<?php session_start(); 
    if(isset($_POST['btn_gui']))
    {
        $pass=$_POST['pass'];
        $newpass=$_POST['newpass'];
        $renewpass=$_POST['renewpass'];
        $user=$_SESSION["user"];
        $flag=0;
        if($newpass==$renewpass)
        {
            if($pass==$_SESSION['pass'])
            {
                insert_update("update user set password='$newpass' where username='$user'");
                $_SESSION['pass']=$newpass;
                $_SESSION['doimk']= "<script>alert('Cập nhật thành công')</script>";
                header("location:user.php");
                
            }
            else
            {
                echo"<script>alert('Mật khẩu hiện tại không đúng')</script>";
            }
        }
        else
        {
            echo"<script>alert('Mật khẩu không giống nhau')</script>";
        }
    }
if(isset($_POST['btnSearch']))
{
	$_SESSION['search']=$ten=$_POST['txtSearch'];
	header("location:timkiem.php");
}
if(!isset($_SESSION['user']))
{
	header("location:dangnhap.php");
}
if(isset($_SESSION['doimk']))
{
	echo $_SESSION['doimk'];
	unset($_SESSION['doimk']);
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
<body>
<style>
body {font-family: Arial;}
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}


/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
     display: none;
     /*
    padding: 6px 12px;
    border: 1px solid #ccc;*/
    border-top: none; 
}
</style>
</head>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
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
<div  class="row slider">
<div id="jssor_1" style="position:relative;margin:0 auto;top:-50px;left:0px;width:980px;overflow:hidden;visibility:hidden;"> 
   		       <!--/BANNER-->
    </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:65px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
      <div data-u="prototype" class="i" style="width:16px;height:16px;"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:60px;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
        </svg> 
    </div>
    </div>
	<div class="row">

        <div class="col-md-12 col-md-off-set-1">
            <h2 class="bg-lienhe" style="padding-left:30px">Thông tin tài khoản</h2>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'ThongTinKhachHang')">Thông tin khách hàng</button>
                <button class="tablinks" onclick="openCity(event, 'ĐonHang')">Quản lý đơn hàng</button>
                <button class="tablinks" onclick="openCity(event, 'DoiMatKhau')">Đổi mật khẩu</button>
            </div>



                <div id="DoiMatKhau" class="tabcontent">
                    <form method="post" action="doimk_user.php" style="color:#ff0026;" >
                        <div class="col-md-3" style="color:#000; padding-left:30px">Mật khẩu hiện tại</div>
                        <div class="col-md-9">
                            <input type="text" name="pass" size="58" placeholder=" Nhập mật khẩu hiện tại" class="vienhong type" />
                        </div>
                        
                        <div class="col-md-3" style="color:#000; padding-left:30px">Mật khẩu mới</div>
                        <div class="col-md-9">
                            <input type="password" name="newpass" size="58" placeholder=" Nhập mật khẩu mới" class="vienhong type" />
                        </div>

                        <div class="col-md-3" style="color:#000; padding-left:30px">Nhập lại mật khẩu mới</div>
                        <div class="col-md-9">
                            <input type="password" name="renewpass" size="58" placeholder=" Nhập lại mật khẩu mới" class="vienhong type" />
                        </div>
                        
                        <div class="col-md-9" align="center">
                            <input type="submit" name="btn_gui" value="Gửi" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 100px; height: 50px; background-color: #FF0004; color: #fff"/>&nbsp;
                        </div>               
                    </form>
                </div>

                <div id="ĐonHang" class="tabcontent">
                    <h3>Đơn hàng</h3>
                    <p>Tokyo is the capital of Japan.</p>
                </div>
                
            <div id="ThongTinKhachHang" class="tabcontent"
                <?php
                    include("PDO/pdo.php");
                    // if(isset($_POST['btn_thoat']))
                    // {
                    //     session_destroy();
                    //     echo '<meta http-equiv="refresh" content="0,user.php">';
                    // }
                    if(isset($_POST['btn_capnhat']))
                    {
                        $user=$_SESSION['user'];
                        $hoten=$_POST['hoten'];
                        $diachi=$_POST['diachi'];
                        $sdt=$_POST['sdt'];
                        $email=$_POST['email'];
                        $birday = date("Y-m-d", strtotime($_POST['birdday']));
                        $gender = $_POST['gender'] == "Nam" ? 0:1;
                        insert_update("update user set hoten='$hoten',GioiTinh='$gender',NgaySinh='$birday',diachi='$diachi',sdt='$sdt',email='$email' where username='$user'");
                    //  echo "<script>alert('Cập nhật thành công')</script>";
                    }
                    $user=$_SESSION['user'];
                    $kq=truyvan("select * from user where username='$user'");
                    
                    $male_status = false;
                    foreach($kq as $r)
                    {
                ?>
                </div>
                <form method="post" action="user.php" style="color:#ff0026;" >
                    <div class="col-md-3" style="color:#000; padding-left:30px">Tài khoản</div>
                    <div class="col-md-9">
                        <input readonly type="text" name="user" size="58"  class="vienhong type" value="<?php echo $r['username'] ?>"/>
                    </div>
                
                    <div class="col-md-3" style="color:#000; padding-left:30px">Họ &amp; tên</div>
                    <div class="col-md-9">
                        <input type="text" name="hoten" size="58"  class="vienhong type" value="<?php echo $r['hoten'] ?>" />
                    </div>

                    <div class="col-md-3" style="color:#000; padding-left:30px">Địa chỉ</div>
                    <div class="col-md-9">
                        <input type="text" name="diachi" size="58" class="vienhong type" value="<?php echo $r['diachi'] ?>"/>
                    </div>

                    <div class="col-md-3" style="color:#000; padding-left:30px">số điện thoại</div>
                    <div class="col-md-9">
                        <input type="text" name="sdt" size="58" class="vienhong type" value="<?php echo $r['sdt'] ?>"/>
                    </div>

                    <div class="col-md-3" style="color:#000; padding-left:30px">Giới tính</div>
                    <div class="col-md-9">
                        <?php 
                            if($r["GioiTinh"] == 0) {
                                $male_status = true;
                            }     
                        ?>
                        <input type="radio" name="gender" value="Name" <?php echo($male_status == true?'checked="checked"':''); ?> size="58" > Nam<br>
                        <input type="radio" name="gender" value "Nữ"  <?php echo($male_status == false?'checked="checked"':''); ?> size="58" > Nữ<br>
                    </div> 

                    <div class="col-md-3" style="color:#000; padding-left:30px">Ngày sinh</div>
                    <div class="col-md-9">
                        <input type="date" name="birdday" size="58"  value="<?php echo($r["NgaySinh"]) ?>" />  
                    </div>        

                    <div class="col-md-3" style="color:#000; padding-left:30px">Email</div>
                    <div class="col-md-9">
                        <tr>
                            <td colspan="2"><input type="email" name="email"  size="58" value="<?php echo $r['email'] ?>" ></td>
                        </tr>
                    </div>

                    <div class="col-md-9" align="center">
                        <input type="submit" name="btn_capnhat" value="Cập nhật" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 120px; height: 50px; background-color: #FF0004; color: #fff"/>&nbsp;
                        <!-- <a href="doimk_user.php"><input type="button" name="button" value="Đổi mật khẩu" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 170px; height: 50px; background-color: #FF0004; color: #fff"/></a>&nbsp; -->
                        <!-- <input type="submit" name="btn_thoat" value="Thoát" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 90px; height: 50px; background-color: #FF0004; color: #fff"/> -->
                    </div>
                  

                </form>
        <?php 
            }
        ?>
        </div>
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

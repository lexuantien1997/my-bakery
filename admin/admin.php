<?php session_start();
if(!isset($_SESSION['useradmin']))
{
	header("location:dangnhapadmin.php");
}
if(isset($_POST['btnSearch']))
{
	$_SESSION['search']=$ten=$_POST['txtSearch'];
	header("location:timkiem.php");
}
?>
<!doctype html> 
<html><!-- InstanceBegin template="/Templates/templates.dwt" codeOutsideHTMLIsLocked="false" -->
<div class="col-7 find">
<?php
if(isset($_SESSION['user']))
{
	$tendn=$_SESSION['user'];
?>
    <a href="../user.php"><?php echo $tendn?></a>
    <a href="../thoatuser.php" style="padding-left:10px; ">Đăng xuất</a>
<?php
}
else
{
?>
    <a href="../dangky.php">Đăng ký</a>
    <a href="../dangnhap.php" style="padding-left:10px; ">Đăng nhập</a>
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
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="../css/nojs.css" />
		</noscript>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/thuvien_grid.css"/> 
<link rel="stylesheet" type="text/css" href="../css/slider.css">
<link rel="stylesheet" type="text/css" href="../css/product.css">
<link rel="stylesheet" type="text/css" href="../css/backontop.css">
<link rel="stylesheet" type="text/css" href="../css/but_timkiem.css">
<script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>
<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>
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
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../images/top.png"/></button>
<header class="container">
<div class="row">
<div class="col-md-2 col-md-offset-1"><a href="../trangchu.php"><img src="../images/logo.png" class="logo"/></a></div>


<!--nav-->
<nav class="col-md-8 menu-background">
  <ul>
  <li class="active text-menu"><a href="../trangchu.php">Trang chủ</a></li>
  <li style="margin-left:-5px" class="text-menu"><a href="../gioithieu.php">Giới thiệu</a></li>
  <li style="margin-left:7px" class="text-menu"><a href="../sanpham.php"> Sản phẩm</a></li>
  <li style="margin-left:3px" class="text-menu"><a href="../giohang.php">Giỏ hàng</a></li>
  <li style="margin-left:15px" class="text-menu"><a href="../lienhe.php"> Liên hệ</a></li>
  </ul>
</nav>
</div>
</header>
<!-- InstanceBeginEditable name="nd" -->
<main class="container">
<div class="row slider">
<div id="jssor_1" style="position:relative;margin:0 auto;top:-50px;left:0px;width:980px;height:245px;overflow:hidden;visibility:hidden;"> 
   		 <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
         <img style="margin-top:0px;position:relative;top:100%;width:38px;height:38px;" src="../img/spin.svg" />
    	 </div>
       	 <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:245px;overflow:hidden;"> 
      <!--BANNER-->
       <?php 
		include'../library/slide.php';
		xuat_slide_admin();
		$thongbao='';
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
			<li><a href="../donuts.php">> Bánh Donuts</a></li>
			<li><a href="../banh-mi.php">> Bánh mì</a></li>
			<li><a href="../mon-an-khac.php">> Món ăn khác</a></li>
			</ul>
		</nav>
        <h2>Thức uống</h2>
		<nav class="dat-hang">
			<ul>
			<li><a href="../da-xay.php">> Đá xay</a></li>
			<li><a href="../thuc-uong-khac.php">> Thức uống khác</a></li>
			</ul>
		</nav>
	</div>
     <script>
	function timsanpham()
	{ 	var ten=document.getElementById('tensp');
		window.location="admin.php?tim=" +ten.value;
	}
	function xoasanpham(masp)
	{
		if(confirm('Bạn có muốn xoá sản phẩm mã: '+masp))
		{
			window.location="xoasp.php?xoa="+masp;
		}
	}
	function edit(id,ten,gia)
	{
		window.location='admin.php?edit_id='+id+'&edit_ten='+ten+'&edit_gia='+gia;
	}

	</script>
    <?php
     $them_ten=$them_loai=$them_gia=$them_id='';
	 if(isset($_GET['edit_ten']))
	 {
		 $them_ten=$_GET['edit_ten'];
		 $them_gia=$_GET['edit_gia'];
		 $them_id=$_GET['edit_id'];
	 }
	?>
    <div class="col-md-8 col-md-off-set-1">
		<h2 class="bg-lienhe" style="padding-left:30px">Thêm , cập nhật sản phẩm</h2>
        <form  method="post" action="admin.php" style="color:#ff0026;" enctype="multipart/form-data">
        <div class="col-md-3" style="color:#000; padding-left:30px">Mã sản phẩm</div>
        <div class="col-md-9">
        <input type="text" name="ma" readonly style="background-color:#F7F7F7"  size="58"  class="vienhong type" value="<?php echo $them_id ?>" />
        </div>
        <div class="col-md-3" style="color:#000; padding-left:30px">Tên sản phẩm</div>
        <div class="col-md-9">
        <input type="text" name="ten"  size="58"  class="vienhong type" value="<?php echo $them_ten ?>" />
        </div>
        <div class="col-md-3" style="color:#000; padding-left:30px">Loại sản phẩm</div>
        <div class="col-md-9">
        <select name="loai" >
              <?php
			  
			  include('../PDO/pdo.php');
              $loai=truyvan("select * from loaibanh");
			  foreach($loai as $r)
			  {
				  echo "<option>{$r['tenloai']}-{$r['maloai']}</option>";
			  }

			  ?>
        </select>
        
        </div>
        <div class="col-md-3" style="color:#000; padding-left:30px">Giá</div>
        <div class="col-md-9">
        <input type="text" name="gia" id="gia" size="58"  class="vienhong type" value="<?php echo $them_gia ?>" />
        </div>
    	<div class="col-md-3" style="color:#000; padding-left:30px">Hình ảnh</div>
        <div class="col-md-9">
        <input type="file" name="hinh" id="hinh" size="58"  class="vienhong type" style="color:#000"/>
        </div>
        <div class="col-md-3" style="color:#000; padding-left:30px"></div>
        <div class="col-md-9">
        <tr>
          <td colspan="2">&nbsp;</td>
  		</tr>
        <div class="col-md-9">
        
        <input type="submit" name="btn_them" value="Thêm" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 80px; height: 50px; background-color: #FF0004; color: #fff"  />
          &nbsp;
          <input type="submit" name="btn_capnhat" value="Cập nhật" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 120px; height: 50px; background-color: #FF0004; color: #fff"/>&nbsp;
          <input type="button" name="btn_reset" value="Reset" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 80px; height: 50px; background-color: #FF0004; color: #fff" onClick="window.location='admin.php'"/>&nbsp;
          <input type="submit" name="btn_thoat" value="Thoát" style="font-family:Dancing Script; font-size: 28px; font-weight:bold; border-radius: 10px; width: 80px; height: 50px; background-color: #FF0004; color: #fff"/>
          <br>
          <?php
		if(isset($_POST['btn_thoat']))
		{
			unset($_SESSION['useradmin']);
			unset($_SESSION['passadmin']);
			echo '<meta http-equiv="refresh" content="0,dangnhapadmin.php">';
		}
        if(isset($_POST['btn_them']))
		{
			
			$flag=1;
			if(trim($_POST['ten'])=='')
			{
				$flag=0;
				echo "Chưa nhập tên sản phẩm<br>";
				
			} 
			if(trim($_POST['gia'])=='')
			{
				$flag=0;
				echo "Chưa nhập giá sản phẩm<br>";
			} 
			if(!is_numeric($_POST['gia']))
			{
				$flag=0;
				echo "Giá sản phẩm phải là số<br>";
			} 
			$type=$_FILES['hinh']['type'];
			$name=$_FILES['hinh']['name'];
			$tmp=$_FILES['hinh']['tmp_name'];
			if($type!='image/png' && $type!='image/jpeg' & $type!='image/jpg')
			{
				$flag=0;
				echo "Hình sai định dạng<br>";
			}
			if($_FILES['hinh']['error']>0)
			{
				$flag=0;
				echo "Kiểm tra lại file ảnh<br>";
			}
			if($flag==1)
			{
				$them_ten=trim($_POST['ten']);
				$them_loai=trim($_POST['loai']);
				$them_gia=$_POST['gia'];
				$l=explode('-',$_POST['loai']);
				$insert=insert_update("insert into sanpham values(null,'$them_ten','$l[1]',$them_gia,'$name')");
				$kq=truyvan("select * from loaibanh where maloai='$l[1]'");
				$luu='';
				foreach($kq as $r)
				{
					$luu=$r['luu'];
				}
				$uphinh=move_uploaded_file($tmp,"../images/$luu/".$name);
				if($insert==true && $uphinh==true)
				{
					echo "<script>alert('Thêm thành công')</script>";
				}
				else
				{
					echo "<script>alert('Thêm thất bại, tên sản phẩm bị trùng')</script>";
				}
			}
		}
		
		if(isset($_POST['btn_capnhat']))
		{
			
			$flag=1;
			if(trim($_POST['ten'])=='')
			{
				$flag=0;
				echo "Chưa nhập tên sản phẩm<br>";
				
			} 
			if(trim($_POST['ma'])=='')
			{
				$flag=0;
				echo "Chưa nhập mã sản phẩm<br>";
				
			} 
			if(trim($_POST['gia'])=='')
			{
				$flag=0;
				echo "Chưa nhập giá sản phẩm<br>";
			} 
			if(!is_numeric($_POST['gia']))
			{
				$flag=0;
				echo "Giá sản phẩm phải là số<br>";
			} 
			$type=$_FILES['hinh']['type'];
			$name=$_FILES['hinh']['name'];
			$tmp=$_FILES['hinh']['tmp_name'];
			if($type!='image/png' && $type!='image/jpeg' & $type!='image/jpg')
			{
				$flag=0;
				echo "Hình sai định dạng<br>";
			}
			if($_FILES['hinh']['error']>0)
			{
				$flag=0;
				echo "Kiểm tra lại file ảnh<br>";
			}
			if($flag==1)
			{
				$them_ten=trim($_POST['ten']);
				$them_loai=trim($_POST['loai']);
				$them_gia=$_POST['gia'];
				$id=$_POST['ma'];
				$l=explode('-',$_POST['loai']);
				$update=insert_update("update sanpham set tensp='$them_ten',maloai='$l[1]',gia='$them_gia',hinhanh='$name' where masp='$id'");
				$kq=truyvan("select * from loaibanh where maloai='$l[1]'");
				$luu='';
				foreach($kq as $r)
				{
					$luu=$r['luu'];
				}
				$uphinh=move_uploaded_file($tmp,"../images/$luu/".$name);
				if($update==true && $uphinh==true)
				{
					echo "<script>alert('Cập nhật thành công')</script>";
				}
				else
				{
					echo "<script>alert('Cập nhật thất bại')</script>";
				}
			}
		}
		
		?>
        </div>
        </div>
    </form>
   
        <form>
		<?php
		$txtTim='';
		if(isset($_GET['tim']))
        {
			$txtTim=$_GET['tim'];
		}
		?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h2 class="bg-lienhe" style="padding-left:30px">Xoá sản phẩm</h2>
        <div align="center">
                <input type="text" name="textfield2" id="tensp"  value="<?php echo $txtTim?>" size="50">
          <input type="button" name="btn_tim"  value="Tìm" style="font-family:Dancing Script; font-size: 18px; font-weight:bold; border-radius: 10px; width: 80px; height: 30px; background-color: #FF0004; color: #fff" onClick="timsanpham()"/>
        </div>
       	<table width="800" border="1" align="center">
          <tr align="center" bgcolor="#33FFFF">
            <td width="104"><strong>Mã sản phẩm</strong></td>
            <td width="383"><strong>Tên sản phẩm</strong></td>
            <td width="100"><strong>Giá</strong></td>
            <td width="95"><strong>Hình ảnh</strong></td>
            
            <td width="84">&nbsp;</td>
          </tr><br>
          <?php
			
			if(isset($_GET['tim']))
			{
				$xoa=$_GET['tim'];
				$kq=truyvan("select * from sanpham,loaibanh where sanpham.maloai=loaibanh.maloai and tensp like concat('%','$xoa','%')");
				if(count($kq)>0)
				{
					foreach($kq as $r)
					{
		?>
          <tr align="center">
            <td id="editmasp"><?php echo $r['masp']?></td>
            <td><?php echo $r['tensp']?></td>
            <td width="100"><?php echo number_format($r['gia']). ' VNĐ'?></td>
            <td><img src="../images/<?php echo $r['luu']?>/<?php echo $r['hinhanh']?>" width="50px" height="50px"></td>
            <td><a href="#" onClick="xoasanpham(<?php echo $r['masp']?>)"><img src="../images/xoa.png" width="30" height="30"></a> <a href="#" onClick="edit('<?php echo $r['masp']?>','<?php echo $r['tensp']?>','<?php echo $r['gia']?>')"><img src="../images/edit.png" width="30" height="30"></a></td>
          </tr>
          <?php
					}
				}
			}
		  ?>
		</table>

         </form>
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
<th rowspan="6"><a href="../trangchu.php"><img src="../images/logo-footer.png" class="img-footer"/></a></th>
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
<td colspan="2"><a href="https://www.facebook.com/"><span class="text-footer-04"><img src="../images/facebook.png">Like us Facebook</span></a></td>
</tr>
<tr>
<th colspan="3"></th>
</tr>
</table>
</div>
<div class="col-md-5">
<span class="img-footer-bando"><a href="../lienhe.php"><img src="../images/footer-background.png" width="100%"/></a></span>
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
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/npm.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
		</script>
        
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '429b77d8-a013-4fc9-a7af-18bdb0808cc3', f: true }); done = true; } }; })();</script> 
</body>
<!-- InstanceEnd --></html>

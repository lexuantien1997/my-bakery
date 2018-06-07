<?php 
function xuat_slide()
{
	include'library/xuly_tap_tin.php';
	$arr=Duyet_thu_muc('images/banner');
	foreach($arr as $gt)
	{
		echo "<div data-p='170.00'><img data-u='image' src='images/banner/$gt' style='position:absolute' /></div>";
	}
}
function xuat_slide_admin()
{
	include'../library/xuly_tap_tin.php';
	$arr=Duyet_thu_muc('../images/banner');
	foreach($arr as $gt)
	{
		echo "<div data-p='170.00'><img data-u='image' src='../images/banner/$gt' style='position:absolute' /></div>";
	}
}
?>
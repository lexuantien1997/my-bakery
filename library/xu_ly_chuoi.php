<?php
function tach_chuoi_thanh_mang($kitu,$chuoi)
{
	if($chuoi!="")
	{
		$arr=explode($kitu,$chuoi);
		return $arr;
	}
	else
	{
		die('Lỗi: không có nội dung');
	}
 }
?>
<?php
include("../PDO/pdo.php");
if(isset($_GET['xoa']))
{
	$a=$_GET['xoa'];
	insert_update("delete from sanpham where masp='$a'");
	header('location:admin.php');
}
?>
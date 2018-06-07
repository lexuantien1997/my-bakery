<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
function thongbao()
{ 	var ten=document.getElementById('ten');
	window.location="testxoa.php?xoa=" +ten.value;
}
</script>
<?php echo $_GET['xoa']?>
<form method="post" >
<input name="ten" type="text" id="ten" value="<?php echo $_GET['xoa']?>"/>
<input name="btn" type="button" value="gửi" onclick="thongbao()" />
<?php
include('../PDO/pdo.php');
if(isset($_GET['xoa']))
{
	echo '<table width="300" border="1">';
	$a=$_GET['xoa'];
	$kq=truyvan("select * from loaibanh where tenloai='$a'");
	if(count($kq)>0)
	{
		foreach($kq as $r)
		{
	?>
	
	  <tr>
		<td><?php echo $r['maloai']?></td>
		<td><?php echo $r['tenloai']?></td>
	  </tr>
	
	<?php
		}
	}
	echo '</table>';
}
else echo 'ko có';
?>


</form>
</body>
</html>

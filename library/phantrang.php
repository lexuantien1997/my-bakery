<?php
function phantrang($trangxuly,$page=1,$sotrang)
{
	if($sotrang<=3)
	{
		for($i=1;$i<=$sotrang;$i++)
			{
				$style=$page==$i?"style='color:red'":'';
				echo"<a $style href='$trangxuly?page=$i'>$i </a> ";
			}
	}
	else
	{
		if($page==1)
		{
			echo"<a href='$trangxuly?page=2'>Trang kế </a>| ";
			for($i=1;$i<=3;$i++)
			{
				$style=$page==$i?"style='color:red'":'';
				echo"<a $style href='$trangxuly?page=$i'>$i </a>| ";
			}
			echo"<a href='$trangxuly?page=$sotrang'>Trang cuối</a> ";
		}
		
		if($page>1 && $page<$sotrang)
		{
			$trangke=$page+1;
			$trangtruoc=$page-1;
			echo"<a href='$trangxuly?page=1'>Trang đầu </a> |";
			echo"<a href='$trangxuly?page=$trangke'>Trang kế </a>| ";
			for($i=$page-1;$i<=$page+1;$i++)
			{
				$style=$page==$i?"style='color:red'":'';
				echo"<a $style href='$trangxuly?page=$i'>$i </a>| ";
			}
			echo"<a href='$trangxuly?page=$trangtruoc'>Trang trước </a>| ";
			echo"<a href='$trangxuly?page=$sotrang'>Trang cuối</a> ";
		}
		
		if($page==$sotrang)
		{
			$trangtruoc=$page-1;
			echo"<a href='$trangxuly?page=1'>Trang đầu </a>| ";
			for($i=$sotrang-2;$i<=$sotrang;$i++)
			{
				$style=$page==$i?"style='color:red'":'';
				echo"<a $style href='$trangxuly?page=$i' >$i </a>| ";
			}
			echo"<a href='$trangxuly?page=$trangtruoc'>Trang trước</a> ";
		}
	}
}	

?>
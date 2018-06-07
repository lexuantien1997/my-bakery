<?php
	function mo_tap_tin($path,$mode='r')
	{
		if(file_exists($path))
		{
			$f=fopen($path,$mode) or die('Lỗi mở tập tin');
			return $f;
		}
		else
		{
			die('Tập tin không tồn tại');
		}
	}
	
	function doc_tap_tin($path,$mode='r')
	{
		$f=mo_tap_tin($path,$mode);
		$noidung='';
		while(!feof($f))
		{
			$noidung.=fgets($f);
		}
		fclose($f);
		return $noidung;
	}
	
	function Duyet_thu_muc($dir)
{
	if(!is_dir($dir)) 
	{
		 echo ("Thư mục không tồn tại");
	}
	$File_list=array();
	// Lấy nội dung trong thư mục đưa vào mảng
	$dh = opendir($dir) or die ("Không thể mở thư mục");
    // Tạo vòng lặp xuất các tập tin ra mảng
    while (($file = readdir($dh)) !== false)  
	{
		if ($file != "." && $file != "..") 
		{
            $File_list[]=$file;
        }
    }
	return $File_list;
		
}

?>
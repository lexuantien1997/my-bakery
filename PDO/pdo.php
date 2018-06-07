<?php
function truyvan($cau_truy_van)
{
	$pdo=new PDO("mysql:host=localhost;dbname=ql_banh",'root','');
	$pdo->query('set names utf8');
	$sta=$pdo->prepare($cau_truy_van);
	$sta->execute();
	$kq=$sta->fetchAll();
	return $kq;
}
function insert_update($cau_truy_van)
{
	$pdo=new PDO("mysql:host=localhost;dbname=ql_banh",'root','');
	$pdo->query('set names utf8');
	$sta=$pdo->prepare($cau_truy_van);
	$kq=$sta->execute();
	return $kq;
}
function get_id_giaodich()
{
	$kq=truyvan('select magiaodich from giaodich ORDER by magiaodich DESC limit 1');
	if(count($kq)>0)
	{
		foreach($kq as $r);
		return $r[0];
	}
	else
	{
		return 1;
	}
}

?>
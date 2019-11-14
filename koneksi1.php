<?php
$user="root";
$server="localhost";
$kunci="";
$database="semester3";

$rumah=mysql_connect($server,$user,$kunci);
if($rumah){
	echo 'rumah terhubung';
	}else{
	echo'coba lagi';
	}
$db=mysql_select_db($database);
if($db){
	echo'db terhubung';
	}else{
	echo'coba lagi';
	}

?>
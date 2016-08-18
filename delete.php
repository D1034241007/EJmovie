<?php
	/*$db_host="127.0.0.1";
	$db_user="xuan";
	$db_password="0312";
	$db_database="member";
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	$mysqli->query("set names 'utf8'");
	$sql="DELETE FROM `memdata` WHERE `MEMID` = '$_REQUEST[MEMID]'";
	$mysqli->query($sql);
	$mysqli->close();*/
	require_once "memall.php";
	$mysqli = new db;
	$db = "`memdata`";
	$field=array("`MEMID`");
	$value=array("'$_REQUEST[MEMID]'");
	$mysqli->sql_delete($db,$field,$value);
	header("location:index.php");
?>
<?php
	require_once "memall.php";
	$mysqli = new db;
	$db = "`memdata`";
	$field=array("`MEMID`","`PASSWORD`");
	$value=array("'$_REQUEST[MEMID]'","'$_REQUEST[PASSWORD]'");
	$mysqli->sql_update($db,$field,$value);
	/*$db_host="127.0.0.1";
	$db_user="xuan";
	$db_password="0312";
	$db_database="member";
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	$mysqli->query("set names 'utf8'");
	$sql="UPDATE `memdata` SET `PASSWORD`='$_REQUEST[PASSWORD]'  WHERE `MEMID`='$_REQUEST[MEMID]'";
	
	$mysqli->query($sql);
	$mysqli->close();*/
	header("location:index.php");
?>
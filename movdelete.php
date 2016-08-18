<?php
	require_once "memall.php";
	$mysqli = new db;
	$db = "`movie`";
	$field=array("`MOVID`");
	$value=array("'$_REQUEST[MOVID]'");
	$mysqli->sql_delete($db,$field,$value);
	header("location:movindex.php");
?>
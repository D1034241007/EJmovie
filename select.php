<html>
<head>
	<title>會員查詢</title>
	<meta charset="utf8"/>
	<style>
		table td{text-align:center;}
	</style>
</head>
<body>
	<div id="top" style="border:1px solid #09f; height:50px; width:70%; margin:20px auto;">
	<form id="form2" name="form2" method="POST" align="center">
		<p><input type="button" value="回上頁" onclick="location.href='index.php'"/><p/>
	</form>
<?php
	require_once "memall.php";
	$mysqli = new db;
	$db = "`memdata`";
	$field=array("`MEMID`","`NAME`","`PASSWORD`","`FM`","`EMAIL`","`PHONE`","`BIRTH`","`WORK`");
	$condition=("%'$_REQUEST[EMAIL]'%");
	$mysqli->sql_select($db,$field,$$condition);
	
	//SELECT `MEMID`, `ACCOUNT`, `PASSWORD`, `FM`, `EMAIL`, `PHONE`, `BIRTH`, `WORK` FROM `memdata` WHERE `ACCOUNT` LIKE '%d%'
//	header("location:index.php");
?>
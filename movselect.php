<?php
	require_once "movie.php";
	$mysqli = new db;
	$db = "`movie`";
	$field=array("`IMAGE`","`MONAME`","`DATEONE`","`VIDEO`","`INTRODUCT`","`CLASS`","`SUPPACTRESS`","`SUPPACTOR`","`LEADACTRESS`","`LEADACTOR`","`DIRECTOR`");
	$condition=("%'$_POST[MONAME]'%");
	$mysqli->sql_select($db,$field,$condition);
	
	//header("location:search.html");
?>
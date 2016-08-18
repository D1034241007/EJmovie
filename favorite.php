<?php
		require_once "movie.php";
		$mysqli = new db;
		$db = "`movie`";
		$field=array("`VIDEO`","`MONAME`");
		$condition=("%'$_POST[MONAME]'%");
		$mysqli->sql_favorite($db,$field,$value);
	//header("location:");
?>
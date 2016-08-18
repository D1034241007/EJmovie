<?php
	require_once "movie.php";
	$mysqli = new db;
	$db = "`movie`";
	$field=array("`MONAME`","`LEADACTOR`","`LEADACTRESS`","`SUPPACTOR`","`SUPPACTRESS`","`DIRECTOR`","`CLASS`","`DATEONE`","`DATETWO`","`LENGTH`","`INTRODUCT`","`VIDEO`");
	$value=array("'$_REQUEST[MONAME]'","'$_REQUEST[LEADACTOR]'","'$_REQUEST[LEADACTRESS]'","'$_REQUEST[SUPPACTOR]'","'$_REQUEST[SUPPACTRESS]'","'$_REQUEST[DIRECTOR]'","'$_REQUEST[CLASS]'","'$_REQUEST[DATEONE]'","'$_REQUEST[DATETWO]'","'$_REQUEST[LENGTH]'","'$_REQUEST[INTRODUCT]'","'$_REQUEST[VIDEO]'");
	$mysqli->sql_insert($db,$field,$value);
	//header("location:index.php");
?>
</body>
</html>
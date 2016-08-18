<html>
<head>
	<title>確認是否成功</title>
</head>
<form align="center" style="margin:20px auto">
		<p><input type="button" value="回會員列表" onclick="location.href='index.php'"/>
		<input type="button" value="繼續新增" onclick="location.href='table.html'"/><p/>
</form>
<body>
<?php
	require_once "memall.php";
	$mysqli = new db;
	$db = "`memdata`";
	$mysqli->sql_connect();
	
?>
</body>
</html>
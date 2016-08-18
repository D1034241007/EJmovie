<!DOCTYPE html> 
<html>
<head>
	<title>會員列表</title>
	<meta charset="utf8"/>
	<style>
		table td{text-align:center;}
	</style>
</head>
<body>
	<div id="top" style="border:1px solid #09f; height:100px; width:70%; margin:20px auto;">
	<form id="form2" name="form2" method="POST" align="center">
		<!--<p>ID：<input type = "text" name ="MEMID"/><br/>-->
		<p>帳號：<input type = "text" name ="EMAIL"/><p/>
		<!---->
		<input type="button" value="回增刪修" onclick="location.href='table.php'"/>
		<input type="button" value="會員查詢" type="submit" onclick="form2.action='select.php';form2.submit();"/>
	</form></div>
	<table border="1" width="900" align="center";>
		<tr><th>會員ID</th><th>信箱</th><th>密碼</th><th>姓名</th><th>性別</th><th>電話</th><th>生日</th><th>職業</th></tr>
<?php
	$db_host='127.0.0.1';
	$db_user='xuan';
	$db_password='0312';
	$db_database='member';
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	
	$mysqli->query("set names 'utf8'");
	$sql ="SELECT * FROM `memdata`";
	$mysqli->query($sql);
	if($result =$mysqli->query($sql) ){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['MEMID']."</td>";
			echo"<td>".$row['EMAIL']."</td>";
			echo"<td>".$row['PASSWORD']."</td>";
			echo "<td>".$row['NAME']."</td>";
			echo "<td>".$row['FM']."</td>";
			echo "<td>".$row['PHONE']."</td>";
			echo"<td>".$row['BIRTH']."</td>";
			echo "<td>".$row['WORK']."</td>";
			echo "</tr>";
		}
		$result->free();
	}
	$mysqli->close();
?>
</table>
</body>
</html>
		<!--密碼：<input type = "password" name ="PASSWORD"/><br/>
		性別：<input type = "text" name ="FM"/><br/>
		信箱：<input type = "text" name ="EMAIL"/><br/>
		電話：<input type = "text" name ="PHONE"/><br/>
		生日：<input type = "text" name ="BIRTH"/><br/>
		職業：<input type = "text" name ="WORK"/><p/>
		<input type="button" value="新增" onclick="location.href='insert.php'" />
		<input type="button" value="刪除" onclick="location.href='delete.php'" />
		<input type="button" value="更新" onclick="location.href='updete.php'" />
		<input type="button" value="ID刪除" type="submit" onclick="form2.action='delete.php';form2.submit();" />-->
<!DOCTYPE html> 
<html>
<head>
	<title>電影列表</title>
	<meta charset="utf8"/>
	<style>
	table {
		overflow:hidden;
		white-space:nowrap;
		word-break:keep-all;
	}
		table td{text-align:center;}
	</style>
</head>
<body>
	<div id="top" style="border:1px solid #09f; height:100px; width:90%; margin:20px auto;">
	<form id="form2" name="form2" method="POST" align="center">
		<p>帳號：<input type = "text" name ="ACCOUNT"/><p/>
		<input type="button" value="回增刪修" onclick="location.href='movtable.html'"/>

		<input type="button" value="電影查詢" type="submit" onclick="form2.action='movselect.php';form2.submit();"/>
	</form>
	</div>
	<table border="1" width="90%" align="center">
	<tr><th width="70px">電影ID</th><th width="100px">片名</th><th width="70px">主演1</th><th width="70px">主演2</th><th width="70px">配角1</th><th width="70px">配角2</th><th width="70px">導演</th><th width="70px">類別</th><th width="100px">上映日期</th><th width="100px">下檔日期</th><th width="90px">片長</th><th width="200px" height="150px">簡介</th><th>連結</th></tr>
<?php
	$db_host='127.0.0.1';
	$db_user='xuan';
	$db_password='0312';
	$db_database='member';
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	
	$mysqli->query("set names 'utf8'");
	$sql ="SELECT * FROM `movie`";
	$mysqli->query($sql);
	if($result =$mysqli->query($sql) ){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['MOVID']."</td>";
			echo "<td>".$row['MONAME']."</td>";
			echo"<td>".$row['LEADACTOR']."</td>";
			echo "<td>".$row['LEADACTRESS']."</td>";
			echo"<td>".$row['SUPPACTOR']."</td>";
			echo "<td>".$row['SUPPACTRESS']."</td>";
			echo"<td>".$row['DIRECTOR']."</td>";
			echo "<td>".$row['CLASS']."</td>";
			echo "<td>".$row['DATEONE']."</td>";
			echo "<td>".$row['DATETWO']."</td>";
			echo "<td>".$row['LENGTH']."</td>";
			echo "<td>".$row['INTRODUCT']."</td>";
			echo "<td>".$row['VIDEO']."</td>";
			echo "</tr>";
		}
		$result->free();
	}
	$mysqli->close();
?>
</table>
</body>
</html>
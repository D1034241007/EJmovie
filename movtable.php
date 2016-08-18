<html>
<head>
	<title>電影新增</title>
	<meta charset="utf8"/>
	<style>
		table td{text-align:center;}
	</style>
</head>
<body>
<div id="top" style="border:1px solid #09f; height:500px; width:70%; margin:20px auto;">
	<form id="form2" name="form2" method="POST" style="margin-left:30px ;margin-top:30px">
		片  名：<input type = "text" name ="MONAME" size="35"/><p/>
	<?php
		$str.="<select name=LEADACTOR>";
		$db_host='127.0.0.1';
		$db_user='xuan';
		$db_password='0312';
		$db_database='member';
		
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	
	$mysqli->query("set names 'utf8'");
	$sql ="SELECT * FROM `actors`";
	$mysqli->query($sql);
		for(){
			$str1.= 該欄位的資料
			　$變數 .= "<option value=".$變數１.">".$變數１."</option>"; 
		}
		$str.="</select>";	
	?>
		主演1：<input type = "select" name ="LEADACTOR" />&nbsp;&nbsp;&nbsp;<?php?>
		主演2：<input type = "text" name ="LEADACTRESS"/><p/>
		配角1：<input type = "text" name ="SUPPACTOR"/>&nbsp;&nbsp;&nbsp;
		配角2：<input type = "text" name ="SUPPACTRESS"/><p/>
		導 演：<input type = "text" name ="DIRECTOR"/><p/>
		類 別：<input type = "text" name ="CLASS"/><p/>
		上映日：<input type = "text" name ="DATEONE" placeholder="0000-00-00"/>&nbsp;&nbsp;&nbsp;
		下檔日：<input type = "text" name ="DATETWO" placeholder="0000-00-00"/><p/>
		片 長：<input type = "text" name ="LENGTH"  placeholder="00:00:00"/><p/>
		簡 介：<textarea rows="5" name="INTRODUCT" cols="50" ></textarea><p/>
		連 結：<input type = "text" name ="VIDEO"/><p/>
		
		<input type="button" value="新增電影" type="submit" onclick="form2.action='movinsert.php';form2.submit();"/>
		<input type="button" value="刪除" type="submit"onclick="form2.action='movdelete.php';form2.submit();" />
		<input type="button" value="更新密碼" type="submit"onclick="form2.action='movupdate.php';form2.submit();" />
		<input type="button" value="至查詢頁" onclick="location.href='movindex.php'" />
	</form>
	</div>
	<table border="1" width="90%" align="center">
	<tr><th width="80px">電影ID</th><th width="120px">片名</th><th width="70px">主演1</th><th width="70px">主演2</th><th width="70px">配角1</th><th width="70px">配角2</th><th width="70px">導演</th><th width="70px">類別</th><th width="100px">上映日期</th><th width="100px">下檔日期</th><th width="90px">片長</th><th>簡介</th><th width="250px">連結</th></tr>
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
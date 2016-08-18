<?php
	$DB_IP = "127.0.0.1"; 
	$DB_USER = "xuan";
	$DB_PASSWORD = "0312";
	$link = mysql_connect($DB_IP , $DB_USER , $DB_PASSWORD);
	$sdb = mysql_select_db("test" , $link) or die("找不到資料庫");
	$sql = "SELECT `imageData` FROM `output_images` WHERE imageId = 1"; 
	$imageresult1 = mysql_query($sqlimage);
	while($rows=mysql_fetch_assoc($imageresult1))
	{
		header("Content-type: image/jpeg");
	//	echo "<img src='$IMA' >";
	echo $row['imageData']."<br/>";
		echo "<br>";
	} 
?> 
<!--		$s=$row['IMA'];
	echo $row['IMA'];
	echo '<img src="'.$s.'">';

mysql_query("set names 'utf8'");
	if($link){
		
		
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		mysql_close($link);
		header("Content-type: image/jpeg");
		
		
		//echo $row['MONAME'];
	}
-->
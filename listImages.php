<?php
	$conn = mysql_connect("127.0.0.1", "xuan", "0312");
	mysql_select_db("test");
	$sql = "SELECT imageId FROM output_images ORDER BY imageId DESC";
	$result = mysql_query($sql);
?>
<HTML>
<HEAD>
	<TITLE>List BLOB Images</TITLE>
	<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
	<?php
		while($row = mysql_fetch_array($result)) {
	?>
	<img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
	<?php
	}
	mysql_close($conn);
	?>
</BODY>
</HTML>
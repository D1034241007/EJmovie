<!--<html>
<head>
	<title>會員新增</title>
</head>
<body>
	<form id="form2" name="form2" method="POST" align="center">
		帳號：<input type = "text" name ="ACCOUNT"/><br/>
		密碼：<input type = "password" name ="PASSWORD"/><br/>
		性別：<input type = "text" name ="FM"/><br/>
		信箱：<input type = "text" name ="EMAIL"/><br/>
		電話：<input type = "text" name ="PHONE"/><br/>
		生日：<input type = "text" name ="BIRTH"/><br/>
		職業：<input type = "text" name ="WORK"/><p/>
		<input type="button" value="加入會員" type="submit" onclick="form2.action='insert.php';form2.submit();"/>
	</form>-->
<?php
		require_once "memall.php";
		$mysqli = new db;
		$db = "`memdata`";
		$field=array("`NAME`","`PASSWORD`","`FM`","`EMAIL`","`PHONE`","`BIRTH`","`WORK`");
		$value=array("'$_REQUEST[NAME]'","'$_REQUEST[PASSWORD]'","'$_REQUEST[FM]'","'$_REQUEST[EMAIL]'","'$_REQUEST[PHONE]'","'$_REQUEST[BIRTH]'","'$_REQUEST[WORK]'");
		$mysqli->sql_insert($db,$field,$value);
		
		
	header("location:registeredOK.html");
	/*$db_host='127.0.0.1';
	$db_user='xuan';
	$db_password='0312';
	$db_database='member';
	
	$acc =$_REQUEST['ACCOUNT'];
	$pas = $_REQUEST['PASSWORD'];
	$fm = $_REQUEST['FM'];
	$email= $_REQUEST['EMAIL'];
	$phone= $_REQUEST['PHONE'];
	$birth= $_REQUEST['BIRTH'];
	$work= $_REQUEST['WORK'];
	$sql ="INSERT INTO `memdata` (`MEMID`,`ACCOUNT`,`PASSWORD`,`FM`,`EMAIL`,`PHONE`,`BIRTH`,`WORK`)  VALUES ('','$acc','$pas','$fm','$email','$phone','$birth','$work')";

	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_database);
	$mysqli->query("set names 'utf8'");
	$sql ="INSERT INTO `memdata` (`MEMID`,`ACCOUNT`,`PASSWORD`,`FM`,`EMAIL`,`PHONE`,`BIRTH`,`WORK`)  VALUES ('','$_REQUEST[ACCOUNT]','$_REQUEST[PASSWORD]','$_REQUEST[FM]','$_REQUEST[EMAIL]','$_REQUEST[PHONE]','$_REQUEST[BIRTH]','$_REQUEST[WORK]')";
	$mysqli->query($sql);
	
	$mysqli->close();*/
?>
<!--</body>
</html>-->
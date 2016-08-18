<html>
<head>
	<title>會員增刪修</title>
	<meta charset="utf8"/>
	<style>
		table td{text-align:center;}
	</style>
</head>
<body>
	<div id="top" style="border:1px solid #09f; height:300px; width:70%; margin:20px auto;">
	<form id="form2" name="form2" method="POST" align="center">
		<p>I D： <input type = "text" name ="MEMID"/><br/>(新增不需鍵入)<br/>
		信箱：<input type = "text" name ="EMAIL"/><br/>
		密碼：<input type = "password" name ="PASSWORD"/><br/>
		暱稱：<input type = "text" name ="NAME"/><br/>
		性別：<input type = "text" name ="FM"/><br/>
		
		電話：<input type = "text" name ="PHONE"/><br/>
		生日：<input type = "text" name ="BIRTH"/><br/>
		職業：<input type = "text" name ="WORK"/><p/>
		<input type="button" value="新增" type="submit" onclick="form2.action='insert.php';form2.submit();" />
		<input type="button" value="刪除" type="submit"onclick="form2.action='delete.php';form2.submit();" />
		<input type="button" value="更新密碼" type="submit"onclick="form2.action='update.php';form2.submit();" />
		<input type="button" value="至查詢頁" onclick="location.href='index.php'" />

	</form>
	</div>
</body>
</html>
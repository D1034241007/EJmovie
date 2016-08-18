<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if ( $row[1] == $id)
{
	echo '帳號重複，請洽管理員';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';	
}
	 
else if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{


		//新增資料進資料庫語法
        $sql = "insert into member_table (username, password, telephone, address, other) values ('$id', '$pw', '$telephone', '$address', '$other')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '註冊失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
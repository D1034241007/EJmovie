#!/usr/bin/php -q
<?php
	$DB_IP = "127.0.0.1";
	$DB_USER = "xuan";
	$DB_PASSWARD = "0312";	
	$link = mysql_connect($DB_IP , $DB_USER , $DB_PASSWARD);
	mysql_select_db("member" , $link) or die("找不到資料庫");
	
	
	mysql_query("set names 'utf8'");
	
	if($link){
		echo "連結成功";
		$sql = "SELECT * FROM `sms`";
		//$sql = "SELECT * FROM `smsmember`";
		$result = mysql_query( $sql, $link);
		$phone = $_POST['phone'];
		$name = $_POST['name'];
		$content = $_POST['content'];
		
			echo "$name".'<br>';
			echo"$phone".'<br>';
			echo "$content".'<br>';
		while( $row = mysql_fetch_assoc($result)){
			echo $row["ID"];
			echo $row["NAME"];
			echo $row["PHONE"];
			echo $row["content"].'<br>';
			
		}
	}
	else
		echo "連結失敗";
	mysql_close($link);//測試、顯示
$SendGet = new SocketHttpRequest();  // 建立物件
//$SendGet->HttpRequest('http://smexpress.mitake.com.tw:9600/SmSendGet.asp?username=45002545&password=sssss1996&encoding=utf8&dstaddr=0903080129&DestName=wen&dlvtime=&vldtime=&smbody=這是使用PHP Sample測試發送');         // 呼叫成員方法、寄簡訊
//echo '<br>';
//echo 'http://smexpress.mitake.com.tw:9600/SmSendGet.asp?username=45002545&password=sssss1996&encoding=utf8&dstaddr=0903080129&DestName=wen&dlvtime=&vldtime=&smbody=這是使用PHP Sample測試發送';
//echo '<br>';
//echo 'http://smexpress.mitake.com.tw:9600/SmSendGet.asp?username=45002545&password=sssss1996&encoding=utf8&dstaddr='.$phone.'&DestName='.$name.'&dlvtime=&vldtime=&smbody='.$content;
//echo '<br>';
//$test = 'http://smexpress.mitake.com.tw:9600/SmSendGet.asp?username=45002545&password=sssss1996&encoding=utf8&dstaddr='.$phone.'&DestName='.$name.'&dlvtime=&vldtime=&smbody='.$content;
//echo $test;
//$SendGet->HttpRequest($test);         // 呼叫成員方法
//$SendGet->sendRequest(); //發送
//echo $SendGet->getResponseBody(); //取回傳值
echo "發送成功";

class SocketHttpRequest
{
    var $sHostAdd;
    var $sUri;
    var $iPort;  
    var $sRequestHeader; 
    var $sResponse;
	 
    function HttpRequest($sUrl)
    {
        $sPatternUrlPart = '/http:\/\/([a-z-\.0-9]+)(:(\d+)){0,1}(.*)/i';
        $arMatchUrlPart = array();
        preg_match($sPatternUrlPart, $sUrl, $arMatchUrlPart);
       
        $this->sHostAdd = gethostbyname($arMatchUrlPart[1]);
        if (empty($arMatchUrlPart[4]))
        {
            $this->sUri = '/';
        }
        else
        {
            $this->sUri = $arMatchUrlPart[4];
        }
        if (empty($arMatchUrlPart[3]))
        {
            $this->iPort = 9600;
        }
        else
        {
            $this->iPort = $arMatchUrlPart[3];
        }
       
        $this->addRequestHeader('Host: '.$arMatchUrlPart[1]);
        $this->addRequestHeader('Connection: Close');

    }
   
    function addRequestHeader($sHeader)
    {
        $this->sRequestHeader .= trim($sHeader)."\r\n";
    }
   
    function sendRequest($sMethod = 'GET', $sPostData = '')
    {
        $sRequest = $sMethod." ".$this->sUri."HTTP/1.1\r\n";
        $sRequest .= $this->sRequestHeader;
        if ($sMethod == 'POST')
        {
            $sRequest .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $sRequest .= "Content-Length: ".strlen($sPostData)."\r\n";
            $sRequest .= "\r\n";
            $sRequest .= $sPostData."\r\n";
        }
        $sRequest .= "\r\n";
       
        $sockHttp = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if (!$sockHttp)
        {
            die('socket_create() failed!');
        }
       
        $resSockHttp = socket_connect($sockHttp, $this->sHostAdd, $this->iPort);
        if (!$resSockHttp)
        {
            die('socket_connect() failed!');
        }
       
        socket_write($sockHttp, $sRequest, strlen($sRequest));
       
        $this->sResponse = '';
        while ($sRead = socket_read($sockHttp, 4096))
        {
            $this->sResponse .= $sRead;
        }
       
        socket_close($sockHttp);
    }
   
    function getResponse()
    {
        return $this->sResponse;
    }
   
    function getResponseBody()
    {
        $sPatternSeperate = '/\r\n\r\n/';
        $arMatchResponsePart = preg_split($sPatternSeperate, $this->sResponse, 2);
        return $arMatchResponsePart[1];
    }
}
?>

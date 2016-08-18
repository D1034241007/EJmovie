<?php
	class db{
		public $localhost = "127.0.0.1";
		public $user = "xuan";
		public $password = "0312";
		public $database = "member";
		public $db_link = null;
		
		function __construct(){	//f至c要有空白1格
			//解構子，建立物件 自動產生
			$this->sql_connect();//連接資料庫
			$this->sql_database();//選擇資料庫
			$this->set_db_encode();//設定字元編碼
		}
		function __destruct(){	//物件不再使用時執行
			$this->close();
		}
		function sql_connect(){
			if($this->db_link==null){
				$this->db_link =new mysqli($this->localhost,$this->user,$this->password);
				if($this->db_link->connect_errno){
					die("連接資料庫失敗:  ".$this->db_link->connect_error."<br/>");
				}
				echo "連接成功<br/>";
			}
		}
		function sql_database(){
			$this->db_link->select_db($this->database);
			echo "連接選擇資料庫<br/>";
		}
		function set_db_encode(){
			$this->db_link->query("set names 'utf8'");
			echo "設定字元編碼成功<br/>";
		}
			function close(){
			$this->db_link->close();//關閉連接
			$this->db_link = null;//關閉後清空link
		}
		function query($sql){
			$result=$this->db_link->query($sql);
			if($result)
				echo "成功查詢query";
			else
				echo "錯誤查詢<br/>".$this->db_link->error."<br/>";
			return $result;//$db 資料表,$field=欄位(陣列),$值(陣列)
		}
		function sql_insert($db,$field,$value){
			/*
				新增一筆資料於資料庫
				參數為 : 資料表 欄位（陣列） 值（陣列）
						  $db	  %field      $value
				規格：
				$db = `資料表` 
					ex : $db=`lol`;
				$field = array("欄位1","欄位2"...) 
					ex : $field=array("`name`","`id`");
				$value = array("值1","值2"...) 
					ex : $value=array("Check",0);
								值可為字串、數值（不用""）
			*/
			$str="INSERT INTO `memdata`(".implode(",",array("`MEMID`","`ACCOUNT`","`PASSWORD`","`FM`","`EMAIL`","`PHONE`","`BIRTH`","`WORK`")).") VALUES(".implode(",",array("ssasa","dwqdw55","F","dsdwd@gmail.com","0945645484","1996-09-29","stu")).")"; 
			echo $db."<br />";
			echo var_dump($field)."<br />";
			echo var_dump($value)."<br />";
			echo $str."<br />";
			$this->query($str);
		}
	}
	$mysqli = new db();
?>
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
			echo " ";
			//	echo "連接成功";
			}
		}
		function sql_database(){
			$this->db_link->select_db($this->database);
			echo " ";
			//echo "連接選擇資料庫";
		}
		function set_db_encode(){
			$this->db_link->query("set names 'utf8'");
			echo " ";
			//echo "設定字元編碼成功";
		}
			function close(){
			$this->db_link->close();//關閉連接
			$this->db_link = null;//關閉後清空link
		}
		function query($sql){
			$result=$this->db_link->query($sql);
			if($result)
				echo " <br/>";	
			//echo "成功查詢query";
			else
				echo "錯誤查詢".$this->db_link->error."<br/>";
			return $result;//$db 資料表,$field=欄位(陣列),$值(陣列)
		}
		function sql_insert($db,$field,$value){
			
			$str="INSERT INTO {$db}(".implode(",",$field).") VALUES(".implode(",",$value).")";
		/*echo $db."<br />";
			echo var_dump($field)."<br />";
			echo var_dump($value)."<br />";
			echo $str."<br />";*/
			$this->query($str);
		}
		function sql_delete($db,$field,$value){
			$str="DELETE FROM `movie` WHERE `MOVID` = '$_REQUEST[MOVID]'";
			echo $db."<br />";
			echo var_dump($field)."<br />";
			echo var_dump($value)."<br />";
			echo $str."<br />";
			$this->query($str);
		}
		function sql_update($db,$field,$value){
			$str="UPDATE `movie` SET ".implode(",",array("`$_REQUEST[MOVID]`","'$_REQUEST[MONAME]'","'$_REQUEST[LEADACTOR]'","'$_REQUEST[LEADACTRESS]'","'$_REQUEST[SUPPACTOR]'","'$_REQUEST[SUPPACTRESS]'","'$_REQUEST[DIRECTOR]'","'$_REQUEST[CLASS]'","'$_REQUEST[DATEONE]'","'$_REQUEST[DATETWO]'","'$_REQUEST[LENGTH]'","'$_REQUEST[INTRODUCT]'","'$_REQUEST[VIDEO]'")).") VALUES(".implode(",",array("'$_REQUEST[MEMID]'","`MONAME`","`LEADACTOR`","`LEADACTRESS`","`SUPPACTOR`","`SUPPACTRESS`","`DIRECTOR`","`CLASS`","`DATEONE`","`DATETWO`","`LENGTH`","`INTRODUCT`","`VIDEO`")).")"; 
			echo $db."<br />";
			echo var_dump($field)."<br />";
			echo var_dump($value)."<br />";
			echo $str."<br />";
			$this->query($str);
		}
		function sql_select($db,$field,$condition){//$condition為條件
		
			$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MONAME` LIKE '%$_REQUEST[MONAME]%'";
		//$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MOVID`=1";
		
			$result = $this->query($str);
			/*echo $db."<br />";
			echo var_dump($field)."<br />";
			echo var_dump($condition)."<br />";
			echo $str."<br />";*/
			if($result){ //條件：若有查詢結果
				while($row = $result->fetch_assoc()){ //迴圈條件：當查詢結果未NULL
					//header("Content-type: image/jpeg"); 
					$img = $row['IMAGE'];
					echo "<br/>"."***";
				//	echo '<img width="100px" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>';
					echo "　片名：".$row['MONAME'];
					echo "　上映日：".$row['DATEONE'];
					echo "類別：".$row['CLASS'];
					echo "演員：".$row['LEADACTOR']."、".$row['LEADACTRESS']."、".$row['SUPPACTOR']."、".$row['SUPPACTRESS'];
					
					echo "導演：".$row['DIRECTOR'];
					$video = $row['VIDEO'];
					//echo $row['INTRODUCT'];
					//var_dump($img);
					//var_dump($video);
				//	echo "<iframe width='420' height='315' allowfullscreen src=".$video." frameborder='0' ></iframe>";
					//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['IMAGE'] ).'"/>';
				}
				$result->free();//清空查詢的記憶
			}
		}
		function sql_favorite($db,$field,$condition){
			$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MONAME` LIKE '%尾%'";
			
			$result = $this->query($str);
			if($result){ //條件：若有查詢結果
				while($row = $result->fetch_assoc()){ //迴圈條件：當查詢結果未NULL
					$video = $row['VIDEO'];
					echo "<iframe width='250' height='145' src=".$video." frameborder='0' allowfullscreen></iframe>";
					echo $row['MONAME'];
				}
				echo "<br/>";
				$result->free();//清空查詢的記憶
			}
		}
		function sql_history($db,$field,$condition){
			$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MONAME` LIKE '%蛋男情人%'";
			
			
			$result = $this->query($str);
			if($result){ //條件：若有查詢結果
				while($row = $result->fetch_assoc()){ //迴圈條件：當查詢結果未NULL
					$video = $row['VIDEO'];
					echo "<iframe width='250' height='145' src=".$video." frameborder='0' allowfullscreen></iframe>";
					echo $row['MONAME'];
				}
				echo "<br/>";
				$result->free();//清空查詢的記憶
			}
		}
		function sql_inform($db,$field,$condition){
			$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MONAME` LIKE '%蛋男情人%'";
			
			$result = $this->query($str);
			if($result){ //條件：若有查詢結果
				while($row = $result->fetch_assoc()){ //迴圈條件：當查詢結果未NULL
					$video = $row['VIDEO'];
					echo "<iframe width='250' height='145' src=".$video." frameborder='0' allowfullscreen></iframe>";
					echo $row['MONAME'];
				}
				echo "<br/>";
				$result->free();//清空查詢的記憶
			}
		}
		function sql_later($db,$field,$condition){
			$str="SELECT ".implode(",",$field)." FROM {$db} WHERE `MONAME` LIKE '%鬼認證%'";
			
			$result = $this->query($str);
			if($result){ //條件：若有查詢結果
				while($row = $result->fetch_assoc()){ //迴圈條件：當查詢結果未NULL
					$video = $row['VIDEO'];
					echo "<iframe width='250' height='145' src=".$video." frameborder='0' allowfullscreen></iframe>";
					echo $row['MONAME'];
				}
				echo "<br/>";
				$result->free();//清空查詢的記憶
			}
		}
	}
	$mysqli = new db;
	//$mysqli = new db();
?>
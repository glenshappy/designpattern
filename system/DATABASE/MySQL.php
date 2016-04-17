<?php 
	namespace system\DATABASE;
	use system\IDatabase;

	class MySQL implements IDatabase{
		private $conn = null;
		function connect($host,$user,$password,$dbName){
			$conn = mysql_connect($host,$user,$password);
			mysql_select_db($dbName,$conn);
			mysql_query("set names utf8");
			$this->conn = $conn;
		}
		
		public function query($sql){
			$res = mysql_query($sql);
			return $res;
		}
		public function close(){
			mysql_close($this->conn);
		}
	}
?>
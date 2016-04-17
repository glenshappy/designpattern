<?php 
	namespace system\DATABASE;
	use system\IDatabase;

	class MySqli implements IDatabase{
		private $conn;
		function connect($host,$user,$password,$dbName){
			$conn = mysqli_connect($host,$user,$password,$dbName);
			$this->conn  = $conn;
		}
		function query($sql){
			return mysqli_query($this->conn,$sql);
		}
		
		function close(){
			mysqli_close($this->conn);
		}
	}
?>
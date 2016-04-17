<?php 
	namespace system\DATABASE;
	use system\IDatabase;

	class PDO implements IDatabase{
		protected $conn;
		function connect($host, $user, $password, $dbName){
			$conn = new \PDO("mysql:host=$host;dbname=$dbName", $user, $password);
			$this->conn=$conn;
		}
		function query($sql){
			return $this->conn->query($sql);
		}
		function close(){
			unset($this->conn);
		}
	}
?>
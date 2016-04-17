<?php 
	namespace system;
	class Database{
		protected static $db;
		//防止外部new，单例模式第一部
		private function __construct(){
			
		}
		
		static function getInstance(){
			//单例模式详细实现
			if(!empty(self::$db)){
				return self::$db;
			}else{
				self::$db = new self();
				return self::$db;
			}
		}		
		
		function where($where){
			return $this;
		}
		
		function order($order){
			return $this;
		}
		
		function limit($limit){
			return $this;
		}
		
	}
?>
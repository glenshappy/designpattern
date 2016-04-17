<?php 
	namespace system;
	//工厂类
	class Factory{
		static function createDatabse(){
// 			$db = new Database(); //名字和参数发生变化
			$db = Database::getInstance();
			Register::set('db1',$db); //注册到注册树上面
			return $db;
		}
	}
?>
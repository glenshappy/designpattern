<?php 
	namespace system;
	class Register{
		private static $objects;
		//将一个对象注册到注册树上面
		public static function set($alias,$object){
			self::$objects[$alias] = $object;
		}
		function _unset($alias){
			unset(self::$objects[$alias]);
		}
		public static function get($alias){
			return self::$objects[$alias];
		}
	}
?>
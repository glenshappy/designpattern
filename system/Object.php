<?php 
	namespace system;
	class Object{
		protected $array = array();
		public static function test(){
			echo "Object::test";
		}
		
		function __set($key,$value){
			var_dump(__METHOD__);
			$this->array[$key] = $value;
		}
		function __get($key){
			var_dump(__METHOD__);
			return $this->array[$key];
		}
		
		function __call($func,$params){
			echo '自动调用函数';
			var_dump($func,$params);
			return "magic function!";
		}
		
		static function __callstatic($func,$params){
			echo '自动调用函数';
			var_dump($func,$params);
			return "magic function!";
		}
		
		function __toString(){
			return __CLASS__;
		}
		
		/**
		 * @desc 当将对象作为一个函数进行调用的时候使用，5.3新增
		 * @param unknown_type $param
		 * @return string
		 */
		function __invoke($param){
			var_dump($param);
			return "invoke";
		}
	} 
?>
<?php 
	namespace system;
	class Loader{
		public static function autoload($class){
			$filePath = str_replace('\\','/', $class).".php";
			require_once BASE_PATH."/".$filePath;
		}
	}
?>
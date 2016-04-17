<?php 
	/**
	 * 策略文件约定了有哪些行为和接口
	 */
	namespace system;
	interface UserStrategy{
		function showAd();
		function showCategory();
	}
?>
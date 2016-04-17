<?php 
	namespace system;
	class maleUserStrategy implements UserStrategy{
		function showAd(){
			echo 'Iphone 6s';
		}
		function showCategory(){
			echo '电子产品';
		}
	}
?>
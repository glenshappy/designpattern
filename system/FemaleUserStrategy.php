<?php 
	namespace system;
	class FemaleUserStrategy implements UserStrategy{
		function showAd(){
			echo '2016新款女装';
		}
		function showCategory(){
			echo '女装';
		}
	}
?>
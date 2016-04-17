<?php 
	namespace system;
	interface IDatabase{
		//数据库连接操作
		function connect($host,$user,$password,$dbName);
		function query($sql);
		function close();
	}
?>
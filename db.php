<?php
	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass', '');
	define('db_name', 'project');
	
	$con = mysqli_connect(db_host, db_user, db_pass);
	mysqli_select_db($con, db_name);
?>
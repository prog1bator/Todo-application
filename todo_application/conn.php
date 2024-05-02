<?php
	$conn = new mysqli("localhost", "liesmile", "obmanesh123", "todo_app");

	if (!$conn){
		die("Error: не подключается к базе данных");
	}
?>
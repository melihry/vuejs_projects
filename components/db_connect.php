<?php
	$mysqli = mysqli_connect("localhost", "root", "", "vue_sql");
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQLi: " . mysqli_connect_error();
	}
	mysqli_query($mysqli, "SET NAMES UTF8");

?>
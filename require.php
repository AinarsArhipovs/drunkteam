<?php
	require ('../connect_db.php');

	if (mysqli_ping($dbc)) {
		echo 'SQL Server' . mysqli_get_server_info($dbc) . ' on ' . mysqli_get_host_info($dbc);
	}
?>
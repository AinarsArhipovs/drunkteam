<?php
	$dbc = mysqli_connect('localhost', 'user', 'pass', 'db_name')
	OR die( mysqli_connect_error());
	mysqli_set_charset($dbc , 'utf-8');
?>
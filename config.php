<?php

	$conn = mysqli_connect('localhost','id15945676_jaydevraol','Root12345#85','id15945676_bankingsystem');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
<?php

// This file contains the database access information.

// Make the connection.
$dbc = mysqli_connect ('localhost','root','')
OR die ('Could not connect to MYSQL: ' . mysqli_error() );

// Select the database.
mysqli_select_db ($dbc,'mall')
OR die ('Could not select the database: ' . mysqli_error() );

?>

<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'MYSQL_ROOT_PASSWORD';

// database name
$mydatabase = 'store';
// check the mysql connection status

//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$conn = new mysqli($host, $user, $pass, $mydatabase);

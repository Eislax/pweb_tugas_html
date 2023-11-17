<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "pweb";

$connection = mysqli_connect($hostname, $username, $password, $database_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

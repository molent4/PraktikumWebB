<?php
/**
 * using mysqli_connect for database connection
 */

$DBHost = 'localhost';
$DBName = 'pagination';
$DBUsername = 'root';
$DBPassword = '';

$mysqli = mysqli_connect($DBHost, $DBUsername, $DBPassword, $DBName); 

?>
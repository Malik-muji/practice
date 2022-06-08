<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'practice';

$con = new mysqli ($serverName, $username , $password , $dbName);
if($con->connect_error){
die ('connection_error');

}



?>
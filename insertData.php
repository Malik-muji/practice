<?php
require 'connection.php';

$u_name = $_POST['name'];
$u_username = $_POST['user_name'];
$u_email = $_POST['email'];
$u_password = $_POST['password'];
$u_gender = $_POST['gender'];


$date = date ("Y-m-d H:i:s");



$sqlQuery = "INSERT INTO user (name,user_name,email,password,gender,created_at) 
VALUES ('$u_name','$u_username', '$u_email', '$u_password', '$u_gender', '$date')";

if($con->query($sqlQuery)){
echo'recorded';

}else{
    echo 'not recorded';
}



?>


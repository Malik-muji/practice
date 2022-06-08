<

$date = date ("Y-m-d H:i:s");



$sqlQuery = "INSERT INTO user (name,user_name,email,password,gender,created_at) 
VALUES ('$u_name','$u_username', '$u_email', '$u_password', '$u_gender', '$date')";

if($con->query($s

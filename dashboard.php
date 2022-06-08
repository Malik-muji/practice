<?php
require 'connection.php';
if(isset($_POST['delete'])){

    $id= $_POST['id'];
    $date = date ("Y-m-d H:i:s");
$deleteQuery = "UPDATE user SET deleted_at= '$date' WHERE id='$id'";
if($con->query($deleteQuery)){

}else{


}


}



$readQuery = "SELECT * FROM user";

$result = $con-> query($readQuery);
if( $result -> num_rows > 0){

    echo '<table class="table table-striped" >';
    echo '<thead>';
    echo '<th>ID</th>';
    echo '<th>NAME</th>';
    echo '<th>USER_NAME</th>';
    echo '<th>EMAIL</th>';
    echo '<th>PASSWORD</th>';
    echo '<th>GENDER</th>';
    echo '<th>DELETE</th>';

    echo '</thead>';
    while($row = $result-> fetch_assoc()){

        if($row["deleted_at"] == NULL){
    echo '<tr>';
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["name"].'</td>';
    echo '<td>'.$row["user_name"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["password"].'</td>';
    echo '<td>'.$row["gender"].'</td>';
    echo '<td>
    <form action="dashboard.php" method="POST">
    <input type="hidden" name="id" value="'.$row["id"].'">

    <input type="submit" value="DELETE" name="delete" class="btn btn-danger">
    </form>
    </td>';


    echo '</tr>';
}


    }
echo '</table>';
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>



</body>
</html>
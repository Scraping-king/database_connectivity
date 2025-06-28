<?php
require "connection.php";
$sql="create database mydb";
if(mysqli_query($conn,$sql)){
    echo "database is created successfully";
}else {
    echo "database failled to created!".mysqli_error($conn);
}
mysqli_close($conn);
?>
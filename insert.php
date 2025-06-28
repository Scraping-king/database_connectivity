<?php
require "connection.php";
$sql="INSERT INTO student(fname,lname,sex) values ('Abel','Getachew','Male')";
if(mysqli_query($conn,$sql)){
    echo "data is inserted successfully";
}else {
    echo "data is failled to inserted!".mysqli_error($conn);
}
mysqli_close($conn);
?>
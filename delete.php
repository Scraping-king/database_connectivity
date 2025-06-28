<?php
require "connection.php";
$sql="delete from student where id=10";
if(mysqli_query($conn,$sql)){
    echo "data is deleted successfully";
}else {
    echo "data is failled to deleted!".mysqli_error($conn);
}
mysqli_close($conn);
?>
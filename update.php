<?php
require "connection.php";
$sql="update student set id='10' where id='11'";
if(mysqli_query($conn,$sql)){
    echo "data is updated successfully";
}else {
    echo "data is failled to updated!".mysqli_error($conn);
}
mysqli_close($conn);
?>
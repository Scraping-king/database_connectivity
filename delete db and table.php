<?php
require "connection.php";
// $sql="drop database databesename";
$sql="drop table tablename";
if(mysqli_query($conn,$sql)){
    // echo "database is deleted successfully";
    echo "table is deleted successfully";
}else {
    echo "database failled to created!".mysqli_error($conn);
}
mysqli_close($conn);
?>
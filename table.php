<?php
require "connection.php";
$sql="CREATE TABLE student (id int(6) unsigned auto_increment primary key, 
    fname varchar(20) not null, 
    lname varchar(20) not null, 
    sex   varchar(6) not null,
    Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if(mysqli_query($conn,$sql)){
    echo "table is created successfully";
}else {
    echo "table failled to created!".mysqli_error($conn);
}
mysqli_close($conn)
?>
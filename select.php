<?php
require "connection.php";
//select data from table
$sql="select id,fname,lname,sex from student";
$result=mysqli_query($conn,$sql);
//uotput data of each result
while($row=mysqli_fetch_assoc($result)){
    echo $row['id'].$row['fname'].$row['lname'].$row['sex']. "<br>";
}
mysqli_close($conn);
?>
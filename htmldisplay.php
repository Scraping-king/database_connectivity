<?php
require "connection.php";
//select data from table
$sql="select id,fname,lname,sex from student";
$result=mysqli_query($conn,$sql);
//uotput data of each result
echo "<table border=1>";
echo "<tr> <td> ID</td><td> F_name</td><td> L_name</td><td> Sex</td></tr>";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row["id"]} </td><td>{$row["fname"]} </td><td>{$row["lname"]} </td><td>{$row["sex"]} </td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<?php
require "connection.php";
$sql="INSERT INTO student(fname,lname,sex) values (?,?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sss",$fname,$lname,$sex);
//set parameter and execute
$students=[
    ["kalkidan","belay","female"],
    ["abgya","adam","female"],
    ["eyosias","yosef","male"],
    ["mahilet","alemu","female"],
    ["yilkal","bitew","male"],
    ["rakeb","getaneh","female"],
    ["girma","getachew","male"],
    ["mekdes","ayele","female"],
    ["yakob","belay","male"],
    ["afomia","kebede","female"],
];
foreach($students as $student){
    [$fname,$lname,$sex]=$student;
    $stmt->execute();
}
echo "all data inserted successfully!";
$stmt->close();
mysqli_close($conn);
?>
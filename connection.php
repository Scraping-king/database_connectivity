<?php
$conn=mysqli_connect("localhost","root","","mydb");
if(!$conn){
    die("connection faild!".mysqli_error());
}
?>
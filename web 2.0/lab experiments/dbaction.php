<?php
include("connect.php");
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sel="INSERT INTO user_info (name,age,gender)
    Values ('$name','$age','$gender')";

$result =mysqli_query($dbh,$sel) or
die("Error querying the database");

echo"operation success,pls refresh your database";
?>
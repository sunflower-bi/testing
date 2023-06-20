<?php
include("registerconnect.php");

$name=$_POST['name'];
$rollno=$_POST['rollno'];
$age=$_POST['age'];
$cgpa=$_POST['cgpa'];

$query="INSERT INTO student (Name,Rollno,Age,CGPA) values ('$name','$rollno','$age','$cgpa')";

$result=mysqli_query($dbh,$query)
or
die("Error Inserting values into table");

?>
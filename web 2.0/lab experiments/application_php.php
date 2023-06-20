<?php
include("connect_student.php");
$name=$_POST['name'];
$roll=$_POST['roll'];
$cgpa=$_POST['cgpa'];
$branch=$_POST['branch'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

$sel="INSERT INTO student (Name,Rollno,CGPA,Branch,Mobile,Gender)
    values ('$name','$roll','$cgpa','$branch','$mobile','$gender')";

$result =mysqli_query($dbh,$sel) or
die("Error querying the database");

echo "<br><br>";
echo"operation success, pls refresh your database";
?>
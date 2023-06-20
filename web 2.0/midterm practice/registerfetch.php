<?php
include("registerconnect.php");

$rollno=$_POST['rollno'];

$query="SELECT CGPA from student where Rollno='$rollno'";

$result=mysqli_query($dbh,$query)
or
die("Error querying the database");

$row=mysqli_fetch_assoc($result);

$companies='';
if ($row['CGPA']>=8.5){
    $companies.='Google <br>';
}
if ($row['CGPA']>=8){
    $companies.='Dell <br>';
}
if ($row['CGPA']>=7){
    $companies.='IBM <br>';
}
if ($row['CGPA']>=6.5){
    $companies.='TCS <br>';
}

if ($companies==''){
    echo "<h4>Not eligible for placements</h4>";
}
else{
    echo "<h4>The companies you are eligible for are: </h4>";
    echo $companies;
}

?>
<?php
include("connect.php"); // including connect.phpfile into testdb.php
$query = "select name from user_info"; // user_infois a table from Demo database
$result = mysqli_query($dbh,$query) or
die("Error querying the database");
echo "<br/>";
echo"fetchingsuccess"; // not required only for initial code
echo "<br/>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) //mysqli_fetch_assoc($result);
{
echo "NAME: " . $row['name']."<br/>";
}
?>
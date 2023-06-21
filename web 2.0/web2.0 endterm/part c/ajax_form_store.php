<?php
require("mysql_connect.php");
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
mysqli_query($conn, "INSERT INTO register(name, email, mobile) VALUES("$name", "$email", "$mobile")")
or
die('Could not Connect MySql Server');
mysqli_close($conn);
?>
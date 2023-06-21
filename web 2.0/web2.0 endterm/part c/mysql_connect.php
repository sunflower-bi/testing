<?php
    $host='localhost';
    $username='user';
    $password='';
    $dbname = "my_db";
    $conn=mysqli_connect("$host","$username","$password","$dbname")
    or
    die('Could not Connect MySql Server');
?>
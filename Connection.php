<?php

$servername="localhost";
$username="newuser";
$password="password";
$dbname="TEST";
$conn= mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
        echo "Connection established";
}
else
{
        die("Connection failed: " . mysqli_connect_error());
}
?>

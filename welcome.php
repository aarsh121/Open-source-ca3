<?php 
include("connection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];


$query="INSERT INTO USERS(FIRST_NAME, LAST_NAME, EMAIL) VALUES ('$fname', '$lname','$email')";
mysqli_query($conn, $query);

?>
<html>
<body>
<h3 style="color:green;text-align:center;margin-top:50px">Data has been saved</h3>
<button style="text-color:white; padding:15px 32px; text-align:center;background-color:#4CAF50; text-decoration:none; display:inline-block;fo>
</body>
</html>

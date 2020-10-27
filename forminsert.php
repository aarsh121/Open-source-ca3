<?php
include("connection.php");
?>

<html>
<body>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h1>
Registration Form
</h1>
<form action="" method="GET" id="nav">
Enter your id: <input type="text" name="id"><br>
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" placeholder="Submit">
</form>

<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];

$query="INSERT INTO USERS(FIRST_NAME, LAST_NAME, EMAIL) VALUES ('$fname', '$lname','$email')";
mysqli_query($conn, $query);

?>

</body>
</html>

<html>
<body>
<head>
<link rel="stylesheet" href="showlist1.css">
</head>
<?php include("connection.php"); ?>
<?php $sql="SELECT U_ID, FIRST_NAME, LAST_NAME, EMAIL FROM USERS ORDER BY FIRST_NAME;"; ?>
<?php $result=mysqli_query($conn, $sql);
$resultcheck=mysqli_num_rows($result);
?>
<h2 style="text-align:center">Database Table</h2>
        <table style="width:100%">
                <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                </tr>
                <tr>
        <?php
                if($resultcheck>0){
                        while($row=mysqli_fetch_assoc($result)){
        ?>
                        <td><?php echo $row['U_ID']; ?></td>
                        <td><?php echo $row['FIRST_NAME']; ?></td>
                        <td><?php echo $row['LAST_NAME']; ?></td>
                        <td><?php echo $row['EMAIL']; ?></td>
                </tr>
        <?php
                }
                }
        ?>

        </table>
</body>
</html>

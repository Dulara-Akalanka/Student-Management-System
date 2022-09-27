<?php
session_start();
if (!(isset($_SESSION['username']))){
    header ("Location: index.php");

}


var_dump($_GET);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <h1> User Name : <?=$_SESSION['username']?></h1>
    <center>
        <h1>ENTER YOUR DATA HERE</h1>
    <form action="pass.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><input type="text" name="phone" required></td>
            </tr>
        </table>
        <input type="submit" value="submit">
    </form>
    </center>
</body>
</html>
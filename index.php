<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
    <h1>LOGIN HERE</h1>
    <form action="check.php" method="post">
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password" required></td>
            </tr>
        </table>
        <input type="submit" name="login" value="LOGIN" >
    </form>
    </center>
</body>
</html>
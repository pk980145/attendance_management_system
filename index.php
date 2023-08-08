<!-- <?php
    include("connection.php")
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" method="post" action=login.php>
            <label>Username:</label>
            <input type="text" name="user" id="user"><br><br>
            <label>Password: </label>
            <input type="password" name="pass" id="pass"><br><br>
            <input type="submit" id="sbmt" value="Login" name="submit"><br>
            <a href="register.php">Sign up</a>
        </form>
    </div>
</body>
</html>
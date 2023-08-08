
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Sign up Form</h1>
        <form name="form" method="post" action=signup.php>

            <label for="category">Select your Category:</label>
            <select name="category" id="category">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select><br><br>

            <label>Username:</label>
            <input type="text" name="user" id="user"><br><br>
            <label>Password: </label>
            <input type="password" name="pass" id="pass"><br><br>
            <input type="submit" id="sbmt" value="Sign up" name="submit">
        </form>
    </div>
</body>
</html>
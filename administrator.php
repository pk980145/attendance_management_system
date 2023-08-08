<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <form action="mysqlcommand.php" method="post">
        <label for="operation">Select an Operation:</label>
        <select name="operation" id="operation">
            <option value="delete">Delete</option>
            <option value="update">Update</option>
            <option value="insert">Insert</option>
            <option value="others">Others</option>
            
            <!-- PHP code to populate options -->
        </select>
        <br><br>

        <label>Username of student :</label>
        <input type="text" name="user" id="user"><br><br>
        <label>Password of student : </label>
        <input type="password" name="pass" id="pass"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
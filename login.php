<?php
include("connection.php")
?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $category = $_POST['category'];
    //echo("username is ".$username);

    $sql = "select * from $category where username='$user' and password='$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        if($category=='teacher'){
            header("Location:administrator.php");
        }
        else if($category=='student'){
            header("Location:welcome.php");
        }
    }
    else{
        echo("LOGIN UNSUCCESSFUL ");
        echo("wrong username or password");
    }
}
?>
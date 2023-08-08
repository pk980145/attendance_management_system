<?php
include("connection.php")
?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //echo("username is ".$username);

    $sql = "select * from login where username='$user' and password='$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    //alert("count is ".$count);
    //header("Location:welcome.php");
    if($count==1){
        header("Location:welcome.php");
    }
    else{
        echo("LOGIN UNSUCCESSFUL ");
        echo("wrong username or password");
    }
}
?>
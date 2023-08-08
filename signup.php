
<?php
   

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $category = $_POST['category'];

        include("connection.php");

        $sql="insert into $category (username,password) values('$user','$pass')";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo("Sign Up succesful");
        }
        else{
            echo("query unsuccessful due to error--->".mysqli_error($conn));
        }
    }

?>
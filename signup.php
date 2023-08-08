
<?php
   

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $servername="localhost";
        $username="root";
        $password="";
        $db_name="mylogin";
    
        $conn=new mysqli($servername,$username,$password,$db_name);
        if($conn ->connect_error){
            die("connection failed".$conn->connect_error);
        }
        else{echo "connection established";}

        $sql="insert into login values('$user','$pass')";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo("Sign Up succesful");
        }
        else{
            echo("query unsuccessful due to error--->".mysqli_error($conn));
        }
    }

?>
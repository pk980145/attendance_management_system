<?php
    include("connection.php");
    $operation=$_POST['operation'];
    $category = 'student';
    $user = $_POST['user'];
    $sql;
    switch($operation){
        case 'delete':
            $sql=" delete from student where username='$user'";
            break;
        
        case 'insert':
            $pass=$_POST['pass'];
            $sql="insert into student (username,password) values ('$user','$pass')";
            break;
        
        case 'update':
            $pass=$_POST['pass'];
            $sql="update student set password='$pass' where username='$user'";
            break;

        default:
            header("Location:administrator.php");
    }

    $result=mysqli_query($conn,$sql);
    if($result){
        echo("operation Successful !!!");
    }
    else{
        echo("error in performing operation ----->   ".mysqli_error($conn));
    }
?>
<?php
    $servername="localhost";
    $username= "root";
    $password="";
    $db_name = "mylogin";
    $conn = new mysqli($servername,$username,$password,$db_name,3306);

    if($conn ->connect_error){
        die("connection failed".$conn->connect_error);
    }
    else{echo "connection established";}
?>
<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="dynamicportfolio";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    }else{
        //echo "Connection Successfull";
    }
?>
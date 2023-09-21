<?php

//establish a connection with businessdp that we have created
$db_server = "127.0.0.1"; //you can give any name
$db_user = "root";
$db_pass = "";
$db_name = "businessdb"; //that we have created
$conn = "";

//mysqli_connect() - this is a build in function have 4 arguments returns an object. you can pass the above varibales to establish connection
// $conn = mysqli_connect($db_server,$bd_user,$db_pass,$db_name);

// if($conn){
//     echo "you are connected";
// }
//to handle mysqli_sql_exception in case of a bad connection

try{
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    if($conn){
         echo "you are connected";
    }
    }catch(mysqli_sql_exception){
        echo "could not connect. Try staring Mysql in Xampp! ";
    }
?>
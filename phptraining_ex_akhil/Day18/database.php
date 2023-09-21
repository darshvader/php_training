<?php 
$db_name = "mysql:host=localhost;dbname=world";
$username = "root";
// $password = "";

try{
    $conn = new PDO($db_name, $username);
    // echo "You are connected";
   

} catch(PDOException $e){
    $error_message = "Database Error:";
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();

}




?>
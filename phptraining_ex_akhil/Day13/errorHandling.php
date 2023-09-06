<?php
$error_message = "This is an error message!";
$log_file = "./my-errors.log";

error_log($error_message , 3 , $log_file);

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line =null
    ) {
    
    echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;
    exit;
    }
    
    error_reporting(E_ALL & ~E_WARNING);
    
    echo $x;
    
    // However, this code will show the custom error even though error_reprting is set to ignore the warning.
    
    error_reporting(E_ALL & ~E_WARNING);
    
    set_error_handler('errorHandler', E_ALL);
    
    echo $x;


?>
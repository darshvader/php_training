<?php
$error_message = "This is an error message!";
$log_file = "./my-errors.log";

error_log($error_message , 3 , $log_file);

?>
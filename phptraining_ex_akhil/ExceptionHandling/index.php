<?php

function divide($x, $y){
    if($y == 0){
        throw new Exception("Division by zero", 1);
    }
    return $x/$y;
}

try{
  echo divide(2,0);

} catch (Exception $e){
    $code = $e -> getCode();
    $msg = $e -> getMessage();
    $file = $e -> getFile();
    $line = $e -> getLine();
    echo "Exception thrown in $file on line $line: [Code: $code] $msg";
   echo "Unable to divide"; 
 } 
 
?>
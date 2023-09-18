<?php
$numberFirst = 10;
$numberSecound = 0;
$result = divideNumbers($numberFirst, $numberSecound);

function divideNumbers($numberFirst, $numberSecound){
    try{
        if($numberSecound == 0)
        throw new Exception("Division by Zero is not allowed.");

        
    $result = $numberFirst / $numberSecound;
    
    return $result;
}catch (Exception $eception){
    return "Error:" . $eception->getMessage();
}

}
if(is_numeric($result)){
    echo "Result of $numerFirst / $numberSecound";
}else{
    echo $result;
}



?>
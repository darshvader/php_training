<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <h2>Indexed Array</h2>
    <?php
    $cityname = array("Dharamshala","shimla","manali","kullu");
    array_push($cityname,"kangra");//add new value in array
    array_pop($cityname); //delete the last value
    array_shift($cityname);// shift the first value
    echo "<pre>";
    print_r($cityname);
    echo "</pre>";
    print_r($cityname[0]);
    print_r(count($cityname));
    ?>

    <h2>Associative array</h2>
    <?php
    $age =array("shyam"=>"50","ram"=>"40","krishna"=>"40");
    echo "<pre>";
    print_r($age);
    print_r($age["krishna"]);
    
    ?>
</body>
</html>
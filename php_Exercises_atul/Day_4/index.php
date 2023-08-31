<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = "hello Dharamshala";
    echo var_dump($x)."<br>";

    $y =50;
    echo var_dump($y)."<br>";

    $z =50.56;
    echo var_dump($z)."<br>";

    $name =array("php","css","html","python");
    echo "<pre>";
    var_dump($name); 
    echo "</pre>"."<br>";

    $fname ="himachal pradesh";
    echo strlen($fname)."<br>";

    $result ="Shimla is the capital of himachal pradesh";
    echo str_replace("Shimla","Dharamshala","Shimla is the capital of himachal pradesh")."<br>";
    ?>
    <h2>Boolean</h2>
    <?php
    $number = 98.88;
    var_dump(is_integer($number));

    ?>
    <h2>Null Data types</h2>
    <?php
    $ab = 50;
    $ab = null;
    echo $ab;
    ?>
</body>
</html>
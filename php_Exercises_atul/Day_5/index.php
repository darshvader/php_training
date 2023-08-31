<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Min and Max function</h1>
    <?php
    $arr =array(40,50,-30,12,36);
    echo max($arr)."<br>";
    echo min($arr)."<br>";
    ?>
   
    <h1>Sqrt</h1>
    <?php
    $root =81;
    echo sqrt($root);
    ?>

    <h1>constant</h1>
    <?php
    define("city","Dharamshala");
    echo city;
    ?>
     
    <h1>Operators</h1>
    <?php
    define("x",70);
    define("y",50);
    define("Difference",x-y);
    echo "The value of x=" .x." and the value of y =".y."and the difference is ". Difference;
    ?>



</body>
</html>
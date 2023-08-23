<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Explore Data Types</h1>
    <?php
    $italianDish = "Pizza";
    var_dump($italianDish);
    echo $isString = is_string($italianDish) . "<br>"; //here using is_string method give output true/false if it is true then gives 1 else nothing
    
    //integer
    $val = 21.07;
    var_dump($val);

    $val2 = 2998;
    var_dump($val2);

    ?>
    <h1>Boolean</h1>
    <?php
    $num1 = 10;
    $num2 = 5;

    $test1 = $num1 > $num2;
    $test2 = $num1 < $num2;

    if ($test1) {
        echo "$num1 is greater than $num2.";
    } else {
        echo "$num1 is not greater than $num2.";
    }
    ?>
  <h3>Null Data Type</h3>
    <?php
    $name =
    var_dump($name); //here if we undecclare the value then it's data type is NULL
    ?>


</body>

</html>
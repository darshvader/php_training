<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loops</h1>
    <h2>While loops</h2>
    <?php
    $n = 1;
    while($n <= 5 ){
       echo "The value of n is:" .$n ."<br>";
        $n++;
    }
    ?>

    <?php
    $y =100;
    while($y <= 1000){
        echo "the value of y is:" .$y ."<br>";
        $y+= 100;
    }
    ?>

    <h2>Do While loop</h2>
    <?php
    $m =10;
    do{
        echo "The value of m is" .$m ."<br>";
      $m+= 10;
    }
      while($m <=100);
    ?>

    <h2>For loop</h2>
    <?php
    for ($z = 15; $z <= 30; $z+=5){
        echo "The number is" .$z ."<br>";
    }
    ?>

    <h2>For each loop</h2>
    <?php
    $arr = array("red","blue","green","orange");
    foreach($arr as $val){
        echo "The color of arr is " .$val. "<br>";
    }
    ?>
</body>
</html>
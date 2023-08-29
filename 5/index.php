<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of contant</title>
</head>
<body>
<h2>Use of Constant</h2>
   <?php
   define("company","Fanatic Coders"); //this syntax is used to define constant
   echo company;
   ?>

<h2>Operators</h2>
   <?php 
   define("x",70);
   define("y",40);
   define("total",x+y);
   echo "The value of x = ".x ." and y = " . y . " is ". total;
   ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    
    <form action="Function.php" method="post">
        <label for="num1">Enter first number: </label>
        <input type="number" name="num1"><br><br>
        
        <label for="num2">Enter second number: </label>
        <input type="number" name="num2"><br><br>
        <input type="submit" value="calculate">
    </form>
  
   
</body>
</html>

<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $calculate = $num1 + $num2;

    echo "this is the addition $calculate";
    
    ?>
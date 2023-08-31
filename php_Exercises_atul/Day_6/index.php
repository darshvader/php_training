<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditional Statements</h1>

    <h2>If Statement</h2>
    <?php
      $x =50;
      if($x =50){
        echo "Good morning";
      }
      ?>

      <h2>If else statement</h2>
      <?php
      $x =50;
      $y =90;
      if ($x ==50 || $y ==40){
        echo "bad day";
      }
      else{
        echo "Good day";
      };
      ?>

      <h2>If else statement</h2>
      <?php
      $x =50;
      $y =90;
      if ($x ==50 && $y ==40){
        echo "bad day";
      }
      else{
        echo "Good day";
      };
      ?>

      <h2>If elseif statement</h2>
      <?php
      $n =100;
      $m = 150;
      if ($n == 100 && $m ==110){
        echo "good marks";
      }
      elseif($n ==20 && $m ==130){
        echo "very good marks";
      }
      else {
        echo "bad marks";
      }
      ?>

      <h2>Switch statement</h2>
      <?php
      $name = "amit";
      switch($name){
      case "Atul sharma":
      echo "my name is " .$name;
      break;
      case "amit":
        echo "your name is " .$name;
        break;
      }
        ?>   
</body>
</html>
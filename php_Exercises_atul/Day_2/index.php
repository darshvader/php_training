<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Introduction to function</h1>
<?php
     function firstname(){
      $text = "my firstname is atul";
      $text .= " sharma";
      return $text;
   }
  echo firstname()."<br>";

  function lastname(){
    return "My last name is sharma";
   }
    echo "<h2>" .lastname()."</h2>";
?>   
</body>
</html>
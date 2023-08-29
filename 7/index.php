<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <h2>For Loop</h2>
    <?php
    $tor = 100;
    for($i=1;$i<=$tor;$i++){
    echo $i ."<br>";
    };
    ?>

    <h2>While Loop</h2>
    <?php
    $i = 1;
    while($i <= 100) {
        echo $i . "<br>";
        $i++;
    }
    ?>
  <h2>Do while</h2>
    <?php
    $i = 1;
    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 100);
    ?>
</body>
</html>
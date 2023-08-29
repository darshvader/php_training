<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Indexed Arrays</h2>
    <?php
    $fightMode = array("Boxing","Kung Fu","judo","MMA","Muri Thai");
    echo $fightMode[1]."<br>";
    echo count($fightMode);   //this is used to get the array length
    ?>
    <h2>Associative Array</h2>
    <?php
    $role = array("Chillian Murphy"=>"Main charater in Oppenheimer","Christopher Nolan"=>"Dictator","Matt Damon"=>"Is Leslie Groves","Robert Downey Jr"=>"Is Lewis Strauss");
    echo $role["Chillian Murphy"]
    ?>
</body>
</html>
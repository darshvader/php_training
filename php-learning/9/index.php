<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Indexed Arrays</h2>
    <?php
    $games = array("Cricket","Football","NBA","Bseball","Kabbadi");
    echo $games[1]."<br>";
    echo count($games);   //this is used to get the array length
    ?>
    <h2>Associative Array</h2>
    <?php
    $designations = array("Akhil"=>"Prime Minister of Palampur","Anshul"=>"Dictator","Priyanka"=>"President of Morinda","Parija"=>"UI/UX Designer");
    echo $designations["Akhil"]
    ?>
</body>
</html>
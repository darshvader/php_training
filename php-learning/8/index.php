<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Area of circle</h1>

    <?php
    function areaCircle()
    {
        print("Formula for calculating Area of Circle is 2πr") . "<br>";
        $piVal = pi();
        $radius = 20;

        echo "The value is π is " . $piVal . "<br>";
        echo "The value is radius is " . $radius . "<br>";
        echo "2 x " . $piVal ." x ". $radius . "<br>";

        $areaOfCircle = 2 * $piVal * $radius * $radius;

        $rounderArea = round($areaOfCircle,2);

        echo "Area :" . $rounderArea . " cm2";
    }
    echo areaCircle();
    ?>
</body>

</html>
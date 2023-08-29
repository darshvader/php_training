<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Area of Circle</h1>

    <?php
    function calculateCircleArea($circleRadius)
    {
        echo "Formula for calculating the Area of a Circle is πr²" . "<br>";
        $piValue = pi();

        echo "The value of π is " . $piValue . "<br>";
        echo "The value of radius is " . $circleRadius . "<br>";

        $areaOfCircle = $piValue * $circleRadius * $circleRadius;

        $roundedArea = round($areaOfCircle, 2);

        echo "Area: " . $roundedArea . " cm²";
    }

    $radiusValue = 20;
    calculateCircleArea($radiusValue);
    ?>
</body>

</html>

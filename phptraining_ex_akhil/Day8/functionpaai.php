<?php 
function calculateCircleArea($radius){
  $pi = 3.14159;
  $area = $pi * pow($radius , 2);
  return $area;
}


$radius = 5; 
$area = calculateCircleArea($radius);


echo "Radius: $radius<br>";
echo "Area of the circle: $area";
?>
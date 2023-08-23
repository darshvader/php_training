
<?php 
echo "<h1>For Loop</h1>";

for($x =1; $x<=100; $x++){
    echo "the number is $x <br>";
}

echo "<h1>While Loop</h1>";

$y = 1;
while($y<=100){
    echo "The number is $y <br>";
    $y++;
}

echo "<h1>Do While Loop</h1>";
$z = 1;

do{
    echo "the number is $z <br>";
    $z++;
} while ($z <= 100);


echo "<h1>Foreach Loop</h1>";
$number = range(1, 100);

foreach($number as $numbers){
    echo "$numbers <br>";
}

?>
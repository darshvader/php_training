<?php
$colors = array("red", "green", "blue","purple"); 
echo "my fav color is  $colors[2]";
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// associative array and foreach loop
<?php
$food = array("Pizza"=>"350", "Cake"=>"780", "Shakes"=>"90");
foreach($food as $food => $key_value) {
  echo  $food . " = " . $key_value;
  echo "<br>";
}
?>
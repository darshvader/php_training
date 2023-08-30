<?php  
for ($x = 1; $x <= 10; $x++) {
  echo "$x <br>";
}
?> 

<?php  
$x = 1;
while($x <= 10) {
  echo "$x <br>";
  $x++;
}
?> 

<?php 
$x = 1;
do {
  echo "$x <br>";
  $x++;
} while ($x <= 10);
?>

<!-- continue -->
<?php  
for ($x = 1; $x <=10; $x++) {
  if ($x == 5) {
    continue;
  }
  echo "$x <br>";
}
?>

<!-- break -->
<?php  
for ($x = 1; $x <=10; $x++) {
  if ($x == 6) {
    break;
  }
  echo "$x <br>";
}
?>
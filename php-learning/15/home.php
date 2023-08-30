<?php
session_start();
?>
<?php
echo "Username : ". $_SESSION["username"] . "<br>";
echo "Password : " .  $_SESSION["password"]
?>
<?php 
include("database.php");

$sql = "INSERT INTO users (user, password) VALUES ('Harry', 'FanaticCoders1')";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>

<?php
// create tables to hold data in our database.


?>
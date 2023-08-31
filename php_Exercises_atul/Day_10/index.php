<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Handling by get method whose result shown in url</h1>
    <form action ="index.php" method ="get">
        <label for ="Firstname">Firstname: </label>
        <input type ="text" name ="fname" class="tfc_fname" placeholder="Firstname"><br>
        <label for ="email">E-mail: </label>
        <input type ="text" name ="lname" class="tfc_lname" placeholder ="email"><br>
        <input type ="submit" value = "login">
    </form>
    <?php
    echo "firstname:" .$_GET["fname"]."<br>";
    echo "email:" .$_GET["lname"];
    ?>

    <h1>Form Handling by post method</h1>
    <form action ="index.php" method ="Post">
        <label for ="Firstname">Firstname: </label>
        <input type ="text" name ="fname" class="tfc_fname" placeholder="Firstname"><br>
        <label for ="password">Password: </label>
        <input type ="password" name ="pwd" class="tfc_pwd" placeholder ="Password"><br>
        <input type ="submit" value = "login">
    </form>
    <?php
    echo "firstname:" .$_POST["fname"]."<br>";
    echo "password:" .$_POST["pwd"];
    ?>

</body>
</html>
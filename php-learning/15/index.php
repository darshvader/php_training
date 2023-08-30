<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        margin-bottom: 1rem;
        padding: 0.75rem;
    }
</style>
<body>


    <form action="index.php" method="post">

    <label for="username">Username : </label>
    <input id="username" type="text" name="username" placeholder="Enter your full name"> <br>


    <label for="password">Password : </label>
    <input id="password" type="password" name="password" placeholder="Enter your password">
    <br>
    <input type="submit" value="log in">
    </form>

    <a href="home.php">Take me to the home page</a>
    <?php 
    // echo $_POST["username"]."<br>";
    // echo $_POST["password"];
    session_start();
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] =  $_POST["password"];
    ?>
</body>
</html>
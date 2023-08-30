<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="sessionExercise.php" method="post">
    <label>username</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="password" name="password"> <br>

    <input type="submit" value="login">
    <a href="sessionResult.php">This link goes to the Result page</a>
    </form>
    <?php 
    session_start();
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
   
   ?>
</body>
</html>
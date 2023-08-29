<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    input{
        margin: 1rem 0;
        padding: 0.5rem 1rem;
    }
</style>
<body>
    <h1>Get and Post Method</h1>
    <form action="index.php" method="post">
    <label for="firstname">First Name : </label>
    <input type="text" placeholder="Enter Your Name" name="firstname">

    <label for="lastname">Last Name : </label>
    <input type="text" placeholder="Enter Your Last Name" name="lastname"> <br>

    <label for="email">E-mail : </label>
    <input type="text" placeholder="Enter your e-mail" name="email"> <br>

    <label for="password">Password</label>
    <input type="password" placeholder="Enter your password" name="password">

    <input type="submit" value="Submit">
    </form>

    <?php
    echo "Name : ". $_POST["firstname"] ." ". $_POST["lastname"] ."<br>";
    echo "E-Mail : ". $_POST["email"] . "<br>";
    echo "Password : ". $_POST["password"];
    ?>
</body>
</html>
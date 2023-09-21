<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO PHP</title>
</head>
<body>
    
<main>
    <section>
        <h2>Select Data / Read Data</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="city">City Name:</label>
            <input type="text" name="city" id="city" required>
            <button>Submit</button>
        </form>
    </section>
    <?php 
    require("database.php");
    ?>
    <?php 
     $city= filter_input(INPUT_GET , "city", FILTER_UNSAFE_RAW);
     if($city){
        $query = 'SELECT * FROM city WHERE Name = :city ORDER BY Population DESC';
        $statement = $conn->prepare($query);
        $statement->bindValue(':city', $city);
        $statement->execute();
        $result = $statement->fetchAll();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        $statement->closeCursor();
    }
    ?>
</main>
</body>
</html>

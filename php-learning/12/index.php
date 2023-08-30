<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date and Time function</h1>
    <?php
    //Date and Time functions
    //time()- prints a large integer
    //no. of seconds since 1970 Jan
    //timestamp
    echo time() . "<br>";

    //we can also do this by taking variable
    $currentTime = time();
    echo $currentTime + 5 *24 *60 * 60 . "<br>";
    ?>
    <h1>Date Function</h1>
    <?php 
     //date() - 2 parameters
    //date(format,timestamp);
    echo date("m/d/Y g:ia") . "<br>";
    //here m for month d for days Y for year 

    echo date_default_timezone_get() ."<br>";
    date_default_timezone_set("Asia/Kolkata");
    echo date("m/d/Y g:ia")
    ?>
  <h1>mktime</h1>
    <?php 
    //mktime  - returns a timestamp
    echo mktime(0,0,0,7,3,null) ."<br>";
    echo date("m/d/Y g:ia", mktime(0,0,0,7,3,null) );
    ?>
   <h1>String To time function</h1>
    <?php 
    //strtotime() -string to time function
    echo strtotime("2023-01-15 08:00:00") . "<br>";
    echo date("m/d/Y g:ia", strtotime("tomorrow"));
    ?>
  <h1>date parse function</h1>
    <?php 
     $date =  date("m/d/Y g:ia", strtotime("tomorrow"));
     echo date_parse($date);
    ?>
</body>
</html>
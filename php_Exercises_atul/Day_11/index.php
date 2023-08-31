<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date and time function</h1>
    <?php
    echo time()."<br>";
    $time = time();
    echo $time ."<br>";
    echo $time -3 *24*60*60 ."<br>";

    // Date function

    echo date("y")."<br>";
    echo date("m/d/y g:ia")."<br>";
    echo date_default_timezone_get();
    echo date_default_timezone_set("asia/kolkata")."<br>";
    echo date("m/d/y g:ia")."<br>";

    //mktime function
    //echo mktime(hr,min,sec,month,day,year);
    echo mktime(0,0,0,6,3,null)."<br>";
    echo date("m/d/y g:ia",mktime(0,0,0,6,3,null))."<br>";

    echo strtotime('2023-08-12 08:02:05')."<br>";

    //date parse

    $timedate =  date("m/d/Y g:ia", strtotime("tomorrow"));
    echo "<pre";
     print_r(date_parse($timedate));
     echo "</pre>"

    ?>
</body>
</html>
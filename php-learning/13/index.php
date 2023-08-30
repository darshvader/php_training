<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File handling</h1>

    <?php
    // echo readfile("some_file.txt");
    
    // fopen("name of the file","r")
    
    $myfile = fopen("some_file.txt", "r") or die("unable to open the file");
    echo $myfile . "<br>";
    ?>

    <?php
    // fread() - reads from an open file
    
    // -2 parameters 1: specifies the name of the file/variable 2: max no of bytes to be read
    
    echo fread($myfile, filesize("some_file.txt")) . "<br>";

    ?>

    <?php
    //  fclose() - is a function closes an previously openend file
    // takes only one paramter i.e name of the file that you want to close/variable
    fclose($myfile) //this is need to be done bcz we have openend the file and also needs to close
    ?>

    <?php 
    
    //fgets()- is used to read single line in a text file
    $myfile2 = fopen("acronyms.txt", "r") or die("unable to open the file");
    echo fgets($myfile2) . "<br>";
    fclose($myfile2);

    ?>
    <h1>feof method</h1>

    <?php
    
     // feof() end of the file 
    //  -returns boolean
                                
    $myfile3 = fopen("acronyms.txt", "r") or die("unable to open the file");
    while(!feof($myfile3)){
        echo fgets($myfile3) . "<br>";
    }
    fclose($myfile3);
    ?>

    <h3>How to create file in php</h3>
    <?php

     $myfile4 = fopen("namefile.txt","w") or die("unable to open file"); //the w parameter overwrite the previous content

     $txt = "Fanatic\n";
     fwrite($myfile4,$txt); //used to write to a file
     $txt = "coders";
     fwrite($myfile4,$txt);
     fclose($myfile4);
    ?>

<h3>php append text</h3>
<?php 
$myfile5 = fopen("namefile.txt","a") or die("unable to open file"); //this a parameter is used to append the txt below not overwrite the previous content 

$txt = "Fanatic\n";
fwrite($myfile5,$txt); //used to write to a file
$txt = "coders";
fwrite($myfile5,$txt);
fclose($myfile5);

?>
</body>

</html>
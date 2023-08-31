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
 echo readfile("newfile.txt") ."<br>";
     ?>
     <?php
 $arr = fopen("newfile.txt","r") or die("unable to open");
  echo fread($arr,filesize("newfile.txt"))."<br>";
    fclose($arr);
      ?>
      <?php
//    fgets function
   $get = fopen("file.txt","r") or die("unable to open");
   echo fgets($get)."<br>";
   fclose($get);
   ?>
   <?php
//    feof function
   $get = fopen("file.txt","r") or die("unable to open");
   while(!feof($get)){
    echo fgets($get)."<br>";
   }
   fclose($get);
   ?>
     <!-- create a file -->
   <?php
   $createfile = fopen("somefile.txt","w") or die ("unable to open");
   $name ="atul\n";
   fwrite($createfile,$name);
   $name ="Sharma\n";
   fwrite($createfile,$name);
   fclose($createfile);
  ?>
   <!-- //php append text -->
   <?php 
   $createfile = fopen("somefile.txt","a") or die("unable to open file"); //this a parameter is used to append the txt below not overwrite the previous content 
   $name = "Rohit\n";
   fwrite($createfile,$name); //used to write to a file
   $txt = "Sharma";
   fwrite($createfile,$name);
   fclose($createfile);

?>
</body>
</html>
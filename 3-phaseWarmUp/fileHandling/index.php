<?php
$myFile = "data.txt";

if (file_exists($myFile)) {
    $content = file_get_contents($myFile);
    echo "<pre>$content</pre>";
} else {
    echo "The file '$myFile' does not exist.";
}
?>

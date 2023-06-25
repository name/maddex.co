<?php
$file = fopen("pgp.txt", "r");

while (!feof($file)) {
    echo fgets($file) . "<br />";
}

fclose($file);
?>
<?php

// get the q parameter from URL

$r = $_REQUEST["r"];

$myfile = fopen("data.txt", "a+") or die("Unable to open file!");
fwrite($myfile,','.$r);
fclose($myfile);
?>
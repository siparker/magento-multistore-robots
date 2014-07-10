<?php

// Find VirtualHost name and define as variable

$url = $_SERVER['SERVER_NAME'];

// Define multi-store websites url

$website1 = "website1url";
$website2 = "website2url"; 
$website3 = "website3url"; 
$website4 = "website4url";

// Test for requested website then display relevant robots.txt content

if (strpos($url,$website1) !== false) {
    include 'rbts-depend/website1.php';
}

if (strpos($url,$website2) !== false) {
    include 'rbts-depend/website2.php';
}

if (strpos($url,$website3) !== false) {
    include 'rbts-depend/website3.php';
}

if (strpos($url,$website4) !== false) {
    include 'rbts-depend/website4.php';
}



?>

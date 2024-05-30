<?php
include("config.php");
include("connect.php");
$db = new connect($dbURL);

$insert = $db->insert("hayvanlar", [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "rating"    => $_POST['rating']
]);

echo "Kaydedildi";
header("Location: index.php");
exit; 

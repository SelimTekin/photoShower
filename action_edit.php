<?php
include("config.php");
include("connect.php");

$db = new connect($dbURL);
$update = $db->update("hayvanlar", $_POST['id'], [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "rating"    => $_POST['rating']
]);

header("Location: index.php");
exit; 
?>

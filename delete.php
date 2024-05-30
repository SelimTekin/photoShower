<?php
include("config.php");
include("connect.php");

$db = new connect($dbURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("hayvanlar", $id);
   echo "Silindi";

   header("Location: index.php");
   exit; 
}

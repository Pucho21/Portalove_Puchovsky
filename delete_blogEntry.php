<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$db->deleteBlogEntry($_GET['id']);

header('Location: blog-details.php');
?>


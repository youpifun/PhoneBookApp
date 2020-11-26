<?php 
require 'db.php'; 
$db = new Db(); 
$result = $db->deleteContact($_POST['id']);
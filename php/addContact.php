<?php 
require 'db.php'; 
$db = new Db(); 
if(isset($_POST['addContact'])) { 
	$response = $db->addContact($_POST['name'], $_POST['phoneNumber']); 
	header("Location: /index.php"); 
}
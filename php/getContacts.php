<?php 
require 'db.php'; 
$db = new Db(); 
$result = $db->getContacts();
echo $result; 
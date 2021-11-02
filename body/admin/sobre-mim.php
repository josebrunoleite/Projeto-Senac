<?php 

include_once('../config/connect.php');

$stmt = $conn->prepare("SELECT * FROM about-me ORDER BY id");
$stmt->execute();



?>
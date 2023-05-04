<?php

// (B) CONNECT TO DATABASE
include"connection.php";

$stmt = $db->prepare("SELECT * FROM `posting` WHERE `name` LIKE ? OR `category` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results); }
?>
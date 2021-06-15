<?php
require_once '../config/config.php';

$query = "SELECT departing FROM `flight`";
$sql = $db->prepare($query);
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_COLUMN);
echo json_encode(array("response" => $data));


<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = $db->prepare("SELECT id ,type, price, class from flight ;");
    $sql->execute();
    echo json_encode(array($sql->fetchAll()));
}
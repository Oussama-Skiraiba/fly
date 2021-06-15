<?php

require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = $db->prepare("SELECT * FROM flight WHERE id = ?");
    $sql->bindValue(1, $id);
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(array("response" => $data));
}
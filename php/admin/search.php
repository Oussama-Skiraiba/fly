<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = $db->prepare("SELECT * FROM flight WHERE leaving_from LIKE ?");
    $sql->bindValue(1, trim($_GET["search"]) . '%');
    $sql->execute();
    $Data = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($Data);
}

/*
    $leaving_from = $_POST['leaving_from'];
*/
<?php
require_once '../config/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $sql = "SELECT seats FROM flight WHERE id = ?;";
    $stm = $db->prepare($sql);
    $stm->bindValue(1, $id);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    $seats = $result['seats'];
    if ($seats <= 0) {
        echo json_encode(['reserve' => "nooooo"]);
    } else {
        $id = 3;
        $remainSeats = $seats - 1;
        $sql = "UPDATE flight SET seats= $remainSeats;";
        $stm = $db->prepare($sql);
        $stm->execute();
        echo json_encode(['reserve' => "ok"]);

    }
}

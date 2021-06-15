<?php
require_once 'config/config.php';

function selectData ($insert="SELECT * FROM flight limit 100") {
    global $db;
    $sql = $db->prepare($insert);
    $sql->execute();
    $Data = $sql->fetchAll(PDO::FETCH_ASSOC);
    return exit(json_encode($Data));
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["checkData"] === "all") {
    selectData();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["checkData"] === "check") {
    $leveing = $_POST["Departure"];
    $goto = $_POST["goto"];
    selectData("SELECT * FROM `flight` WHERE leaving_from ='$leveing'  AND going_to = '$goto' ");
}

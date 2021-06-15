<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $leaving_from = $_POST['leaving_from'];
    $type = $_POST['type'];
    $going_to = $_POST['going_to'];
    $returning = $_POST['returning'];
    $price = $_POST['price'];
    $departing = $_POST['departing'];
    $class = $_POST['class'];
    $seats = $_POST['seats'];


    $sql = $db->prepare("UPDATE flight SET leaving_from = ?, going_to = ?, type = ?, departing = ?, _returning = ?, class = ?, seats = ?, price = ?  WHERE id = ?;");
    $sql->bindValue(1, $leaving_from);
    $sql->bindValue(2, $going_to);
    $sql->bindValue(3, $type);
    $sql->bindValue(4, $departing);
    $sql->bindValue(5, $returning);
    $sql->bindValue(6, $class);
    $sql->bindValue(7, $seats);
    $sql->bindValue(8, $price);
    $sql->bindValue(9, $id);

    $sql->execute();
    // $Data = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($Data);
}
// $sql->bindValue(9, $id);





$sql->bindValue(1, $leaving_from);
$sql->bindValue(2, $going_to);
$sql->bindValue(3, $type);
$sql->bindValue(4, $departing);
$sql->bindValue(5, $returning);
$sql->bindValue(6, $class);
$sql->bindValue(7, $seats);
$sql->bindValue(8, $price);

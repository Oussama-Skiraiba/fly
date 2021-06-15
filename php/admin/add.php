<?php
require_once '../config/config.php';
// include("../../app/phpScripts/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $leaving_from = $_POST['leaving_from'];
    $type = $_POST['type'];
    $going_to = $_POST['going_to'];
    $returning = $_POST['returning'];
    $price = $_POST['price'];
    $departing = $_POST['departing'];
    $class = $_POST['class'];
    $seats = $_POST['seats'];

    $query = "INSERT INTO flight(leaving_from, going_to, type, departing, _returning, class, seats, price) VALUES (?,?,?,?,?,?,?,?)";
    $sql = $db->prepare($query);
    $sql->bindValue(1, $leaving_from);
    $sql->bindValue(2, $going_to);
    $sql->bindValue(3, $type);
    $sql->bindValue(4, $departing);
    $sql->bindValue(5, $returning);
    $sql->bindValue(6, $class);
    $sql->bindValue(7, $seats);
    $sql->bindValue(8, $price);
    $sql->execute();
}


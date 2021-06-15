<?php
session_start();
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passport = $_POST['passport'];
    $nationality = $_POST['nationality'];
    $country = $_POST['country'];
    $dateP = $_POST['dateP'];
    $userID = $_SESSION["id"];
    $query = "INSERT INTO passport(pp_number, pp_nationality, pp_date_of_issue, pp_date_of_expiry, user_id) VALUES (? ,? ,? ,?, ?)";
    $sql = $db->prepare($query);
    $sql->bindValue(1, $passport);
    $sql->bindValue(2, $nationality);
    $sql->bindValue(3, $dateP);
    $sql->bindValue(4, $country);
    $sql->bindValue(5, $userID);
    $sql->execute();
}
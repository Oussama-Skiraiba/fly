<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $stmt = $db->prepare("DELETE from flight WHERE  id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
}

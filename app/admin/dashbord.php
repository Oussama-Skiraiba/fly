<?php 
    session_start();
    if(!isset($_SESSION['id_admin'])){
        header("Location: ../SingIn.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admine | DASHBOARD</title>
    <link rel="stylesheet" href="../../css/dashbored.css">

</head>

<body>

    <!-- headerAndMainAdmin.php -->
    <?php include "../include/headerAndMainAdmin.php"; ?>



    <?php include "../include/fotterHomePageAdmin.php"; ?>

    <div class="chart">
        <canvas id="myChart"></canvas>
    </div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script src="../../js/dashbord.js"></script>

</html>
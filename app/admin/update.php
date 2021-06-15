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
    <link rel="stylesheet" href="../../css/add.css">
    <title>Admine | UPDATE</title>
</head>

<body>
    <?php include "../include/headerAndMainAdmin.php"; ?>
    <!--  -->
    <!--  -->
    <?php include "../include/fotterHomePageAdmin.php"; ?>

    <div class="container">
        <h2>Up date</h2>
        <div class="containerCart">
        <input type="hidden" name="_id" value="">
            <div class="input">
                <select id="type">
                    <option value="Roundtrip">Round trip</option>
                    <option value="One way">One-way</option>
                </select>
                <input type="text" placeholder="Leaving from" id="Leaving_from">
                <input type="text" placeholder="Going to" id="Going_to">
                <input type="number" placeholder="price" id="price">
            </div>

            <div class="input">
                <input type="date" name="Departing" id="Departing">
                <input type="date" name="Returning" id="Returning">
                <select  id="class">
                    <option value="Economy">Economy</option>
                    <option value="Business">Business class</option>
                    <option value="First">First class</option>
                </select>
                <input type="number" placeholder="seats" id="seats">
            
            </div> 
        </div>
    
        <button class="send" id="send">Up date</button>

    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>   
<script src="../../js/errore.js"></script>
<script src="../../js/update.js"></script>
</html>
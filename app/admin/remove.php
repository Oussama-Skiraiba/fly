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
    <link rel="stylesheet" href="../../css/remove.css">
    <title>Admine | REMOVE</title>
</head>

<body>

    <?php include "../include/headerAndMainAdmin.php"; ?>

    <?php include "../include/fotterHomePageAdmin.php"; ?>


    <div class="remove">
        <h2>remove</h2>
        <hr>
        <div class="content-remove">
            <div class="box-pack">
                <div class="head">
                    <div class="name">
                        id
                    </div>

                    <div class="des">
                        tyoe
                    </div>

                    <div class="price">
                        Price
                    </div>

                    <div class="icon">
                        Option
                        <!-- <img src="icon/rubbish-bin.png" alt=""> -->
                    </div>

                </div>

                <div class="body" id="body">

                </div>

            </div>
        </div>
    </div>



</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script src="../../js/errore.js"></script> -->
<script src="../../js/remove.js"></script>

</html>
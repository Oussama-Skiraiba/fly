<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/step3.css">
</head>

<body>
    <?php include "../include/GlobaleUsr.php"; ?>

    <div class="stepBorder">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </svg></span>
        <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </svg></span>
        <span class="st">3</span>
    </div>

    <div class="catrContainer">
        <h2>Payment</h2>

        <div class="cartGrid">
            <div class="nameCard">
                <span>Name Card</span>
                <input type="text">
            </div>
            <div class="numberCard">
                <span>Curd number</span>
                <input type="text">
            </div>
        </div>
        <div class="dataCart">
            <span>Expiration data</span>
            <input type="number" placeholder="month">
            <input type="number" placeholder="year">
            <input type="number" placeholder="CVC">
        </div>
    </div>
        <button class="next">Next</button>

    <!-- GlobaleUsrFooter -->
    <!--  <button class="next">Next</button> -->
    <?php include "../include/GlobaleUsrFooter.php"; ?>

</body>
<script src="../../js/step/menu.js"></script>

</html>
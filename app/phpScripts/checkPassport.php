<?php 
    include("connection.php");

    if(isset($_GET['userid'])){
            $queryPass = "select * from passport where user_id = " . $_GET['userid'];
            $resultPass = mysqli_query($connection, $queryPass);
            $resultPassCheck = mysqli_num_rows($resultPass);


            if($resultPassCheck > 0){
                //user has a passport


                // here we go to payment
               header('Location: http://localhost/progectOfppt-main/app/paymentPage.php?flightid='. $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']);

            }else{
                header("Location: http://localhost/progectOfppt-main/app/usr/step2.php?flightid=". $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']);
            }
    }else{
        header("Location: http://localhost/progectOfppt-main/app/HommePage.php?error=invalidPage");
        exit();
    }
?>
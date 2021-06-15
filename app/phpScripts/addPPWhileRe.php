<?php 


 
session_start();
include 'connection.php';
if(isset($_POST["addpp"])){
    $passN = mysqli_real_escape_string($connection, $_POST['passN']);
    $passNati = mysqli_real_escape_string($connection, $_POST['passNati']);
    $passSat = mysqli_real_escape_string($connection, $_POST['passSat']);
    $passEnd = mysqli_real_escape_string($connection, $_POST['passEnd']);
    if(empty($passN) || empty($passNati) || empty($passSat) || empty($passEnd)){
        header("Location: http://localhost/progectOfppt-main/app/usr/step2.php?flightid=". $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']. "?error=empty");
        exit();
    }else{
        if(!preg_match('/^[0-9]{9,11}$/', $passN)){
            header("Location: http://localhost/progectOfppt-main/app/usr/step2.php?flightid=". $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']. "?error=invalidPassportNu");
            exit();
        }else{
            if(!preg_match('/^[a-z]{1,20}$/', $passNati)){
                header("Location: http://localhost/progectOfppt-main/app/usr/step2.php?flightid=". $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']. "?error=invalidPassportNal");
                exit();
            }else{
                $user_id = $_SESSION['id'];
                $query = "insert into passport(pp_number, pp_nationality, pp_date_of_issue, pp_date_of_expiry, user_id) 
                values('$passN', '$passNati', '$passSat', '$passEnd', '$user_id');";
                // $fdfv = "INSERT INTO `passport`(`pp_number`, `pp_nationality`, `pp_date_of_issue`, `pp_date_of_expiry`, `user_id`) VALUES ('867980787','çascacsas','1999-06-12','1999-06-12',5)"
                mysqli_query($connection, $query);


                /// here we go to paymet
                header("Location: http://localhost/progectOfppt-main/app/paymentPage.php?susscc=yes?flightid=". $_GET['flightid'] . "&price=" . $_GET['price'] ."&userid=" . $_GET['userid']);
            }
        }
    }
}else{
    header("Location: ../HommePage.php");
}






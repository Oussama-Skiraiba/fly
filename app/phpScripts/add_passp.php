<?php 


 
session_start();
include 'connection.php';
if(isset($_POST["add_pp_btn"])){
    $passN = mysqli_real_escape_string($connection, $_POST['passN']);
    $passNati = mysqli_real_escape_string($connection, $_POST['passNati']);
    $passSat = mysqli_real_escape_string($connection, $_POST['passSat']);
    $passEnd = mysqli_real_escape_string($connection, $_POST['passEnd']);
    if(empty($passN) || empty($passNati) || empty($passSat) || empty($passEnd)){
        header("Location: ../profile_setting.php?error=empty");
        exit();
    }else{
        if(!preg_match('/^[0-9]{9,11}$/', $passN)){
            header("Location: ../profile_setting.php?error=invalidPassportNu");
            exit();
        }else{
            if(!preg_match('/^[a-z]{1,20}$/', $passNati)){
                header("Location: ../profile_setting.php?error=invalidPassportNal");
                exit();
            }else{
                $user_id = $_SESSION['id'];
                $query = "insert into passport(pp_number, pp_nationality, pp_date_of_issue, pp_date_of_expiry, user_id) 
                values('$passN', '$passNati', '$passSat', '$passEnd', '$user_id');";
                // $fdfv = "INSERT INTO `passport`(`pp_number`, `pp_nationality`, `pp_date_of_issue`, `pp_date_of_expiry`, `user_id`) VALUES ('867980787','çascacsas','1999-06-12','1999-06-12',5)"
                mysqli_query($connection, $query);
                header('Location: ../profile.php?sussecc');
            }
        }
    }
}else{
    header("Location: ../HommePage.php");
}






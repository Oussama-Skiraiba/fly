<?php  
session_start();
include 'connection.php';
if(isset($_POST["update_pp_btn"])){
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
                $query = "update passport set pp_number='$passN', pp_nationality='$passNati', pp_date_of_issue='$passSat', pp_date_of_expiry='$passEnd' where user_id=" . $_SESSION['id'];
                mysqli_query($connection, $query);
                header('Location: ../profile.php?sussecc');
            }
        }
    }
}else{
    header("Location: ../HommePage.php");
}



if(isset($_POST['add_pp_btn'])){
    echo 'ájsckascas';
}




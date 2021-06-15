<?php 
session_start();
include 'connection.php';
if(isset($_POST["update_btn"])){
    $f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($connection,$_POST['l_name']);
    $phone_n = mysqli_real_escape_string($connection,$_POST['phone_n']);
    $birthday = mysqli_real_escape_string($connection,$_POST['birthday']);
    $cin_number = mysqli_real_escape_string($connection,$_POST['cin_number']);
    if(empty($f_name) || empty($l_name) || empty($phone_n) || empty($birthday) || empty($cin_number) ){
        header("Location: ../profile_setting.php?error=empty");
        exit();
    }else{
        if(!preg_match('/^[a-z]{1,20}$/', $f_name) && !preg_match('/^[a-z]{1,20}$/', $l_name)){
            header("Location: ../profile_setting.php?error=invalidNames");
            exit();
        }else{
            if(!preg_match('/^[0-9]{9,11}$/', $phone_n)){
                header('Location: ../profile_setting.php?error=invalidphone');
                exit();
            }else{
                $query = "update users set f_name='$f_name', l_name='$l_name', phoneNumber='$phone_n', cin='$cin_number', birthday='$birthday' where id=". $_SESSION['id'];
                mysqli_query($connection, $query);
                header('Location: ../profile.php?sussecc');
            }
        }
    }
} else{
    header("Location: ../HommePage.php");
}
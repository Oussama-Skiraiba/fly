<?php
    session_start();
    include("connection.php");
if(isset($_POST["add_img"])){
    $img = $_FILES["img"];
    $imgEx = explode('.', $_FILES["img"]['name']);
    $fileAuEx = strtolower(end($imgEx));
    $imgsTypes = array('jpeg', 'png', 'jpg');

    if(in_array($fileAuEx, $imgsTypes)){
        if($img['error'] === 0){
            $newNameFile = uniqid('', true) . "." . $fileAuEx;
            $fileDec = '../../uploaded/profile images/' . $newNameFile;
            move_uploaded_file($img['tmp_name'], $fileDec);
            $queryImg = "update users set photoProfile = '$fileDec'  where id=" . $_SESSION['id'];
            mysqli_query($connection, $queryImg);

            header("Location: ../profile_setting.php");
        }
       
    }else{
        header("Location: ../profile_setting.php?error=invalidfile");
        exit();
    }



}else{
    Header("Location: ../HommePage.php");
}



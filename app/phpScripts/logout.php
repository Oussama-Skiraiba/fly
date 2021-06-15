<?php

if(isset($_POST['logout'])){
    session_start();
    if(isset($_SESSION['id'])){
        session_unset();
        session_destroy();
        header('Location: ../HommePage.php?good=sessingbrok');
    }
}else{
    header('Location: ../HommePage.php');
}


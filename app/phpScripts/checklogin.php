<?php 

if(isset($_GET['checklogin'])){
    if($_GET['checklogin'] == "check"){
        session_start();  
        if(isset($_SESSION['id'])){
            header('Location: http://localhost/progectOfppt-main/app/phpScripts/checkPassport.php?flightid=' . $_GET['flightid'] .'&price=' . $_GET['price'] . '&userid=' . $_SESSION['id'] ) ;
            exit();
        }else{
            header('Location: http://localhost/progectOfppt-main/app/SingIn.php?flightid=' . $_GET['flightid'] .'&price=' .$_GET['price']);
            exit();
        }
}
}


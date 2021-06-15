<?php  

    if(isset($_POST['admin_logout'])){
        session_start();
        if(isset($_SESSION['id_admin'])){
            session_unset();
            session_destroy();
            header('Location: ../HommePage.php?good=sessingbrok');
        }
    }else{
        header('Location: ../admin/dashbord.php');
    }





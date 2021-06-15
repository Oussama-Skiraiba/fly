<?php
    include("connection.php");
    session_start();

    if(!isset($_SESSION['id'])){
        header('Location: ../SingIn.php?error=logingtoconfermemail');
        exit();
    }else{

        if( !isset($_GET['email']) || !isset($_GET['token'])){
                header('Location: ../SingIn.php?error=fakeLink');
				exit();
        }else{
            $email = $connection->real_escape_string($_GET['email']);
            $token = $connection->real_escape_string($_GET['token']);
            $isver = false;

            $sql = $connection->query("select * from user where email = '$email' and token = '$token' and isVerified = '$isver'");
            if($sql->num_rows > 0){
                $connection->query("update user set isVerified = 1, token = '' where email = '$email'");
                header('Location: ../HommePage.php?sus=verify');
                exit();

            }else{
                header('Location: ../HommePage?error=no');
                exit();
            }
        }
    }


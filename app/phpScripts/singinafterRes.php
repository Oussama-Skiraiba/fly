<?php
include('connection.php');


    if(isset($_POST["submitSignin"])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            header("Location: ../SingIn.php?error=empty");
            exit();
        }else{

            if(!(preg_match('/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email))){
                header('Location: ../SingIn.php?error=invalidemail');
                exit();
            }else{
                $p = strpos($email, '@');
                $ext = substr($email, $p);

                    //admin login
                    if($ext === '@admin.me'){
                        // $query_check_email_admin = "select * from admin where email = ?;";
                        // $stmt_email_admin_login = mysqli_stmt_init($connection);

                        // if(!mysqli_stmt_prepare($stmt_email_admin_login, $query_check_email_admin)){
                        //     header('Location: ../SingIn.php?error=somethingWentWrong');
                        //     exit();
                        // }

                        // mysqli_stmt_bind_param($stmt_email_admin_login, 's', $email);
			            // mysqli_stmt_execute($stmt_email_admin_login);
                        // $result_data_admin = mysqli_stmt_get_result($stmt_email_admin_login);
                        // $infoAdmin = mysqli_fetch_assoc($result_data_admin);
                        // if(!($infoAdmin)){
                        //     header('Location: ../SingIn.php?error=emailNotExists');
                        //     mysqli_stmt_close($stmt_email_admin_login);
                        //     exit();
                        // }else{

                        //     $passwordAdmin = $infoAdmin['password'];

                        //     // $check_pass = password_verify($password, $passHashed);
                        //     if(!($passwordAdmin === $password)){
                        //         header('Location: ../SingIn.php?error=incorPass');
                        //         exit();
                        //     }else if($passwordAdmin === $password){
                        //         session_start();
                        //         $_SESSION['id_admin'] = $infoAdmin['id'];
                        //         header('Location: ../admin/dashbord.php');
                        //         exit();
                        //     }

                        // }

                        header('Location: ../SingIn.php?error=incorPass');
                        exit();



                    }else{

                        //user login
                        $query_check_email_user = "select * from users where email = ?;";
                        $stmt_email_user_login = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt_email_user_login, $query_check_email_user)){
                            header('Location:  ../SingIn.php?error=somethingWentWrong');
                            exit();
                        }
                        mysqli_stmt_bind_param($stmt_email_user_login, 's', $email);
			            mysqli_stmt_execute($stmt_email_user_login);
                        $result_data_user = mysqli_stmt_get_result($stmt_email_user_login);
			            $infoUser = mysqli_fetch_assoc($result_data_user);
                        if(!($infoUser)){
                            header('Location: ../SingIn.php?error=emailNotExists');
                            mysqli_stmt_close($stmt_email_user_login);
                            exit();
                        }else{

                            //check hashed password
                            $passHashed = $infoUser['password'];
				            $check_pass = password_verify($password, $passHashed);

                            if($check_pass === false){
                                header('Location: ../SingIn.php?error=incorPass');
                                exit();
                            }else if($check_pass === true){
                                session_start();
                                $_SESSION['id'] = $infoUser['id'];
                                header('Location: http://localhost/progectOfppt-main/app/phpScripts/checkPassport.php?flightid='. $_GET['flightid'] . '&price=' . $_GET['price'] .'&userid=' .$_SESSION['id']  );
                                exit();
                            }
                            
                        }

                    }

            }
        }


    }else{
        header("Location: ../SingIn.php");
        exit();
    }

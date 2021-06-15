<?php
include('connection.php');
include('mailer/PHPMailerAutoload.php');

    if(isset($_POST["signup_submit"])){
        

        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $cin = $_POST['cin'];
        $birth_dd = $_POST['birth_dd'];
        $birth_mm = $_POST['birth_mm'];
        $birth_yy = $_POST['birth_yy'];
        $password = $_POST["pssword"];
        $gender = $_POST['gender'];
        $created_at = date('Y-m-d');



        //check if the inputs are empty
        if(empty($f_name) || empty($l_name) || empty($email) || empty($phone) || empty($cin) || empty($birth_dd) || empty($birth_mm) || empty($birth_yy) || empty($password)){
            header("Location: ../SingUp.php?error=empty");
            exit();
        }else{
            
            //check first name and last name
            if(!preg_match('/^[a-z]{1,20}$/', $f_name) && !preg_match('/^[a-z]{1,20}$/', $l_name)){
                header("Location: ../SingUp.php?error=invalidnames");
                exit();
            }else{
                
                //check email
                if(!preg_match('/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email)){
                    header("Location: ../SingUp.php?error=invalidemail");
                    exit();
                }else{
                    
                    //check if the email is an admin email
                        $p = strpos($email, '@');
                        $ext = substr($email, $p);
                        if($ext === '@admin.me'){
                            header('Location: ../SingUp.php?error=tryAnotherEmail');
                            exit();
                        }else{
                            
                            //check if the email already token
                            $query_check_email = "select * from users where email = ?;";
                            $stmt_email = mysqli_stmt_init($connection);
                            if(!mysqli_stmt_prepare($stmt_email, $query_check_email)){
                                header('Location: ../SingUp.php?error=somethingWentWrong');
                                exit();
                            }
                            mysqli_stmt_bind_param($stmt_email, 's', $email);
                            mysqli_stmt_execute($stmt_email);
                            $result_data = mysqli_stmt_get_result($stmt_email);
                            if(mysqli_fetch_assoc($result_data)){
                                header('Location: ../SingUp.php?error=emailToken');
                                mysqli_stmt_close($stmt_email);
                                exit();
                            }else{

                                //checl phone number
                                if(!preg_match('/^[0-9]{9,11}$/', $phone)){
                                    header('Location: ../SingUp.php?error=invalidphone');
                                    exit();
                                }else{

                                    //check cin
                                    if(!preg_match('/^[a-zA-Z0-9]{4,7}$/', $cin)){
                                        header('Location ../SingUp.php?error=invalidcin');
                                        exit();
                                    }else{
                                        
                                        //make birthday
                                        $stringDate = $birth_yy + "-" + $birth_mm + "-" + $birth_dd;
                                        $birthday = date('Y-m-d', strtotime($stringDate));

                                        //check password
                                        if(!preg_match('/^[a-zA-Z0-9_@-]{8,20}$/', $password)){
                                            header('Location: ../SingUp.php?error=weekpassword');
                                            exit();
                                        }else{
                                            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                                            $query_insert = "insert into users (f_name, l_name, email, password, phoneNumber, cin, gender, birthday, token, isVerified, createdAt) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                                            $stat_insrt = mysqli_stmt_init($connection);

                                            if(!mysqli_stmt_prepare($stat_insrt, $query_insert)){
                                                header('Location: ../SingUp.php?error=somethingWentWrongWhileSighup');
                                                exit();
                                            }
                                            
                                                //create token key
                                                $str = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM[];\,./";
                                                $str = str_shuffle($str);
                                                $token_key = substr($str, 0, 10);
                                                $isver = false;

                                                mysqli_stmt_bind_param($stat_insrt, "sssssssssbs", $f_name, $l_name, $email,  $hashed_pass, $phone, $cin, $gender, $birthday, $token_key, $isver, $created_at);
                                                
                                                $mail = new PHPMailer();
                                                $mail->isSMTP();
                                                $mail->Host = 'smtp.gmail.com';
                                                $mail->SMTPAuth = true;
                                                $mail->Username = 'hamza.coc.jalda@gmail.com';
                                                $mail->Password = 'hamzajalda';
                                                $mail->SMTPSecure = 'tls';
                                                $mail->Port = 587;
                
                
                                                $mail->setFrom('hamza.coc.jalda@gmail.com', 'A web Site');
                                                $mail->addAddress($email);
                                                $mail->isHtml(true);
                
                                                $mail->Subject = 'Please Verfiy your email now';
                
                                                $mail->Body = "<h1>Please Click ON the link below</h1>
                                                                <a href='http://localhost/progectOfppt/app/phpScripts/confirme_email.php?email=$email&token=$token_key'>Verfiy</a>";
                                                
                                                if(!$mail->send()){
                                                    header("Location: ../SingUp.php?error=notsent");
                                                    echo $mail->ErrorInfo;
                                                }else{
                                                    mysqli_execute($stat_insrt);
                                                    mysqli_stmt_close($stat_insrt);
                                                    header('Location: ../SingIn.php?error=none');
                                                    exit();
                                                }

                                                

                                        }

                                    }


                                }
                                

                            }
                        }

                }
                
            }

        }






    }else{
        header("Location: ../SingUp.php");
        exit();
    }
<?php  

include('connection.php');
include('mailer/PHPMailerAutoload.php');

    if(isset($_POST["send_btn"])){

        // $queryGetUser = "select * from users where id=" . $_SESSION['id']; 
        // $result = mysqli_query($connection, $queryGetUser);
        // $row = mysqli_fetch_array($result);

        $des = mysqli_real_escape_string($connection, $_POST['des']);
        $contactSup_fullname = mysqli_real_escape_string($connection, $_POST['contactSup_fullname']);
        $contactSup_email = mysqli_real_escape_string($connection, $_POST['contactSup_email']);

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hamza.coc.jalda@gmail.com';
        $mail->Password = 'hamzajalda';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        $mail->setFrom($contactSup_email, 'fly');
        $mail->addAddress("hamza.emeri@gmail.com");
        $mail->isHtml(true);

        $mail->Subject = 'Contact Support';

        $mail->Body = "
        <h2> " . $contactSup_fullname . " <h2>
            <p> " . $des . " </p>
        
        ";
        
        if(!$mail->send()){
            header("Location: ../HommePage.php?error=notsent");
            echo $mail->ErrorInfo;
        }else{
            header("Location: ../HommePage.php?seccess=emailWasSent");
        }



    }else{
        header("Location: ../HommePage.php");

    }



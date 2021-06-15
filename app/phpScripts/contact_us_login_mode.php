<?php  

include('connection.php');
include('mailer/PHPMailerAutoload.php');

    if(isset($_POST["send_btn"])){

        $queryGetUser = "select * from users where id=" . $_SESSION['id']; 
        $result = mysqli_query($connection, $queryGetUser);
        $row = mysqli_fetch_array($result);

        $des = mysqli_real_escape_string($connection, $_POST['des']);

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hamza.coc.jalda@gmail.com';
        $mail->Password = 'hamzajalda';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        $mail->setFrom($row['email'], 'fly');
        $mail->addAddress("hamza.emeri@gmail.com");
        $mail->isHtml(true);

        $mail->Subject = 'Contact Support';

        $mail->Body = "
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



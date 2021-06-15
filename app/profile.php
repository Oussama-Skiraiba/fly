<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: SingIn.php');
    }
    if(isset($_SESSION['id_admin'])){
        header('Location: admin/dashbord.php');
        exit();
    }

    include 'phpScripts/connection.php';


    //select user
    $query = "select * from users where id = " . $_SESSION['id'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    //select passport
    $queryPass = "select * from Passport where user_id = " . $_SESSION['id'];
    $resultPass = mysqli_query($connection, $queryPass);
    $resultPassCheck = mysqli_num_rows($resultPass);
    
    //select flights
    $queryflight = "select * from users INNER JOIN reservation on users.id = reservation.user_id INNER JOIN flight on reservation.flight_id = flight.id where users.id =" . $_SESSION['id'];
    $resultflight = mysqli_query($connection, $queryflight);
    $resultflightnum = mysqli_num_rows($resultflight);

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-user.css">
    <link rel="stylesheet" href="../css/profile_user.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Triv | Profile</title>
</head>
<body>
 <?php include "include/phpup.php"; ?>
<?php include "include/header.php"; ?>

    <div class="main_profile">
        <div class="main_profile_left">
         <h2>PROFILE DETAILS</h2>
         <div class="details_container">
            <div class="details_img">
                <?php if($row['photoProfile']){ ?>
                <?php echo '<img src="usr/'.$row['photoProfile'] .'" alt="">' ?>
                <?php }else{
                      echo '<img src="../images/pro.jpg" alt="">';
                }  ?>
            </div>
            <a href="profile_setting.php" class="edit_icon">
            <svg width="35" height="35" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M50.5367 34.7094C49.7835 34.7094 49.173 35.3198 49.173 36.0731V48.1811C49.1704 50.4397 47.3406 52.27 45.082 52.2721H6.81841C4.55981 52.27 2.73003 50.4397 2.72737 48.1811V12.6449C2.73003 10.3868 4.55981 8.55651 6.81841 8.55384H18.9264C19.6796 8.55384 20.2901 7.94338 20.2901 7.19016C20.2901 6.43747 19.6796 5.82648 18.9264 5.82648H6.81841C3.05444 5.83074 0.00426151 8.88091 0 12.6449V48.1816C0.00426151 51.9456 3.05444 54.9958 6.81841 55H45.082C48.8459 54.9958 51.8961 51.9456 51.9004 48.1816V36.0731C51.9004 35.3198 51.2899 34.7094 50.5367 34.7094V34.7094Z" fill="#CAC531"/>
<path d="M51.3602 2.31763C48.9637 -0.0789388 45.0783 -0.0789388 42.6817 2.31763L18.3527 26.6466C18.186 26.8133 18.0656 27.02 18.0028 27.2469L14.8034 38.7972C14.6719 39.2708 14.8056 39.7779 15.1529 40.1257C15.5007 40.473 16.0078 40.6067 16.4814 40.4757L28.0317 37.2758C28.2586 37.213 28.4653 37.0926 28.632 36.9259L52.9604 12.5964C55.3533 10.1982 55.3533 6.31599 52.9604 3.91782L51.3602 2.31763ZM21.3241 27.533L41.2354 7.62107L47.657 14.0426L27.7451 33.9545L21.3241 27.533ZM20.0414 30.1069L25.1717 35.2378L18.0752 37.2039L20.0414 30.1069ZM51.0321 10.6681L49.5859 12.1143L43.1638 5.69221L44.6105 4.24596C45.9417 2.91477 48.1002 2.91477 49.4314 4.24596L51.0321 5.84616C52.3612 7.17894 52.3612 9.3358 51.0321 10.6681V10.6681Z" fill="#CAC531"/>
</svg>

            </a>
            <div class="details_info">
                <ul>
                    <li>Full name: 	&nbsp;&nbsp;<strong><?php echo $row['f_name'] . " " . $row['l_name']; ?></strong></li>
                    <li>Email: &nbsp;&nbsp;<strong><?php echo $row['email']; ?></strong></li>
                    <li>Phone number: &nbsp;&nbsp;<strong><?php echo $row['phoneNumber']; ?></strong></li>
                    <li>Birthday: &nbsp;&nbsp;<strong><?php echo $row['birthday']; ?></strong></li>
                    <li>CIN: &nbsp;&nbsp;<strong><?php echo $row['cin']; ?></strong></li>
                </ul>
            </div>
         </div>
        
        
         <?php  if($resultPassCheck > 0){
                $rowPass = mysqli_fetch_array($resultPass);
                
                ?>
                                    <div class="passport" >
                    <h2>PASSPORT DETAILS</h2>
                        <ul>
                            <li>Number: &nbsp;&nbsp;<strong><?php echo $rowPass["pp_number"] ?></strong></li>
                            <li>Nationality: &nbsp;&nbsp;<strong><?php echo $rowPass["pp_nationality"] ?></strong></li>
                            <li>Date of issue: &nbsp;&nbsp;<strong><?php echo $rowPass["pp_date_of_issue"] ?></strong></li>
                            <li>Date of expiry: &nbsp;&nbsp;<strong><?php echo $rowPass["pp_date_of_expiry"] ?></strong></li>
                        </ul>
                    </div>

            <?php } ?>
        </div>
        <div class="main_profile_right">
        <h1>Your flights</h1>
        <?php 

            if($resultflightnum > 0){
                //  = mysqli_fetch_array($resultPassflight);

                while($rowFlight = mysqli_fetch_assoc($resultflight)){
                
                
                echo '<div class="flights_con">
                <div class="flight">
                    <span class="flight_left">Departure place: ' .  $rowFlight['leaving_from'] . '</span>
                    <span class="flight_right">Arrival place: '.  $rowFlight['going_to'] . '</span>
                </div>
                <div class="flight">
                    <span class="flight_left">Departure Date: '.  $rowFlight['departing'] . '</span>
                    <span class="flight_right">Return Date: '.  $rowFlight['_returning'] . '</span>
                </div>
                <div class="flight">
                    <span class="flight_left">Type: '.  $rowFlight['type'] . '</span>
                    <span class="flight_right">Class: '.  $rowFlight['class'] . '</span>
                </div>
                <div class="flight">
                    <span class="flight_left">Your pay: '.  $rowFlight['price'] . '$</span>
                </div>
            </div>';
                
                ;}}
        
        ?>
        <!-- <div class="flights_con">
            <div class="flight">
                <span class="flight_left">Departure place:</span>
                <span class="flight_right">Arrival place:</span>
            </div>
            <div class="flight">
                <span class="flight_left">Departure Date:</span>
                <span class="flight_right">Return Date:</span>
            </div>
            <div class="flight">
                <span class="flight_left">Type:</span>
                <span class="flight_right">Class:</span>
            </div>
            <div class="flight">
                <span class="flight_left">Your pay:</span>
            </div>
        </div> -->

        </div>
    </div>

    <?php include "include/footer.php"; ?>

<script src="../js/menu_script.js"></script>
</body>
</html>
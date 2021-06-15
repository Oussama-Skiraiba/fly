<?php  
session_start();
include("connection.php");
if(isset($_GET['paymentSuccess'])){
    if($_GET['paymentSuccess'] ==  "yes"){
        $query = "insert into reservation(user_id, flight_id) values(" . $_SESSION['id'] . ", " . $_GET['flightid'] . ") ";
        mysqli_query($connection, $query);
        header("Location: http://localhost/progectOfppt-main/app/HommePage.php?order=yes");
    }
}else{
    header("Location: http://localhost/progectOfppt-main/app/HommePage.php");
}





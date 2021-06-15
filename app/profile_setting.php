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


    //pass
    $queryPass = "select * from passport where user_id = " . $_SESSION['id'];
    $resultPass = mysqli_query($connection, $queryPass);
    $rowPass = mysqli_fetch_array($resultPass);
    


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-user.css">
    <link rel="stylesheet" href="../css/profile_user.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Triv | Setting</title>
</head>
<body>
 <?php include "include/phpup.php"; ?>
<?php include "include/header.php"; ?>


    <div class="pro_setting_container">
        <h2 class="pro_setting_title">Profile details</h2>

        <div class="pro_setting_img">
            <div class="pro_setting_img_container">
                <!-- <img src="../images/Clientes/person 2.jpg" alt=""> -->
                <?php if($row['photoProfile']){ ?>
                <?php echo '<img src="usr/'.$row['photoProfile'] .'" alt="">' ?>
                <?php }else{
                      echo '<img src="../images/pro.jpg" alt="">';
                }  ?>
            </div>
            <form action="phpScripts/upload_image_profile.php" method="POST" enctype="multipart/form-data">
                <input type="file" class="file" name="img">
                <input type="Submit" value="SAVE" name="add_img" class="save_btn">
            </form>
        </div>
        <hr>
        <div class="pro_setting_info">
        <h2 class="pp_title">USER INFORMATION</h2>
                <form action="phpScripts/update_user_info.php" method="post">
                    <div class="update_user">
                        <label for="" class="label">First Name</label>
                        <input type="text" class="input" name="f_name" >
                    </div>
                    <div class="update_user">
                        <label for="" class="label">Last Name</label>
                        <input type="text" class="input" name="l_name">
                    </div>
                    <div class="update_user">
                        <label for="" class="label">Phone Number</label>
                        <input type="text" class="input" name="phone_n">
                    </div>
                    <div class="update_user">
                        <label for="" class="label">BirthDay</label>
                        <input type="date" class="input" name="birthday">
                    </div>
                    <div class="update_user">
                        <label for="" class="label">CIN number</label>
                        <input type="text" class="input" name="cin_number">
                    </div>
                    <div class="update_btn_container">
                       <input type="submit" class="update_btn" name="update_btn" value="UPDATE YOUR INFORMATION"> 
                    </div>
                    
                </form>
        </div>
        <div class="pro_setting_passport pro_setting_info">
        <form  <?php if(mysqli_num_rows($resultPass) > 0){ echo 'action="phpScripts/update_passp.php"'; }else{ echo 'action="phpScripts/add_passp.php"'; } ?>  method="post">
        <h2 class="pp_title">PASSPORT INFORMATION</h2>
                    <div class="update_user">
                        <label for="" class="label">Number</label>
                        <input type="text" class="input" name="passN" >
                    </div>
                    <div class="update_user">
                        <label for="" class="label">Nationality</label>
                        <input type="text" class="input" name="passNati">
                    </div>
                    <div class="update_user">
                        <label for="" class="label">Date of issue</label>
                        <input type="date" class="input" name="passSat">
                    </div>
                    <div class="update_user">
                        <label for="" class="label">Date of expiry</label>
                        <input type="date" class="input" name="passEnd">
                    </div>
                    
                    <div class="update_btn_container">
                        <?php if(mysqli_num_rows($resultPass) > 0){
                            echo '<input type="submit" class="update_btn" name="update_pp_btn" value="UPDATE PASSPORT">';
                        } else{
                            echo '<input type="submit" class="update_btn" name="add_pp_btn" value="ADD PASSPORT">';
                        }
                        ?>
                       <!-- <input type="submit" class="update_btn" name="update_pp_btn" value="UPDATE PASSPORT">  -->
                    </div>
                </form>
        </div>
    </div>



<?php include "include/footer.php"; ?>

<script src="../js/menu_script.js"></script>
</body>
</html>
<?php
    session_start();

    if(isset($_SESSION['id_admin'])){
        header('Location: admin/dashbord.php');
        exit();
    }

    if(isset($_SESSION['id'])){
        header('Location: HommePage.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Signup.css">
    <title>Travi</title>
</head>

<body>
    <a href="HommePage.php">
        <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 78.129 77.392">
                                <g id="airplane" transform="translate(0.001 -0.238)">
                                    <path id="Path_1" data-name="Path 1" d="M3.409,136.813l21.972,3.031-10.722,15.6a1.312,1.312,0,0,0,.762,2.015l5.247,1.312a1.311,1.311,0,0,0,1.191-.291l18.684-16.608,10.448.949c1.339.122,3.017.18,4.75.18a64.835,64.835,0,0,0,7.421-.386l3.467-.433a26.136,26.136,0,0,0,7.061-1.914l2.492-1.068a3.21,3.21,0,0,0,.353-5.723l-7.585-4.425a22.324,22.324,0,0,0-11.234-3.037h-9.9L32.626,108.769a1.384,1.384,0,0,0-1.009-.445l-5.407.1a1.312,1.312,0,0,0-1.174,1.854l7.044,15.741H13.927L7.738,113.624a1.311,1.311,0,0,0-1.181-.725H1.31a1.311,1.311,0,0,0-1.293,1.528L2.48,129.212l-.3.149a3.954,3.954,0,0,0,1.225,7.452Zm17.223,19.244-2.741-.686,12.924-18.8,10.649.968-1.815,1.612-.179-.018-.017.19Zm7.609-45.049,2.818-.051L44.32,126.017H34.955ZM5.228,129.736,2.86,115.522H5.746l6.2,12.392a1.313,1.313,0,0,0,1.175.726h44.6a19.685,19.685,0,0,1,9.638,2.531l.408.817-1.173.587H61.652V135.2H66.9a1.318,1.318,0,0,0,.587-.131l2.624-1.312a1.3,1.3,0,0,0,.59-.639l4.514,2.634a.586.586,0,0,1-.065,1.049l-2.492,1.068a23.568,23.568,0,0,1-6.353,1.722l-3.467.433a65.011,65.011,0,0,1-11.608.2l-8-.726,2.239-1.99a1.312,1.312,0,0,0-.749-2.3l-14.43-1.312a1.311,1.311,0,0,0-1.2.564l-2.041,2.978L3.77,134.213a1.33,1.33,0,0,1-.412-2.506l1.163-.582a1.311,1.311,0,0,0,.707-1.39Zm0,0" transform="translate(0 -90.363)" fill="#333"/>
                                    <path id="Path_2" data-name="Path 2" d="M104,240.223h2.624v2.624H104Zm0,0" transform="translate(-86.944 -200.634)" fill="#333"/>
                                    <path id="Path_3" data-name="Path 3" d="M136,240.223h2.624v2.624H136Zm0,0" transform="translate(-113.697 -200.634)" fill="#333"/>
                                    <path id="Path_4" data-name="Path 4" d="M168,240.223h2.624v2.624H168Zm0,0" transform="translate(-140.45 -200.634)" fill="#333"/>
                                    <path id="Path_5" data-name="Path 5" d="M200,240.223h2.624v2.624H200Zm0,0" transform="translate(-167.203 -200.634)" fill="#333"/>
                                    <path id="Path_6" data-name="Path 6" d="M232,240.223h2.624v2.624H232Zm0,0" transform="translate(-193.956 -200.634)" fill="#333"/>
                                    <path id="Path_7" data-name="Path 7" d="M264,240.223h2.624v2.624H264Zm0,0" transform="translate(-220.709 -200.634)" fill="#333"/>
                                    <path id="Path_8" data-name="Path 8" d="M296,240.223h2.624v2.624H296Zm0,0" transform="translate(-247.462 -200.634)" fill="#333"/>
                                    <path id="Path_9" data-name="Path 9" d="M346.226,52.242a5.247,5.247,0,0,0-9.673-1.326,3.963,3.963,0,0,0-3.61,1.268,4.591,4.591,0,0,0-1.705,8.962,1.314,1.314,0,0,0,.707.206h15.741a1.224,1.224,0,0,0,.656-.19,4.591,4.591,0,0,0-1.312-8.992,4.509,4.509,0,0,0-.8.072ZM349,56.762a1.967,1.967,0,0,1-1.574,1.928,1.317,1.317,0,0,0-.147.04H332.355a1.31,1.31,0,0,0-.149-.04,1.967,1.967,0,0,1,.395-3.9,1.914,1.914,0,0,1,.56.1,1.312,1.312,0,0,0,1.552-.673,1.325,1.325,0,0,1,1.875-.525,1.312,1.312,0,0,0,1.991-.805,2.617,2.617,0,0,1,5.116,1.081,1.312,1.312,0,0,0,2.111,1.266A1.95,1.95,0,0,1,349,56.762Zm0,0" transform="translate(-274.227 -40.129)" fill="#333"/>
                                    <path id="Path_10" data-name="Path 10" d="M187.029,396.171a4.509,4.509,0,0,0-.8.072,5.247,5.247,0,0,0-9.673-1.326,3.963,3.963,0,0,0-3.61,1.268,4.591,4.591,0,0,0-1.705,8.962,1.314,1.314,0,0,0,.706.206h15.741a1.224,1.224,0,0,0,.656-.19,4.591,4.591,0,0,0-1.312-8.992Zm.394,6.519a1.323,1.323,0,0,0-.147.04H172.354a1.319,1.319,0,0,0-.149-.04,1.967,1.967,0,0,1,.395-3.9,1.913,1.913,0,0,1,.56.1,1.312,1.312,0,0,0,1.552-.673,1.323,1.323,0,0,1,1.875-.525,1.312,1.312,0,0,0,1.991-.805,2.617,2.617,0,0,1,5.116,1.081,1.312,1.312,0,0,0,2.111,1.266,1.967,1.967,0,1,1,1.617,3.455Zm0,0" transform="translate(-140.463 -327.723)" fill="#333"/>
                                    <path id="Path_11" data-name="Path 11" d="M26.226,4.242a5.247,5.247,0,0,0-9.673-1.326,3.959,3.959,0,0,0-3.61,1.268,4.591,4.591,0,0,0-1.705,8.962,1.314,1.314,0,0,0,.706.206H27.685a1.225,1.225,0,0,0,.656-.19,4.591,4.591,0,0,0-1.312-8.992,4.509,4.509,0,0,0-.8.072ZM29,8.762a1.967,1.967,0,0,1-1.574,1.928,1.317,1.317,0,0,0-.147.04H12.355a1.327,1.327,0,0,0-.148-.04,1.967,1.967,0,0,1,.393-3.9,1.914,1.914,0,0,1,.56.1,1.312,1.312,0,0,0,1.552-.673,1.323,1.323,0,0,1,1.875-.525,1.312,1.312,0,0,0,1.991-.805,2.617,2.617,0,0,1,5.116,1.081,1.312,1.312,0,0,0,2.111,1.266A1.95,1.95,0,0,1,29,8.762Zm0,0" transform="translate(-6.698 0)" fill="#333"/>
                                </g>
                            </svg>
        </div>
    </a>

    <header>
        <div class="headerContainer">
            <div class="mainIncludeAndImge">



                <div class="form">
                    <h2>Sign Up</h2>
                    <form action="phpScripts/signup_script.php" method="POST">
                       <div class="fn_ln_input">
                           <input type="text" name="f_name" placeholder="First name">
                           <input type="text" name="l_name" placeholder="Last name">
                       </div>
                        <input type="text" name="email" class="input" placeholder="Email">
                        <input type="text" name="phone" class="input" placeholder="Phone number">
                        <div class="cin_birth_inputs">
                            <input type="text" name="cin" class="cin" placeholder="CIN">
                            <div class="birthday">
                                   <input type="number" min="1" max="31"  name="birth_dd" placeholder="DD">
                                   <input type="number" min="1" max="12" name="birth_mm" placeholder="MM">
                                   <input type="number" min="1910" max="2003" name="birth_yy" placeholder="YY">
                            </div>
                        </div>
                        <input type="password" class="input" name="pssword" placeholder="Password"> 
                        <select name="gender" class="gender" id="">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <input type="submit" class="submit" name="signup_submit" value="Sign Up">
                          <p class="error"> 
                              <?php 
                                if(isset($_GET['error'])){
                                    if($_GET['error'] == 'empty'){
                                        echo '&#9888;  Please enter your information';
                                    }else if($_GET['error'] == 'invalidnames'){
                                        echo '&#9888; Invalid first name or last name';
                                    }else if($_GET['error'] == 'invalidemail'){
                                        echo '&#9888; Invalid email';
                                    }else if($_GET['error'] == 'tryAnotherEmail'){
                                        echo '&#9888; Invalid email';
                                    }else if($_GET['error'] == 'somethingWentWrong'){
                                        echo '&#9888; Somethis went wrong';
                                    }else if($_GET['error'] == 'emailToken'){
                                        echo '&#9888; Email token';
                                    }else if($_GET['error'] == 'invalidphone'){
                                        echo '&#9888; invalid phone number';
                                    }else if($_GET['error'] == 'invalidcin'){
                                        echo '&#9888; invalid cin';
                                    }else if($_GET['error'] == 'weekpassword'){
                                        echo '&#9888; enter a strong password';
                                    }else if($_GET['error'] == 'notsent'){
                                        echo '&#9888; email not sent';
                                    }
                                }
                              ?>
                            </p>
                        
                        <p>If you have an account you can sign in from here <a href="SingIn.php">Sign In</a></p> 
                    </form>
                </div>
                <div class="img">
                    <img src="../images/SingUpImg/img.jpg" alt="">
                </div>
            </div>
        </div>
    </header>



</body>

</html>
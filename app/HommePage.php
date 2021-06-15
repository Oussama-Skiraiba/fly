<?php  
session_start();  
    if(isset($_SESSION['id_admin'])){
        header('Location: admin/dashbord.php');
        exit();
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-user.css">
    <link rel="stylesheet" href="../css/homme.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Document</title>

</head>

<body class="scroleHeadin">

    <!-- Statr loade -->
    <div class="loade" id="loade">
        <div class="div1">
            <div class="div2">
                <div class="div3"></div>
            </div>
        </div>

    </div>
    <!-- End loade -->
    <?php include "include/phpup.php"; ?>
    <!-- Start Header -->
    <header>
        <?php include "include/header.php"; ?>

        <div class="container">
            <div class="titel">
                <h1>
                    <span class="titlePremier">Book Now</span>
                    <span class="titleSeconde">Travel Whenever</span>
                </h1>
                <div class="textHeader">
                    <p>Now is the perfect time to turn your travel dreams into vacations to look forward to.</p>
                </div>
            </div>
        </div>

        <div class="loginHeader">
            <div class="loginContainer">
                <div class="input">
                    <input type="text" placeholder="Departure place" id="Departure">
                    <input type="text" placeholder="Arrival place" id="goto">
                </div>

                <div class="radoi">
                    <label for="">Round Trip</label>
                    <input type="radio" checked name="trip" id="RoundTrip">
                    <label for="">One Way</label>
                    <input type="radio" name="trip" id="OneWay">
                </div>

                <div class="input">
                    <label for="">Departure</label>
                    <input type="date" id="DateDeparture">
                    <label for="">Return</label>
                    <input type="date" id="DateReturn">

                    <select class="selectClass" name="Class" id="class">
                        <option value="Economy">Economy</option>
                        <option value="Business">Businsess Class</option>
                        <option value="First">First Class</option>
                    </select>
                    <!-- <input type="number" placeholder="Seats" id="seats"> -->
                </div>
                <div class="btnSreash">
                    <button id="search">Search</button>
                </div>
            </div>
        </div>

        <!-- search Media query -->

        <div class="searchMedia">
            <!-- <img src="../images/mediaQuery/right-arrow.svg  " alt=""> -->
            <span>Book your flight </span>
            <img src="../images/mediaQuery/pngwing.com.png" alt="" id="arrow">
        </div>








    </header>

    <!-- End Header -->

    <div class="svgHeader">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1366 143.673">
            <path id="Path_12" data-name="Path 12" d="M0,143.673l20.68-17.959c20.68-17.959,61.849-53.877,103.588-65.831,41.265-12.179,82.529.168,124.268-3.031C289.8,53.877,331.065,35.918,372.8,32.944c41.17-3.2,82.529,9.148,124.268,8.98,41.075.168,82.529-12.179,124.268-3.031C662.32,47.7,703.87,78.01,744.66,98.775c41.834,20.765,83.478,33.112,124.268,20.934,41.739-11.954,83.478-47.872,124.268-41.867,41.644,5.781,83.478,54.046,124.268,56.852,41.549,2.806,82.529-38.724,124.268-47.872,41.454-8.811,82.529,14.76,103.4,26.939L1366,125.714V0H0Z" fill="#cac531" />
        </svg>
    </div>

    <div class="margin"></div>

    <!-- Start main -->
    <div class="main">

        <div class="mainContainer">
            <div class="mainDiv">
                <img src="../images/iconMain/check.svg" alt="">
                <p>
                    Join millions of people who
                    use us every day
                </p>
            </div>

            <div class="mainDiv">
                <img src="../images/iconMain/location.svg" alt="">
                <p>
                    Join millions of people who
                    use us every day
                </p>
            </div>

            <div class="mainDiv">
                <img src="../images/iconMain/group.svg" alt="">
                <p>
                    Join millions of people who
                    use us every day
                </p>
            </div>

            <div class="mainDiv">
                <img src="../images/iconMain/information.svg" alt="">
                <p>
                    Join millions of people who
                    use us every day
                </p>
            </div>

        </div>

    </div>


    <!-- End main -->

    <div class="margin"></div>

    <!-- Start Catigore -->
    <div class="main catgori" id="explore">
        <h2>Find your next destination</h2>

        <!-- 1 -->

        <div class="catrContainer">

            <div class="card">
                <div class="front" id="front"></div>
                
                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>

            <!-- 2 -->
            <div class="card">

                <div class="front" id="front"></div>

                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>

            <div class="card">

                <div class="front" id="front"></div>

                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>

            <!-- 2 -->
            <div class="card">

                <div class="front" id="front"></div>

                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>



            <!-- <div class="catrContainer"> -->

            <div class="card">

                <div class="front" id="front"></div>

                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>

            <!-- 2 -->
            <div class="card">

                <div class="front" id="front"></div>

                <div class="back">
                    <span class="nameLoacition">Newyork</span>
                    <!-- <span class="priceTravel">1000$</span> -->
                    <p class="info">
                        New York City (NYC), often simply called New York, is the most populous city in the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2)
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Catigore -->


    <div class="margin"></div>

    <!-- Start main -->
    <div class="main leadingCompain">
        <h2>Leading companies around the world are <span> choosing Triv</span> </h2>
        <div class="leadingCompainContainer" id="compnies">
            <img src="../images/LeadingCompanies/amazon.svg" alt="">
            <img src="../images/LeadingCompanies/google.svg" alt="">
            <img src="../images/LeadingCompanies/microsoft.svg" alt="">
            <img src="../images/LeadingCompanies/xbox.svg" alt="">
            <img src="../images/LeadingCompanies/true-blood.svg" alt="">
            <img src="../images/LeadingCompanies/vulkan.svg" alt="">
            <img src="../images/LeadingCompanies/wii.svg" alt="">
            <img src="../images/LeadingCompanies/netscape.svg" alt="">
        </div>

    </div>

    <!-- End main -->

    <div class="margin"></div>
    <div class="svgClientes">
            <svg class="top_wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366 143.673">
                <path id="Path_121" data-name="Path 121" d="M0,143.673l20.68-17.959c20.68-17.959,61.849-53.877,103.588-65.831,41.265-12.179,82.529.168,124.268-3.031C289.8,53.877,331.065,35.918,372.8,32.944c41.17-3.2,82.529,9.148,124.268,8.98,41.075.168,82.529-12.179,124.268-3.031C662.32,47.7,703.87,78.01,744.66,98.775c41.834,20.765,83.478,33.112,124.268,20.934,41.739-11.954,83.478-47.872,124.268-41.867,41.644,5.781,83.478,54.046,124.268,56.852,41.549,2.806,82.529-38.724,124.268-47.872,41.454-8.811,82.529,14.76,103.4,26.939L1366,125.714V0H0Z" transform="translate(1366 143.673) rotate(180)" fill="#333"/>
            </svg>
    </div>
    <!-- Start Clientes -->
    <div class="  clientes ">

    
        <h2>What our clients says about us</h2>

        <div class="clientesContainer" id="rating">

            <!-- 1 -->
            <div class="clinet">
                <img src="../images/Clientes/person 2.jpg" alt="">
                <span class="clinetName">Brenda Larson</span>
                <p class="clinetInfo">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s,
                </p>
            </div>

            <!-- 2 -->
            <div class="clinet">
                <img src="../images/Clientes/person 1.png" alt="">
                <span class="clinetName">Troy Murphy</span>
                <p class="clinetInfo">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s,
                </p>
            </div>

            <!-- 3 -->
            <div class="clinet">
                <img src="../images/Clientes/person 3.jpg" alt="">
                <span class="clinetName">Angela Hanson</span>
                <p class="clinetInfo">
                    Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s,
                </p>
            </div>

        </div>

    </div>
    <div class="svgClientBottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366 143.673">
             <path id="Path_120" data-name="Path 120" d="M0,143.673l20.68-17.959c20.68-17.959,61.849-53.877,103.588-65.831,41.265-12.179,82.529.168,124.268-3.031C289.8,53.877,331.065,35.918,372.8,32.944c41.17-3.2,82.529,9.148,124.268,8.98,41.075.168,82.529-12.179,124.268-3.031C662.32,47.7,703.87,78.01,744.66,98.775c41.834,20.765,83.478,33.112,124.268,20.934,41.739-11.954,83.478-47.872,124.268-41.867,41.644,5.781,83.478,54.046,124.268,56.852,41.549,2.806,82.529-38.724,124.268-47.872,41.454-8.811,82.529,14.76,103.4,26.939L1366,125.714V0H0Z" fill="#333"/>
            </svg>
        </div>


    <!-- End Clientes -->

    <!-- Start Contact -->

    <div class="main contact" id="contact">
        <h2>Contact us</h2>
        <div class="contactContainer">

            <div class="map">
                <p class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d421.70259586843304!2d-9.242446912990083!3d32.268284332938414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac26dd08f7d7e5%3A0xcc95bf375a53c523!2z2YXYsdmD2LIg2KfZhNmE2KfZitmI2KfYoSDZhNis2YXYudmK2Kkg2KfZhNin2LnZhdin2YQg2KfZhNin2KzYqtmF2KfYudmK2Kkg2YTZhdmI2LjZgdmKINmI2YXYqtmC2KfYudiv2Yog2KzZhdin2LnYqSDYo9iz2YHZiiAuL2NlbnRyZSBkJ2FjY3VlaWwgZGUgQS5PLlMuRi5SLkMuVS5T!5e0!3m2!1sar!2sma!4v1619061682360!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </p>
            </div>

            <div class="contactInfo">
            <h3>If you need some help please feel free to contact us</h3>
            <br>
                <form action="<?php if(isset($_SESSION['id'])){echo 'phpScripts/contact_us_login_mode.php';}else{echo 'phpScripts/contact_us_gest_mode.php';} ?>" method="post">
                    
                    <?php if(!isset($_SESSION['id'])){echo '<input type="text" name="contactSup_fullname" placeholder="You name"><input type="text" name="contactSup_email" placeholder="You email">'; } ?>
                    
                    <textarea name="des" id="textarea" cols="30" rows="10" placeholder="Description"></textarea>
                    <input type="submit" class="send" name="send_btn" value="send">
                </form>
            </div>


        </div>
    </div>

    <!-- End Contact -->

    <!-- <div class="margin"></div> -->
    <!-- Start Footer -->
    <?php include "include/footer.php"; ?>
    <!-- End Footer -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../js/menu_script.js"></script>

    <script src="../js/menu.js"></script>
    <script src="../js/homme.js"></script>
</body>

</html>
<?
session_start();
if(isset($_SESSION['id'])){
    header("Location: HommePage.php");
    exit();
}else{
    if(!isset($_GET['flightid'])){
        header("Location: HommePage.php");
        exit();
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make payment</title>
    <link rel="stylesheet" href="../css/header-user.css">
    <link rel="stylesheet" href="../css/profile_user.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/payment.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>


<?php include "include/phpup.php"; ?>
<?php include "include/header.php"; ?>

    <div class="all_con">
        <div class="paymentcartCon">
            <div class="imagCon">
                <img src="../images/payImage.png" alt="">
                <h1>One more step</h1>
            </div>
            <div>
                 <Button class='payBtn' id="payBtn">Make Payment [<?php echo $_GET['price'] . "$"  ?>]</Button>
            </div>
        </div>
    </div>
<br>
    <?php include "include/footer.php"; ?>

<script src="../js/menu_script.js"></script>


<script type="text/javascript">

    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51IjBhZHSLVRc4MGT2oK9YwkXgDrtGhYWnqtLlBwnlCb6jLaLRWHvrOrgRwjOab8hbn9Z5edCOeq6YNL0bgdgDwRB002ntQYcCp");
    var checkoutButton = document.getElementById("payBtn");


    checkoutButton.addEventListener("click", function () {
      fetch("http://localhost/progectOfppt-main/app/payment/create-checkout-session.php?price=<?php echo $_GET['price']; ?>00&flightid=<?php echo $_GET['flightid']; ?>", {
        method: "POST",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });
  </script>

</body>
</html>

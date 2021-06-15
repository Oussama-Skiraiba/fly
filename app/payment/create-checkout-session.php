<?php
session_start();
include("../phpScripts/connection.php");

    //select user
    $query = "select * from users where id = " . $_SESSION['id'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

include "stripe-php-master/init.php";
\Stripe\Stripe::setApiKey('sk_test_51IjBhZHSLVRc4MGTmlLaNu1B6nND3r7cv2HYmLB3kSptKaf6xX8XP5zoSIvjqm1lVLrCqADeNalKKuZ24tJaAOxO00DP2h88LD');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/progectOfppt-main/app/phpScripts/afterPay.php';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => $_GET['price'],
      'product_data' => [
        'name' => $row['f_name'] . " " . $row['l_name'],
        'images' => ["https://ecommercenews.eu/wp-content/uploads/2013/06/most_common_payment_methods_in_europe-480x254.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '?paymentSuccess=yes&flightid=' . $_GET["flightid"],
  'cancel_url' => $YOUR_DOMAIN . '?paymentSuccess=yes',
]);

echo json_encode(['id' => $checkout_session->id]);
<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productName = "Stripe Demo";  
$productID = "DP12345";  
$productPrice = 55; 
$currency = "usd"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51J2eRoSHqUz2xE2tnxfr3vAVgiVxQeN89G7otGkWgOLs1fjFNAPozylnlwJRxYQDAKXEElIrCq9taTPpFc67i5LU009xJS1Pwa'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51J2eRoSHqUz2xE2tgNtnsha888Luv3inKfrLWGnJHEl8kr92TFEm5XiAzoD4FLMmRTGHpPEkuynp1ZO5u6GTUzdj00B62SeJHW'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/stripe_checkout_php/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/stripe_checkout_php/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'localhost');   
define('DB_USERNAME', ''); 
define('DB_PASSWORD', '');   
define('DB_NAME', ''); 
 
?>
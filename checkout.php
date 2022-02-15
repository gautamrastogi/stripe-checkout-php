<?php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51J2eRoSHqUz2xE2tnxfr3vAVgiVxQeN89G7otGkWgOLs1fjFNAPozylnlwJRxYQDAKXEElIrCq9taTPpFc67i5LU009xJS1Pwa');

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost:4242/success',
  'cancel_url' => 'http://example.com/cancel',
]);

?>

<html>
  <head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <button id="checkout-button">Checkout</button>
    <script>
      var stripe = Stripe('pk_test_51J2eRoSHqUz2xE2tgNtnsha888Luv3inKfrLWGnJHEl8kr92TFEm5XiAzoD4FLMmRTGHpPEkuynp1ZO5u6GTUzdj00B62SeJHW');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </body>
</html>
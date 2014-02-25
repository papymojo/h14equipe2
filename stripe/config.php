

<?php

require_once('./stripe/lib/Stripe.php');


$stripe = array(
  "secret_key"      => "sk_test_tyNO856zmhq8t7PYsVq8CcED",
  "publishable_key" => "pk_test_9G0kU58Jrri3PaCBT4SOpD8Y"
);

Stripe::setApiKey($stripe['secret_key']);
?>



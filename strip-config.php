<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51MLUfbHLTLNYqh9n9zfpiqM0bBUNJIQLQkSETF9obPPAxE9xOk4HczsgyMqnwO2g5CSwWssPq803eA1tnD3DFnUq00G8U7i4Pu";

$secretKey="sk_test_51MLUfbHLTLNYqh9ngVyBGDf8EG6spCXY2DdwavPia1B7CWsaMQX7oOpBIxVOfHuwp9iQHmK64usTqfRX4HXGg1QA00PRluebWN";

\Stripe\Stripe::setApiKey($secretKey);
?>
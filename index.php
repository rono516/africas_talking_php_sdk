<?php
use AfricasTalking\SDK\AfricasTalking;

require "./vendor/autoload.php";

$username = "sandbox";
$apikey = "4d065383b6fef7bf4e2ce554576341a5e819ec762ec9afbb2d9556985be2173d";

$AT = new AfricasTalking($username, $apikey);

// Get the sms service

$sms = $AT->sms();

// use the sms service

$result = $sms->send([
    'to' => '+254792009556',
    'message' => "Hello world",
]);

print_r($result);

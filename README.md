# africas_talking_php_sdk

This is an implementation of <a href="https://github.com/AfricasTalkingLtd/africastalking-php">Africa's Talking PHP Sdk</a> to utilize Africa's Talking API to get the following services:
https://github.com/AfricasTalkingLtd/africastalking-php

<ol>
  <li>SMS Service: $sms = $AT->sms()</li>
  <li>Content Service: $content = $AT->content()</li>
  <li>Airtime Service: $airtime = $AT->airtime()</li>
  <li>Payments Service: $payments = $AT->payments()</li>
  <li>Voice Service: $voice = $AT->voice()</li>
  <li>Token Service: $token = $AT->token()</li>
  <li>Application Service: $application = $AT->application()</li>

</ol>

Instantiating the class will give you an object with the available methods

$AT = new AfricasTalking($username, $apiKey): Instantiate the class

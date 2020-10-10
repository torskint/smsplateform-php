<?php

require_once 'vendor/autoload.php';

use Smsplateform\Client\Auth;
use Smsplateform\Client\Request;

Auth::Init('<YOUR_USERNAME>', '<YOUR_PASSWORD>');
$sms = new Request([]);

$result = $sms->Profile()->getResponse();

var_dump($result);
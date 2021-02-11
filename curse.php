<?php
require_once 'vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;
use Twilio\Rest\Client;
$sid = "Your Twilio SID Here";
$token = "Your Twilio Auth Token Here";
$num = $_GET['v'];
$num = base_convert($num,16,10);
$num = "+1".$num;
$twilio = new Client($sid,$token);
$call = $twilio->calls
->create($num,"YOUR TWILIO NUMBER",
array("url" => "http://YOUR-URL/curse.xml")
        );
print($call->sid);
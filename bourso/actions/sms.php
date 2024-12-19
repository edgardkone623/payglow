<?php
require_once 'vendor/autoload.php';

// function sendSms($to, $message, $from)
// {
//     $ch = curl_init('https://gateway.sms77.io/api/sms');

//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
//         'to' => $to,
//         'text' => $message,
//         'from' => $from
//     ]));

//     curl_setopt($ch, CURLOPT_HTTPHEADER, [
//         'Accept: application/json',
//         'Content-type: application/json',
//         'X-Api-Key: 03ATnPpBMciNOg8qju2yNKEGiA0WMXswm8g5RO8LGU7xmno9xzCE6zBkPWPO1Dh8'
//     ]);

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     $result = curl_exec($ch);
//     curl_close($ch);
//     var_dump($result);
// }


// sendSms("+33745650057", "Salut", "sender");

use Sms77\Api\Client;
use Sms77\Api\Params\SmsParams;

$client = new Client('03ATnPpBMciNOg8qju2yNKEGiA0WMXswm8g5RO8LGU7xmno9xzCE6zBkPWPO1Dh8');
$params = new SmsParams();
$result = $client->sms(
    $params
        ->setUtf8(true)
        ->setNoReload(true)
        ->setFrom('444')
        ->setTo('+33745650057')
        ->setText('HI2U')
        ->setDebug(true)
        ->setDetails(true)
);
$balance = $client->balance();
var_dump($result, $balance);

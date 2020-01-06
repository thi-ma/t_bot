<?php



require "vendor/autoload.php";

$access_token = '1SYZykk+CJM4hRISxo/uX9+po328ZUQ/MJwyXhP7pPEvnng55c9dLyORtG6rlb02FnPjcriG43BEs+0/oWNuISm5X9L92kYNt2MOk+h/sRacsA0l+/szhObPKm08/2zP6mhZXJwH2fT2xCBbpWV8rgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e5eea0086af473125e5bfcc8f39df66b';

$pushID = 'Ud084de270646ec953107c3c72255b158';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








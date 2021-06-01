<?php



require "vendor/autoload.php";

$access_token = 'q/+IeuRV/AripP3j5yNeboiQQyQMgBq+1ZHSf6CCdnrvcmv37R8QNxJ2WxRstlbapfw0Vv+G4J308G0FvZJlAdfCyMNIZ9c/KEvOusLS1LYiU7TGnQT2dYgTZQNkeDt2oRm3Y9CtxVXvpbS1Pa+YKwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '20664390659bac6e90d77bd270cdc83a';

$pushID = '1656053933';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








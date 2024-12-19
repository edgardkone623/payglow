<?php

function tlgsend($message)
{
    include dirname(__DIR__) . '/config.php';

    $curl = curl_init();
    $api_key  = $Config['Telegram.Bot.Token'];
    $chat_id  = $Config['Telegram.Chat.Id'];
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot' . $api_key . '/sendMessage?chat_id=' . $chat_id . '&text=' . $message . '&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    //
    return true;
}



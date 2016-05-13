<?php
/*
 *
 * Telegram Bot message sending.
 * Syntax: https://api.telegram.org/bot<token>/METHOD_NAME
 *
 */
function sendMessageToTelegramBot( $bot_token_number, $id_of_chat, $url_encoded_text ){
    $bot_url = "https://api.telegram.org/bot$bot_token_number/sendMessage?chat_id=$id_of_chat&text=$url_encoded_text&parse_mode=Markdown&disable_web_page_preview=true";
    return file_get_contents($bot_url);
}

$bot_token = "224194506:AAHN4Nt1-2dWvUmWDnQvnKC_HNTM2HgWu88"; // bot token
$chat_id = "193777604"; // chat id, got from https://api.telegram.org/bot224194506:AAHN4Nt1-2dWvUmWDnQvnKC_HNTM2HgWu88/getUpdates
$text = " Hello from Bot!
    First row: *content*
    Second row: *content*"; // message
$encoded_text = urlencode($text); // encode message

// Call to function
sendMessageToTelegramBot( $bot_token, $chat_id, $encoded_text )
?>


<?php

$botToken = <token>;
$chat_id = <group or channel name>;
$message = <message>;
$bot_url    = "https://api.telegram.org/bot$botToken/";

$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);

// do what ever you want with results

?>
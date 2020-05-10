
<?php

$botToken = <token>;
$chat_id = <group or channel name>;
$message = <message>;
$bot_url    = "https://api.telegram.org/bot$botToken/";

$post_fields = array('chat_id'   => $chat_id,
    'caption' => <caption_text>,
    'photo'     => <photo_url>
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
$output = curl_exec($ch);

?>
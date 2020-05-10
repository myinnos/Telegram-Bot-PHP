# Telegram Bot PHP
Telegram is a popular instant messaging service that prides itself on security. It has all of the features you would expect from a modern chat platform, including chatbots: software-based agents that you can program to read and respond to other users’ messages.

**Setup Your Bot’s Telegram Profile** 

To set up a new bot profile, log in to your Telegram account and start a conversation with the BotFather _**(@BotFather)**_, an official account that allows you to create and manage bots. In that conversation, enter the _**/newbot**_ command.

The BotFather will ask you to choose a display name and username for your bot. The username has to end in “bot” and must be unique. In our example, we’ve settled on the display name SampleName and username _**SampleNameBot**_.

Once you’ve landed on a valid username, the BotFather will automatically register your bot and reply with a _**token**_ for the Telegram API, unique to that bot. Make sure not to share your token with anyone.     

**Note:** Add a bot to channel or group and make bot as Admin

      
How to use
-----
**Sending Message:** send a message to group or channel:
```php

  $botToken = <token>;
  $chat_id = <group or channel name>;
  $message = <message>;
  $bot_url    = "https://api.telegram.org/bot$botToken/";

  $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
  file_get_contents($url);
  
```
**Sending Photo:** send an photo with caption to group or channel:
```php

  $botToken = <token>;
  $chat_id = <group or channel name>;
  $message = <message>;
  $bot_url    = "https://api.telegram.org/bot$botToken/";

  $post_fields = array('chat_id'   => $chat_id,
      'caption' => <caption_text>,
      'photo'   => <photo_url>
  );

  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type:multipart/form-data"
  ));
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
  $output = curl_exec($ch);
  
```
## Contact
#### Prabhakar Thota
* :globe_with_meridians: Website: [myinnos.in](http://www.myinnos.in "Prabhakar Thota")
* :email: e-mail: contact@myinnos.in
* :mag_right: LinkedIn: [PrabhakarThota](https://www.linkedin.com/in/prabhakarthota "Prabhakar Thota on LinkedIn")
* :thumbsup: Twitter: [@myinnos](https://twitter.com/myinnos "Prabhakar Thota on twitter")    
* :camera: Instagram: [@prabhakar_t_](https://www.instagram.com/prabhakar_t_/ "Prabhakar Thota on Instagram")   

> If you appreciate my work, consider buying me a cup of :coffee: to keep me recharged :metal: by [PayPal](https://www.paypal.me/fansfolio)

License
-------

    Copyright 2020 MyInnos

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.


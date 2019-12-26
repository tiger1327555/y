 <?php
  

function send_LINE($msg){
 $access_token = 'lWyRSf6OBf2/is4IsBfpqKqSqSMljaqSHcpBf8ujmSRkIq2J8XF8moroz5cOPUdg5GsoT1pf1evsrFDWsppn33lnP0DIAToZNvnToDXoiHAZiaLa7QF3u/wVoBfNQjf0fYeBQ6D6hYQXP84f+/JdVgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'userid' => 'U1e97ec5a5a4ffc80db9d5a1c4da668ae',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

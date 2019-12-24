<?php
$access_token = 'lWyRSf6OBf2/is4IsBfpqKqSqSMljaqSHcpBf8ujmSRkIq2J8XF8moroz5cOPUdg5GsoT1pf1evsrFDWsppn33lnP0DIAToZNvnToDXoiHAZiaLa7QF3u/wVoBfNQjf0fYeBQ6D6hYQXP84f+/JdVgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

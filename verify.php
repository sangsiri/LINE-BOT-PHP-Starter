<?php
$access_token = 'ASAwZVl3MF+eNN6Xha9nM+BZosYDvsn7zzuIYQlqJZP5pJnyWOy9cyC3oKneCuR7fKuG/zHJGj4wTYA6Zcm/G97jZboSFDdh3a843LCNKU0ceuRO2qsJPGzaw69+5YoB5AfALfz51ylEl3EGizckpQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>

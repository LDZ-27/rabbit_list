<?php
include '../../../config.php';
access_by_cookie($config,$_COOKIE);
$email=str_replace('@','%40',$_GET['email']);
$url="https://weibo.com/signup/v5/formcheck?type=email&value=$email&from=qiyewei";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: weibo.com',
    'Accept-Encoding: identity',
    'Content-Type: application/x-www-form-urlencoded',
    'Dnt: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://weibo.com/signup/signup.php?entry=qiyewei'
));
// curl_setopt($ch, CURLOPT_HEADER,1);
$output_data = curl_exec($ch);
curl_close ($ch);
// var_dump($output_data);
foreach(json_decode($output_data,true) as $a => $b)
{
    if($a=='code')
    {
    if($b=='600001')
    {
        echo 'true';
    }
    else if($b=='100000')
    {
        echo 'false';
    }
    }
}
?>
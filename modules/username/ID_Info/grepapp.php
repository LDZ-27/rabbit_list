<?php
include '../../../config.php';
access_by_cookie($config,$_COOKIE);
# 输入变量
$phone=$_GET['phone'];
$username=$_GET['username'];
$email=$_GET['email'];
$idcard=$_GET['idcard'];
$showresult=[];
# url 生成
$page=1;
echo '[';
while(1)
{
$url ="https://grep.app/api/search?q=$username&regexp=true&page=$page";
#
# 数据包发送 post
$ch = curl_init(); 
// $post_data ="username=".$phone."&password=12345678&key=&captcha=";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
# ssl 认证
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
$headers = array();
$headers[] = 'Cookie: lang=en';
$output = curl_exec($ch);
if (curl_errno($ch)) {
    echo '[{}]';
    exit;
}
curl_close ($ch);

# 数据处理
// echo ',';
$data=str_replace('<mark>','',$output);
$data=str_replace('</mark>','',$data);
//$data=str_replace(' ','',$data);
//  $data=explode('<span>',$data);
$email_reg='/^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})$/';
$cn_phone_reg='/[1][3,4,5,7,8,9][0-9]{9}/';
$site_reg='/[A-Za-z0-9]+(\.[A-Za-z0-9]+)+/';
$ip_reg='/(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/';
$phone_reg='/[\u4E00-\u9FA5]{2,10}(·[\u4E00-\u9FA5]{2,10}){0,2}/';
preg_match_all('/[A-Za-z0-9\.-]+@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+/',$data,$result);
$result=array_unique($result);
foreach($result as $part)
{
$part=array_unique($part);
foreach($part as $piece)
{
    if($piece!='')
    {
       echo '{"from_id":"'.$username.'","root_id":"'.$piece.'","root_label":"'.$piece.'","type":"email","imageurl":"/img/icon/email.png","title":"Grepapp搜索前5页关键词，得到的可能的邮箱","raw_data":"","edge_color":"yellow","edge_label":"grepapp关键词搜索"},';
       // echo "$piece,";
       // echo  '<br>';
    }
}
    }
    preg_match_all($cn_phone_reg,$data,$result);
    $result=array_unique($result);
    foreach($result as $part)
    {
    $part=array_unique($part);
    foreach($part as $piece)
    {
        if($piece!='')
        {
        //   echo "$piece,";
        echo '{"from_id":"'.$username.'","root_id":"'.$piece.'","root_label":"'.$piece.'","type":"phone","imageurl":"/img/icon/phone.png","title":"Grepapp搜索前5页关键词，得到的可能的手机号","raw_data":"","edge_color":"yellow","edge_label":"grepapp关键词搜索"},';
        //    echo  '<br>';
        }
    }
        }    
/*     preg_match_all($site_reg,$data,$result);
   // var_dump($result);
   $result=array_unique($result);
   foreach($result as $part)
   {
   $part=array_unique($part);
   foreach($part as $piece)
   {
       if($piece!='')
       {
           echo "$piece,";
       //    echo  '<br>';
       }
   }
       } */  
    preg_match_all($ip_reg, $data,$result);
    $result=array_unique($result);
    foreach($result as $part)
    {
    $part=array_unique($part);
    foreach($part as $piece)
    {
        if($piece!='')
        {
            echo '{"from_id":"'.$username.'","root_id":"'.$piece.'","root_label":"'.$piece.'","type":"ip","imageurl":"/img/icon/ip.png","title":"Grepapp搜索前5页关键词，得到的可能的ip","raw_data":"","edge_color":"yellow","edge_label":"grepapp关键词搜索"},';
        //    echo  '<br>';
        }
    }
        }   
$page++;
if($page>5)
{
    break;
    echo '{}]';
    exit;
}
}
echo '{}]';
# 结果输出
?>
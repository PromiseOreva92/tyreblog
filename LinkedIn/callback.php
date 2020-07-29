<?php
require 'init.php';
function curl($url,$parameters,$content_type){
    $ch= curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers=[];
    $headers[]="Content-Type: {$content_type}";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result=  curl_exec($ch);
    return $result;
    
}

if(isset($_REQUEST['code'])){
    $code= $_REQUEST['code'];
    $url= "https://wwww.linkedin.com/oauth/v2/accessToken";
    $params=[
        'client_id'=>CLIENTID,
        'client_secret'=>CLIENTSECRET,
        'redirect_uri'=>REDIRECTURI,
        'code'=>$code,
        'grant_type'=>'authorized_code',
    ];
    
    $accessToken=curl($url, http_build_query($params),"application/x-www-urlencoded");
    $accessToken=  json_decode($accessToken)->access_token;
    
    $parameter=[
      'comment'=>$_SESSION['post'],
        'visibility'=>['code'=>$_SESSION['privacy']]
    ];
    
    $post_url="https://api.linkedin.com/v1/people/~/shares?format=json&oauth2_access_token=".$accessToken;
    $post=curl($post_url,  json_encode($parameter), "application/json");
    $post=  json_decode($post);
    if(isset($post->updateUrl)){
        
    }else{

    }
    var_dump($post);
}
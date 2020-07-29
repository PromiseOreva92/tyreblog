<?php
require_once('includes.php');
$data  = $_POST['text'];
if($link=mysqli_connect($host,$user,$password,$database)){
	$query= "select * from posts where post_id='$data'";
        $query2="select * from media where post_id='$data'";
        
	if($result=mysqli_query($link,$query)){
		$row= mysqli_fetch_array($result);
		$message=$row['post_body'];		
	}
}



//define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/src/Facebook/');
//require_once(__DIR__.'/src/Facebook/autoload.php');
require_once('../Facebook/autoload.php');
//'app_id'=>'412056686162768'
//'app_secret' =>'68613d8f1452323a46b4b59d1a5e7e5c'
$fb = new Facebook\Facebook([
 'app_id' => '456203284924051',
 'app_secret' => '8487a3a9847d062d237007317a2f18ab',
 'default_graph_version' => 'v2.10',
]);


$linkData = [
 'link' => 'https://premierrecord.com/blog/',
 'message' => $message,
'picture'=>'https://premierrecord.com/images/images.jpg'
];
$pageAccessToken ='EAAGe6hqZBRpMBADLjly1SyNaDNScrChZC4Yk2xZB8QfZBrSiWRj7ZCMfrlQIv44FwZAFNq3DeAiUotTRE2LRXuzE4TnpPvMkZC4GNj7hgt3xHZCzxoyRmVag5NTyAk3bHBDZAu4gdAZB9fkqQajboFiL7EC9dUZBxjUVfCYxoBrl6phUQZDZD';

try {
 $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
 echo "submission successful";
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 echo 'Graph returned an error: '.$e->getMessage();
 exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 echo 'Facebook SDK returned an error: '.$e->getMessage();
 exit;
}
$graphNode = $response->getGraphNode();

?>
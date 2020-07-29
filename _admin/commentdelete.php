<?php
include_once('includes.php');
$text = $_POST['text'];
$array = explode(",",$text);
if($link= mysqli_connect($host,$user,"",$database)){
for($x=0;$x<count($array);$x++){
$st ="delete from comments where comment_id= '$array[$x]'";
if(mysqli_query($link,$st)){
	
	}
}
}

?>
<?php
include_once('includes.php');
$text = $_POST['text'];
$array = explode(",",$text);
$link= mysqli_connect($host,$user,$password,$database);
for($x=0;$x<count($array);$x++){
$st ="delete from posts where post_id= '$array[$x]'";
if(mysqli_query($link,$st)){
	
	}
}

?>
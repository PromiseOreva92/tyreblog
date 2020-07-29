<?php

include_once('includes.php');
$text = $_POST['text'];
$link= mysqli_connect($host,$user,$password,$database);
$st ="delete from posts where post_id= ".$text."";
$st2="delete from media where post_id= ".$text."";
$st3 ="select * from media where post_id=".$text."";

$res=mysqli_query($link,$st3);
while ($row=  mysqli_fetch_array($res)){
    if($row['filetype']=='image'){
        
        unlink('images/'.$row['filename']);
    }
    if($row['filetype']=='video'){

        unlink('videos/'.$row['filename']);
    }    
    
}
mysqli_query($link,$st);
mysqli_query($link,$st2);




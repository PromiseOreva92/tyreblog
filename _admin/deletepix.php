<?php
session_start();
$item=$_GET['item'];

unlink($item);
header("location:createpost.php");

?>
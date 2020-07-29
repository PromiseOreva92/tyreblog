<?php
	session_start();
	ob_start();
	define('username','admin');
	define('password','admin');
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN PAGE</title>
<style>
label{
	width:100%;
	display:block;
	box-sizing:border-box;
	margin-bottom:10px;
	font-family:"Courier New", Courier, monospace;
	font-weight:bold;
	font-size:18px;
}
input{
	width:100%;
	box-sizing:border-box;
	margin-bottom:15px;
	padding:10px;
}
input[value="Log in"]{
	/*border-radius:10px;*/
	background:#090;
	padding:15px;
	border:none;
	margin-top:10px;
	color:#FFF;
	font-size:18px;
	font-weight:bold;
	margin-bottom:10px;
	}
form{
	border:2px solid #999;
	margin:10% 30%;
	padding-left:5%;
	padding-right:5%;
	border-radius:20px;
	
}
h3{
	text-align:center;
	font-family:"Courier New", Courier, monospace;
	font-size:24px;
}
h3 + span{
	color:#FFF;
	display:block;
	padding:10px;
	font-size:18px;
	background:#36F;
	margin-bottom:10px;
}
body{
	/*background:url(images/images.jpg);*/
/*	background-repeat:no-repeat;
	background-position:center;
	background-size:contain;*/
}

@media screen and (max-width:960px){
    form{
	border:2px solid #999;
	margin:20px 3%;
    }
}
</style>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1 align="center" style="font-family:'Comic Sans MS', cursive">LOGIN</h1>
    <h3>Firmgrip Tyres</h3>           
     <label>Username</label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required="required"/>
     <label>Password</label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required="required"/>
     <input type="submit" value="Log in" />              
  <?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
	 
	$usern=$_POST['username'];
	$pass=$_POST['password'];
	if($usern==username&&$pass==password){
		header('location:dashboard.php');
		$_SESSION['login_id']=$usern;
		$_SESSION['login_time']=time();
		$_SESSION['login_pass']=$pass;
		
	}
	else{
		echo "<span style='display:block;text-align:center;margin-bottom:30px;color:red;font-weight:bold'>Wrong Username or Password</span>";	
	}
}
  ?> 
</form>      
 
</body>
</html>














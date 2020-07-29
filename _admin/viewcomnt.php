<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css" />
<title>View Comment</title>
        <style>
        *{margin:0px;padding: 0px;}
        body {
          margin: 0;
          font-family: "Lato", sans-serif;
        }

        .sidebar {
          margin: 0;
          padding: 0;
          width: 20%;
          background-color: black;
          height:680px;
          overflow: auto;
          float:left;
          z-index: 1;
        }

        .sidebar a {
          display: block;
          color: #f1f1f1;
          padding: 12px;
          text-decoration: none;
        }

        .sidebar a.active {
          background-color: #4CAF50;
          color: white;
        }

        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        .sidebar h4{
            text-align: center;
            color:white;
        }
        
        
        div.content {
          width: 80%;
          float: left;
          background:#f1f1f1;
          height:680px;
          overflow:auto;
          
        }
		#comment{
			background:#FFF;
			width:40%;
			padding:5%;
			margin:5% 10%;
	/*		height:auto;*/
			border:1px solid #ccc;
			
		}
		
</style>
</head>

<body>
    <div class="sidebar">
            <a href="#">Home</a>
          <h4>Manage Post</h4>
          <a  href="createpost.php">Create Post</a>
          <a href="viewposts.php">View Post</a>
          <a href="deleteposts.php">Delete Post</a>
          <h4>Manage Comment</h4>
          <a  href="viewcomments.php"  class="active">View Comment</a>
          <a href="deletecomments.php">Delete Comment</a>

          <h4>Manage Subscription</h4>
          <a  href="#">View Subscription</a>
          <a href="#news">Delete Subscription</a>
          <a href="website.php">Visit Blog as Admin</a>

        </div>
        
        
        
        
        <div class="content">
        	<div id="comment">
					<?php
                    include('includes.php');
                    $text = $_GET['text'];
							if($con = mysqli_connect($host,$user,"",$database)){
								
									$sql = "select * from comments where comment_id='$text'";
									if($result = mysqli_query($con,$sql)){
										
										$row = mysqli_fetch_array($result);
										
										echo "<span class='fa fa-user-circle' style='font-size:36px;color:#CCC'></span><h4 id='author' style='padding:4px;'>".$row['author']."</h4>";
										echo "<p id='body' style='padding:5px;margin-bottom:4px;text-align:justify'>".$row['comment_body']."</p>";
										echo "<span style='color:blue;font-weight:bold'>Date: </span><span id='date'>".$row['comment_date']."</span><br>";
										echo "<span style='color:blue;font-weight:bold'>Time: </span><span id='time'>".$row['comment_time']."</span>";
										
									}
									
									
							}
                        ?>
                        
                </div>       
        
        </div>
</body>
</html>
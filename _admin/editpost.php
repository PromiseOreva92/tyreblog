<?php
        
	require('includes.php');
	session_start();
        ob_start();
	if($_SESSION['login_time']=="" && $_SESSION['login_id']=="" && $_SESSION['login_pass']==""){
			header('location:index.php');
	}
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>                        
        <meta charset="UTF-8">
        <title>Edit Posts</title>
        <style>
            #navigate,#colsm{
                height: 700px;
                overflow-y: auto;
            }
            #menu li a{
                color: white;
                font-family: sans-serif;
                font-weight: bold;
                border-radius: 0px;
            }
            #menu li a:hover{
                color:black;
                background: #666;
            }
            
            #header{
                background: #333;
                color: white;
                padding: 10px;
            }
            #colsm{
                background:#e7e4e4;
                
            }
            
            #spin{
                width:80px;
                height: 80px;
                border-radius: 40px;
                border: 1px solid white;
                margin: 100px 45%;
                border-top:2px solid green;
                animation-name: loading;
                animation-duration:1s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            
                @keyframes loading{
                    0%{
                      transform:rotate(0deg);  
                    }
                    100%{
                      transform:rotate(360deg);  
                    }                    
                }
                
                
            #spinnerCon{
                background: rgba(0,0,0,0.7);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
            }
            
            
 #formCon{
	 background: white;
	 width:100%;
/*	 margin: 0% 5%;*/
	 padding: 0% 2%;
	 border:1px solid #ccc;
         
 }
form span{
	font-weight:bold;
	width:15%;
	display:inline-block;
	margin-bottom:10px;
}
input {
	width:60%;
	padding:8px;
	display:inline-block;
	box-sizing:border-box;
	margin-bottom:10px;
}
input[type='submit']{
	width:76%;
	box-sizing:border-box;
	
}
textarea{
	width:60%;
	box-sizing:border-box;
} 
img{
/*    transform: scale(0.5);*/
}
    </style>
        <script>
            
            window.addEventListener('load',function(){
                        window.setTimeout(function(){
                          document.getElementById('spinnerCon').style.display="none";  
                    },1000);  
                });

                    
         </script>        
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col-sm-7">ADMIN PANEL</div>
                <div class="col-sm-5" style="text-align:right"><span>Welcome back Super Admin</span></div>
            </div>
            <div class="row">
                <div class="col-sm-2" id="navigate" style="background:#000;padding:30px 0px;">
                    <ul class="nav nav-pills nav-stacked" id="menu">
                        <li><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-home"></span> Home</a></li>
                        <h4 style="text-align:center">Manage Posts</h4>
                        <li><a href="createpost.php" style="font-weight:bold;font-family: sans-serif"><span class="fa fa-edit"></span> Write Post</a></li>
                        <li class="active"><a href="viewposts.php"><span class="fa fa-eye"></span> View Posts</a></li>
                        <li><a href="deleteposts.php"><span class="fa fa-times-rectangle"></span> Delete Posts</a></li>
                        <h4 style="text-align:center">Manage Comments</h4>
                        <li><a href="viewcomments.php"><span class="fa fa-commenting"></span> View Comments</a></li>
                        <li><a href="deletecomments.php"><span class="fa fa-times-circle-o"></span> Delete Comments</a></li>
                        <h4 style="text-align:center">Manage Subscribers</h4>
                        <li><a href="viewsub.php"><span class="fa fa-user"></span> View Subscribers</a></li>
                        <li><a href="deletesub.php"><span class="fa fa-user-times"></span> Delete Subscribers</a></li>
                        <li><a href="blogpage.php"><span class="fa fa-tv"></span> Visit Site</a></li>
                        <li><a href="logout.php"><span class="fa  fa-arrow-circle-o-left"></span> Logout</a></li>
                    </ul> 
                </div>
                
                <div class="col-sm-10" id="colsm">

    <div id="formCon">

	<form id="edit" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   
			<?php
            include('includes.php');
            $text = $_GET['text'];
        if($con = mysqli_connect($host,$user,$password,$database)){
            
                $sql = "select * from posts where post_id='$text'";
                $sql2 ="select * from media where post_id='$text'";
                if($result = mysqli_query($con,$sql)){
                    
                    $row = mysqli_fetch_array($result);
                    $result2 = mysqli_query($con,$sql2);
                    while($row2= mysqli_fetch_array($result2)){
                        if($row2['filetype']=='image'){
                    echo "<div style='margin-bottom:10px;display:inline-block;padding:0px;'>"
                    . "<img src='images/".$row2['filename']."'>"
                            . "</div>";
                        }
                        
                        if($row2['filetype']=='video'){
                        echo "<div id='vid-con'>";
                                    echo "<video controls='controls' src='videos/".$row2['filename']."' id='".$row2['filename']."'></video>";
                        echo "</div>"; 
                        }
                    }
                    
                    echo '<div><a href="addmedia.php?post_id='.$text.'" style="font-weight:bold">CLICK TO ADD MEDIA</a></div>';
                    echo "<input type='hidden' name='id' value=".$row[0].">"."<br>";
                    echo "<span>Post Author:</span> "."<input type='text' name='author'  value='$row[1]'>"."<br>";
                    echo "<span>Post Topic:</span> <input type='text' name='topic' value='$row[2]'><br>" ;
                    echo "<span>Post Category:</span> "."<input type='text' name='category' value='$row[3]'>"."<br>";
                    echo "<span>Post Body:</span> "."<textarea name='body' rows='20'>".$row[4]."</textarea>"."<br>";
                    echo "<input type='submit' value='update'>";
                    
                }
                
        }
        
        
        
        ?>
            </form>
            <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if($con = mysqli_connect($host,$user,"",$database)){
            $id = $_POST['id'];
            $author = mysqli_real_escape_string($con,$_POST['author']);
            $topic = mysqli_real_escape_string($con,$_POST['topic']);
            $category = mysqli_real_escape_string($con,$_POST['category']);
            $body = mysqli_real_escape_string($con,$_POST['body']);
            $query ="update posts set post_author='$author', post_topic='$topic',
            post_category='$category',post_body='$body' where post_id='$id'";
            
                
                if(mysqli_query($con,$query)){
                    
                    echo "<script> alert('update successful')</script>";
                    header('location:viewposts.php');
                    }
                else{
                        echo "<script> alert('update failed')</script>";
                    }
                
            }
            
        }
				?>
                
          </div>                   
                                       
                    
                </div>
                
                
                
                
            </div>
        </div>
        
        <script>
            imgs=document.getElementsByTagName('img')  
            
            window.addEventListener('load',function(){
                for(i=0;i<imgs.length;i++){
                    y=imgs.item(i).height * 0.5;
                    x=imgs.item(i).width * 0.5;
                    imgs.item(i).style.height=y+"px";
                    imgs.item(i).style.width=x+"px";

                }
                
            })        
        </script>        
        <div id="spinnerCon">
            <div id="spin">
                
            </div>
        </div>

    </body>
</html>

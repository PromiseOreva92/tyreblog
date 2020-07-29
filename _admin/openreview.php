<?php
    session_start();
    if($_SESSION['login_time']=="" && $_SESSION['login_id']=="" && $_SESSION['login_pass']==""){
                    header('location:index.php');
    }
    require "includes.php";
    $id = $_GET['rev'];
    $link= mysqli_connect($host, $user, $password, $database);
    $query="select * from tyrereviews where review_id='$id'";
    $result=mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <style>
            table{
                margin: 20px;
                border: 1px solid #ccc;
            }
            table a{
                display: inline-block;
                background:#0077e6;
                padding: 10px;
                color: white;
                border-radius:5px;
                font-size: 12px;
            }
            table button{
                border:none;
                padding: 10px;
                color: white;
                border-radius:5px;
                font-size: 12px;
            }
            table a:hover{
                text-decoration: none;
            }
            thead th{
                padding: 10px;
                border: 1px solid #999;
                background: #000;
                color:#fff;
            }
            tbody td{
                padding: 8px;
                border: 1px solid #666;
            }
            #navigate,#colsm{
                height: 650px;
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
            .notify{
                margin: 20px 5%;
                width: 30%;
                float: left;
                background: #fff;
                padding: 20px;
                /*box-shadow: #666 4px 3px 3px;*/
              border:1px solid #ccc;
                border-radius: 5px;
            }
            .icons,.labels{
                width: 50%;
                float:left;
            }
            .icons{
                border-radius: 10px;
            }
            .num,.labelNum{
                display: block;
                font-weight: bold;
                text-indent: 8px;
            }
            .num{
                font-size: 50px;
                
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
            
            @media screen and (max-width:960px){
                .notify{
                    width:100%;
                    margin: 10px 1%;
                }
                table{
                    margin: 0px;
                }
                table th{
                    padding:3px;
                }
                table td{
                    padding:3px;
                }
                table button{
                    padding: 3px;
                }
                table a{
                    padding: 3px;
                }
                #colsm{
                    padding: 0px;
                }
                
            }
        </style>

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
                        <li><a href="viewposts.php"><span class="fa fa-eye"></span> View Posts</a></li>
                        <li class="active"><a href="customerreviews.php"><span class="fa fa-users"></span> View Tyre Reviews</a></li>                        
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
                
                <div class="col-sm-10" id="colsm" style="overflow:scroll">

                    <form method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Edit Customer Review</h4>
                            </div>
                        </div>                        
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-sm-6">
                                <textarea name="myreview" rows="15" style="width:100%;resize:none;border:1px solid #ccc;"><?php echo $row['myreviews'];?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input name="update" type="submit" value="UPDATE" class="btn btn-primary">
                            </div>
                        </div>                        
                    </form>
   
<?php                    
        if(isset($_POST['update'])){
            $review= mysqli_real_escape_string($link,$_POST['myreview']);
            $query="update tyrereviews set myreviews='$review' where review_id='$id'";
            if(mysqli_query($link, $query)){
                ?>
                    <div class="alert alert-success">
                        Update Successful... Click to go<a href="customerreviews.php"> back to reviews</a>
                    </div>
                    <?php
                
            }else{
                ?>
                    <div class="alert alert-danger">
                        Update Failed
                    </div>
                    <?php
                
            }
            
        }
        mysqli_close($link);
    
?>                                        

                
                </div>
                    
                    


                    
                    
                    
                </div>
                
                
                
                
            </div>
        </div>
        
        
        <div id="spinnerCon">
            <div id="spin">
                
            </div>
        </div>
    </body>
</html>
                <script>
                    function approve(event){
                            var xmlhttp;
                            if(window.XMLHttpRequest){
                                            xmlhttp = new XMLHttpRequest();// object for updates

                                    }
		
                            else{
                                            xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                                    }
	xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById("message").innerHTML = xmlhttp.responseText;
                        }//end if		
		}
		
  		
        
        val=event.target.id;        

                data = 'text='+ val;// store the array of values inside variable text 
                xmlhttp.open('POST','approve.php',true);// open the file
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(data); //send the parameters
//                window.location.reload();
 
			

                    }
                    
                    function pending(event){
                            var xmlhttp;
                            if(window.XMLHttpRequest){
                                            xmlhttp = new XMLHttpRequest();// object for updates

                                    }
		
                            else{
                                            xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                                    }
	xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById("message").innerHTML = xmlhttp.responseText;
                        }//end if		
		}
		
  		
        
        val=event.target.id;        

                data = 'text='+ val;// store the array of values inside variable text 
                xmlhttp.open('POST','pending.php',true);// open the file
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(data); //send the parameters
//                window.location.reload();
 
			

                    }
                    
                    
                    
                    
            window.addEventListener('load',function(){
                        window.setTimeout(function(){
                          document.getElementById('spinnerCon').style.display="none";  
                    },1000);  
                });                    
                    
                </script>
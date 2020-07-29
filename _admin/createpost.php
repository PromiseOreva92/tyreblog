<?php
	require('includes.php');
	session_start();
        ob_start();
	if($_SESSION['login_time']=="" && $_SESSION['login_id']=="" && $_SESSION['login_pass']==""){
			header('location:index.php');
	}
	
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
        <title>Create Post</title>
        <style>
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
                box-shadow: #666 4px 3px 3px;
               /* border:1px solid #999;*/
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
            #writeup{
                width:70%;
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
                

                
  /*  style for the form and its container*/   
     label{
         display: block;
         width: 100%;
         /*border: 1px solid black;*/
         
         
     }
     input,select{
         width: 100%;
         box-sizing:border-box;
         padding: 10px;
         margin-bottom: 10px;
         border-radius:5px;
         border:1px solid #999;
         
     }
     textarea{
         border-radius:5px;
         border:1px solid #999;
         padding: 10px;
     }
     #formCon{
         background: white;
         width:50%;
         margin: 2% 10%;
         padding: 2%;
         border:1px solid #ccc;
     }
                
      #submit{
          background:#007fff;
          color:#fff;
          font-weight: bold;
          border-radius: 5px;
          border:none;
          padding:14px;
      }   
      
      button{
          width:40%;
          padding: 10px;
          background:#000;
          color:#fff;
          font-weight: bold;
          border-radius: 5px;
          border:none;
          margin-bottom:10px;
          margin-left: 5%;
      }
                
                
            #spinnerCon{
                background: rgba(0,0,0,0.7);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
            }
            
            #modal{
                background: rgba(0,0,0,0.7);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
                display: none;
            }
            
            @media screen and (max-width:960px){
                #formCon{
                    margin: 20px 1%;
                    width: 100%;
                }  
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
                        <li class="active"><a href="createpost.php" style="font-weight:bold;font-family: sans-serif"><span class="fa fa-edit"></span> Write Post</a></li>
                        <li><a href="viewposts.php"><span class="fa fa-eye"></span> View Posts</a></li>
                        <li><a href="customerreviews.php"><span class="fa fa-users"></span> View Tyre Reviews</a></li>                        
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
                
                <div class="col-sm-10" id="colsm" style="overflow-y:auto">
                    <form id="writeup" method="post" enctype="multipart/form-data"> 
                        <label style="font-weight:bold; margin-bottom:5px;display:block">Post Author</label>
                         <input type="text" name="postauthor" required="required"> 
                        <label style="font-weight:bold; margin-bottom:5px;display:block">Select Categories</label>  
                        <select name="categories">
									<option disabled="disabled" class="group">Aviation</option>
                                    <option value="Commercial Aircraft Tyres">Commercial Aircraft Tyres</option>
                                    <option value="General Aviation Tyres">General Aviation Tyres</option>
                                    <option value="Military Aircraft Tyres">Military Aircraft Tyres</option> 
                                    
                                    <option disabled="disabled" class="group">Tyres</option>                                 
                                    <option value="All Season Tyres">All Season Tyres</option>
                                    <option value="All Terrain Tyres">All Terrain Tyres</option>
                                    <option value="Car/Mme-Van Tyres">Car/Mme-Van Tyres</option>
                                    <option value="Crossover/CUV Tyres">Crossover/CUV Tyres</option>
                                    <option value="Fuel Saver Tyres">Fuel Saver Tyres</option>
                                    <option value="Summer Tyres">Summer Tyres</option>
                                    <option value="SUV/4X4 Tyres">SUV/4X4 Tyres</option>
                                    <option value="Light Truck Tyres">Light Truck Tyres</option>
                                    <option value="Towing Tyres">Towing Tyres</option>
                                    <option value="Sports Performance Tyres">Sports Performance Tyres</option>
                                    <option value="Run On Flat Tyres">Run On Flat Tyres</option>
                                    <option value="Winter Tyres">Winter Tyres</option>
                                    
                                    <option disabled="disabled" class="group">Off-The-Road</option>
                                    <option value="Mobility lifestyle">Agricultural Tyres</option>
                                    <option value="Construction Tyres">Construction Tyres</option>
                                    <option value="Forestry Tyres">Forestry Tyres</option>
                                    <option value="Industrial Tyres">Industrial Tyres</option>
                                    <option value="ATV-UTV and Consumer Tyres Tyres">ATV-UTV and Consumer Tyres Tyres</option>
                                    <option value="Minning Tyres">Minning Tyres</option>
                                    
                                    <option disabled="disabled" class="group">Motorcycle</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="American Cruiser">American Cruiser</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Touring">Touring</option>     
                                    <option value="Off Road">Off Road</option>
                                    <option value="Race">Race</option>
                                    <option value="Scooter">Scooter</option>
                                    
                                    <option disabled="disabled" class="group">Racing</option>
                                    <option value="Drag">Drag</option>
                                    <option value="Sports Car and Vintage">Sports Car and Vintage</option>
                                    <option value="FSAE">FSAE</option>
                                    
                                    <option value="Truck and Bus Tyres">Truck and Bus Tyres</option>
                                    
                                    <option value="Performance Tyres">Performance Tyres</option>
                                    
                                    <option value="High Performance Tyres">High Performance Tyres</option>
                                    
                                    <option value="Ultra-High Performance Tyre">Ultra-High Performance Tyre</option>
                                    
                                    <option value="Car Review">Car Review</option>
                                    
                                    <option value="Tyre Review">Tyre Review</option>
                                    
                                    <option disabled="disabled" class="group">Customer's Review</option>
                                    <option value="Cars">Cars</option>
                                    <option value="Tyres">Tyres</option>
                                    
                                    <option value="Research and Advice">Research and Advice</option>
                                    
									<option value="Tyre Technology">Tyre Technology</option>
                                    
                                    <option value="Legistlation">Legistlation</option>
                                    
                                    <option value="Fuel">Fuel</option>
                                    
                                    <option value="Roads">Roads</option>
                                    
                                    <option value="Car and Maintainance">Car and Maintainance</option>
                                    
                                    <option value="Industry News">Industry News</option>
                                    
                                    <option value="Safety">Safety</option>
                                    
                                    <option value="Tyre Pressure Monitoring System(TPMS)">Tyre Pressure Monitoring System(TPMS)</option>

                        </select>
                       
                         <label style="font-weight:bold; margin-bottom:5px;display:block">Post Title</label>
                         <input type="text" name="posttopic" required="required">
                         <label style="font-weight:bold; margin-bottom:5px;display:block">Post Body</label>
                         <textarea rows="10" cols="60" placeholder="Create Post Here" id="postbody" required="required" 
                        style="resize:none;box-sizing:border-box; display:block;margin-bottom:10px;width:100%;" 
                        name="postbody"></textarea>
                        <input type="submit" name="submit" id="submit" value="Create Post">
                         

                </form>
                    
                    <?php
                    
                     if(isset($_POST['submit'])){

                    require '../includes/inc.php';
                    $link =  new mysqli($host, $user, $password, $database);
                    $post_id = time();
                    $author =  mysqli_real_escape_string($link,$_POST['postauthor']);
                    if(isset($_POST['categories'])){
                    echo $category = mysqli_real_escape_string($link,$_POST['categories']);
                    }
                    $topic =  mysqli_real_escape_string($link,$_POST['posttopic']);
                    $body = mysqli_real_escape_string($link,$_POST['postbody']);
                    $date = date('l\, jS F Y');
                    $time = date('h:i A');
                    
                     $query = "insert into posts values('$post_id','$author','$topic','$category',
			   			'$body','$date','$time')";
                     if($link->query($query)){
 
                        header("location:addmedia.php?post_id=".$post_id);
                         
                     
                     }                     else{
                         echo 'failed';
                     }
                     
                       
                         
                        }
                    ?>
                </div>
            </div>
            
        </div>
        <div id="modal">
            <div id="msg"  style="width:30%;background:black;margin-left:35%;margin-top:200px;border-radius:10px;padding:10px">
                <p style="font-size:18px;text-align:center;color:#fff;width:70%;display:inline-block">Add Multimedia</p>
                <h4 style="font-size:24px;text-align:center;color:#fff;width:25%;display:inline-block;cursor:pointer;">&times;</h4>
                <button id="addimages" style="background: #cc0033"><span class="fa fa-image"></span> Add Images</button>
                <button id="addvideo" style="background: #006699;" type="button"><span class="fa fa-video-camera"></span> Add Video</button>
                
            </div>
        </div>
    </body>
</html>

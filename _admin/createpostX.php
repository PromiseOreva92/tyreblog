<?php
	require('includes.php');
	session_start();
	if($_SESSION['login_time']=="" && $_SESSION['login_id']=="" && $_SESSION['login_pass']==""){
			header('location:index.php');
	}
	
?>
<!DOCTYPE html>
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
         
     }
     
     #formCon{
         background: white;
         width:50%;
         margin: 2% 10%;
         padding: 2%;
         border:1px solid #ccc;
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

            <div id="formCon">
            
                <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input multiple="multiple" type="file" name="uploads" id="uploads" style="background:#DADADA;"/>
                         <input type="submit" name="submit2" id="submit2" value="upload" />
                 </form>
                <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
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

<?php

	function resizeImage($resourceType,$image_width,$image_height){
		if($image_width>$image_height){
			$resizeWidth=450;
			$resizeHeight=300;			
		}else{
			$resizeWidth=350;
			$resizeHeight=450;
		}
		$imageLayer= imagecreatetruecolor($resizeWidth,$resizeHeight);//create a true color image
		imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight,$image_width,$image_height);//copyand resize part of image with image resampling
		return $imageLayer;	
	}
	
								
        if(isset($_POST['submit2'])){
		if(empty($_FILES['uploads']['name'])&&empty($_FILES['uploads']['size'])&&empty($_FILES['uploads']['type'])&&empty($_FILES['uploads']['type']))
				{
					
					
				}
				else{
					$filename = $_FILES['uploads']['name'];
					$filesize = $_FILES['uploads']['size'];
					$filetype = $_FILES['uploads']['type'];
					$tmp = $_FILES['uploads']['tmp_name'];
					//$tmp2 = base64_encode(addslashes(file_get_contents($tmp)));
					$filename2 = addslashes($filename);
					$path = "images/";
					
					
					$sourceProperties=getimagesize($tmp);//returns array of image properties(size)
					$uploadImageType = $sourceProperties[2];//image type
					$sourceImageWidth=$sourceProperties[0];//image width
					$sourceImageHeight=$sourceProperties[1];//image height									
					$fileExt=pathinfo($filename,PATHINFO_EXTENSION);//get extension									

					$resizeFileName=time();//timestamp for naming
					
					if($filesize<5242880){


                                            switch($uploadImageType){
                                                    case IMAGETYPE_JPEG:
                                                            $resourceType = imagecreatefromjpeg($tmp);
                                                            if($sourceImageWidth>500 || $sourceImageHeight>500){
                                                            $imageLayer= resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                                                            imagejpeg($imageLayer,$path."thump_".$resizeFileName.".".$fileExt);
                                                            $url= $path."thump_".$resizeFileName.".".$fileExt;

                                                            $filename2= addslashes($url);

                                                                    echo "<h1 style='font-weight:bold;cursor:pointer;' id='close'>
                                                                    <a href='deletepix.php?item=".$url."' style='text-decoration:none;color:red'>&times;</a>
                                                                    </h1>";
                                                                    echo "<img src=$url id='img'>";
                                                                    echo "<input type='hidden' name='name' id='name' value=$filename2 />";
                                                            }
                                                            else{
                                                                    move_uploaded_file($tmp,$path.$filename);
                                                                    $url= $path.$filename;

                                                                    $filename2= addslashes($url);

                                                                    echo "<h1 style='font-weight:bold;cursor:pointer;' id='close'>
                                                                    <a href='deletepix.php?item=".$url."' style='text-decoration:none;color:red'>&times;</a>
                                                                    </h1>";
                                                                    echo "<img src=$url id='img'>";
                                                                    echo "<input type='hidden' name='name' id='name' value=$filename2 />";

                                                            }
                                                            break;
                                            }


                            }

                            else{
                                            echo "file size must be less than 5MB";
                                    }


                    }//end isset

}
                         



?>

                         <input type="submit" name="submit1" id="submit1" value="Create Post">
                         
                    </form>
            </div>                    
                    
                                    
                    
                </div>
            </div>
        </div>
        
        
<?php
	require('includes.php');
        
		 if(isset($_POST['submit1'])){
                     
                     
            if($link= mysqli_connect($host, $user, $password, $database)){
               
                        $author = 'ADMIN';
                        $category = mysqli_real_escape_string($link,$_POST['categories']);
                        $topic =  mysqli_real_escape_string($link,$_POST['posttopic']);
                        $body = mysqli_real_escape_string($link,$_POST['postbody']);
                        $date = date('l\, jS F Y');
                        $time = date('h:i A');
			//$file = $_POST['file'];
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			else{
					$name='';
				}
			
            
                        $query = "insert into posts values(NULL,'$author','$topic','$category',
			   			'$body','$date','$time','$name')";
   
               if(mysqli_query($link, $query)) {
                   echo "<script>alert('successful')</script>";
				   

               }
               else{
                   echo "<script>alert('failed')</script>";
				   
               }
                              
                     
            }

                     
        }
		
		
function fetch(){
	$subject = "Firmgriptire News";
	$message = "You have successfully subscribed for alert post on firmgriptire news";
	$fetch = "select email from subscribers";
	$results = mysqli_query($link, $fetch);
	while($row =mysqli_fetch_array($results)){
		mail($row['email'],$subject,$message);	
	}
	
}
    
    
    ?>       

        
        
        <div id="spinnerCon">
            <div id="spin">
                
            </div>
        </div>

    </body>
</html>

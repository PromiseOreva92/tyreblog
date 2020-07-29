<?php
	require('includes.php');
	session_start();
	if($_SESSION['login_time']=="" && $_SESSION['login_id']=="" && $_SESSION['login_pass']==""){
			header('location:index.php');
	}
        //require '../includes/inc.php';
        $post_id =$_GET['post_id'];
        
        $sql = "select post_topic, post_category, post_body from posts where post_id='$post_id'";
        $link = new mysqli($host, $user, $password, $database);
        $result=$link->query($sql);
        $row = mysqli_fetch_array($result);

                
        
        
	
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
        <script src="../jquery-ui-1.12.1/external/jquery/jquery.js" type="text/javascript"></script>
        <link href="../jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="../jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
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
      
      button,#upload,#upload2{
          width:40%;
          padding: 10px;
          background:#000;
          color:#fff;
          font-weight: bold;
          border-radius: 5px;
          border:none;
          margin-bottom:10px; 
      }

            #modal1,#modal2{
                background: rgba(0,0,0,0.9);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
                display: none;
                color:white;
                
            }      
              
            #image_uploads,#video_uploads{
                width:20%;
/*                background: #003eff;*/
                opacity: 0;
            }
            #spinnerCon{
                background: rgba(0,0,0,0.7);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
            }
            
            .gallery{
                border:1px solid #333;
                overflow-y: auto;
                max-height: 200px;
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
                
                <div class="col-sm-10" id="colsm" style="overflow-y:auto;background:white;">
                    <div class="row">
                        <div class="col-sm-12" style="padding:5px">
                            <span class='fa fa-edit' style='color:#fff;background: #cc6600;padding:5px'></span>
                            <span style="font-family:sans-serif;font-size:16px;font-weight:bold; ">Title: </span>
                            <span style="font-family:sans-serif;font-size:16px;"><?php echo $row['post_topic'];  ?></span>
                        </div>
                        <div class="col-sm-12" style="padding:5px">
                            <span style="font-family:sans-serif;font-size:16px;font-weight:bold;">Category: </span>
                            <span style="font-family:sans-serif;font-size:16px;"><?php echo $row['post_category'];  ?></span>
                        </div>
                        
                    </div>

                    <div style="width:50%">
                    <button type="button" id="addimages" style="background: #cc0033" onclick="document.getElementById('modal1').style.display='block'">
                    <span class="fa fa-image"></span> Add Images
                    </button>
                    <button id="addvideo" style="background: #006699;" type="button" onclick="document.getElementById('modal2').style.display='block'">
                        <span class="fa fa-video-camera"></span> Add Video
                    </button>
                        
                        
                    </div>
                    
                    
                    

                
                            <?php 
	function resizeImage($resourceType,$image_width,$image_height){
		if($image_width>$image_height){
			$resizeWidth=450;
			$resizeHeight=300;			
		}else{
			$resizeWidth=350;
			$resizeHeight=450;
		}
		$imageLayer= imagecreatetruecolor($resizeWidth,$resizeHeight);
		imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight,$image_width,$image_height);
		return $imageLayer;	
	}
        
        
                            
            if(isset($_POST['submit2'])){
                $link =  new mysqli($host, $user, $password, $database); 
                $id = $_GET['post_id'];
                $dir="images/";
                $allowTypes= array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF');
                if(!empty(array_filter($_FILES['image_uploads']['name']))){
                    foreach($_FILES['image_uploads']['name'] as $key=>$val){
                            $filename =  basename($_FILES['image_uploads']['name'][$key]);
                            $tmp = $_FILES['image_uploads']['tmp_name'][$key];
                            $targetFilePath =$dir.$filename;
                            
                            $fileExt = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                            $sourceProperties=getimagesize($tmp);//returns array of image properties(size)
                            $uploadImageType = $sourceProperties[2];//image type
                            $sourceImageWidth=$sourceProperties[0];//image width
                            $sourceImageHeight=$sourceProperties[1];//image height
                            
                            $resizeFileName=time();//timestamp for naming
                            if(in_array($fileExt, $allowTypes)){
                                
                                
                                switch($uploadImageType){
                                        case IMAGETYPE_JPEG:
                                            $resourceType = imagecreatefromjpeg($tmp);
                                            if($sourceImageWidth>500 || $sourceImageHeight>500){
                                                    $imageLayer= resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                                                    $filename= "thump_".$resizeFileName.".".$fileExt;
                                                    imagejpeg($imageLayer,$dir.$filename);
                                                    $query="insert into media values(NULL,'$id','$filename','image')";
                                                    $link->query($query);
                                                    ?>
                                                    <div class="alert alert-success" role="alert">
                                                      Uploaded Success
                                                    </div>                      
                                                    <?php
                                                    
                                            }
                                            else{
                                                    $newfilename= $resizeFileName.".".$fileExt;
                                                    
                                                    move_uploaded_file($tmp,$dir.$newfilename);
                                                    //rename($targetFilePath, $newfilename);
                                                    $query="insert into media values(NULL,'$id','$newfilename','image')";
                                                    $link->query($query);
                                                    //$url= $path.$filename;
                                                    //$filename2= addslashes($url);
                                            }
                                        break;
                                        case IMAGETYPE_PNG:   
                                            $resourceType = imagecreatefrompng($tmp);
                                            if($sourceImageWidth>500 || $sourceImageHeight>500){
                                                    $imageLayer= resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                                                    imagepng($imageLayer,$path."thump_".$resizeFileName.".".$fileExt);
                                                    $url= $dir."thump_".$resizeFileName.".".$fileExt;

                                                    $filename2= addslashes($url);
                                            }
                                            else{
                                                    move_uploaded_file($tmp,$dir.$filename);
                                                    //$url= $path.$filename;

                                                    $filename2= addslashes($url);
                                            }
                                        break; 
                                        case IMAGETYPE_GIF:
                                            $resourceType = imagecreatefromgif($tmp);
                                            if($sourceImageWidth>500 || $sourceImageHeight>500){
                                                    $imageLayer= resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                                                    imagegif($imageLayer,$path."thump_".$resizeFileName.".".$fileExt);
                                                    $url= $dir."thump_".$resizeFileName.".".$fileExt;

                                                    $filename2= addslashes($url);
                                            }
                                            else{
                                                    move_uploaded_file($tmp,$dir.$filename);
                                                    //$url= $path.$filename;

                                                    $filename2= addslashes($url);
                                            }
                                        break;                                         
                                }
                               

                            }else{
                                //error upload type
                                ?>
                    
                                <div class="alert alert-danger" role="alert">
                                  File extension not supported
                                </div>                    

                    <?php
                                
                            }
                    }
                    
                }
                
        $sql2 = "select filename from media where post_id='$post_id'";
        $result2=$link->query($sql2);
                      
        while ($row2 = mysqli_fetch_array($result2)){

         ?>
         <img src="<?php echo "images/".$row2['filename']; ?>" style="width:200px;height:200px;margin:5px;">
         <?php 
            }
                    
            
       }
            
            ?>
         
 <?php
    if(isset($_POST['submit3'])){
            $size=$_FILES['video_uploads']['size']."<br>";
            $link =  new mysqli($host, $user, $password, $database); 
            $id = $_GET['post_id'];
            $dir="videos/";
            $allowTypes= array('mp4','3gp','avi','MP4','3GP','AVI');
            $filename = $_FILES['video_uploads']['name'];
            $targetFilePath =$dir.$filename;
            $tmp=$_FILES['video_uploads']['tmp_name'];
            $fileExt = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  
            $resizeFileName=time();
            if(in_array($fileExt, $allowTypes)){
                if($size<5242880){
                $newfilename= $resizeFileName.".".$fileExt;
                move_uploaded_file($tmp,$dir.$newfilename);
                echo $newfilename;
                $query="insert into media values(NULL,'$id','$newfilename','video')";
                $link->query($query); 
                    ?>
         
                    <div class="alert alert-success" role="alert">
                      Uploaded Success
                    </div> 
                <?php                
                }
                else{
                    ?>
         
                <div class="alert alert-danger" role="alert">
                  File size must not be larger than 5mb
                </div>
         <?php
                }
                
            }
            else {
         ?>
         
                <div class="alert alert-danger" role="alert">
                  File format not supported
                </div>
         <?php                
            }
            
    }
 ?>
                    
                </div>
            </div>
            
        </div>
        
        
        <div id="modal1">
            <h1 style="font-size:50px;
                color:white;
                width: 30%;
                cursor:pointer;
                text-align:right;
                margin-left:50%;" onclick="document.getElementById('modal1').style.display='none'">&times;</h1>
            <div class="gallery"></div>
            <form method="post"  enctype="multipart/form-data">
                <div>
                    <label for="image_uploads" style="width:50%;cursor:pointer;font-weight:bold;color:white;padding:10px;"><span class="fa fa-arrow-up"></span> Choose images to upload (PNG, JPG)</label>
                    <input type="file" id="image_uploads" name="image_uploads[]" required="required" accept=".jpg, .jpeg, .png" multiple>
                </div>
                <input type="submit" name="submit2" id="upload" value="UPLOAD FILE"  style="background: #006acc;">
            </form>
            

<script>
    
$(function() {
    // Multiple images preview in browser
    input=document.getElementById('image_uploads');
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML("<img width='200' height='200' style='margin:10px;'>")).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#image_uploads').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
        </div>     
        
        
        <div id="modal2">
            <h1 style="font-size:50px;
                color:white;
                width: 30%;
                cursor:pointer;
                text-align:right;
                margin-left:50%;" onclick="document.getElementById('modal2').style.display='none'">&times;</h1>
            <div class="gallery"></div>
            <form method="post"  enctype="multipart/form-data" onsubmit="return validate()">
                <div>
                    <label for="video_uploads" style="width:50%;cursor:pointer;font-weight:bold;color:white;padding:10px;"><span class="fa fa-arrow-up"></span> Choose videos to upload (MP4, 3GP, AVI)</label>
                  <input type="file" id="video_uploads" name="video_uploads" accept=".mp4, .3gp, .avi">
                </div>
                <input type="submit" name="submit3" id="upload2" value="UPLOAD FILE"  style="background: #006acc;">
            </form>


<script>
//    vid=document.getElementById('video_uploads')
//    function validate(){
//       alert(vid.files[1].size) 
//       return false;
//    }
$(function() {
    // Multiple images preview in browser
    input=document.getElementById('video_uploads');
    
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                  $($.parseHTML("<video height='300' loop='loop' controls='controls' style='margin:10px;'></video>")).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                   
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#video_uploads').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});


</script>
        </div>           
    </body>
</html>

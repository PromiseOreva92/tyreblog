<?php
session_start();
ob_start();
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
        <script src="../jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../jquery-ui-1.12.1/external/jquery/jquery.js"></script>

        
        
        <title></title>
        <style>
            #modalFeedback{
                position: fixed;
                top:0px;
                left:0px;
                background: rgba(0,0,0,0.7);
                height: 100%;
                width:100%;
                display:none;
            }
            #message{
                background: black;
                color:white;
                display:inline-block;
                width:40%;
                margin: 100px 25%;
                padding:2%;
                border-radius: 10px;
                    
            }
            #con{
                background: rgba(0,0,0,0.6);
                height: 200px;
                text-align: center;
                color:white;                
            }

            
            

            .post-topic{
                font-weight: bold;
                padding: 10px;
                background:#eceaea;
               /*background: #333;*/
               color: black;
            }
            
            .post-category{
                padding: 2px;
                font-weight: bold;
            }
            #img-con{
                /*border: 1px solid #cccccc;*/
                overflow: hidden;
                display: inline-block;
                border-radius: 10px;
                width: 70%;
            }
            .postImage{
                display: inline-block;
                
            }
            .postImage:hover{
                transform: scale(1.1);
                transition-duration:2s;
            }
            .post-body{
                margin: 5px;
                text-align: justify;
            }
            .post-date{
                font-size: 14px;
                font-weight: bold;
                text-align: right;
                margin: 10px;
                color: blue;
            }
            .post-comment{
                color:#990000;
                
            }
            input{
                border: none;
                padding: 6px;
                width:100%;
            }
            #advert{

            }
            .ad:hover{
                opacity: 0.7;
            }            

            #nav-menu,#sitename{
                background:#004479;
                color: white;
            }
            #nav-menu a:hover{
                text-decoration: none;
            }
#sitename a{
    color: white;
    font-family:"Brush Script MT";
    display:block;
/*    font-weight: bold;*/
    font-size: 24px;
    text-align: center;
}
#sitename a:hover{
    text-decoration: none;
}
#footer a{
    font-weight: bold;
}
#footer a:hover{
    text-decoration: none;
} 

#cpy a:hover{
    text-decoration: none;
}
            
            
            @media screen and (max-width:960px){
                *{
                    margin: 0px;
                    padding: 0px;
                        
                }
                #cat{
                    width:100%;
                }
                .post{
                    width: 100%;
                    margin: 3px 0px;
                    border:none;
                }
                #img-con{
                    width: 100%;
                    overflow: hidden;
                }
                
                .comment{
                    padding:10px 0px !important;
                    width: auto;
                    display: inline-block;
                }
                
                .post-date{
                  text-align: left;  
                }
                
                #aside{
                   width: 100%; 
                }
                #featuredpost{
                    width: 90%;
                }
                #advert{
                    width: 100%;
                }
                
#footer a{
    font-size: 12px;
}
 #nav-menu .col-sm-2{
     
 }
#nav-menu .col-sm-2 a{
    font-size: 12px !important;
    display: block;
    text-align: center;
}
#nav-menu .col-sm-2{
    padding: 10px 8px;
    width: 32%;
    float:left;
} 
#nav-menu  .col-sm-1{
    width:10%;
    float: left;
}
#footer a{
    font-size: 12px;
}
#cpy{
   font-size: 12px !important; 
}
#nav-menu{
    padding-bottom: 0px !important;
}
                
                
            }
        </style>
    </head>

    <body>
       <div class="container-fluid">
            <div class="row" id="sitename" >
                <div class="col-sm-2">
                    <a href="index.php">
                      MAMOPOS  
                    </a>
                </div>
            </div>          
            <div  id="nav-menu" class="row" style="padding-bottom:10px;">
 
                    <div  class="col-sm-2">
                        <a href="#" style="font-weight:bold;color: #fff">
<!--                         <span class="fa fa-shopping-cart" style="font-weight:bold;font-size:20px;cursor:pointer;"></span>   -->
                            Shop For Tyres
                        </a>
                    </div>
                    <div  class="col-sm-2">
                        <a href="#" style="font-weight:bold;color: #fff">
<!--                            <span class="fa fa-edit" style="font-weight:bold;font-size:20px;cursor:pointer;"></span>-->
                            Subscribe
                        </a>
                    </div>  
                    <div  class="col-sm-2">
                        <a href="#" style="font-weight:bold;color: #fff">
<!--                            <span class="fa fa-user" style="font-weight:bold;font-size:20px;cursor:pointer;"></span>-->
                            About Author
                        </a>
                    </div>                    
            </div>
          

            <div class="row">
                <div class="col-sm-12">
                    <button onclick="history.back()" 
                            style="padding:8px;border:none;background:#FFF;color:#3333ff;font-size:18px;cursor:pointer" 
                    class="fa fa-arrow-left">Back to Main Page</button>
                    
                </div>
            </div>

           
           
           <div class="row" id="body">
               <div class="col-sm-6" id="left">
			<?php
            include_once('includes.php');
            if(isset($_GET['text'])){
            $text =$_GET['text'];
            
            
                    if($con = mysqli_connect($host,$user,$password,$database)){
                        
                            $sql = "select * from posts where post_id='$text'";
                            $sql2= "select * from ".$database.".media where post_id='$text'";
                            if($result = mysqli_query($con,$sql)){
                                $result2 = mysqli_query($con,$sql2); 
                                $row = mysqli_fetch_array($result);
                                ?>
                            <div class='post'>
                                   <h4 class='post-topic'>
                                    <h4 class='post-topic' style="font-weight:bold">
                                        <span class='fa fa-edit' style='color:#fff;background:orange;padding:3px'></span>
                                        <?php echo $row['post_topic']?>
                                    </h4>                            
                                    <h5 class='post-category' style="font-weight:bold"> 
                                        <span style='color:blue'>Category:</span>
                                        <?php echo $row['post_category']?>
                                    </h5>  
                                       
                                    <?php
                               while($row2 = mysqli_fetch_array($result2)){
                                   if($row2['filetype']=='image'){
                                       
                                       ?>
                                        <div id='img-con'>
                                             <img src=<?php echo "images/".$row2["filename"];?> class='postImage' id="<?php echo $row2['filename']?>" onclick='showimagemodal(event)'>
                                        </div>
                                    <?php
                                    }
                                    if($row2['filetype']=='video'){
                                    ?>  
                                        <div id='vid-con'>
                                            <video controls='controls' src=<?php echo "videos/".$row2['filename']?> id='<?php echo $row2['filename']?>'></video>
                                        </div>
                                   <?php
                                   
                                    }
                                                
                                }
                                
                                ?> 
                                       
                                        <div class='post-body' id="<?php echo $row['post_id']?>">
                                            <?php echo $row['post_body']?>
                                        </div>
                                       
            		<div id='shareIcons'>
    
                                    <span id="<?php echo $row['post_id']?>" class='fa fa-facebook-square' 
                                  style='font-size:40px;
                                  background:#fff;
                                  color:#0066ff;
                                  cursor:pointer'
                                  onclick='shares(event)'>
                                    </span> 

                                    <span id="<?php $row['post_id']?>" class='fa fa-linkedin-square' 
                                          style='font-size:40px;
                                          color:#006699;
                                          cursor:pointer;
                                          margin-left:10px;'
                                  onclick='shares(event)'>
                                    </span>

                                    <a href='https://twitter.com/share' 
                                       data-text="<?php echo $row['post_body']?>" 
                                       data-via='premierrecord'
                                       data-hashtags='premierrecord'style='display:inline-block'>
        
                            <span id="<?php echo $row['post_id']?>" 
                                   class='fa fa-twitter-square' 
                                   style='font-size:40px;
                                   color:#3399ff;
                                   cursor:pointer;
                                   margin-left:10px;'>

                              <script async src='//platform.twitter.com/widget.js' charset='utf-8'></script>

                          </span>
    
                                    </a>
                                </div>	

                              
                            <form method='post' enctype='multipart/form-data'>
                            <label>WHAT IS ON YOUR MIND?</label>
                            <input type='hidden' name='id'  value='<?php echo $text?>' required="required"/>
                             <div style="border:1px solid #666;width:90%;display:inline-block;border-radius:5px;">
                                 <div class="icn" style="width:5%;float:left;">
                                     <span class="fa fa-user" style="font-size:24px;padding:3px;"></span>
                                 </div>
                                 <div style="width:90%;float:left;">  
                                     <input type='text' name='name' placeholder='ENTER YOUR NAME' title='ENTER YOUR NAME' required="required"/>
                                </div>
                             </div>
                             <div style="border:1px solid #666;width:90%;display:inline-block;border-radius:5px;">
                                 <div class="icn" style="width:5%;float:left;">
                                     <span class="fa fa-envelope" style="font-size:24px;padding:3px;"></span>
                                 </div>
                                 <div style="width:90%;float:left;">  
                                     <input type='text' name='email' placeholder='ENTER YOUR EMAIL' title='ENTER YOUR EMAIL' required="required"/>
                                </div>
                             </div>                             

                             
                              <textarea rows='8' name='comment' style='margin-bottom:10px;border:1px solid #666;padding:3px;resize:none;width:90%;border-radius:5px;' placeholder='ENTER YOUR COMMENT' title='ENTER YOUR COMMENT' required="required"></textarea>
                              <input type='submit' name="submit" value='submit' style="background: #0066ff;color:white;font-weight: bold;width:50%;border-radius:5px;padding:10px">
                                
                            </form>                            

<?php
                    }
                    
            }
            
            ?>
            
            
            <?php
                if(isset($_POST['submit'])){
                    
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $comment = $_POST['comment'];
                    $date = date('l\, jS F Y');
                    $time = date('h:i A');
                    if($link = mysqli_connect($host,$user,$password,$database)){
                            $query = "insert into comments values(NULL,'$id','$name','$email','$comment','$date','$time')";
                            if(mysqli_query($link,$query)){
                                echo "<script>alert('successful')</script>";
                                header('location:index.php');	
                            }
            
                        }	
                
                
                
                }
            ?>
            
               <div id="reactions" style="border:1px solid #ccc">
                   <h4 style="color:#333333;text-align:center">Viewer's Comments</h4>
            	<?php
                $sql3 = "select * from comments where post_id='$text'";
				$result3 = mysqli_query($con,$sql3);
				while($row3 = mysqli_fetch_array($result3)){
                                    
                                    ?>
		<h5 style='padding:7px;width:auto;display:inline-block'>
                    <span class='fa fa-user'></span> 
                        <?php echo $row3['author']?>
                </h5>
                   <p style='padding-left:7px;'>
                       <?php echo $row3['comment_body']?>
                   </p>
                   <?php
                   
                    }
		?>
            </div>               
               
               
                </div>
                   
               </div>
               
               <div class="col-sm-2"></div>
               
         <div class="col-sm-4">
 <?php
                require 'includes.php';
                $link=  mysqli_connect($host, $user, $password, $database) ;
                $comments=[];
                // get all post id
                $q = "select post_id from posts";
                $r1= mysqli_query($link,$q);
                while($rw=mysqli_fetch_array($r1)){

                        $q2 ="select * from comments where post_id = '$rw[0]'";
                        // Get number of comments for each post
                        $r2 =mysqli_num_rows(mysqli_query($link,$q2));
                        // store number of comments in array in $array[key]=value
                        $comments[$rw[0]]=$r2;

                }
// get max comment
$maxComment= max($comments);

if($maxComment==0){

}
else{
  //sort comments numbers from lowest to highest
 arsort($comments);
 // get the highest and return the key
$max=  key($comments);
    // use the key to fetch the post
    $myquery="select * from posts where post_id='$max'";
    $myresult=mysqli_query($link, $myquery);
    $myrow=mysqli_fetch_array($myresult);    
    //get all comments by this post
    $q2 ="select * from comments where post_id = '$max'";
    //return number of comments
     $res2 =mysqli_num_rows(mysqli_query($link,$q2));
     
    echo "<div id='featuredpost'>";
    echo "<h3 style='font-family:rockwell extra bold;font-weight:700;color:bl'>Featured Articles</h3>";
echo "<h4 id='featuredtopic'>"
    . "<span class='fa fa-edit' style='color:#fff;background:orange;padding:3px'>"
        . "</span>   ".$myrow['post_topic']."</h4>";
   echo "<h5 id='featuredcategory'> "
. "<span style='color:blue'>Category:</span> ".$myrow['post_category']."</h5>";

   if(!empty($myrow['filename'])){
       echo "<div id='featuredimgcon'>";
                   echo "<img src='".$myrow['filename']."' id='featuredImage'>";
       echo "</div>";

   }

       echo "<div class='featuredbody' id='fb'><p id='fbp' style='text-align:justify'>"
               .$myrow['post_body'].
               "</p></div>";

       echo "<h4 class='post-date'><span class='fa fa-calendar'></span>  ".$myrow['post_date']."</h4>";

       switch($res2){
               case 0:
                       echo "<span class='post-comment'>No comment</span>";
                       break;
               case 1:
                       echo "<span class='post-comment'>$res2 comment</span>";
                       break;
               default:
                       echo "<span class='post-comment'>$res2 comments</span>";
               }
               
               echo '</div>';
  


                                        echo "<script>
                                                window.addEventListener('load',featureddisplay);
                                                    
                                                    function featureddisplay(){
                                                    
                                                        obj = document.getElementById('fbp');
                                                           
                                                        if(obj.innerHTML.length > 150){
                                                        
                                                        newE = document.createElement('a');
                                                        newE.setAttribute('id','flink');
							newE.setAttribute('class','readmore');
                                                        
							newE.setAttribute('href','openpost.php?text=".$myrow['post_id']."');
                                                        newE.innerHTML='.......Read More';
                                                        str = obj.innerHTML.substring(0,300);
                                                        
                                                        obj.innerHTML=str;
                                                        obj.appendChild(newE);
                                                        }
                                                    }
                                                    </script>";
}
            }
 ?>
                
                        <div  id="advert" style="width:50%">
                            <h4 style="font-weight:bold;">Join us on Social Media</h4>
                            <h4 class="ad" style="background:#0066ff;color:white;border-radius:4px;padding:10px;text-align:center;"><span class="fa fa-facebook-official"></span> Facebook</h4>
                            <h4 class="ad" style="background:#3399ff;color:white;border-radius:4px;padding:10px;text-align:center;"><span class="fa fa-twitter"></span> Twitter</h4>
                            <h4 class="ad" style="background:purple;color:white;border-radius:4px;padding:10px;text-align:center;"><span class="fa fa-instagram"></span> Instagram</h4>
                            <h4 class="ad" style="background:#006699;color:white;border-radius:4px;padding:10px;text-align:center;"><span class="fa fa-linkedin-square"></span> Linkedin</h4>                            
                        </div>
                
                
                
                
                
            </div>
           
                </div>           
            </div>
        <div id="modalFeedback">
            <h1 style="color:#fff;font-weight:100;font-size:70px;clear:both;cursor:pointer;" 
                onclick="document.getElementById('modalFeedback').style.display='none'">&times;</h1>
            <div id="message">
                
            </div>
        </div>
    </body>
</html>
<script>
function shares(event){
			
			var xmlhttp;
			if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();// object for updates
				}
			else{
					xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
				}
					
			xmlhttp.onreadystatechange = function(){
											
                                                    if(xmlhttp.readyState==4 && xmlhttp.status==200){

                                                            //document.getElementById('cn').innerHTML = xmlhttp.responseText
                                                            document.getElementById('message').innerHTML = xmlhttp.responseText;
                                                            document.getElementById('modalFeedback').style.display="block";
                                                    }//end if
				
				}// end function
				d =event.target.id;
				data="text="+d;
				xmlhttp.open('POST','shareFB.php',true);
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(data);											
	
}
</script>    

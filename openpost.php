<?php
    ob_start();
if(isset($_GET['text'])){
    require 'includes/inc.php';
    $link = new mysqli($host, $user, $password, $database);
    $text =$_GET['text'];
    $query3= "select * from ".$database.".comments where post_id='$text'"; 
    $result3 = mysqli_query($link,$query3);
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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="jssocials-1.4.0/dist/jssocials-theme-flat.css" rel="stylesheet" type="text/css"/>
        <link href="jssocials-1.4.0/dist/jssocials.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jssocials-1.4.0/dist/jssocials.min.js"></script>       
        <title></title>
        <style>
            input{
                border: none;
                padding: 6px;
                width:100%;
            }
            .post-body{
                text-align: justify;
            } 
#nav-menu{
    background:#000;
    color: white;
}
#links a{
/*    color: white !important;*/
}
#links a:hover{
    text-decoration: none;
}
#sitename a{
    color: white;
    font-family: cursive;
/*    font-family:"Brush Script MT";*/
    display:block;
/*    font-weight: bold;*/
    font-size: 18px;
    text-indent: 10px;
    padding: 10px;
}
#sitename a:hover{
    text-decoration: none;
}
#footer a{
    font-weight: bold;
    font-size: 12px !important;
    color:#655118 !important;    
}
#footer a:hover{
    text-decoration: none;
} 
#footer h5{
    font-weight: bold;
}
#cpy a:hover{
    text-decoration: none;
}
@media screen and (max-width:960px){
    body{
        overflow-x: hidden
    }
 .sidenav li{
     width:100%;
 }
 #nav-menu .col-sm-2{
     padding: 10px 8px;
 }
 
.comment{
   padding:10px 0px !important;
   width: auto;
   display: inline-block;
}
#advert{
    width: 100% !important;
}
form span{
    font-size:18px !important;
    padding:0px !important;
}
.icn{
    width:10%;
}
.post-comment,.post-date{
    font-size: 12px !important;
}

#footer a{
    font-size: 12px;
}
#nav-menu .col-sm-2 a{
    font-size: 12px !important;
    display: block;
    text-align: center;
}
#nav-menu .col-sm-2{
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
            <div id="nav-menu" class="row" style="">
                <div class="col-sm-12"> 
                    
                <div class="row" id="sitename" >
                    <div class="col-sm-4">
                        <a href="index.php">
                          <span style="font-size:9px;">THE BLOG OF</span> firmgriptyre
                        </a>
                    </div>
                </div>
                
                <div class="row" id="links">
                    <div class="col-sm-1">
                    <span style="font-weight:bold;font-size:20px;cursor:pointer;color: #fff" onclick="openNav()">&#9776;</span>
                    </div>
 
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
                        <a href="consumertyreratings.php" style="font-weight:bold;color: #fff">
<!--                            <span class="fa fa-user" style="font-weight:bold;font-size:20px;cursor:pointer;"></span>-->
                            Review Your Tyre
                        </a>
                    </div> 
                    
                </div>
                    
                </div>
            </div>
                
          
            <div class="row" id="body" style="">
                
                <div class="col-sm-6" id="left" style="margin-bottom:20px;">
			<?php
            include_once('_admin/includes.php');
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
                                             <img src=<?php echo "_admin/images/".$row2["filename"];?> class='postImage' id="<?php echo $row2['filename']?>" onclick='showimagemodal(event)'>
                                        </div>
                                    <?php
                                    }
                                    if($row2['filetype']=='video'){
                                    ?>  
                                        <div id='vid-con'>
                                            <video controls='controls' src=<?php echo "_admin/videos/".$row2['filename']?> id='<?php echo $row2['filename']?>'></video>
                                        </div>
                                   <?php
                                   
                                    }
                                                
                                }
                                
                                ?> 
                                        <div class='post-body' id="<?php echo $row['post_id']?>">
                                            <?php echo $row['post_body']?>
                                        </div>
            					
  
                                
                                
                                
                                        <span style='margin-left:3%;display:block;font-weight:bold'>Share</span>
                                            <div id='shareIcons' style='text-align:center;
                                                                                  
                                                                                  border-bottom:1px solid #999;
                                                                                  border-top:1px solid #999;'>
                                                                                      
                                                
                                            </div>
                                        <script>

                                                $(function(){
                                                        linkurl = 'https://mamopos.com';
                                                        $('#shareIcons').jsSocials({
                                                                url:linkurl,
                                                                text:'<?php echo $row['post_topic']?>',
                                                                showLabel:false,
                                                                showCount:'inside',
                                                                shareIn:'popup',
                                                                shares: ['twitter', 'facebook', 'linkedin']
                                                                })


                                                        });
                                        </script>
                                    
                                         
                                         
                                         
                                
                                </div>    
                            <?php
                            
                            }
                            ?>

                            
                            
                            
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
                        echo $query = "insert into comments values(NULL,'$id','$name','$email','$comment','$date','$time')";
                            if(mysqli_query($link,$query)){
                                echo "<script>alert('successful')</script>";
                                header('location:index.php');	
                            }
            
                        }	
                
                
                
                }
            ?> 
                    
                <div class="row" style="max-height:400px;margin-left:3px;overflow-y:auto;margin-bottom:30px;border:1px solid #ccc;">
                    <div class="col-sm-12">
                <?php
                    
                    if(mysqli_num_rows($result3) > 0){
                        while($row3=  mysqli_fetch_array($result3)){
                        ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5><span class="fa fa-user" style="color:#0066ff;"></span> <?php echo $row3['author'];?> </h5>
                                    <p style="text-align:justify"><?php echo $row3['comment_body'];?></p>
                                </div>
                            </div>

                        <?php

                        }
                    }else{
                        ?>
                <h4>No Comments</h4>
                
                <?php
                    }
                    
                    
                ?>
                    </div>
                </div>

                    
                    
                    
                </div>
                

                
                <div class="col-sm-2"></div>
                
                <div class="col-sm-4" id="right" style="">
<!--                    <div id="featuredPostCon">-->
<!--                        <div >-->
                                <?php
                                require '_admin/includes.php';
                                $link=  mysqli_connect($host, $user, $password, $database) ;
                               $comments=[];
                               // get all post id
                               $q = "select post_id from posts";
                               $r1= mysqli_query($link,$q);

                               if(mysqli_num_rows($result)>0){
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
                                    ?>
                                <h3 style="font-weight:bold">Featured Articles</h3>
                                <div id='featuredpost' style="border-bottom:1px solid #666;">
                                       <h4 id='featuredtopic' style="font-weight:bold">
                                   <span class='fa fa-edit' style='color:#fff;background:orange;padding:3px'>
                                     </span> <?php echo $myrow['post_topic']?>
                                   </h4>
                                    <h5 id='featuredcategory' style="font-weight:bold">
                                  <span style='color:blue'>Category:</span>
                                      <?php echo $myrow['post_category']?>
                                  </h5>
                               <?php
                                  if(!empty($myrow['filename'])){
                                      echo "<div id='featuredimgcon'>";
                                                  echo "<img src='_admin/".$myrow['filename']."' id='featuredImage'>";
                                      echo "</div>";

                                  }
                               ?>
                                      <div class='featuredbody' id='fb'>
                                          <p id='fbp' style='text-align:justify'>
                                              <?php echo $myrow['post_body']?>
                                          </p>
                                      </div>
                <div style="display:inline-block;width:100%;">               
                                      <div class='post-date' style="padding:10px 0px;display:inline-block;width:60%;float:left;color: #0066ff;font-weight: bold">
                                          <span class='fa fa-calendar'></span> 
                                              <?php echo $myrow['post_date']?>
                                      </div>
                                      <div style="padding:10px 0px;display:inline-block;width:30%;text-align:right;float:right;color: #0066ff;font-weight: bold">
                                <?php
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
                                   ?>
                                      </div>

                </div>
                                       
                                                                       <script>
                                                                               window.addEventListener('load',featureddisplay);

                                                                                   function featureddisplay(){

                                                                                       obj = document.getElementById('fbp');
                                                                                       obj2 = document.getElementById('fb');   
                                                                                       if(obj.innerHTML.length > 150){

                                                                                       newE = document.createElement('a');
                                                                                       newE.setAttribute('id','flink');
                                                                                       newE.setAttribute('class','readmore');

                                                                                       newE.setAttribute('href','<?php echo "openpost.php?text=".$myrow['post_id']?>');
                                                                                       newE.innerHTML='.......Read More';
                                                                                       str = obj.innerHTML.substring(0,300);

                                                                                       obj.innerHTML=str;
                                                                                       obj2.appendChild(newE);
                                                                                       }
                                                                                   }
                                                                                   </script>                                       
                                   </div>




                                                                                   <?php
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
<!--                    </div>-->                
                
            </div>
          
          
          
          
            <div class="row" id="footer" style="padding-bottom:20px;border:1px solid #ff9933;">
                <div class="col-sm-3" style="border-right: 1px solid #666;">
                    <h5>DOCUMENTATION</h5>
                    <a href="#" style="display:block;">HOW IT WORKS</a>
                    <a href="#" style="display:block;">FAQ</a>
                    <a href="#" style="display:block;">PRIVACY POLICY</a>
                    <a href="#" style="display:block;">COOKIE POLICY</a>
                    <a href="#" style="display:block;">TERMS & CONDITION OF SALE</a>
                    <a href="#" style="display:block;">TERMS & CONDITION OF USE</a>
                </div>                
                <div class="col-sm-2" style="border-right: 1px solid #666;height:150px;">
                    <h5>CUSTOMER SERVICE</h5>
                    <a href="#" style="display:block;">CONTACT US</a>
                    <a href="#" style="display:block;">RETURN POLICY</a>
                    <a href="#" style="display:block;">HOW TO BUY A GOOD TYRE</a>
                    <a href="#" style="display:block;">TYRE INFO AND ADVICE</a>
                </div>  
                
                <div class="col-sm-2" style="border-right: 1px solid #666;height:150px;">
                    <h5>ABOUT US</h5>
                    <a href="#" style="display:block;">HISTORY</a> 
         
                </div>
                
                
                <div class="col-sm-2" style="border-right: 1px solid #666;height:150px;">
                    <h5>Join Us As Fitting Partner</h5>
                    <a href="#" style="display:block;">To Join As Fitting Partner Click Here</a> 
         
                </div>  
                
                <div class="col-sm-2" style="border-right: 1px solid #666;height:150px">
                    <h5>Contact Us</h5>
                    <span style="display:block;"><span class="fa fa-phone-square"style="color:#900;padding:5px;"></span>+23-8080080655</span> 
                    <span style="display:block;"><span class="fa fa-phone-square"style="color:#900;padding:5px;"></span>+23-8066229567</span> 
                </div>                 
            </div>
            
            <div class="row" style="">
                <div id="cpy" class="col-sm-12" style="padding:20px 0px;text-align: center;font-size:18px;">
                    <a href="copyright" style="color: #655118"> © 2016 blog.firmgriptyre.com All Rights Reserved. </a>
                </div>
            </div>     
      
      
      </div>

    </body>
</html>

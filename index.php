<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <title></title>
        <style>
            
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  overflow-x: hidden;
}            
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
/*  padding: 8px 8px 8px 32px;*/
  text-decoration: none;
  font-weight: bold;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidenav a:hover {
  color: #000;
  
}

.sidenav button{
    border: none;
    background: none;
    padding: 0px;
    color: #818181;
}
.sidenav button:hover{
    background: none;
}
.sidenav li{
    background: none;
    border: none;
    width: 100%;
    display: inline-block;
}
.dropdown-menu li{
    width: 100%;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
/*  transition: margin-left .5s;*/
  padding: 16px;
}

.post-body{
    text-align: justify;
}
#showimage{
    position: fixed;
    background: rgba(0,0,0,0.8);
    height: 100%;
    width:100%;
    top: 0px;
    left:0px;
    display: none;


}
.postImage:hover{
    transform: scale(1.1);
    transition-duration:2s;
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
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
#links .col-sm-2 a{
    font-size: 12px !important;
    display: block;
    text-align: center;
}
#links .col-sm-2{
    width: 30%;
    float:left;
} 
#links .col-sm-1{
    width:10%;
    float: left;
}

#img-con img{
    height: 150px;
}
.post-comment,.post-date{
    font-size: 12px !important;
}

#footer a{
    font-size: 12px !important;
    color:#655118 !important;
}
#cpy{
   font-size: 12px !important; 
}
}            
        </style>
        
        <script>
function cat(event){
	
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
			
	}
	else{
			xml = new ActiveObject('Microsoft.XMLHTTP');
		}
		
	
	xml.onreadystatechange = function(){
		
		
			if(xml.readyState==4 && xml.status==200){
				document.getElementById("left").innerHTML = xml.responseText;
				
			}//end if
		
		}
		param = 'text='+event.target.id;	
		xml.open('POST','search.php',true);// open the file
		xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xml.send(param);
		
/*		xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xml.send();
		window.location.reload();*/
}
function searchCat(){
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
			
	}
	else{
			xml = new ActiveObject('Microsoft.XMLHTTP');
		}
		
	
	xml.onreadystatechange = function(){
		
		
			if(xml.readyState==4 && xml.status==200){
				document.getElementById("left").innerHTML = xml.responseText;
				
			}//end if
		
		}
		var v=document.getElementById('search').value;
                if(v==""){
                    
                }
                else{
                    
                
		param = 'text='+v;	
		xml.open('POST','search.php',true);// open the file
		xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xml.send(param);
            }
/*		xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xml.send();
		window.location.reload();*/
}
function subscribe(){
	
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
			
	}
	else{
			xml = new ActiveObject('Microsoft.XMLHTTP');
		}
		
	
	xml.onreadystatechange = function(){
		
		
			if(xml.readyState==4 && xml.status==200){
				//document.getElementById("postCon").innerHTML = xml.responseText;
					document.getElementById('modal').style.display ='block';
				
			}//end if
		
		}
		
		
	name = document.getElementById('name').value;
	email = document.getElementById('email').value;	
	
	text = name+"~"+email;
	param = 'text='+text;	
	xml.open('POST','sub.php',true);// open the file
	xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xml.send(param);
	//location.reload();

	

}        
        </script>        
        
    </head>
    <body>
<script>
function openNav() {
    if(screen.width<=960){
  document.getElementById("mySidenav").style.width = "80%";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";    
    }else{

  document.getElementById("mySidenav").style.width = "30%";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
//  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  
}
</script>
        <div class="container-fluid">
            <div id="nav-menu" class="row" style="">
                
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
                
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <ul class="list-group" style="">
        
       <li class="list-group-item"><a href="#" id="Car and Maintenance" onclick="cat(event)">Industry News</a></li>

       <li class="list-group-item"><a href="tyrereviews.php" id="Car Review">Consumer Tyre Review</a></li>
       
        
      <li class="list-group-item">
           <div class="dropdown">
                  <button 
                      class="btn btn-default dropdown-toggle" 
                      type="button" 
                      id="menu1" 
                      data-toggle="dropdown">Passenger Tyres
                  <span class="caret"></span>
                  </button>
               <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="">
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Extreme Performance Summer" onclick="cat(event)">Extreme Performance Summer</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Maximum Performance Summer" onclick="cat(event)">Maximum Performance Summer</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Ultra Performance Summer" onclick="cat(event)">Ultra Performance Summer</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Altra Performance All-Season" onclick="cat(event)">Altra Performance All-Season</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="High Performance Summer" onclick="cat(event)">High Performance Summer</a></li>                   
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="High Performance All-Season" onclick="cat(event)">High Performance All-Season</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Performance All-Season" onclick="cat(event)">Performance All-Season</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Grand Touring Summer" onclick="cat(event)">Grand Touring Summer</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Grand Touring All-Season" onclick="cat(event)">Grand Touring All-Season</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Passenger All-Season" onclick="cat(event)">Passenger All-Season</a></li>
                   
               </ul>
           </div>                       
      </li>
  
                   
                   
                   <li class="list-group-item">
                        <div class="dropdown">
                               <button 
                                   class="btn btn-default dropdown-toggle" 
                                   type="button" 
                                   id="menu1" 
                                   data-toggle="dropdown">Light Truck/SUV/CUV Tyres
                               <span class="caret"></span>
                               </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Street/Sport Truck All-Season" onclick="cat(event)">Street/Sport Truck All-Season</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Street/Sport Truck Summer" onclick="cat(event)">Street/Sport Truck Summer</a></li>                                
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Highway RIB Summer" onclick="cat(event)">Highway RIB Summer</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Crossover/SUV Touring All-Season" onclick="cat(event)">Crossover/SUV Touring All-Season</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Highway All Season" onclick="cat(event)">Highway All Season</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="On-/Off-Road All-Terrain" onclick="cat(event)">On-/Off-Road All-Terrain</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="On-/Off-Road Commercial Traction" onclick="cat(event)">On-/Off-Road Commercial Traction</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="On-/Off-Road Maximum Traction" onclick="cat(event)">On-/Off-Road Maximum Traction</a></li>
                            </ul>
                        </div>                       
                   </li>
                   
                   <li class="list-group-item"><a href="#" id="Trailer Tyres" onclick="cat(event)">Trailer Tyres</a></li>
                   
                   <li class="list-group-item"><a href="#" id="Off-The-Road" onclick="cat(event)">Off-The-Road</a></li>
                   
                   
                   <li class="list-group-item">
                        <div class="dropdown">
                               <button 
                                   class="btn btn-default dropdown-toggle" 
                                   type="button" 
                                   id="menu1" 
                                   data-toggle="dropdown">Research and Advice
                               <span class="caret"></span>
                               </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Tyre Test Analysis" onclick="cat(event)">Tyre Test Analysis</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Photo Gallery" onclick="cat(event)">Photo Gallery</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="Tyre Technology Updates" onclick="cat(event)">Tyre Technology Updates</a></li>

                            </ul>
                        </div>                       
                   </li>                   

                                      
                 </ul>
                 
               

</div>

                    
                    
                    
                </div>
            </div>
            
            <div class="row" id="body" style="">
                
                <div class="col-sm-6" id="left" style="">
<?php
    require ('includes/inc.php');
			if (isset($_GET['pageno'])) {
				$pageno = $_GET['pageno'];
			} else {
				$pageno = 1;
			}
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;			
						
            $query = "select * from ".$database.".posts order by post_id desc";
                                         
            if($link = mysqli_connect($host,$user,$password,$database)){
                    if($result = mysqli_query($link,$query)){
                $total_rows = mysqli_num_rows($result); 

                $total_pages =ceil($total_rows / $no_of_records_per_page);
                $sql = "SELECT * FROM ".$database.".posts order by post_id desc LIMIT $no_of_records_per_page  offset  $offset";
                $res_data = mysqli_query($link,$sql);                      
                        while($row = mysqli_fetch_array($res_data)){
                            $q2 ="select * from comments where post_id = '$row[0]'";
                            $q3 = "select * from ".$database.".media where post_id = '$row[0]'";  
                            $res =mysqli_num_rows(mysqli_query($link,$q2));
                            
                            $res2 =mysqli_query($link,$q3);
                            
                            ?>
                    
                    <div class="post">
                        <h4 class='post-topic' style="font-weight:bold">
                            <span class='fa fa-edit' style='color:#fff;background:orange;padding:3px'></span>
                             <?php echo $row['post_topic']?>
                        </h4>
                        
                        <h6 class='post-category' style="font-weight:bold"> 
<!--                            <span style='color:blue'>Category:</span>-->
                            <?php echo $row['post_category']?>
                        </h6>
                        <h5 style="font-weight:bold">
                            <span style='font-weight: normal;'>By </span> 
                            <?php echo $row['post_author']?></h5>
                        
                        <?php
                        
                                while($rw=  mysqli_fetch_array($res2)){
                                      
                                    if($rw['filetype']=='image'){ 
                                    ?>
                                        <div id='img-con' style="overflow:hidden">
                                             <img src=<?php echo "_admin/images/".$rw["filename"];?> class='postImage' id="<?php echo $rw['filename']?>" onclick='showimagemodal(event)'>
                                        </div>
                                    <?php
                                    }
                                    if($rw['filetype']=='video'){
                                    ?>  
                                        <div id='vid-con'>
                                            <video controls='controls' src=<?php echo "_admin/videos/".$rw['filename']?> id='<?php echo $rw['filename']?>'></video>
                                        </div>
                                   <?php
                                   
                                    }
                                                
                                }
                                
                                ?>                                   
                <script>
                        simage =document.getElementById('showimage');
                        function showimagemodal(event){
                            document.getElementById('showimage').style.display="block";
                            filename=event.target.id;
                            document.getElementById('modalimage').src="_admin/images/"+filename;
                            document.getElementById('modalimage').style.transform="scale(1.3)";
                            
                        }
       
            imgs=document.getElementsByClassName('postImage') 
            </script>
                                        <div class='post-body' id="<?php echo $row['post_id']?>">
                                            <?php echo $row['post_body']?>
                                        </div>
            
            <div style="display:inline-block;width:100%;">
                <div class='post-date' style="padding:10px 0px;display:inline-block;width:40%;float:left;color: #0066ff;font-weight: bold">
                                            <span class='fa fa-calendar'></span>
                                            <?php echo $row['post_date']?>
                </div>
                <div class="post-comment" style="padding:10px 0px;display:inline-block;width:40%;text-align:right;float:right;color: #0066ff;font-weight: bold">
            <?php
                                        switch($res){
                                            case 0:
                                                    echo "<span class='post-comment'>No comment</span>";
                                                    break;
                                            case 1:
                                                    echo "<span class='post-comment'><a href='openpost?text=".$row['post_id']."'>$res comment</a></span>";
                                                    break;
                                            default:
                                                    echo "<span class='post-comment'><a href='openpost?text=".$row['post_id']."'>$res comments</a></span>";
                                            } 
                                            
            ?>
                                        </div>
                                </div>
            
                                        <div class='share' style="border-top:1px solid #666;border-bottom:1px solid #666">
                                                        <span class='comment' id="<?php echo $row['post_id']?>" 
                                                                style='display:inline-block;
                                                                        width:40%;
                                                                        padding:20px;
                                                                        cursor:pointer;' 
                                                                onclick='openPost(event)'>
                                                            <span id="<?php echo $row['post_id']?>" 
                                                                  class='fa fa-comment-o' 
                                                                  style='font-size:16px;
                                                                         background:black;
                                                                         color:white;
                                                                         padding:4px;
                                                                         border-radius:3px;' 
                                                                   onclick='openPost(event)'>
                                                            </span> Comment
                                                        </span>
                                            
                                                        <span id="<?php echo $row['post_id']?>" 
                                                              onclick='openPost(event)' 
                                                              style='cursor:pointer;'>
                                                            
                                                                <span id="<?php echo $row['post_id']?>" 
                                                                      class='fa fa-share' 
                                                                      style='font-size:18px;
                                                                             background:black;
                                                                             color:white;
                                                                             padding:4px;
                                                                             border-radius:3px;
                                                                             cursor:pointer;' 
                                                                      onclick='openPost(event)'>
                                                                </span> Share Post
                                                                
                                                        </span>                                            
            
                                        </div>
            
            
            
            
                    </div>
                                        <script>
                                                window.addEventListener('load',display);
                                                    
                                                    function display(){
                                                        obj = document.getElementById("<?php echo $row['post_id']?>");
                                                        if(obj.innerHTML.length > 150){
                                                        newE = document.createElement('a');
                                                        newE.setAttribute('id',"<?php echo $row['post_id']?>");
							newE.setAttribute('class','readmore');
                                                        newE.setAttribute('style','font-weight:bold');
						       newE.setAttribute('href',"<?php echo "openpost.php?text=".$row['post_id']?>");
                                                        newE.innerHTML='.......Read More';
                                                        str = obj.innerHTML.substring(0,300);
                                                        obj.innerHTML=str;
                                                        obj.appendChild(newE);
                                                        }
                                                        
                                                    }
                                                    function openPost(event){
                                                        data =event.target.id;
                                                        param = 'text='+ data;
                                                        window.location='openpost.php?'+param;
                                                    }
                                                    
                                            </script>                    
<?php

                            }
                            
                        }
                    }
					
					
                    

?>
                    
                </div>
                <div class="col-sm-2"></div>
                
                <div class="col-sm-4" id="right" style="">
<!--                    <div id="featuredPostCon">-->
<!--                        <div >-->
                                <?php

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
//                                   $q4 ="select * from media where post_id='$max'";
//                                   $res4= mysqli_query($link, $q4);
                                   //return number of comments
                                    $res2 =mysqli_num_rows(mysqli_query($link,$q2));
                                    ?>
                                <h3 style="font-weight:bold">Featured Articles</h3>
                                <div id='featuredpost' style="border-bottom:1px solid #666;">
                                       <h4 id='featuredtopic' style="font-weight:bold">
                                   <span class='fa fa-edit' style='color:#fff;background:orange;padding:3px'>
                                     </span> <?php echo $myrow['post_topic']?>
                                   </h4>
                                    <h6 id='featuredcategory' style="font-weight:bold">
<!--                                  <span style='color:blue'>Category:</span>-->
                                      <?php echo $myrow['post_category']?>
                                  </h6>
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
                                                      echo "<span class='post-comment'><a href='openpost?text=".$row['post_id']."'>$res2 comment</a></span>";
                                                      break;
                                              default:
                                                      echo "<span class='post-comment'><a href='openpost?text=".$row['post_id']."'>$res2 comments</a></span>";
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

            <div class="row">
                <div class="col-sm-12">
            <ul class="pagination" style="width:100%;">
                    <li><a href="?pageno=1">First Page</a></li>
                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                    </li>
                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                    </li>
                    <li><a href="?pageno=<?php echo $total_pages; ?>">Last Page</a></li>
               </ul>                    
                </div>
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

        


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
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>                
        <meta charset="UTF-8">
        <title>View Comments</title>
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
        table{
            width: 100%;
            border-collapse:collapse;
            font-size:14px;
            background: white;
			margin-top:20px;
        }
        thead{
            font-weight: bold;
            text-align: center;
        }
        tbody{
            
        }
        tbody td{
            padding:3px;
        }
                
                
            #spinnerCon{
                background: rgba(0,0,0,0.7);
                position: fixed;
                top:0px;
                left:0px;
                height:100%;
                width:100%;
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
                        <li><a href="viewposts.php"><span class="fa fa-eye"></span> View Posts</a></li>
                        <li><a href="customerreviews.php"><span class="fa fa-users"></span> View Tyre Reviews</a></li>                        
                        <li><a href="deleteposts.php"><span class="fa fa-times-rectangle"></span> Delete Posts</a></li>
                        <h4 style="text-align:center">Manage Comments</h4>
                        <li class="active"><a href="viewcomments.php"><span class="fa fa-commenting"></span> View Comments</a></li>
                        <li><a href="deletecomments.php"><span class="fa fa-times-circle-o"></span> Delete Comments</a></li>
                        <h4 style="text-align:center">Manage Subscribers</h4>
                        <li><a href="viewsub.php"><span class="fa fa-user"></span> View Subscribers</a></li>
                        <li><a href="deletesub.php"><span class="fa fa-user-times"></span> Delete Subscribers</a></li>
                        <li><a href="blogpage.php"><span class="fa fa-tv"></span> Visit Site</a></li>
                        <li><a href="logout.php"><span class="fa  fa-arrow-circle-o-left"></span> Logout</a></li>
                    </ul> 
                </div>
                
                <div class="col-sm-10" id="colsm">

                    <table border="1">
                    <thead>
                         <td>DATE POSTED</td>
                        <td>TOPIC</td>
                        <td>CATEGORIES</td>
                        <td>AUTHOR</td>
                        <td>NO OF COMMENTS</td>
                        <td>VIEW</td>
                    </thead>
                    <tbody>
<?php
        include_once ('includes.php');
        
				
            if($link= mysqli_connect($host, $user, $password, $database)){
				 $q1  = "select * from comments order by post_id";
				 

				 
				 if($result =mysqli_query($link,$q1)){
			
					 	while($row = mysqli_fetch_array($result)){
									$q2 = "select * from posts where post_id = '$row[1]'order by post_topic";
									$res = mysqli_fetch_array(mysqli_query($link,$q2));
                                    echo "<tr>";
                                            echo "<td>".$row['author']."</td>";
                                            echo "<td>".$res['post_topic']."</td>";
                                            echo "<td>".$res['post_category']."</td>";
                                            echo "<td>".$res['post_author']."</td>";
                                            echo "<td>".$row['comment_date']."</td>";
                                            echo "<td>"
                                            ."<a href='viewcommentdetail.php?comment=".$row['comment_id']."' id='".$row['comment_id']."' onclick='viewRecord(event)'>
                                            view</a>"
                                            ."</td>";

                            echo "</tr>";
						}
					 
					}
				 
				
			}
?>
                    </tbody>
                    </table>                    
                                       
                    
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
//	function viewRecord(event){
//		var xmlhttp;
//	
//	if(window.XMLHttpRequest){
//			
//			xmlhttp = new XMLHttpRequest();
//			
//		}
//	else{
//			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
//		}
//		
//			xmlhttp.onreadystatechange = function(){
//			
//			if(xmlhttp.readyState== 4 && xmlhttp.status == 200){
//			
//				}
//		}// end function
//		
//			data =event.target.id// data stores the id of the button
//			param = 'text='+ data;
//			window.location='viewcomnt.php?'+param;
//}
</script>
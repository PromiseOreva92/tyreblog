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
        <title>Delete Posts</title>
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
                overflow-y: auto;
                
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
        function editRecord(event){
            data =event.target.id// data stores the id of the button
            param = 'text='+ data;
            window.location='editpost.php?'+param;
        }                    
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
                        <li class="active"><a href="deleteposts.php"><span class="fa fa-times-rectangle"></span> Delete Posts</a></li>
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
                    <div style="overflow:auto;height: 600px;">
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
                $query  = "select * from posts";
                
                if($result = mysqli_query($link, $query)){
                    
                   
                    while ($row = mysqli_fetch_array($result)){
						$q2 ="select * from comments where post_id = '$row[0]'";
						$res =mysqli_num_rows(mysqli_query($link,$q2));						
                        echo "<tr>";
                        echo "<td>".$row['post_date']."</td>";
                        echo "<td>".$row['post_topic']."</td>";
                        echo "<td>".$row['post_category']."</td>";
                        echo "<td>".$row['post_author']."</td>";
                        echo "<td>$res</td>";
                        echo "<td>"."<input type='checkbox' class='tracks' value='$row[0]'>"."</td>";
                        echo "<td>"."<input type='button' value='Delete' onclick='remove2(event)' id='$row[0]'>"."</td>";
                        echo '</tr>';
                    }
                }
                

            }
        

?>
                    </tbody>
                    </table>                    
                    </div>                  
                    <input type="button" value="delete Posts" id="deleteButton"  /> 
                </div>
                
            </div>
        </div>
        
        <div id="message"></div>        
        <div id="spinnerCon">
            <div id="spin">
                
            </div>
        </div>
    </body>
</html>
<script>
document.getElementById('deleteButton').addEventListener('click',remove)
function remove(){
	 
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
		
  		var acheck = document.getElementsByClassName('tracks');//check boxes
		list = [];//array for storing checked boxes
		var v=0;// variable to keep count of checked boxes
		for(i=0;i< acheck.length; i++){
                    
				//store the values of checked boxes in the array
				if(acheck[i].checked){
				list[v] = acheck.item(i).value;
				v++;				
				}
		}
		
               
		if(v>=1){
			if(confirm('Are You sure You want To Delete?')){	
				data = 'text='+ list;// store the array of values inside variable text 
				xmlhttp.open('POST','delete.php',true);// open the file
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(data); //send the parameters
				alert("Deleted Successfully");
				window.location.reload();
			}
			
		}
		else{
			alert("No Post Selected");		
		}
	
}

function remove2(event){
	 
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

        if(confirm('Are You sure You want To Delete?')){	
                data = 'text='+ val;// store the array of values inside variable text 
                xmlhttp.open('POST','delete2.php',true);// open the file
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(data); //send the parameters
                alert("Deleted Successfully");
                window.location.reload();
        }
			
	
}

</script> 

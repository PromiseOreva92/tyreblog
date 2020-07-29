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
            }
        </style>
        
        <script>
            
            window.addEventListener('load',function(){
                        window.setTimeout(function(){
                          document.getElementById('spinnerCon').style.display="none";  
                    },5000);  
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
                        <li class="active"><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-home"></span> Home</a></li>
                        <h4 style="text-align:center">Manage Posts</h4>
                        <li><a href="createpost.php" style="font-weight:bold;font-family: sans-serif"><span class="fa fa-edit"></span> Write Post</a></li>
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
                
                <div class="col-sm-10" id="colsm">

                    
                    
                        <div class="notify">
                                <div class="icons" style="background: #0084ff;color:white;text-align: center;">
                                    <span class="fa fa-comments" style="font-size:100px;color:white;"></span>
                                </div>
                                <div class="labels">
                                    <span class="num">
<?php
    require "includes.php";
    if($link= mysqli_connect($host, $user, $password, $database)){
        $query="select * from comments";
        $result=mysqli_query($link, $query);
        echo mysqli_num_rows($result);
        mysqli_close($link);
    }
?>                                        
                                    </span>
                                    <span class="labelNum">
                                           Comments
                                    </span>
                                </div>
                        </div>
                    
                    
                        <div class="notify">
                            <div class="icons" style="background: #00cc66;color:white;text-align: center;">
                                <span class="fa fa-edit" style="font-size:100px;color:white;"></span>
                                </div>
                                <div class="labels">
                                    <span class="num">
<?php
    require "includes.php";
    if($link= mysqli_connect($host, $user, $password, $database)){
        $query="select * from posts";
        $result=mysqli_query($link, $query);
        echo mysqli_num_rows($result);
        mysqli_close($link);
    }
?>
                                    </span>
                                    <span class="labelNum">
                                        All Posts
                                    </span>
                                </div>
                        </div>

                    
                        <div class="notify">
                            <div class="icons" style="background:#ff9966;color:white;text-align: center;padding:10px;">
                                    <span class="fa fa-users" style="font-size:100px;color:white;"></span>
                                </div>
                                <div class="labels">
                                    <span class="num" style="margin:5px 0px;">
<?php
    require "includes.php";
    if($link= mysqli_connect($host, $user, $password, $database)){
        $query="select * from subscribers";
        $result=mysqli_query($link, $query);
        echo mysqli_num_rows($result);
        mysqli_close($link);
    }
?>
                                    </span>
                                    <span class="labelNum">
                                        Subscribers
                                    </span>
                                </div>
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

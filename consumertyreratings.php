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
        <script src="jquery-ui-1.12.1/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <link href="jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      
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

#footer h5{
    font-weight: bold;
}
input,select{
    padding: 8px;
    border-radius: 5px;
    border: 1px solid black;
    width: 100%;
    margin: 10px 0px;
}

button{
    padding: 8px;
    width: 30%;
    font-weight: bold;
    background:#0077e6;
    color:white;
    border:none;
    border-radius: 5px;
    margin-bottom: 20px;
}

#myvehicle{
    
}
#mytyres{
/*    display: none;*/
}

.stg{
    font-size:16px;
    display: block;
    margin: 10px 0px;
}

.hr{
    
}

.btn-group label{
    width: 9.35%;
    font-size: 10px;
    font-weight: bold;
}


.btn-group input{
    visibility: hidden;
    float: right;
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
    
function activate(){
    
}    
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
        
    </head>
    <body>
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
        
       <li class="list-group-item"><a href="#" id="Car and Maintenance">Industry News</a></li>

       <li class="list-group-item"><a href="tyrereviews.php" id="Car Review" onclick="cat(event)">Consumer Tyre Review</a></li>
       
        
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





            <div class="row">
                <div class="col-sm-12">
                    <form method="post">
                        
                        <div class="row" id="myvehicles">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>My Vehicle</h4>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="carmake" id="carmake" required>
                                                <option disabled="disabled" value="" selected>--Select Car--</option>
                                                    <option>Acura</option>
                                                    <option>Alfa Romeo</option>
                                                    <option>Aston Martin</option>
                                                    <option>Audi</option>
                                                    <option>Bentley</option>
                                                    <option>BMW</option>
                                                    <option>Bugatti</option>
                                                    <option>Buck</option>
                                                    <option>BYTON</option>
                                                    <option>Cadillac</option>
                                                    <option>Chevrolet</option>
                                                    <option>Chrysler</option>
                                                    <option>Dodge</option>
                                                    <option>Ferrari</option>
                                                    <option>Fiat</option>
                                                    <option>Fort</option>
                                                    <option>Genesis</option>
                                                    <option>GMC</option>
                                                    <option>Honda</option>
                                                    <option>Hyundai</option>
                                                    <option>INFINITI</option>
                                                    <option>Jaguar</option>
                                                    <option>Jeep</option>
                                                    <option>Kia</option>
                                                    <option>Hummer</option>
                                                    <option>Lamborgini</option>
                                                    <option>Land Rover</option>
                                                    <option>Lexus</option>
                                                    <option>Lincon</option>
                                                    <option>Maserati</option>
                                                    <option>Mazda</option>
                                                    <option>Mercedes-Ben</option>
                                                    <option>MINI</option>
                                                    <option>Mitshibushi</option>
                                                    <option>Nissan</option>
                                                    <option>Opel</option>
                                                    <option>Polestar</option>
                                                    <option>Porsche</option>
                                                    <option>Renault</option>
                                                    <option>Ram</option>
                                                    <option>Rivian</option>
                                                    <option>Rolls-Royce</option>
                                                    <option>Smart</option>
                                                    <option>Subaru</option>
                                                    <option>Tesla</option>
                                                    <option>Toyota</option>
                                                    <option>Volkswagen</option>
                                                    <option>Volvo</option>
                                                    <option>Ultima</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="carmakeE"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            
                                            <input type="text" id="year" class="year" name="year" placeholder="Enter Year"  required>
                                            <script>$('#year').datepicker(); </script>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="yearE"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="carmodel" placeholder="Enter Model" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="carmodelE"></span>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="style" required>
                                                <option disabled="disabled" selected="selected">Driving Style</option>
                                                <option>Easy Grip</option>
                                                <option>Average</option>
                                                <option>Spirited</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="styleE"></span>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="drivingcondition" required>
                                                <option disabled="disabled" selected="selected" required>Driving Condition</option>
                                                <option>All Highway</option>
                                                <option>Mostly Highway</option>
                                                <option>Combined Highway/City</option>
                                                <option>Mostly City</option>
                                                <option>All City</option>
                                                <option>Track/Autocross</option>
                                                <option>Off Road</option>
                                                <option>Combined Off Road/Highway</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="driveconE"></span>
                                        </div>
                                    </div>

                                
                            </div>
                            
                        </div>
                        
                        

                        <div class="row" id="mytyres">
                            
                            <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4>My Tyres</h4>
                                                </div>
                                            </div>                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select name="tyrebrand" required>
                                                        <option disabled="disabled" selected="selected">Your Tire Brand</option>
                                                        <option>Achilles</option>
                                                        <option>AEOLUS</option>
                                                        <option>ANTARES</option>
                                                        <option>ANTYRE</option>
                                                        <option>APOLLO</option>
                                                        <option>ATTURO</option>
                                                        <option>BEARWAY</option>
                                                        <option>BFGOODRICH</option>
                                                        <option>BOTO</option>
                                                        <option>BRIDGESTONE</option>
                                                        <option>CEAT</option>
                                                        <option>CONTINENTAL</option>
                                                        <option>COODER</option>
                                                        <option>DEESTONE</option>
                                                        <option>DOUBLE KING</option>
                                                        <option>DUNLOP</option>
                                                        <option>FALKEN</option>
                                                        <option>FEDERAL</option>
                                                        <option>PIRELLI</option>
                                                        <option>FIRESTONE</option>
                                                        <option>FOREUM</option>
                                                        <option>GENERAL GOLSTAR</option>
                                                        <option>GOLDENBRIDGE</option>
                                                        <option>GOODYEAR</option>
                                                        <option>GT RADIAL</option>
                                                        <option>HANKOOK</option>
                                                        <option>HEADWAY</option>
                                                        <option>HERCULES</option>
                                                        <option>HIFLY</option>
                                                        <option>JK</option>
                                                        <option>KELLY</option>
                                                        <option>KENDA</option>
                                                        <option>KLEBBER</option>
                                                        <option>KUMHO</option>
                                                        <option>LANVIGATOR</option>
                                                        <option>LINGLONG</option>
                                                        <option>MAXXIS</option>
                                                        <option>MICHELIN</option>
                                                        <option>MILESTAR</option>
                                                        <option>MONTANA</option>
                                                        <option>NANKANG</option>
                                                        <option>NEXEN</option>
                                                        <option>PRIMEWELL</option>
                                                        <option>PRIMIORRI</option>
                                                        <option>RADAR</option>
                                                        <option>SILVERSTONE</option>
                                                        <option>SUMITOMO</option>
                                                        <option>SUNFULL</option>
                                                        <option>SUNNY</option>
                                                        <option>THREE A</option>
                                                        <option>THUNDERER</option>
                                                        <option>TOYO</option>
                                                        <option>TRIACE</option>
                                                        <option>UNIROYAL</option>
                                                        <option>WESTLAKE</option>
                                                        <option>WIDEWAY</option>
                                                        <option>WINDA</option>
                                                        <option>YOKOHAMA</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span id="tyrebrandE"></span>
                                                </div>
                                            </div>                        



                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Enter Model Name" name="tyremodel" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span id="tyremodelE"></span>
                                                </div>
                                            </div> 


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="number" placeholder="Enter Tyre Size" name="tyresize" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span id="tyresizeE"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="number" placeholder="Enter Kilometer Coverage" name="kmcoverage" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select name="reviewstage" required>
                                                        <option disabled="disabled" selected="selected">Review Stage</option>
                                                        <option>Initial</option>
                                                        <option>Mid life</option>
                                                        <option>End of life</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span id="rE"></span>
                                                </div>
                                            </div>

                                
                            </div>
                        
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-sm-12">
                                
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4>My Vehicle</h4>
                                                </div>
                                            </div>                                
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5>WET</h5>
                                                </div>
                                            </div>
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Hydroplanning Resistance</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="hr" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="hrn" class="btn btn-primary btn-label active">
                                                            <input class="hr" value="0" name="hr" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="hr1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="1" name="hr" type="radio">1
                                                        </label>
                                                        <label id="hr2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="2" name="hr" type="radio">2
                                                        </label>
                                                        <label id="hr3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="3" name="hr" type="radio">3
                                                        </label>
                                                        <label id="hr4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="4" name="hr" type="radio">4
                                                        </label>
                                                        <label id="hr5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="5" name="hr" type="radio">5
                                                        </label>
                                                        <label  id="hr6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="6" name="hr" type="radio">6
                                                        </label>
                                                        <label id="hr7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="7" name="hr" type="radio">7
                                                        </label>
                                                        <label id="hr8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="8" name="hr" type="radio">8
                                                        </label>
                                                        <label id="hr9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="9" name="hr" type="radio">9
                                                        </label>
                                                        <label id="hr10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="hr" value="10" name="hr" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate the tyre's resistance to hydro planning</span>
                                                </div>
                                            </div> 
                                
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Wet Traction</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="wt" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="wtn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="wt" value="0" name="wt" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="wt1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="1" name="wt" type="radio">1
                                                        </label>
                                                        <label id="wt2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="2" name="wt" type="radio">2
                                                        </label>
                                                        <label id="wt3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="3" name="wt" type="radio">3
                                                        </label>
                                                        <label id="wt4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="4" name="wt" type="radio">4
                                                        </label>
                                                        <label id="wt5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="5" name="wt" type="radio">5
                                                        </label>
                                                        <label  id="wt6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="6" name="wt" type="radio">6
                                                        </label>
                                                        <label id="wt7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="7" name="wt" type="radio">7
                                                        </label>
                                                        <label id="wt8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="8" name="wt" type="radio">8
                                                        </label>
                                                        <label id="wt9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="9" name="wt" type="radio">9
                                                        </label>
                                                        <label id="wt10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="wt" value="10" name="wt" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate wet traction in accelerating, breaking, and cornering</span>
                                                </div>
                                            </div>                                 

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5>DRY</h5>
                                                </div>
                                            </div>                                
                                
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Cornering Stability</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="cs" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="csn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="cs" value="0" name="cs" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="cs1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="1" name="cs" type="radio">1
                                                        </label>
                                                        <label id="cs2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="2" name="cs" type="radio">2
                                                        </label>
                                                        <label id="cs3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="3" name="cs" type="radio">3
                                                        </label>
                                                        <label id="cs4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="4" name="cs" type="radio">4
                                                        </label>
                                                        <label id="cs5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="5" name="cs" type="radio">5
                                                        </label>
                                                        <label  id="cs6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="6" name="cs" type="radio">6
                                                        </label>
                                                        <label id="cs7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="7" name="cs" type="radio">7
                                                        </label>
                                                        <label id="cs8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="8" name="cs" type="radio">8
                                                        </label>
                                                        <label id="cs9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="9" name="cs" type="radio">9
                                                        </label>
                                                        <label id="cs10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="cs" value="10" name="cs" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate tyre's stability when cornering</span>
                                                </div>
                                            </div>  
                                

                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Dry Traction</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="dt" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="dtn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="dt" value="0" name="dt" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="dt1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="1" name="dt" type="radio">1
                                                        </label>
                                                        <label id="dt2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="2" name="dt" type="radio">2
                                                        </label>
                                                        <label id="dt3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="3" name="dt" type="radio">3
                                                        </label>
                                                        <label id="dt4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="4" name="dt" type="radio">4
                                                        </label>
                                                        <label id="dt5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="5" name="dt" type="radio">5
                                                        </label>
                                                        <label  id="dt6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="6" name="dt" type="radio">6
                                                        </label>
                                                        <label id="dt7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="7" name="dt" type="radio">7
                                                        </label>
                                                        <label id="dt8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="8" name="dt" type="radio">8
                                                        </label>
                                                        <label id="dt9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="9" name="dt" type="radio">9
                                                        </label>
                                                        <label id="dt10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="dt" value="10" name="dt" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate dry traction in performance</span>
                                                </div>
                                            </div>
                                
                                
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Steering Responsiveness</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="sr" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="srn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="sr" value="0" name="sr" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="sr1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="1" name="sr" type="radio">1
                                                        </label>
                                                        <label id="sr2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="2" name="sr" type="radio">2
                                                        </label>
                                                        <label id="sr3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="3" name="sr" type="radio">3
                                                        </label>
                                                        <label id="sr4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="4" name="sr" type="radio">4
                                                        </label>
                                                        <label id="sr5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="5" name="sr" type="radio">5
                                                        </label>
                                                        <label  id="sr6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="6" name="sr" type="radio">6
                                                        </label>
                                                        <label id="sr7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="7" name="sr" type="radio">7
                                                        </label>
                                                        <label id="sr8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="8" name="sr" type="radio">8
                                                        </label>
                                                        <label id="sr9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="9" name="sr" type="radio">9
                                                        </label>
                                                        <label id="sr10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="sr" value="10" name="sr" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate tyre's steering </span>
                                                </div>
                                            </div>
                                
                                
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5>COMFORT</h5>
                                                </div>
                                            </div>                                
                                
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Ride Comfort</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="rc" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="rcn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="rc" value="0" name="rc" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="rc1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="1" name="rc" type="radio">1
                                                        </label>
                                                        <label id="rc2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="2" name="rc" type="radio">2
                                                        </label>
                                                        <label id="rc3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="3" name="rc" type="radio">3
                                                        </label>
                                                        <label id="rc4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="4" name="rc" type="radio">4
                                                        </label>
                                                        <label id="rc5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="5" name="rc" type="radio">5
                                                        </label>
                                                        <label  id="rc6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="6" name="rc" type="radio">6
                                                        </label>
                                                        <label id="rc7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="7" name="rc" type="radio">7
                                                        </label>
                                                        <label id="rc8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="8" name="rc" type="radio">8
                                                        </label>
                                                        <label id="rc9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="9" name="rc" type="radio">9
                                                        </label>
                                                        <label id="rc10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="rc" value="10" name="rc" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate the tyre's smoothness and comfort in handling</span>
                                                </div>
                                            </div>  
                                
                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Noise Level</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="ns" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="nsn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="ns" value="0" name="ns" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="ns1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="1" name="ns" type="radio">1
                                                        </label>
                                                        <label id="nl2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="2" name="ns" type="radio">2
                                                        </label>
                                                        <label id="ns3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="3" name="ns" type="radio">3
                                                        </label>
                                                        <label id="ns4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="4" name="ns" type="radio">4
                                                        </label>
                                                        <label id="ns5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="5" name="ns" type="radio">5
                                                        </label>
                                                        <label  id="ns6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="6" name="ns" type="radio">6
                                                        </label>
                                                        <label id="ns7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="7" name="ns" type="radio">7
                                                        </label>
                                                        <label id="ns8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="8" name="ns" type="radio">8
                                                        </label>
                                                        <label id="ns9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="9" name="ns" type="radio">9
                                                        </label>
                                                        <label id="ns10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="ns" value="10" name="ns" type="radio">10
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate the noise level generated by the tyre in performance</span>
                                                </div>
                                            </div>  

                                            <div class="row" style="margin:10px 0px;">
                                                <div class="col-sm-2"><span>Tread wear</span></div>
                                                <div class="col-sm-3" style="padding:0px;">
                                                    <div id="tw" class="btn-group" data-togggle="buttons" style="">
                                                        
                                                        <label id="twn" class="btn btn-primary btn-label active" onclick="msg(event)">
                                                            <input class="tw" value="0" name="tw" type="radio" checked="checked">N/A
                                                        </label>
                                                        <label id="tw1"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="1" name="tw" type="radio">1
                                                        </label>
                                                        <label id="tw2"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="2" name="tw" type="radio">2
                                                        </label>
                                                        <label id="tw3"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="3" name="tw" type="radio">3
                                                        </label>
                                                        <label id="tw4"  class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="4" name="tw" type="radio">4
                                                        </label>
                                                        <label id="tw5" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="5" name="tw" type="radio">5
                                                        </label>
                                                        <label  id="tw6" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="6" name="tw" type="radio">6
                                                        </label>
                                                        <label id="tw7" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="7" name="tw" type="radio">7
                                                        </label>
                                                        <label id="tw8" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="8" name="tw" type="radio">8
                                                        </label>
                                                        <label id="tw9" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="9" name="tw" type="radio">9
                                                        </label>
                                                        <label id="tw10" class="btn btn-primary btn-label" onclick="msg(event)">
                                                            <input class="tw" value="10" name="tw" type="radio">10
                                                        </label>

                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <span>Rate quickness of wear based on the drivers expectation</span>
                                                </div>
                                            </div> 
                                
                                
                                
                                
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Will you buy this tyre again?</h4>
                                        </div>
                                    </div>                                
                                
                                
                                    <div class="row">
                                        <div class="col-sm-4" style="">                                    
                                            <label><input type="radio" name="view" value="definitely" style="width:20px;display:inline-block;" checked="checked">Definitely</label><br>
                                            <label><input type="radio" name="view" value="probably" style="width:20px;display:inline-block;">Probably</label><br>
                                            <label><input type="radio" name="view" value="possibly" style="width:20px;display:inline-block;">Possibly</label><br>
                                            <label><input type="radio" name="view" value="possibly not" style="width:20px;display:inline-block;">Possibly Not</label><br>
                                            <label><input type="radio" name="view" value="definitely not" style="width:20px;display:inline-block;">Definitely Not</label><br>
                                        </div>
                                        <div class="col-sm-4" style="">
                                            <span id="vE"></span>
                                        </div>
                                    </div> 
                                
                                
                                    <div class="row">
                                        <div class="col-sm-2" style="">                                    
                                            <h4> My Location</h4>
                                        </div>
                                    </div>  
                                
                                    <div class="row">                                        
                                        <div class="col-sm-3">
                                            <input type="text" placeholder="location here" name="location" required>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-sm-2" style="">                                    
                                            <h4> My Reviews</h4>
                                        </div>
                                    </div>  
                                
                                    <div class="row">                                        
                                        <div class="col-sm-6">
                                            <textarea name="myreview" rows="10" placeholder="What should other shoppers know before buying this tyre?" style="width:100%;resize:none;" required></textarea>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-sm-2" style="">                                    
                                            <h4>About Me</h4>
                                        </div>
                                    </div>  
                                
                                    <div class="row">                                        
                                        <div class="col-sm-3">
                                            <input type="email" placeholder="Email Address here" name="email" required>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-12" style="">                                    
                                            <p>Firmgriptyre wants your comments to be heard, therefore:</p>
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Your reviews should focus on specific characteristics of the product and your experience with it in
                                                different conditions compare to other tyres</li>
                                                
                                                <li>There should be no biase in your review</li>
                                                <li>Reviews that is not related to the subject in question will not be published</li>
                                                <li>Complains and other issues outside review should be directed to info@firmgriptyre</li>
                                                <li>Content is the true opinion of the consumer and not of firmgriptyre</li>
                                                
                                            </ol>
                                        </div>
                                    </div> 
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="submit" name="submit">SUBMIT REVIEW</button>
                                    </div>
                                </div>
                              
                            </div>
                            
                        </div>
                            
                        
                    </form>
                    <?php
                        if(isset($_POST['submit'])){

                             
                             include 'includes/inc.php';

                             
                             if($link = new mysqli($host,$user,$password,$database)){
                                        $review_id = time();
                                        $carmake=  mysqli_escape_string($link, $_POST['carmake']);
                                        $year= mysqli_escape_string($link,$_POST['year']);
                                        $carmodel= mysqli_escape_string($link, $_POST['carmodel']);
                                        $style= mysqli_escape_string($link, $_POST['style']);
                                        $drivingcon=  mysqli_escape_string($link, $_POST['drivingcondition']);
                                        $tyrebrand= mysqli_escape_string($link, $_POST['tyrebrand']);
                                        $tyremodel= mysqli_escape_string($link, $_POST['tyremodel']);
                                        $tyresize= mysqli_escape_string($link, $_POST['tyresize']);
                                        $kmcoverage= mysqli_escape_string($link, $_POST['kmcoverage']);
                                        $reviewstage= mysqli_escape_string($link, $_POST['reviewstage']);
                                        $hr= mysqli_escape_string($link, $_POST['hr']);
                                        $wt= mysqli_escape_string($link, $_POST['wt']);
                                        $cs= mysqli_escape_string($link, $_POST['cs']);
                                        $dt= mysqli_escape_string($link, $_POST['dt']);
                                        $sr= mysqli_escape_string($link, $_POST['sr']);
                                        $rc= mysqli_escape_string($link, $_POST['rc']);
                                        $ns= mysqli_escape_string($link, $_POST['ns']);
                                        $tw= mysqli_escape_string($link, $_POST['tw']);
                                        $view= mysqli_escape_string($link, $_POST['view']);
                                        $location= mysqli_escape_string($link, $_POST['location']);
                                        $myreview= mysqli_escape_string($link, $_POST['myreview']);
                                        $email= mysqli_escape_string($link, $_POST['email']);  
                                        
                             $query ="insert into tyrereviews values('$review_id','$carmake','$year','$carmodel','$style','$drivingcon',
                                     '$tyrebrand','$tyremodel','$tyresize','$kmcoverage','$reviewstage','$hr',
                                     '$wt','$cs','$dt','$sr','$rc','$ns','$tw','$view','$location','$myreview','$email','pending')";
                             
                                 if(mysqli_query($link, $query)){
                                     echo '
                                                <div class="alert alert-success" role="alert">
                                                  Your Review has been submitted
                                                </div>                                 
                                             ';
                                 }
                                 else{
                                     echo '
                                                <div class="alert alert-danger" role="alert">
                                                  Could not submit your review
                                                </div>                                 
                                             ';                                     
                                 }
                             }
                             
                            
                        }
                    
                    ?>
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
<script>
                                    
                                    
                                    function msg(event){
                                        el=event.target.id;
                                        size=event.target.parentNode.children.length;
                                        for(x=0;x<size;x++){
                                            if(event.target.parentNode.children.item(x).id == el){
                                                event.target.parentNode.children.item(x).setAttribute("class","btn btn-primary btn-label active");
                                            }else{
                                            event.target.parentNode.children.item(x).setAttribute("class","btn btn-primary btn-label");
                                            }
                                        }
//                                        event.target.setAttribute()
//                                        event.preventDefault()
                                    }
    
    </script>
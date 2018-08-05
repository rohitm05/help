<?php
session_start();
include 'db.php';
?>

<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Kite One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
<meta  charset="utf-8" >
<style type="text/css">

.f1 {
color:black;
font-family:'Kite One';
font-size:45px;

}
.f2 {
    position: absolute;
    left: 0px;
    top: 8px;
}
.circle {
      width: 130px;
      height: 130px;
      -webkit-border-radius: 130px;
      -moz-border-radius: 130px;
      border-radius: 130px;
     border: 2px solid black;
    }
  .circle:hover, .circle:focus {
   background-color: #040404;
  }
  
.line {

height:0px; 
width:620px;  
border-top:2px solid black;
}
.f3 {
color:#ffffff;
font-family:‘Times New Roman’, Times, serif;
font-size:36px;
}
.f4 {
color:#ffffff;
 font-family: 'Kite One';
 font-size: 24px;
}
.f5 {
font-family: 'Comfortaa';
font-size: 46px;
color:#ffffff;

}
.f6
{color:black;
 font-family: 'Kite One';
 font-size: 24px;
}
.f7 {
font-family: 'Arbutus Slab';
color:#ffffff;
cursor: pointer;
padding: 8px;
    text-decoration: none;
    font-size: 30px;
  display: block;
    transition: 0.3s;
}

.f7:hover , .f7:focus{
 background-color: rgb(0,0,0);
 background-color: rgba(0,0,0, 0.6);
 }
 .f8 {
font-family: 'Arbutus Slab';
color:#aaaaaa;
cursor: pointer;
padding: 8px;
    text-decoration: none;
    font-size: 25px;
  display: block;
    transition: 0.3s;
}

.f8:hover , .f8:focus{
 color: white;
    text-decoration: none;
    cursor: pointer;
}

.f9{
font-family:'Arbutus Slab';
color:#aaaaaa;

font-size:19px;
}

.f9:hover,.f9:focus{
color: white;
    text-decoration: none;
    cursor: pointer;

}



.circle_logo {
      width: 30px;
      height: 30px;
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
     
   background-color:#202738;
    }
  .circle_logo:hover, .circle_logo:focus {
  cursor:pointer;
   background-color: white;
  }
  
.f71 {
font-family: 'Arbutus Slab';
color:black;
cursor: pointer;
padding: 6px;
    text-decoration: none;
    font-size: 40px;
  display: block;
    transition: 0.3s;
}

.f71:hover , .f71:focus{
 
 background-color:#FFFAC2;
 border:8px solid black;
 }
</style>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 3px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;  
  transition: background-color 0.6s ease;
  
  
}

.active {
  background-color:  black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 4.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<style>


.overlay {
    height: 0%;
    width: 100%;
   position:absolute;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.95);
    overflow-y: scroll;
  overflow-x: hidden;
    transition: 0.5s;
}


.overlay-content {
    position: absolute;
    top: 30%;
  left:5%;
    width: 100%;
    text-align: left;
    margin-top: 30px;
}
.overlay-content1 {
    position: absolute;
    top: 30%;
    width: 100%;
  left:30%;
    text-align: left;
    margin-top: 30px;
  }
  
.overlay-content2 {
    position: absolute;
    top: 30%;
    width: 100%;
  left:55%;
  text-align: left;
    margin-top: 30px;
  }
  
  .overlay-content3 {
    position: absolute;
    top: 30%;
    width: 100%;
  left:80%;
  text-align: left;
    margin-top: 30px;
  }
  
  
  


.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 30px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>

<style>

div.tab {
    overflow: hidden;
   background-color: white;
  width:1320px;
  position:absolute;
  top:0.3px;
  left:0;
  
  
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-family: 'Arbutus Slab';
  font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #9287CB;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #766F99;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
  width:1320px;
  height:130px;
  position:absolute;
  top:50px;
  left:0.3px;
  font-family: 'Kite One';
  background-color:black;
  font-size: 17px;
  color:#ffffff;
}
</style>

<style>
#mySidenav a {
    position: absolute;
    left: -170px;
    transition: 0.3s;
    padding: 15px;
    width: 200px;
    text-decoration: none;
    font-size: 22px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0px;
}

#about {
    top: 80px;
    background-color: #4CAF50;
}

#blog {
    top: 150px;
    background-color: #2196F3;
}

#projects {
    top: 220px;
    background-color: #f44336;
}


</style>  

<style>
.sidenav1 {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0px;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.7);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}

.sidenav1 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav1 a:hover{
    color: #f1f1f1;
}

.sidenav1 .closebtn1 {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<style>
<style>
.mySlides1 {display:none}

/* Slideshow container */

.slideshow1-container1 {
  max-width: 1000px;
  position: absolute;
  left:80px;
  top:110px;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: 100px;
  height:50px;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  background-color:rgba(0,0,0,0.7);
}

/* Position the "next button" to the right */
.next {
  left: 1100px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



}
.text1 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text1 (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot1{
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active1, .dot1:hover {
  background-color: #717171;
}

/* Fading animation */
.fade1 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}




/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text1 {font-size: 11px}
}
</style>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 1; /* Sit on top */
     /* Location of the box */
    left: -840px;
    top: 2103px;
    overflow: auto; /* Enable scroll if needed */

}

.modal1 {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 1; /* Sit on top */
     /* Location of the box */
    left: -840px;
    top: 2103px;
    overflow: auto; /* Enable scroll if needed */

}
/* Modal Content */
.modal-content {
    background-color: black;
    margin: auto;
    padding: 20px;
    opacity:0.97;
    width: 80%;
   width: 1348px; /* Full width */
    height: 240px;
  color:white; 
  font-family:'Arbutus Slab';
  font-size:21px;
}
.modal1-content {
    background-color: black;
    margin: auto;
    padding: 20px;
    opacity:0.97;
    width: 80%;
   width: 1348px; /* Full width */
    height: 240px;
  color:white; 
  font-family:'Arbutus Slab';
  font-size:21px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
}
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
}
</style>


</head>


<body style="overflow-y:scroll; overflow-x:hidden">

   <div style="opacity:1;position:absolute;left:0px;top:-30px;width:1366px;height:70px;background-color:#202738;overflow-x:hidden;overflow-y:hidden">
  <a href="logout.php"> <div class="f7">
   <img class="circle_logo" src="footer-home-icon.png"  style="width:38px;height:38px;border:0;position:absolute;left:6px;top:31px">
   </div></a>
   <hr style="position: absolute; width:3px; height:42px; top: 21px;left:55px;background-color:white">
   <a href="https://www.google.co.in/maps/place/Odisha/@20.2523114,83.1162736,7.79z/data=!4m5!3m4!1s0x3a226aece9af3bfd:0x133625caa9cea81f!8m2!3d20.9516658!4d85.0985236">
   <div class="f7" style="position:absolute;top:21px;left:75px">Map</div></a>
   
   <hr style="position: absolute; width:3px; height:22px; top: 32px;left:160px;background-color:white">
   <a href="#p1">
   <div class="f7" style="position:absolute;top:22px;left:170px">History</div></a>
   
    <hr style="position: absolute; width:3px; height:22px; top: 32px;left:300px;background-color:white">
  <a href="#p2" >
  <div class="f7" style="position:absolute;top:22px;left:310px">Tourism</div></a>
  
  <hr style="position: absolute; width:3px; height:22px; top: 32px;left:452px;background-color:white">
   <a href="#p3">
   <div class="f7" style="position:absolute;top:22px;left:462px">About</div></a>
   
   <a href="update.php"><div class="f7" style="position:absolute;top:25px;left:790px;color: white">Hello <?php  echo $_SESSION['name']; ?></div></a>
   
   <hr style="position: absolute; width:3px; height:22px; top: 32px;left:1130px;background-color:white">
   
    <a href="search.php"><div class="f7" style="position:absolute;top:25px;left:1150px">Search User</div></a>
  
   
   </div>
   
   <div style="opacity:1;position:absolute;left:0px;top:40px;width:1366px;height:470px;overflow-x:hidden"  >
   <div class="slideshow-container">

<div class="mySlides fade">
  <img src="odisha\golden-triangle-tour.jpg" style="width:1368px;height:420px;position:relative;left:-183px;top:0px">
 
</div>

<div class="mySlides fade">
  <img src="odisha\Raghurajpur Artist Village_1452673807u40.JPG" style="width:1368px;height:420px;position:relative;left:-183px;top:0px">
  
</div>

<div class="mySlides fade">
  <img src="odisha\gopalpur-odisha-travel.jpg" style="width:1368px;height:420px;position:relative;left:-183px;top:0px">
  
</div>

<div class="mySlides fade">
  <img src="odisha\1494581731-best-of-odisha.jpg" style="width:1368px;height:420px;position:relative;left:-183px;top:0px">
  
</div>


</div>
<br>

<div style="text-align:center;position:relative;top:-50px">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span>
</div>

     
</div>

      <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); 
}
</script>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

   <div style="opacity:0.9;position:absolute;left:0px;top:40px;width:1366px;height:80px;background-color:#35373B;overflow-x:hidden">
     <h2 class="f1" >  <div class="f2" style="position:absolute;left:420px;top:5px ;border:4px solid black;width:500px;height:70px;text-align:center;background-color:#FFFFFF"><div class="f71">Welcome to Odisha </div></div></h2>
   </div>
   
   
    <div style="position:absolute;left:0px;top:460px;width:1366px;height:500px;overflow-x:hidden;overflow-y:hidden" >
  <img src="odisha\bM2WavU.jpg" style="width:1366px;height:500px;opacity:0.9">
  <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
  <div class="overlay-content1">
    <a href="bhubaneswar.html">Bhubaneswar</a> 
  </div>
  <div class="overlay-content2">
    <a href="puri.html">Puri</a> 
  </div>
  
</div>


  </div>
   <div style="position:absolute;left:0px;top:460px;width:1366px;height:500px;overflow-x:hidden;overflow-y:hidden" >
   <div class="circle" style="position:relative;left:605px;top:15px">
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">
   <div class="f3"style="position:relative;left:24px;top:22px"> Select  City</div>
   </div></span>
   <div class="line" style="position:relative;left:735px;top:-50px"></div>
     <div class="line" style="position:relative;left:-15px;top:-50px"></div>
   
    
   
   <div style="width:1320px;height:330px;padding:20px;border-radius:2px;position:relative;left:15px;top:30px;background-color:#232B2B;opacity:0.8" id="p3">
    
  
  
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Capital')">Capital</button>
  <button class="tablinks" onclick="openCity(event, 'Satehood')">Statehood</button>
  <button class="tablinks" onclick="openCity(event, 'Government')">Goverment</button>
   <button class="tablinks" onclick="openCity(event, 'Rank')">Rank</button>
    <button class="tablinks" onclick="openCity(event, 'Area')">Area</button>
   <button class="tablinks" onclick="openCity(event, 'Population')">Population</button>
  <button class="tablinks" onclick="openCity(event, 'Language')">Language</button>
  <button class="tablinks" onclick="openCity(event, 'Literacy')">Literacy</button>
  <button class="tablinks" onclick="openCity(event, 'Anthem')">Anthem</button>
  <button class="tablinks" onclick="openCity(event, 'Dance')">Dance</button>
</div>

<div id="Capital" class="tabcontent">
  <h2>
  
 Bhubaneswar</h2>
  
  
</div>

<div id="Satehood" class="tabcontent">
  <h2>01 April 1936</h2>
  
</div>

<div id="Government" class="tabcontent">
  <h2>
  <ul>
  <li>Chief Minister:Naveen Patnaik </li>
  <li>Governor: S.C. Jamir</li>
  </ul>
  </h2>
  
</div>

<div id="Rank" class="tabcontent">
  <h2>#9</h2>
  
</div>
<div id="Area" class="tabcontent">
  <h2>Total :155,820 km <sup>2</sup> (60,160 sq mi)</h2>
  
</div>

<div id="Population" class="tabcontent">
  <h2>Total:41,947,358</h2>
  
</div>

<div id="Language" class="tabcontent">
  <h2>Odia</h2>
  
</div>

<div id="Literacy" class="tabcontent">
  <h2>73.45%</h2>
  
</div>

<div id="Anthem" class="tabcontent">
  <h2>  Bande Utkala Janani</h2>

  </div>
<div id="Dance" class="tabcontent">
  <h2>Odissi</h32>
   </div>
   </div>
   
   <div style="width:1320px;height:40px;padding:20px;border-radius:2px;position:relative;left:15px;top:-190px;">
  <div class="f4" > 
  <br><p>
  Odisha is one of the 29 states of India, located in the eastern coast.
  It is surrounded by the states of West Bengal to the north-east, Jharkhand to the north, Chhattisgarh to the west and north-west, and Andhra Pradesh to the south. Odisha has 485 kilometres (301 mi) of coastline along the Bay of Bengal on its east, from Balasore to Malkangiri.
   It is the 9th largest state by area, and the 11th largest by population. 
   It is also the 3rd most populous state of India in terms of tribal population.</p>
   </div>
   </div>
   </div>
   
   
   <div style="position:absolute;left:0px;top:960px;width:1366px;height:650px;overflow-x:hidden" >
   
   <img src="odisha\5mI0Mn.jpg" style="width:1366px ;height:650px;position:relative;left:0;top:0;opacity:0.7"> 
   
   </div>
    <div style="opacity:1;position:absolute;left:0px;top:960px;width:1366px;height:650px;overflow-x:hidden" >
    <div style="opacity:0.9;position:absolute;left:0px;top:30px;width:1366px;height:85px;overflow-x:hidden;background-color:black;" >

    <div class="f5" style="position:relative;left:550px;top:20px"><b>HISTORY</b></div>
    </div>
    <div class="f6" id="p1"><font style="position:absolute;top:200px;left:10px"><b>
    Prehistoric Acheulian tools dating to Lower Paleolithic era have been discovered in various places in the region, 
    implying an early settlement by humans.Kalinga has been mentioned in ancient texts like Mahabharata, Vayu Purana and Mahagovinda Suttanta.
    <br>The Sabar people of Odisha have also been mentioned in the Mahabharata.Ashoka of the Mauryan dynasty conquered Kalinga in the bloody Kalinga War in 261 BCE,
    which was the eighth year of his reign.According to his own edicts, in that war about 100,000 people were killed, 150,000 were captured and several more were affected.
    By 150 CE, emperor Kharavela, who <br>was possibly a contemporary of Demetrius I of Bactria, conquered a major part of the Indian sub-continent. 
    Kharavela was a Jain ruler. He also built the monastery atop the Udayagiri hill.Subsequently, the region was ruled by monarchs, such as Samudragupta and Shashanka.Orissa was the first subah (imperial top-level province) added to Akbar's fifteen by Shah Jahan. It had Cuttack as seat and bordered Bihar, Bengal and Golconda subahs as well as the remaining independent and tributary chiefs. 
    From 1717, the Orissa and Bijar governos were reduced to deputies of the Nawab (later Nizam) of the pseudo-autonomous Bengal Subah.
    </b> </font>
    </div>
    </div>
    <div style="opacity:1;position:absolute;left:0px;top:1600px;width:1366px;height:650px;overflow-x:hidden" >
   
   <img src="odisha\69961652-tourism-wallpapers.jpg" style="width:1366px ;height:650px;opacity:0.7"> 
   
   </div>
    <div style="opacity:1;position:absolute;left:0px;top:1600px;width:1366px;height:650px;overflow-x:hidden;overflow-y:hidden" >
    
    <div style="opacity:0.8;position:absolute;left:0px;top:30px;width:1366px;height:85px;overflow-x:hidden;background-color:black;" >

    <div class="f5" style="position:relative;left:550px;top:20px" id="p2"><b>Tourism</b></div>
    </div>
    
    <div style="width:190px;height:300px;padding:20px;border-radius:2px;position:relative;left:0px;top:190px;background-color:#232B2B;opacity:0.7">
    <div class="f4" style="position:relative;left:0px;top:0px"><b><b>Tourist City</b></b></div>
    <div id="mySidenav" class="sidenav">
  <a href="puri.html" id="about">Puri</a>
  <a href="bhubaneswar.html" id="blog">Bhubaneswar</a>
 
</div>
    
    </div>
    
    <div class="f6" ><font style="position:absolute;top:150px;left:840px"><b>Odisha's varying topography – from the wooded Eastern Ghats to the fertile river basin – has proven ideal for evolution of compact and unique ecosystems. 
    This creates treasure troves of flora <br>and fauna that are inviting to many migratory species of birds and reptiles. <br>Bhitarkanika National Park is famous for its <br>second largest mangrove ecosystem. 
    The bird sanctuary in Chilika Lake (Asia's largest brackish water lake) and the tiger reserve and waterfalls in Simlipal National Park are integral parts eco-tourism in Odisha, arranged by Odisha Tourism.
    </b></div>

<div id="mySidenav1" class="sidenav1">
  <a href="javascript:void(0)" class="closebtn1" onclick="closeNav1()">&times;</a>
  
  <div class="slideshow1-container1">

<div class="mySlides1 ">
 
  <img src="odisha\9873.jpg" style="width:1200px;height:450px">
 
</div>

<div class="mySlides1 ">
  
  <img src="odisha\13010.jpg" style="width:1200px;height:450px">
  
</div>

<div class="mySlides1  ">
 <img src="odisha\Leaning-Temple-of-Huma-Orissa.jpg" style="width:1200px;height:450px">
  
</div>
<div class="mySlides1 ">
 <img src="odisha\Konark_sun_temple_06.jpg" style="width:1200px;height:450px">
  
</div>
<div class="mySlides1 ">
 <img src="odisha\13168.jpg" style="width:1200px;height:450px">
  
</div>
<div class="mySlides1 ">
 <img src="odisha\Light-House-Beach-Kovalam.jpg" style="width:1200px;height:450px">
  
</div>

<div class="mySlides1 ">
 <img src="odisha\jagannath_puri_temple.jpg" style="width:1200px;height:450px">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center;position:absolute;top:570px;left:615px">
  <span class="dot1" onclick="currentSlide1(1)"></span> 
  <span class="dot1" onclick="currentSlide1(2)"></span> 
  <span class="dot1" onclick="currentSlide1(3)"></span> 
  <span class="dot1" onclick="currentSlide1(4)"></span> 
  <span class="dot1" onclick="currentSlide1(5)"></span> 
  <span class="dot1" onclick="currentSlide1(6)"></span> 
  <span class="dot1" onclick="currentSlide1(7)"></span> 
</div>

  
</div>
    

     <span style="font-size:30px;cursor:pointer" onclick="openNav1()">
    
    <div class="circle" style="position:absolute;left:-260px;top:350px">
    <div class="f3"style="position:absolute;left:8px;top:39px"> Pictures</div>
    </div></span>
    </div>
    
    <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Welcome to “NewInTheCity.com”. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use,
  which together with our privacy policy govern flavors of my city's relationship with you in relation to this website.</p>
  </div></div>
   <div id="myModal1" class="modal1">
  <div class="modal1-content">
    <span class="close1">&times;</span>
    <p>We give you each and detail of odisha statte.You can explore any city of Odisha and even you can have lots of entertaintment.</p>
  </div>

</div>
  </div>
  
  
  <div style="opacity:1;position:absolute;left:-850px;top:2101px;width:1366px;height:240px;background-color:#202738;overflow-x:hidden;overflow-y:hidden">
  
  <div id="myBtn">"<div class="f9" style="position:absolute;left:478px;top:28px;">Terms & Condition</div></div>
  
  
  <hr style="position: absolute; width:3px; height:22px; top: 20px;left:667px;background-color:White">
  
  <div id="myBtn1"><div class="f9" style="position:absolute;left:678px;top:28px;">About Us</div></div>
  
  
  
  <img class="circle_logo" src="odisha\Facebook_Rounded_Solid_icon-icons.com_61562.png" style="position:absolute;left:500px;top:160px;width:70px;height:70px">
  
  
  
  <img class="circle_logo" src="odisha\twitter-icon-circle-logo-400x400.png" style="position:absolute;left:590px;top:160px;width:70px;height:70px">
  
  
  <img class="circle_logo" src="odisha\instagram_circle.png" style="position:absolute;left:680px;top:160px;width:70px;height:70px">
  </div>
   <script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

<script>
function openNav1() {
    document.getElementById("mySidenav1").style.width = "100%";
}

function closeNav1() {
    document.getElementById("mySidenav1").style.width = "0";
}
</script>


<script>
var slideIndex1 = 1;
showSlides1(slideIndex);

function plusSlides(n) {
  showSlides1(slideIndex1 += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex = n);
}

function showSlides1(n) {
  var i1;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  if (n > slides1.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex1 = slides1.length}
  for (i = 0; i < slides1.length; i++) {
      slides1[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active1", "");
  }
  slides1[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active1";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');
var modal1 = document.getElementById('myModal1');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btn1.onclick = function() {
    modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}


</script>

</body >
</html>

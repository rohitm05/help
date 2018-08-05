<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Marko One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#container {
  overflow: hidden;
  height: 700px;
  background: #edeae8;
  position: relative;
}
 
video {
  position: absolute;
   
  left: 50%; top: 50%;
  transform: translate(-50%, -50%);
}


.f1{
 font-family: 'Bree Serif';
 font-size: 35px;

 color:white;
}

.f1:hover,.f1:focus{
cursor:pointer;
background-color:black;
opacity:0.8;


}
</style>
</head>

<body style=";overflow-x:hidden;overflow-y:hidden">
<div style="width:1366px;height:700px;position:absolute;left:0px;top:0px;overflow-y:hidden">
<div id="container">
  <video  preload="auto" loop="loop" autoplay="autoplay" poster="odisha\poster.png">
    <source src="odisha\1st.mp4" type="video/mp4">
  </video>
</div>
</div>

<div class="f1" onclick="cc()" style="width:450px;height:60px;border:3px solid white;position:absolute;left:470px;top:200px;text-align:center">Welcome To New In the City

</div>
<script>
var video = document.querySelector('video')
  , container = document.querySelector('#container');

var setVideoDimensions = function () {
 
  var w = video.videoWidth
    , h = video.videoHeight;
  
  
  var videoRatio = (w / h).toFixed(2);
  
  
  var containerStyles = window.getComputedStyle(container)
    , minW = parseInt( containerStyles.getPropertyValue('width') )
    , minH = parseInt( containerStyles.getPropertyValue('height') );
  
 
  var widthRatio = minW / w
    , heightRatio = minH / h;
  
  if (widthRatio > heightRatio) {
    var newWidth = minW;
    var newHeight = Math.ceil( newWidth / videoRatio );
  }
  else {
    var newHeight = minH;
    var newWidth = Math.ceil( newHeight * videoRatio );
  }
  
  video.style.width = newWidth + 'px';
  video.style.height = newHeight + 'px';
};

video.addEventListener('loadedmetadata', setVideoDimensions, false);
window.addEventListener('resize', setVideoDimensions, false);


function cc()
{
window.location.href='login.php';
}
</script>

</body>
</html>
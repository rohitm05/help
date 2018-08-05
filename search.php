<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript">
		function ajax(){
			var req=new XMLHttpRequest();
			req.onreadystatechange=function(){
				if (req.readyState==4 && req.status==200){
				document.getElementById('s').innerHTML=req.responseText;

			}

			}
			req.open('GET','search1.php','true');
			req.send();
		}
		
	</script>
</head>
<body style="background-image:Mpsg2b.jpg " onload="ajax()">
<a href="index1.php"><img src="back.jpg" style="height: 30px; width: 30px; float: left;"></a>
<h3 align="right">Welcome , <?php session_start(); echo $_SESSION['name']; ?> |<a href="logout.php">Logout</a></h3>
<div class="login">
  <div class="login-header">
    <h4>Search User visited that city</h4>
  </div>
  <form  method="post" action="search.php">
  <div class="login-form">
    <p>
			<label for="city" class="floatLabel">Select City</label>
			<select name="city" value="select">
			         <option hidden>Select</option>
                     <option value="Puri">Puri</option>
                     <option value="Bhubaneswar">Bhubaneswar</option>
            </select>
		</p>
    <input type="submit" value="Submit" class="login-button" name="login" >
    </form>
    <br>
  </div>
</div>
<div id="s">
	
</div>
  <?php
  unset($_SESSION["city"]);
	if(isset($_POST['login'])){
		//session_start();
	$_SESSION['city']=$_POST['city'];
	}
	
	?>
</body>
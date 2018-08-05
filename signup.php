<<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<div id="container">
	
</div>
</body>
</html>



<?php
   if($_GET['msg']=="success") { ?>	
<div class="success-message"><?php echo "You have registered successfully!"; ?></div>
<?php } ?>
<?php if($_GET['msg']=="failed") { ?>	
<div class="error-message"><?php echo "Problem in registration. Try Again!"; ?></div>
<?php } ?>
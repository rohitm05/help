<html>

<body>
	<form method="get">
    <?php
$a='Link1';
$b='Link2';
echo '<a href="pass.php?link=$a">Link 1</a>';
echo '<br/>';
echo '<a href="pass.php?link=$b">Link 2</a>';
?>
</form></body>

</html>



var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
  //alert (dataString);return false;
  $.ajax({
    type: "POST",
    url: "bin/process.php",
    data: dataString,
    success: function() {
      $('#contact_form').html("<div id='message'></div>");
      $('#message').html("<h2>Contact Form Submitted!</h2>")
      .append("<p>We will be in touch soon.</p>")
      .hide()
      .fadeIn(1500, function() {
        $('#message').append("<img id='checkmark' src='images/check.png' />");
      });
    }
  });
  return false;

  //password_hash see : http://www.php.net/manual/en/function.password-hash.php
   $password   = password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 11));
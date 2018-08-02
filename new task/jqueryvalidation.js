$(document).ready(function() {
	
    $("#frmRegistration").validate({
        rules: {
            name: "required",
            fileToUpload: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 12
            },
            url: {
                required: true,
                url: true
            },
            username: "required",
            dob: "required",
            gender: "required",
            addr:"required",
            password: {
                required: true,
                minlength: 7
            },
            confirm_password: {
                required: true,
                minlength: 7,
                equalTo: "#password"
            },
            agree: "required"
        },
        messages: {
            name: {
                required: "Please enter your name"
            },
            fileToUpload: {
                required: "Please select your image"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter only valid email"
            },
            phone: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            url: {
            	required: "Please enter your website address",
                url: "Please enter valid url"
            },
            username:  "Please enter a username",
            dob: "Please enter a date of Birth",
            gender: "Please enter a Gender",
            addr: "Please enter a Address",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long",
                equalTo: "Please enter the same password as above"
            },
            agree: "Please accept our policy"
        },
        submitHandler: submitForm
    });
});

function submitForm()
{
	

 		var data = new FormData( $( 'form#frmRegistration' )[ 0 ] );//image upload

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        // var data = $("#frmRegistration").serialize(); // only text data
        /*var data = new FormData();
        var files = $('#fileToUpload')[0].files[0];
        data.append('fileToUpload',files);*/
        /*var formData = {
            'name'              : $('input[name=name]').val(),
            'username'          : $('input[name=username]').val(),
            'dob'               : $('input[name=dob]').val(),
            'gender'            : $('input[name=gender]').val(),
            'addr'              : $('input[name=addr]').val(),
            'phone'             : $('input[name=phone]').val(),
            'email'             : $('input[name=email]').val(),
            'password'          : $('input[name=password]').val(),
            'confirm_password'  : $('input[name=confirm_password]').val(),
        };*/
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'register1.php', // the url where we want to POST
            //data        :  data ,// our data object
            data:  data,
            contentType: false,
            cache: false,
          processData:false,
            success     :  function(resultFromRegistration)
            			   {
            			   	 alert(resultFromRegistration);
            			   	 $('#frmRegistration')[0].reset();
            			   }
            
        });
        // stop the form from submitting the normal way and refreshing the page
       
   

}


/*
function submitForm()
    {
    	$( "form" ).on( "submit", function( event ) {
  event.preventDefault();
  var data = $("#frmRegistration").serialize();

        $.ajax({

            type : 'POST',
            url  : 'register1.php',
            data : data,
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#register-user").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {

                    $("#register-user").html('Signing Up');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("test.php"); }); ',5000);

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
});
        
    }
    form submit */

